<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20240421165740 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('CREATE INDEX charge_method_idx ON transaction (charge_method)');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('DROP INDEX charge_method_idx ON transaction');
    }
}
