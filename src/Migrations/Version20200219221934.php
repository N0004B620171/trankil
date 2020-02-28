<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200219221934 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE budget (id INT AUTO_INCREMENT NOT NULL, montant DOUBLE PRECISION NOT NULL, numero INT NOT NULL, date DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE commande (id INT AUTO_INCREMENT NOT NULL, montant DOUBLE PRECISION NOT NULL, numero INT NOT NULL, libelle VARCHAR(255) NOT NULL, date DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE compte (id INT AUTO_INCREMENT NOT NULL, numero INT NOT NULL, versement DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE engagement (id INT AUTO_INCREMENT NOT NULL, commande_id INT NOT NULL, budget_id INT DEFAULT NULL, compte_id INT NOT NULL, montant DOUBLE PRECISION NOT NULL, date DATETIME NOT NULL, numero_ordre_paiement INT NOT NULL, INDEX IDX_D86F014182EA2E54 (commande_id), INDEX IDX_D86F014136ABA6B8 (budget_id), INDEX IDX_D86F0141F2C56620 (compte_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE engagement ADD CONSTRAINT FK_D86F014182EA2E54 FOREIGN KEY (commande_id) REFERENCES commande (id)');
        $this->addSql('ALTER TABLE engagement ADD CONSTRAINT FK_D86F014136ABA6B8 FOREIGN KEY (budget_id) REFERENCES budget (id)');
        $this->addSql('ALTER TABLE engagement ADD CONSTRAINT FK_D86F0141F2C56620 FOREIGN KEY (compte_id) REFERENCES compte (id)');
        $this->addSql('ALTER TABLE nouvelle_mesure ADD CONSTRAINT FK_3D3BDA4B36ABA6B8 FOREIGN KEY (budget_id) REFERENCES budget (id)');
        $this->addSql('ALTER TABLE reamenagement_budget ADD CONSTRAINT FK_F73918558B128EB FOREIGN KEY (reamenagement_id) REFERENCES reamenagement (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reamenagement_budget ADD CONSTRAINT FK_F73918536ABA6B8 FOREIGN KEY (budget_id) REFERENCES budget (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE engagement DROP FOREIGN KEY FK_D86F014136ABA6B8');
        $this->addSql('ALTER TABLE nouvelle_mesure DROP FOREIGN KEY FK_3D3BDA4B36ABA6B8');
        $this->addSql('ALTER TABLE reamenagement_budget DROP FOREIGN KEY FK_F73918536ABA6B8');
        $this->addSql('ALTER TABLE engagement DROP FOREIGN KEY FK_D86F014182EA2E54');
        $this->addSql('ALTER TABLE engagement DROP FOREIGN KEY FK_D86F0141F2C56620');
        $this->addSql('DROP TABLE budget');
        $this->addSql('DROP TABLE commande');
        $this->addSql('DROP TABLE compte');
        $this->addSql('DROP TABLE engagement');
        $this->addSql('ALTER TABLE reamenagement_budget DROP FOREIGN KEY FK_F73918558B128EB');
    }
}
