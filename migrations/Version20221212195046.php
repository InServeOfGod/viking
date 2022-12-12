<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221212195046 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE about ADD photo VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE contact ADD photo VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE destinations ADD photo VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE pricing ADD photo VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE about DROP photo');
        $this->addSql('ALTER TABLE contact DROP photo');
        $this->addSql('ALTER TABLE destinations DROP photo');
        $this->addSql('ALTER TABLE pricing DROP photo');
    }
}