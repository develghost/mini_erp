<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220907060608 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE transaction_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE transaction (id INT NOT NULL, company_id_id INT DEFAULT NULL, client_id_id INT DEFAULT NULL, provider_id_id INT DEFAULT NULL, product_id_id INT DEFAULT NULL, employee_id_id INT DEFAULT NULL, number_of_products INT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_723705D138B53C32 ON transaction (company_id_id)');
        $this->addSql('CREATE INDEX IDX_723705D1DC2902E0 ON transaction (client_id_id)');
        $this->addSql('CREATE INDEX IDX_723705D126122B23 ON transaction (provider_id_id)');
        $this->addSql('CREATE INDEX IDX_723705D1DE18E50B ON transaction (product_id_id)');
        $this->addSql('CREATE INDEX IDX_723705D19749932E ON transaction (employee_id_id)');
        $this->addSql('ALTER TABLE transaction ADD CONSTRAINT FK_723705D138B53C32 FOREIGN KEY (company_id_id) REFERENCES company (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE transaction ADD CONSTRAINT FK_723705D1DC2902E0 FOREIGN KEY (client_id_id) REFERENCES client (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE transaction ADD CONSTRAINT FK_723705D126122B23 FOREIGN KEY (provider_id_id) REFERENCES provider (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE transaction ADD CONSTRAINT FK_723705D1DE18E50B FOREIGN KEY (product_id_id) REFERENCES product (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE transaction ADD CONSTRAINT FK_723705D19749932E FOREIGN KEY (employee_id_id) REFERENCES employee (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE transaction_id_seq CASCADE');
        $this->addSql('DROP TABLE transaction');
    }
}
