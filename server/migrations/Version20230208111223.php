<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230208111223 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE tipo (id INT AUTO_INCREMENT NOT NULL, turismos_id INT DEFAULT NULL, nombre VARCHAR(255) NOT NULL, descripcion VARCHAR(255) NOT NULL, INDEX IDX_702D1D47B6EFAB7C (turismos_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE turismo (id INT AUTO_INCREMENT NOT NULL, nombre VARCHAR(255) NOT NULL, video VARCHAR(255) NOT NULL, ubicacion VARCHAR(255) NOT NULL, titular VARCHAR(255) NOT NULL, descripcion VARCHAR(255) NOT NULL, foto VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE tipo ADD CONSTRAINT FK_702D1D47B6EFAB7C FOREIGN KEY (turismos_id) REFERENCES turismo (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE tipo DROP FOREIGN KEY FK_702D1D47B6EFAB7C');
        $this->addSql('DROP TABLE tipo');
        $this->addSql('DROP TABLE turismo');
    }
}
