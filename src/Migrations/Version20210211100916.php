<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210211100916 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'sqlite', 'Migration can only be executed safely on \'sqlite\'.');

        $this->addSql('CREATE TABLE budget (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, montant DOUBLE PRECISION NOT NULL, numero INTEGER NOT NULL, date DATETIME NOT NULL)');
        $this->addSql('CREATE TABLE commande (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, montant DOUBLE PRECISION NOT NULL, numero INTEGER NOT NULL, libelle VARCHAR(255) NOT NULL, date DATETIME NOT NULL)');
        $this->addSql('CREATE TABLE compte (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, numero INTEGER NOT NULL, versement DOUBLE PRECISION NOT NULL)');
        $this->addSql('CREATE TABLE engagement (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, commande_id INTEGER NOT NULL, budget_id INTEGER DEFAULT NULL, compte_id INTEGER NOT NULL, montant DOUBLE PRECISION NOT NULL, date DATETIME NOT NULL, numero_ordre_paiement INTEGER NOT NULL)');
        $this->addSql('CREATE INDEX IDX_D86F014182EA2E54 ON engagement (commande_id)');
        $this->addSql('CREATE INDEX IDX_D86F014136ABA6B8 ON engagement (budget_id)');
        $this->addSql('CREATE INDEX IDX_D86F0141F2C56620 ON engagement (compte_id)');
        $this->addSql('CREATE TABLE nouvelle_mesure (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, budget_id INTEGER NOT NULL, montant DOUBLE PRECISION DEFAULT NULL, date DATETIME NOT NULL)');
        $this->addSql('CREATE INDEX IDX_3D3BDA4B36ABA6B8 ON nouvelle_mesure (budget_id)');
        $this->addSql('CREATE TABLE reamenagement (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, montant DOUBLE PRECISION NOT NULL, date DATETIME NOT NULL)');
        $this->addSql('CREATE TABLE reamenagement_budget (reamenagement_id INTEGER NOT NULL, budget_id INTEGER NOT NULL, PRIMARY KEY(reamenagement_id, budget_id))');
        $this->addSql('CREATE INDEX IDX_F73918558B128EB ON reamenagement_budget (reamenagement_id)');
        $this->addSql('CREATE INDEX IDX_F73918536ABA6B8 ON reamenagement_budget (budget_id)');
        $this->addSql('CREATE TABLE user (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles CLOB NOT NULL --(DC2Type:json)
        , password VARCHAR(255) NOT NULL)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D649E7927C74 ON user (email)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'sqlite', 'Migration can only be executed safely on \'sqlite\'.');

        $this->addSql('DROP TABLE budget');
        $this->addSql('DROP TABLE commande');
        $this->addSql('DROP TABLE compte');
        $this->addSql('DROP TABLE engagement');
        $this->addSql('DROP TABLE nouvelle_mesure');
        $this->addSql('DROP TABLE reamenagement');
        $this->addSql('DROP TABLE reamenagement_budget');
        $this->addSql('DROP TABLE user');
    }
}
