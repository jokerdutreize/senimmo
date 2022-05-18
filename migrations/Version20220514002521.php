<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220514002521 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE project (id INT AUTO_INCREMENT NOT NULL, project_img VARCHAR(255) NOT NULL, project_name VARCHAR(255) NOT NULL, project_desc LONGTEXT NOT NULL, slug VARCHAR(255) NOT NULL, project_location VARCHAR(255) NOT NULL, project_funding DOUBLE PRECISION NOT NULL, project_funding_duration INT NOT NULL, project_social_impact LONGTEXT DEFAULT NULL, project_context LONGTEXT NOT NULL, project_presentation LONGTEXT NOT NULL, project_owner_presentation LONGTEXT NOT NULL, project_ip DOUBLE PRECISION DEFAULT NULL, project_van DOUBLE PRECISION DEFAULT NULL, project_drci VARCHAR(255) DEFAULT NULL, project_bp VARCHAR(255) NOT NULL, project_owner_status VARCHAR(255) NOT NULL, project_owner_email VARCHAR(255) NOT NULL, project_owner_phone VARCHAR(255) NOT NULL, is_valid TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE project');
    }
}
