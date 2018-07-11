<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180709135327 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE informations_item (id INT AUTO_INCREMENT NOT NULL, informations_id INT DEFAULT NULL, title VARCHAR(255) NOT NULL, content LONGTEXT NOT NULL, INDEX IDX_5177549890587D82 (informations_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE informations_item ADD CONSTRAINT FK_5177549890587D82 FOREIGN KEY (informations_id) REFERENCES informations (id)');
        $this->addSql('ALTER TABLE informations DROP title, DROP content');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE informations_item');
        $this->addSql('ALTER TABLE informations ADD title VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, ADD content LONGTEXT NOT NULL COLLATE utf8mb4_unicode_ci');
    }
}
