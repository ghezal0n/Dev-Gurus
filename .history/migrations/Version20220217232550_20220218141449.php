<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220217232550 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
     //   $this->addSql('CREATE TABLE article (id INT AUTO_INCREMENT NOT NULL, idjeux_id INT NOT NULL, titre VARCHAR(255) NOT NULL, descp VARCHAR(255) NOT NULL, date DATE NOT NULL, img LONGBLOB DEFAULT NULL, INDEX IDX_23A0E66332EFBBC (idjeux_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
      //  $this->addSql('CREATE TABLE commande (id INT AUTO_INCREMENT NOT NULL, date_cmd DATE NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
      //  $this->addSql('CREATE TABLE equipe (id INT AUTO_INCREMENT NOT NULL, nom_eq VARCHAR(255) NOT NULL, leader VARCHAR(255) NOT NULL, nom_mbr VARCHAR(255) NOT NULL, nb_joueur INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
       // $this->addSql('CREATE TABLE fournisseur (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, num_tel INT NOT NULL, email VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
      //  $this->addSql('CREATE TABLE jeux (id INT AUTO_INCREMENT NOT NULL, nom_jeux VARCHAR(255) NOT NULL, img LONGBLOB DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
      //  $this->addSql('CREATE TABLE livraison (id INT AUTO_INCREMENT NOT NULL, lieu VARCHAR(255) NOT NULL, prix DOUBLE PRECISION NOT NULL, date DATE NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
      //  $this->addSql('CREATE TABLE matchs (id INT AUTO_INCREMENT NOT NULL, id_tournois_id INT NOT NULL, INDEX IDX_6B1E60411F409EBB (id_tournois_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE panier (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
      //  $this->addSql('CREATE TABLE produit (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, img VARCHAR(255) NOT NULL, qte INT NOT NULL, prix DOUBLE PRECISION NOT NULL, descrp VARCHAR(255) NOT NULL, catego VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
      //  $this->addSql('CREATE TABLE produit_panier (produit_id INT NOT NULL, panier_id INT NOT NULL, INDEX IDX_D39EC6C8F347EFB (produit_id), INDEX IDX_D39EC6C8F77D927C (panier_id), PRIMARY KEY(produit_id, panier_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
      //  $this->addSql('CREATE TABLE role (id INT AUTO_INCREMENT NOT NULL, libille VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
      //  $this->addSql('CREATE TABLE service_guide (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) NOT NULL, descrp VARCHAR(255) NOT NULL, nb_heure INT NOT NULL, date_creation DATE NOT NULL, prix DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
      //  $this->addSql('CREATE TABLE tournois (id INT AUTO_INCREMENT NOT NULL, iduser_id INT NOT NULL, nom_tournois VARCHAR(255) NOT NULL, nb_eq INT NOT NULL, date_deb DATE NOT NULL, date_fin DATE NOT NULL, INDEX IDX_D7AAF97786A81FB (iduser_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
       /* $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, role_id INT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, pseudo VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, mdp VARCHAR(255) NOT NULL, points INT DEFAULT NULL, address_loc VARCHAR(255) NOT NULL, num_telf INT NOT NULL, level INT DEFAULT NULL, cv LONGBLOB DEFAULT NULL, badge LONGBLOB DEFAULT NULL, UNIQUE INDEX UNIQ_8D93D649D60322AC (role_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_service_guide (user_id INT NOT NULL, service_guide_id INT NOT NULL, INDEX IDX_8D628782A76ED395 (user_id), INDEX IDX_8D6287822E9B4676 (service_guide_id), PRIMARY KEY(user_id, service_guide_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE article ADD CONSTRAINT FK_23A0E66332EFBBC FOREIGN KEY (idjeux_id) REFERENCES jeux (id)');
        $this->addSql('ALTER TABLE matchs ADD CONSTRAINT FK_6B1E60411F409EBB FOREIGN KEY (id_tournois_id) REFERENCES tournois (id)');
        $this->addSql('ALTER TABLE produit_panier ADD CONSTRAINT FK_D39EC6C8F347EFB FOREIGN KEY (produit_id) REFERENCES produit (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE produit_panier ADD CONSTRAINT FK_D39EC6C8F77D927C FOREIGN KEY (panier_id) REFERENCES panier (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE tournois ADD CONSTRAINT FK_D7AAF97786A81FB FOREIGN KEY (iduser_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649D60322AC FOREIGN KEY (role_id) REFERENCES role (id)');
        $this->addSql('ALTER TABLE user_service_guide ADD CONSTRAINT FK_8D628782A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_service_guide ADD CONSTRAINT FK_8D6287822E9B4676 FOREIGN KEY (service_guide_id) REFERENCES service_guide (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE article DROP FOREIGN KEY FK_23A0E66332EFBBC');
        $this->addSql('ALTER TABLE produit_panier DROP FOREIGN KEY FK_D39EC6C8F77D927C');
        $this->addSql('ALTER TABLE produit_panier DROP FOREIGN KEY FK_D39EC6C8F347EFB');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649D60322AC');
        $this->addSql('ALTER TABLE user_service_guide DROP FOREIGN KEY FK_8D6287822E9B4676');
        $this->addSql('ALTER TABLE matchs DROP FOREIGN KEY FK_6B1E60411F409EBB');
        $this->addSql('ALTER TABLE tournois DROP FOREIGN KEY FK_D7AAF97786A81FB');
        $this->addSql('ALTER TABLE user_service_guide DROP FOREIGN KEY FK_8D628782A76ED395');
        $this->addSql('DROP TABLE article');
        $this->addSql('DROP TABLE commande');
        $this->addSql('DROP TABLE equipe');
        $this->addSql('DROP TABLE fournisseur');
        $this->addSql('DROP TABLE jeux');
        $this->addSql('DROP TABLE livraison');
        $this->addSql('DROP TABLE matchs');
        $this->addSql('DROP TABLE panier');
        $this->addSql('DROP TABLE produit');
        $this->addSql('DROP TABLE produit_panier');
        $this->addSql('DROP TABLE role');
        $this->addSql('DROP TABLE service_guide');
        $this->addSql('DROP TABLE tournois');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE user_service_guide');
    }
}
