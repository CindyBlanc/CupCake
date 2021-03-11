<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210311105326 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE cup_cake (id INT AUTO_INCREMENT NOT NULL, auteur_id INT DEFAULT NULL, nom VARCHAR(255) NOT NULL, image VARCHAR(255) DEFAULT NULL, ingredient LONGTEXT NOT NULL, recette LONGTEXT NOT NULL, INDEX IDX_EF200C2760BB6FE6 (auteur_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE utilisateur (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE cup_cake ADD CONSTRAINT FK_EF200C2760BB6FE6 FOREIGN KEY (auteur_id) REFERENCES utilisateur (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE cup_cake DROP FOREIGN KEY FK_EF200C2760BB6FE6');
        $this->addSql('DROP TABLE cup_cake');
        $this->addSql('DROP TABLE utilisateur');
    }
}
