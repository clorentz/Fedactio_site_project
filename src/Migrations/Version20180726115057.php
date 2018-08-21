<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180726115057 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE training_client_answer (id INT AUTO_INCREMENT NOT NULL, answer_id INT DEFAULT NULL, question_id INT NOT NULL, UNIQUE INDEX UNIQ_F1D26E07AA334807 (answer_id), INDEX IDX_F1D26E071E27F6BF (question_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE training_client_answer ADD CONSTRAINT FK_F1D26E07AA334807 FOREIGN KEY (answer_id) REFERENCES training_answer (id)');
        $this->addSql('ALTER TABLE training_client_answer ADD CONSTRAINT FK_F1D26E071E27F6BF FOREIGN KEY (question_id) REFERENCES training_question (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE training_client_answer');
    }
}
