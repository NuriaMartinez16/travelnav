<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230208111237 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql("insert into turismo (id, tipo_id, nombre, video, ubicacion, titular, descripcion, foto) values (3, 4, 'Findley', 'http://dummyimage.com/218x100.png/dddddd/000000', 'Mandrake', 'Yáo', 'Poisoning by 4-Aminophenol derivatives, assault, init encntr', 'http://dummyimage.com/148x100.png/ff4444/ffffff');");
        $this->addSql("insert into turismo (id, tipo_id, nombre, video, ubicacion, titular, descripcion, foto) values (1, 5, 'Dawn', 'http://dummyimage.com/100x100.png/cc0000/ffffff', 'Drewry', 'Maïlis', 'Osteophyte, unspecified knee', 'http://dummyimage.com/106x100.png/dddddd/000000');");
        $this->addSql("insert into turismo (id, tipo_id ,nombre, video, ubicacion, titular, descripcion, foto) values (4, 7, 'Rozanna', 'http://dummyimage.com/160x100.png/cc0000/ffffff', 'Morningstar', 'Lài', 'Puncture wound with foreign body of vocal cord, init encntr', 'http://dummyimage.com/190x100.png/ff4444/ffffff');");
        $this->addSql("insert into turismo (id, tipo_id, nombre, video, ubicacion, titular, descripcion, foto) values (5, 2, 'Gabey', 'http://dummyimage.com/130x100.png/ff4444/ffffff', 'Upham', 'Erwéi', 'Displ transverse fx shaft of l tibia, 7thE', 'http://dummyimage.com/209x100.png/cc0000/ffffff');");
        $this->addSql("insert into turismo (id, tipo_id, nombre, video, ubicacion, titular, descripcion, foto) values (6, 1, 'Flory', 'http://dummyimage.com/183x100.png/cc0000/ffffff', 'Sheridan', 'Mylène', 'Acute megakaryoblastic leukemia, in relapse', 'http://dummyimage.com/206x100.png/ff4444/ffffff');");
        $this->addSql("insert into turismo (id, tipo_id, nombre, video, ubicacion, titular, descripcion, foto) values (7, 6, 'Halsy', 'http://dummyimage.com/225x100.png/cc0000/ffffff', 'Heath', 'Göran', 'Paraphimosis', 'http://dummyimage.com/202x100.png/5fa2dd/ffffff');");
        $this->addSql("insert into turismo (id, tipo_id, nombre, video, ubicacion, titular, descripcion, foto) values (8, 5, 'Kirsti', 'http://dummyimage.com/115x100.png/dddddd/000000', 'Oriole', 'Gaëlle', 'Contact with hot saucepan or skillet', 'http://dummyimage.com/227x100.png/cc0000/ffffff');");
        $this->addSql("insert into turismo (id, tipo_id, nombre, video, ubicacion, titular, descripcion, foto) values (9, 6, 'Ashlie', 'http://dummyimage.com/204x100.png/dddddd/000000', 'Morning', 'Hélène', 'Fluke infection, unspecified', 'http://dummyimage.com/149x100.png/5fa2dd/ffffff');");
        $this->addSql("insert into turismo (id, tipo_id, nombre, video, ubicacion, titular, descripcion, foto) values (10, 7,'Inness', 'http://dummyimage.com/109x100.png/cc0000/ffffff', 'Goodland', 'Maïté', 'Other secondary gout, vertebrae', 'http://dummyimage.com/147x100.png/cc0000/ffffff');");
        $this->addSql("insert into turismo (id, tipo_id, nombre, video, ubicacion, titular, descripcion, foto) values (11, 4,'Yankee',  'http://dummyimage.com/196x100.png/ff4444/ffffff', 'Bashford', 'Zoé', 'Drug-induced chronic gout, right shoulder, with tophus', 'http://dummyimage.com/207x100.png/cc0000/ffffff');");
        $this->addSql("insert into turismo (id, tipo_id, nombre, video, ubicacion, titular, descripcion, foto) values (12, 3,'Erastus', 'http://dummyimage.com/222x100.png/ff4444/ffffff', 'Fieldstone', 'Naéva', 'Disp fx of distal phalanx of oth finger, init for clos fx', 'http://dummyimage.com/127x100.png/5fa2dd/ffffff');");
        $this->addSql("insert into turismo (id, tipo_id, nombre, video, ubicacion, titular, descripcion, foto) values (13, 1,'Dinah', 'http://dummyimage.com/164x100.png/dddddd/000000', 'Eggendart', 'Maëlann', 'Ulcer of esophagus with bleeding', 'http://dummyimage.com/131x100.png/5fa2dd/ffffff');");
        $this->addSql("insert into turismo (id, tipo_id, nombre, video, ubicacion, titular, descripcion, foto) values (14, 1,'Barbi', 'http://dummyimage.com/207x100.png/dddddd/000000', 'Springs', 'Maï', 'Calcifcn and ossifictn of muscles assoc w burns, unsp thigh', 'http://dummyimage.com/159x100.png/5fa2dd/ffffff');");
        $this->addSql("insert into turismo (id, tipo_id, nombre, video, ubicacion, titular, descripcion, foto) values (15, 5,'Lauretta','http://dummyimage.com/132x100.png/ff4444/ffffff', 'Lake View', 'Angélique', 'Prsn brd/alit a car injured in collision w hv veh, subs', 'http://dummyimage.com/171x100.png/ff4444/ffffff');");
        $this->addSql("insert into turismo (id, tipo_id, nombre, video, ubicacion, titular, descripcion, foto) values (16, 3,'Bordy','http://dummyimage.com/168x100.png/cc0000/ffffff', 'Monterey', 'Mélia', 'Nondisp fx of base of nk of l femr, init for opn fx type I/2', 'http://dummyimage.com/164x100.png/dddddd/000000');");
        $this->addSql("insert into turismo (id, tipo_id, nombre, video, ubicacion, titular, descripcion, foto) values (17, 7,'Fulvia','http://dummyimage.com/189x100.png/dddddd/000000', 'Tennyson', 'Maïlys', 'Pnctr w fb of r frnt wl of thorax w penet thor cavity, subs', 'http://dummyimage.com/117x100.png/dddddd/000000');");
        $this->addSql("insert into turismo (id, tipo_id, nombre, video, ubicacion, titular, descripcion, foto) values (18, 4,'Reina', 'http://dummyimage.com/116x100.png/5fa2dd/ffffff', 'Ridge Oak', 'Marie-noël', 'Burn 2nd deg mul sites of right shldr/up lmb, except wrs/hnd', 'http://dummyimage.com/240x100.png/ff4444/ffffff');");
        $this->addSql("insert into turismo (id, tipo_id, nombre, video, ubicacion, titular, descripcion, foto) values (19, 5, 'Catha', 'http://dummyimage.com/143x100.png/dddddd/000000', 'Redwing', 'Maëly', 'Other specified diseases of intestine', 'http://dummyimage.com/230x100.png/cc0000/ffffff');");
        $this->addSql("insert into turismo (id, tipo_id, nombre, video, ubicacion, titular, descripcion, foto) values (20, 2, 'Hedda',  'http://dummyimage.com/245x100.png/dddddd/000000', 'Norway Maple', 'Cécilia', 'Other gonococcal genitourinary infections', 'http://dummyimage.com/154x100.png/dddddd/000000');");
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE tipo DROP FOREIGN KEY FK_702D1D47B6EFAB7C');
        $this->addSql('DROP TABLE tipo');
        $this->addSql('DROP TABLE turismo');
    }
}
