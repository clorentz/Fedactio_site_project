<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180821100805 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

      //  $this->addSql('ALTER TABLE competition CHANGE inscription_start_date inscription_start_date DATE NOT NULL, CHANGE inscription_end_date inscription_end_date DATE NOT NULL');
        $this->addSql('ALTER TABLE training_client_answer DROP FOREIGN KEY FK_F1D26E07AA334807');
        $this->addSql('DROP INDEX UNIQ_F1D26E07AA334807 ON training_client_answer');
        $this->addSql('ALTER TABLE training_client_answer DROP answer_id');
        $this->addSql('ALTER TABLE training_answer ADD training_client_answer_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE training_answer ADD CONSTRAINT FK_E9318D4AF0AD2695 FOREIGN KEY (training_client_answer_id) REFERENCES training_client_answer (id)');
        $this->addSql('CREATE INDEX IDX_E9318D4AF0AD2695 ON training_answer (training_client_answer_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        //$this->addSql('ALTER TABLE competition CHANGE inscription_start_date inscription_start_date DATE DEFAULT NULL, CHANGE inscription_end_date inscription_end_date DATE DEFAULT NULL');
        $this->addSql('ALTER TABLE training_answer DROP FOREIGN KEY FK_E9318D4AF0AD2695');
        $this->addSql('DROP INDEX IDX_E9318D4AF0AD2695 ON training_answer');
        $this->addSql('ALTER TABLE training_answer DROP training_client_answer_id');
        $this->addSql('ALTER TABLE training_client_answer ADD answer_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE training_client_answer ADD CONSTRAINT FK_F1D26E07AA334807 FOREIGN KEY (answer_id) REFERENCES training_answer (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_F1D26E07AA334807 ON training_client_answer (answer_id)');
    }
}
