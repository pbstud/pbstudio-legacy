<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20240322035845 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('CREATE INDEX place_number_idx ON reservation (place_number)');
        $this->addSql('CREATE INDEX status_idx ON transaction (status)');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('DROP INDEX place_number_idx ON reservation');
        $this->addSql('DROP INDEX status_idx ON transaction');
    }
}
