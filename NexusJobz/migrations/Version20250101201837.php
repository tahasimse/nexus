<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250101201837 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE company_profile (id SERIAL NOT NULL, user_company_id INT NOT NULL, company_name VARCHAR(255) NOT NULL, location VARCHAR(255) DEFAULT NULL, description TEXT DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_A105B0D830FCDC3A ON company_profile (user_company_id)');
        $this->addSql('CREATE TABLE developer_profile (id SERIAL NOT NULL, user_developer_id INT NOT NULL, first_name VARCHAR(255) NOT NULL, last_name VARCHAR(255) NOT NULL, location VARCHAR(255) DEFAULT NULL, languages JSON NOT NULL, experience_level INT NOT NULL, min_salary DOUBLE PRECISION NOT NULL, bio TEXT DEFAULT NULL, avatar_url VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_EFC94CA4E411EE65 ON developer_profile (user_developer_id)');
        $this->addSql('CREATE TABLE favorite (id SERIAL NOT NULL, user_favorite_id INT NOT NULL, target_type VARCHAR(255) NOT NULL, target_id INT NOT NULL, created_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_68C58ED930C8188 ON favorite (user_favorite_id)');
        $this->addSql('COMMENT ON COLUMN favorite.created_at IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('CREATE TABLE job_post (id SERIAL NOT NULL, company_profile_id INT NOT NULL, title VARCHAR(255) NOT NULL, location VARCHAR(255) DEFAULT NULL, technologies JSON NOT NULL, required_experience INT NOT NULL, salary_offered DOUBLE PRECISION DEFAULT NULL, description VARCHAR(255) DEFAULT NULL, created_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_DD461ACC7174FB2E ON job_post (company_profile_id)');
        $this->addSql('COMMENT ON COLUMN job_post.created_at IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('CREATE TABLE matching (id SERIAL NOT NULL, developer_profile_id INT NOT NULL, job_post_id INT NOT NULL, score INT NOT NULL, created_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_DC10F2896444A7E ON matching (developer_profile_id)');
        $this->addSql('CREATE INDEX IDX_DC10F289D166B4B7 ON matching (job_post_id)');
        $this->addSql('COMMENT ON COLUMN matching.created_at IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('CREATE TABLE "user" (id SERIAL NOT NULL, username VARCHAR(180) NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, is_active BOOLEAN NOT NULL, is_private BOOLEAN NOT NULL, created_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, updated_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D649F85E0677 ON "user" (username)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D649E7927C74 ON "user" (email)');
        $this->addSql('COMMENT ON COLUMN "user".created_at IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('ALTER TABLE company_profile ADD CONSTRAINT FK_A105B0D830FCDC3A FOREIGN KEY (user_company_id) REFERENCES "user" (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE developer_profile ADD CONSTRAINT FK_EFC94CA4E411EE65 FOREIGN KEY (user_developer_id) REFERENCES "user" (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE favorite ADD CONSTRAINT FK_68C58ED930C8188 FOREIGN KEY (user_favorite_id) REFERENCES "user" (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE job_post ADD CONSTRAINT FK_DD461ACC7174FB2E FOREIGN KEY (company_profile_id) REFERENCES company_profile (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE matching ADD CONSTRAINT FK_DC10F2896444A7E FOREIGN KEY (developer_profile_id) REFERENCES developer_profile (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE matching ADD CONSTRAINT FK_DC10F289D166B4B7 FOREIGN KEY (job_post_id) REFERENCES job_post (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE company_profile DROP CONSTRAINT FK_A105B0D830FCDC3A');
        $this->addSql('ALTER TABLE developer_profile DROP CONSTRAINT FK_EFC94CA4E411EE65');
        $this->addSql('ALTER TABLE favorite DROP CONSTRAINT FK_68C58ED930C8188');
        $this->addSql('ALTER TABLE job_post DROP CONSTRAINT FK_DD461ACC7174FB2E');
        $this->addSql('ALTER TABLE matching DROP CONSTRAINT FK_DC10F2896444A7E');
        $this->addSql('ALTER TABLE matching DROP CONSTRAINT FK_DC10F289D166B4B7');
        $this->addSql('DROP TABLE company_profile');
        $this->addSql('DROP TABLE developer_profile');
        $this->addSql('DROP TABLE favorite');
        $this->addSql('DROP TABLE job_post');
        $this->addSql('DROP TABLE matching');
        $this->addSql('DROP TABLE "user"');
    }
}
