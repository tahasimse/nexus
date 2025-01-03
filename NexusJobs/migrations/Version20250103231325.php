<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250103231325 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX id ON company_profile');
        $this->addSql('ALTER TABLE company_profile CHANGE id id INT AUTO_INCREMENT NOT NULL, CHANGE description description LONGTEXT DEFAULT NULL');
        $this->addSql('ALTER TABLE company_profile ADD CONSTRAINT FK_A105B0D830FCDC3A FOREIGN KEY (user_company_id) REFERENCES `user` (id)');
        $this->addSql('DROP INDEX id ON developer_profile');
        $this->addSql('ALTER TABLE developer_profile CHANGE id id INT AUTO_INCREMENT NOT NULL, CHANGE bio bio LONGTEXT DEFAULT NULL');
        $this->addSql('ALTER TABLE developer_profile ADD CONSTRAINT FK_EFC94CA4E411EE65 FOREIGN KEY (user_developer_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE favorite ADD CONSTRAINT FK_68C58ED930C8188 FOREIGN KEY (user_favorite_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE job_post ADD CONSTRAINT FK_DD461ACC7174FB2E FOREIGN KEY (company_profile_id) REFERENCES company_profile (id)');
        $this->addSql('ALTER TABLE matching ADD CONSTRAINT FK_DC10F2896444A7E FOREIGN KEY (developer_profile_id) REFERENCES developer_profile (id)');
        $this->addSql('ALTER TABLE matching ADD CONSTRAINT FK_DC10F289D166B4B7 FOREIGN KEY (job_post_id) REFERENCES job_post (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE company_profile DROP FOREIGN KEY FK_A105B0D830FCDC3A');
        $this->addSql('ALTER TABLE company_profile CHANGE id id BIGINT UNSIGNED AUTO_INCREMENT NOT NULL, CHANGE description description TEXT DEFAULT NULL');
        $this->addSql('CREATE UNIQUE INDEX id ON company_profile (id)');
        $this->addSql('ALTER TABLE matching DROP FOREIGN KEY FK_DC10F2896444A7E');
        $this->addSql('ALTER TABLE matching DROP FOREIGN KEY FK_DC10F289D166B4B7');
        $this->addSql('ALTER TABLE job_post DROP FOREIGN KEY FK_DD461ACC7174FB2E');
        $this->addSql('ALTER TABLE favorite DROP FOREIGN KEY FK_68C58ED930C8188');
        $this->addSql('ALTER TABLE developer_profile DROP FOREIGN KEY FK_EFC94CA4E411EE65');
        $this->addSql('ALTER TABLE developer_profile CHANGE id id BIGINT UNSIGNED AUTO_INCREMENT NOT NULL, CHANGE bio bio TEXT DEFAULT NULL');
        $this->addSql('CREATE UNIQUE INDEX id ON developer_profile (id)');
    }
}
