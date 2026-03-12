<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20260312000100 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Add seat layout JSON columns to exercise_room and session for seat map templates';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('ALTER TABLE exercise_room ADD seat_layout JSON DEFAULT NULL');
        $this->addSql('ALTER TABLE session ADD seat_layout JSON DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('ALTER TABLE exercise_room DROP seat_layout');
        $this->addSql('ALTER TABLE session DROP seat_layout');
    }
}