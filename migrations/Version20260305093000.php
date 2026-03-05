<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20260305093000 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Create session_audit table for Issue #52 - Seat disabling audit trail';
    }

    public function up(Schema $schema): void
    {
        $this->addSql(
            'CREATE TABLE session_audit (
                id INT AUTO_INCREMENT NOT NULL,
                session_id INT NOT NULL,
                admin_user_id INT NOT NULL,
                audit_type VARCHAR(50) NOT NULL,
                reason LONGTEXT NOT NULL,
                disabled_places JSON NOT NULL,
                affected_users JSON NOT NULL,
                affected_reservations_count INT DEFAULT 0 NOT NULL,
                created_at DATETIME NOT NULL,
                INDEX idx_session (session_id),
                INDEX idx_created (created_at),
                PRIMARY KEY(id)
            ) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB'
        );

        $this->addSql(
            'ALTER TABLE session_audit ADD CONSTRAINT FK_8E9A1E09613BBBFD FOREIGN KEY (session_id) REFERENCES session (id)'
        );
        $this->addSql(
            'ALTER TABLE session_audit ADD CONSTRAINT FK_8E9A1E09E1D4D6A8 FOREIGN KEY (admin_user_id) REFERENCES user (id)'
        );
    }

    public function down(Schema $schema): void
    {
        $this->addSql('DROP TABLE session_audit');
    }
}
