<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20260305100000 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Update session_audit table - change admin_user FK to admin_user_identifier string for Issue #52';
    }

    public function up(Schema $schema): void
    {
        // Drop existing foreign key constraint
        $this->addSql('ALTER TABLE session_audit DROP FOREIGN KEY FK_8E9A1E09E1D4D6A8');
        
        // Drop the admin_user_id column
        $this->addSql('ALTER TABLE session_audit DROP COLUMN admin_user_id');
        
        // Add new admin_user_identifier column
        $this->addSql('ALTER TABLE session_audit ADD admin_user_identifier VARCHAR(255) NOT NULL AFTER session_id');
    }

    public function down(Schema $schema): void
    {
        // Remove the admin_user_identifier column
        $this->addSql('ALTER TABLE session_audit DROP COLUMN admin_user_identifier');
        
        // Re-add the admin_user_id column as FK
        $this->addSql('ALTER TABLE session_audit ADD admin_user_id INT NOT NULL AFTER session_id');
        
        // Re-add the foreign key constraint
        $this->addSql('ALTER TABLE session_audit ADD CONSTRAINT FK_8E9A1E09E1D4D6A8 FOREIGN KEY (admin_user_id) REFERENCES user (id)');
    }
}
