#!/usr/bin/env bash
set -Eeuo pipefail

log() {
  printf '\n[%s] %s\n' "$(date '+%Y-%m-%d %H:%M:%S')" "$*"
}

fail() {
  echo "ERROR: $*" >&2
  exit 1
}

require_cmd() {
  command -v "$1" >/dev/null 2>&1 || fail "Missing required command: $1"
}

APP_PATH="${APP_PATH:-/var/www/pbstudio81}"
GIT_REPO="${GIT_REPO:-https://github.com/pbstud/pbstudio-legacy.git}"
GIT_BRANCH="${GIT_BRANCH:-main}"

DB_NAME="${DB_NAME:-pbstudio}"
DB_USER="${DB_USER:-pbstudio_user}"
DB_PASS="${DB_PASS:-CHANGE_ME}"
DB_HOST="${DB_HOST:-127.0.0.1}"
DB_PORT="${DB_PORT:-3306}"

SITE_URL="${SITE_URL:-https://staging.pbstudio.mx}"
MAILER_DSN="${MAILER_DSN:-null://null}"
MESSENGER_TRANSPORT_DSN="${MESSENGER_TRANSPORT_DSN:-doctrine://default?auto_setup=0}"
RESETTING_RETRY_TTL="${RESETTING_RETRY_TTL:-7200}"

WEB_USER="${WEB_USER:-www-data}"
INSTALL_SYSTEM_PACKAGES="${INSTALL_SYSTEM_PACKAGES:-1}"
LOAD_SAMPLE_BACKUP="${LOAD_SAMPLE_BACKUP:-0}"
SAMPLE_BACKUP_FILE="${SAMPLE_BACKUP_FILE:-Especificaciones/pbstudio_back.sql}"

PHP_BIN="${PHP_BIN:-php}"
COMPOSER_BIN="${COMPOSER_BIN:-composer}"
NPM_BIN="${NPM_BIN:-npm}"

log "Starting PBStudio deployment runbook"

require_cmd "$PHP_BIN"
require_cmd "$COMPOSER_BIN"
require_cmd "$NPM_BIN"
require_cmd git

if [[ "$INSTALL_SYSTEM_PACKAGES" == "1" ]]; then
  log "Installing system packages and PHP extensions"
  sudo apt update
  sudo apt install -y git unzip npm composer \
    php8.2 php8.2-cli php8.2-fpm php8.2-mysql php8.2-curl php8.2-xml php8.2-zip php8.2-mbstring \
    php8.2-gd php8.2-exif php8.2-intl
fi

log "Verifying required PHP extensions"
"$PHP_BIN" -m | egrep "gd|exif|intl|pdo_mysql|mbstring" >/dev/null || fail "Required PHP extensions are missing"

log "Preparing application path"
sudo mkdir -p "$APP_PATH"
sudo chown -R "$USER":"$USER" "$APP_PATH"

if [[ ! -d "$APP_PATH/.git" ]]; then
  log "Cloning repository"
  git clone "$GIT_REPO" "$APP_PATH"
fi

cd "$APP_PATH"
git fetch --all
git checkout "$GIT_BRANCH"
git pull --ff-only

SECRET_VALUE="$($PHP_BIN -r 'echo bin2hex(random_bytes(32));')"

log "Writing .env.prod.local"
cat > .env.prod.local <<EOF
APP_ENV=prod
APP_DEBUG=0
APP_SECRET=${SECRET_VALUE}
DATABASE_URL="mysql://${DB_USER}:${DB_PASS}@${DB_HOST}:${DB_PORT}/${DB_NAME}"
MESSENGER_TRANSPORT_DSN=${MESSENGER_TRANSPORT_DSN}
MAILER_DSN=${MAILER_DSN}
RESETTING_RETRY_TTL=${RESETTING_RETRY_TTL}
SITE_URL=${SITE_URL}
EOF
chmod 600 .env.prod.local

log "Installing dependencies and building assets"
"$COMPOSER_BIN" install --no-dev --optimize-autoloader
"$NPM_BIN" install
"$NPM_BIN" run build

log "Running migrations and messenger setup"
"$PHP_BIN" bin/console doctrine:migrations:migrate --no-interaction --env=prod
"$PHP_BIN" bin/console messenger:setup-transports --env=prod

if [[ "$LOAD_SAMPLE_BACKUP" == "1" ]]; then
  require_cmd mysql
  log "Loading sample backup: ${SAMPLE_BACKUP_FILE}"
  [[ -f "$SAMPLE_BACKUP_FILE" ]] || fail "Backup file not found: $SAMPLE_BACKUP_FILE"
  mysql -u "$DB_USER" -p"$DB_PASS" "$DB_NAME" < "$SAMPLE_BACKUP_FILE"
fi

log "Preparing media and runtime directories"
mkdir -p public/media/uploads/instructors public/media/uploads/site public/media/cache
sudo chown -R "$WEB_USER":"$WEB_USER" public/media var
sudo chmod -R 775 public/media var

log "Clearing and warming cache"
"$PHP_BIN" bin/console cache:clear --env=prod
"$PHP_BIN" bin/console cache:warmup --env=prod

log "Running smoke checks"
"$PHP_BIN" bin/console about --env=prod | egrep "Environment|Debug"
"$PHP_BIN" bin/console doctrine:schema:validate --env=prod
"$PHP_BIN" bin/console lint:container --env=prod
"$PHP_BIN" bin/console debug:router --env=prod | wc -l
"$PHP_BIN" bin/console list app --env=prod

"$PHP_BIN" bin/console app:session:autoclosing --env=prod
"$PHP_BIN" bin/console app:transaction:checkexpiration --env=prod
"$PHP_BIN" bin/console app:waiting-list:expire --env=prod

log "Deployment runbook finished successfully"
log "Next: configure cron entries from section 11.7 of GUIA_DESPLIEGUE_NUEVO_SERVIDOR.md"
