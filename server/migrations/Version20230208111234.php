<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230208111234 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        
        $this->addSql("insert into Tipo (id, nombre, descripcion) values (1, 'Playa', 'Posterior disloc of proximal end of tibia, left knee, init');");
        $this->addSql("insert into Tipo (id, nombre, descripcion) values (2, 'Montaña', 'Nondisp avulsion fx left ischium, subs for fx w routn heal');");
        $this->addSql("insert into Tipo (id, nombre, descripcion) values (3, 'Pantano', 'Burn of first degree of right elbow, sequela');");
        $this->addSql("insert into Tipo (id, nombre, descripcion) values (4, 'Volcan', 'Burn of second degree of single l finger (nail) except thumb');");
        $this->addSql("insert into Tipo (id, nombre, descripcion) values (5, 'Rural', 'Laceration of blood vessels at shldr/up arm, right arm');");
        $this->addSql("insert into Tipo (id, nombre, descripcion) values (6, 'Desierto', 'Oth malignant neoplasm skin/ left lower limb, including hip');");
        $this->addSql("insert into Tipo (id, nombre, descripcion) values (7, 'Lago', 'Velo-cardio-facial syndrome');");
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE tipo DROP FOREIGN KEY FK_702D1D47B6EFAB7C');
        $this->addSql('DROP TABLE tipo');
        $this->addSql('DROP TABLE turismo');
    }
}
