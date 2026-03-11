<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20260309000000 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Create session_audit table with full bidirectional change tracking (SCRUM-81)';
    }

    public function up(Schema $schema): void
    {
        $this->addSql(
            'CREATE TABLE session_audit (
                id INT AUTO_INCREMENT NOT NULL,
                session_id INT NOT NULL,
                admin_user_identifier VARCHAR(255) DEFAULT NULL,
                user_identifier VARCHAR(255) DEFAULT NULL,
                audit_type VARCHAR(50) NOT NULL,
                reason LONGTEXT DEFAULT NULL,
                disabled_places JSON DEFAULT NULL,
                affected_users JSON NOT NULL,
                affected_reservations_count INT DEFAULT 0,
                change_flow_id VARCHAR(36) DEFAULT NULL,
                reservation_id INT DEFAULT NULL,
                from_session_id INT DEFAULT NULL,
                to_session_id INT DEFAULT NULL,
                from_place SMALLINT DEFAULT NULL,
                to_place SMALLINT DEFAULT NULL,
                created_at DATETIME NOT NULL,
                PRIMARY KEY(id),
                INDEX idx_session (session_id),
                INDEX idx_audit_type (audit_type),
                INDEX idx_created (created_at),
                INDEX idx_change_flow (change_flow_id),
                FOREIGN KEY (session_id) REFERENCES session (id)
            ) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB'
        );
    }

    public function down(Schema $schema): void
    {
        $this->addSql('DROP TABLE session_audit');
    }
}
