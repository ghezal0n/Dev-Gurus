<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220306184215 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE admin (id_admin INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, username VARCHAR(255) NOT NULL, mdp_admin VARCHAR(255) NOT NULL, PRIMARY KEY(id_admin)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE articles (id INT AUTO_INCREMENT NOT NULL, nom_jeux_id INT DEFAULT NULL, titre VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, date DATE NOT NULL, image VARCHAR(255) NOT NULL, INDEX IDX_BFDD316819A5A21A (nom_jeux_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE commande (id INT AUTO_INCREMENT NOT NULL, id_user_id INT DEFAULT NULL, date_cmd DATE NOT NULL, image VARCHAR(255) NOT NULL, statut VARCHAR(255) NOT NULL, INDEX IDX_6EEAA67D79F37AE5 (id_user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE comment (id INT AUTO_INCREMENT NOT NULL, id_article_id INT NOT NULL, commentaire VARCHAR(255) DEFAULT NULL, INDEX IDX_9474526CD71E064B (id_article_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE equipe (id INT AUTO_INCREMENT NOT NULL, nom_eq VARCHAR(255) NOT NULL, leader VARCHAR(255) NOT NULL, nom_mbr VARCHAR(255) NOT NULL, nb_joueur INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE fournisseur (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, num_tel INT NOT NULL, email VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE jeux (id INT AUTO_INCREMENT NOT NULL, nom_jeux VARCHAR(255) NOT NULL, image_jeu VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE lignecommande (id INT AUTO_INCREMENT NOT NULL, lignecmd_id INT DEFAULT NULL, produit_id INT DEFAULT NULL, quantite DOUBLE PRECISION DEFAULT NULL, INDEX IDX_853B7939FAD01571 (lignecmd_id), INDEX IDX_853B7939F347EFB (produit_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE livraison (id INT AUTO_INCREMENT NOT NULL, lieu VARCHAR(255) NOT NULL, prix DOUBLE PRECISION NOT NULL, date DATE NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE matchs (id INT AUTO_INCREMENT NOT NULL, id_tournois_id INT DEFAULT NULL, equipe_home_id INT DEFAULT NULL, equipe_away_id INT DEFAULT NULL, date_match DATETIME DEFAULT NULL, INDEX IDX_6B1E60411F409EBB (id_tournois_id), UNIQUE INDEX UNIQ_6B1E6041F0CDD420 (equipe_home_id), UNIQUE INDEX UNIQ_6B1E604155EF1423 (equipe_away_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE panier (id INT AUTO_INCREMENT NOT NULL, userid_id INT DEFAULT NULL, UNIQUE INDEX UNIQ_24CC0DF258E0A285 (userid_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE produit (id INT AUTO_INCREMENT NOT NULL, fournisseur_id INT DEFAULT NULL, nom VARCHAR(255) NOT NULL, img VARCHAR(255) NOT NULL, qte DOUBLE PRECISION NOT NULL, prix DOUBLE PRECISION NOT NULL, descrp VARCHAR(255) NOT NULL, catego VARCHAR(255) NOT NULL, INDEX IDX_29A5EC27670C757F (fournisseur_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE produit_panier (produit_id INT NOT NULL, panier_id INT NOT NULL, INDEX IDX_D39EC6C8F347EFB (produit_id), INDEX IDX_D39EC6C8F77D927C (panier_id), PRIMARY KEY(produit_id, panier_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reservation (id INT AUTO_INCREMENT NOT NULL, idjoueur_id INT DEFAULT NULL, id_coach_id INT DEFAULT NULL, guide_id INT DEFAULT NULL, date_res DATE DEFAULT NULL, heure_debut VARCHAR(255) DEFAULT NULL, INDEX IDX_42C84955D7F97E99 (idjoueur_id), INDEX IDX_42C849556CCBBA04 (id_coach_id), INDEX IDX_42C84955D7ED1D4B (guide_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE role (id INT AUTO_INCREMENT NOT NULL, libille VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE service_guide (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) NOT NULL, descrp VARCHAR(255) NOT NULL, nb_heure INT NOT NULL, date_creation DATE NOT NULL, prix DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tournois (id INT AUTO_INCREMENT NOT NULL, iduser_id INT NOT NULL, nom_tournois VARCHAR(255) NOT NULL, nb_eq INT NOT NULL, date_deb DATE NOT NULL, date_fin DATE NOT NULL, INDEX IDX_D7AAF97786A81FB (iduser_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, role_id INT DEFAULT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, pseudo VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, mdp VARCHAR(255) NOT NULL, points INT DEFAULT NULL, address_loc VARCHAR(255) NOT NULL, num_telf INT NOT NULL, level INT DEFAULT NULL, cv LONGBLOB DEFAULT NULL, badge LONGBLOB DEFAULT NULL, INDEX IDX_8D93D649D60322AC (role_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_service_guide (user_id INT NOT NULL, service_guide_id INT NOT NULL, INDEX IDX_8D628782A76ED395 (user_id), INDEX IDX_8D6287822E9B4676 (service_guide_id), PRIMARY KEY(user_id, service_guide_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE articles ADD CONSTRAINT FK_BFDD316819A5A21A FOREIGN KEY (nom_jeux_id) REFERENCES jeux (id)');
        $this->addSql('ALTER TABLE commande ADD CONSTRAINT FK_6EEAA67D79F37AE5 FOREIGN KEY (id_user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE comment ADD CONSTRAINT FK_9474526CD71E064B FOREIGN KEY (id_article_id) REFERENCES articles (id)');
        $this->addSql('ALTER TABLE lignecommande ADD CONSTRAINT FK_853B7939FAD01571 FOREIGN KEY (lignecmd_id) REFERENCES commande (id)');
        $this->addSql('ALTER TABLE lignecommande ADD CONSTRAINT FK_853B7939F347EFB FOREIGN KEY (produit_id) REFERENCES produit (id)');
        $this->addSql('ALTER TABLE matchs ADD CONSTRAINT FK_6B1E60411F409EBB FOREIGN KEY (id_tournois_id) REFERENCES tournois (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE matchs ADD CONSTRAINT FK_6B1E6041F0CDD420 FOREIGN KEY (equipe_home_id) REFERENCES equipe (id)');
        $this->addSql('ALTER TABLE matchs ADD CONSTRAINT FK_6B1E604155EF1423 FOREIGN KEY (equipe_away_id) REFERENCES equipe (id)');
        $this->addSql('ALTER TABLE panier ADD CONSTRAINT FK_24CC0DF258E0A285 FOREIGN KEY (userid_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE produit ADD CONSTRAINT FK_29A5EC27670C757F FOREIGN KEY (fournisseur_id) REFERENCES fournisseur (id)');
        $this->addSql('ALTER TABLE produit_panier ADD CONSTRAINT FK_D39EC6C8F347EFB FOREIGN KEY (produit_id) REFERENCES produit (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE produit_panier ADD CONSTRAINT FK_D39EC6C8F77D927C FOREIGN KEY (panier_id) REFERENCES panier (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C84955D7F97E99 FOREIGN KEY (idjoueur_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C849556CCBBA04 FOREIGN KEY (id_coach_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C84955D7ED1D4B FOREIGN KEY (guide_id) REFERENCES service_guide (id)');
        $this->addSql('ALTER TABLE tournois ADD CONSTRAINT FK_D7AAF97786A81FB FOREIGN KEY (iduser_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649D60322AC FOREIGN KEY (role_id) REFERENCES role (id)');
        $this->addSql('ALTER TABLE user_service_guide ADD CONSTRAINT FK_8D628782A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_service_guide ADD CONSTRAINT FK_8D6287822E9B4676 FOREIGN KEY (service_guide_id) REFERENCES service_guide (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE comment DROP FOREIGN KEY FK_9474526CD71E064B');
        $this->addSql('ALTER TABLE lignecommande DROP FOREIGN KEY FK_853B7939FAD01571');
        $this->addSql('ALTER TABLE matchs DROP FOREIGN KEY FK_6B1E6041F0CDD420');
        $this->addSql('ALTER TABLE matchs DROP FOREIGN KEY FK_6B1E604155EF1423');
        $this->addSql('ALTER TABLE produit DROP FOREIGN KEY FK_29A5EC27670C757F');
        $this->addSql('ALTER TABLE articles DROP FOREIGN KEY FK_BFDD316819A5A21A');
        $this->addSql('ALTER TABLE produit_panier DROP FOREIGN KEY FK_D39EC6C8F77D927C');
        $this->addSql('ALTER TABLE lignecommande DROP FOREIGN KEY FK_853B7939F347EFB');
        $this->addSql('ALTER TABLE produit_panier DROP FOREIGN KEY FK_D39EC6C8F347EFB');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649D60322AC');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C84955D7ED1D4B');
        $this->addSql('ALTER TABLE user_service_guide DROP FOREIGN KEY FK_8D6287822E9B4676');
        $this->addSql('ALTER TABLE matchs DROP FOREIGN KEY FK_6B1E60411F409EBB');
        $this->addSql('ALTER TABLE commande DROP FOREIGN KEY FK_6EEAA67D79F37AE5');
        $this->addSql('ALTER TABLE panier DROP FOREIGN KEY FK_24CC0DF258E0A285');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C84955D7F97E99');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C849556CCBBA04');
        $this->addSql('ALTER TABLE tournois DROP FOREIGN KEY FK_D7AAF97786A81FB');
        $this->addSql('ALTER TABLE user_service_guide DROP FOREIGN KEY FK_8D628782A76ED395');
        $this->addSql('DROP TABLE admin');
        $this->addSql('DROP TABLE articles');
        $this->addSql('DROP TABLE commande');
        $this->addSql('DROP TABLE comment');
        $this->addSql('DROP TABLE equipe');
        $this->addSql('DROP TABLE fournisseur');
        $this->addSql('DROP TABLE jeux');
        $this->addSql('DROP TABLE lignecommande');
        $this->addSql('DROP TABLE livraison');
        $this->addSql('DROP TABLE matchs');
        $this->addSql('DROP TABLE panier');
        $this->addSql('DROP TABLE produit');
        $this->addSql('DROP TABLE produit_panier');
        $this->addSql('DROP TABLE reservation');
        $this->addSql('DROP TABLE role');
        $this->addSql('DROP TABLE service_guide');
        $this->addSql('DROP TABLE tournois');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE user_service_guide');
    }
}
