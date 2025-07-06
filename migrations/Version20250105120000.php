<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250105120000 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Add appointments table for booking system';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE appointments (
            id INT AUTO_INCREMENT PRIMARY KEY,
            service_id INT NOT NULL,
            patient_name VARCHAR(255) NOT NULL,
            email VARCHAR(255) NOT NULL,
            phone VARCHAR(20) NOT NULL,
            preferred_date DATE NOT NULL,
            preferred_time TIME NOT NULL,
            message TEXT,
            status VARCHAR(50) NOT NULL DEFAULT \'pending\',
            created_at DATETIME NOT NULL,
            updated_at DATETIME DEFAULT NULL,
            patient_age VARCHAR(100) DEFAULT NULL,
            gender VARCHAR(20) DEFAULT NULL,
            medical_history TEXT DEFAULT NULL,
            INDEX IDX_APPOINTMENTS_SERVICE_ID (service_id),
            INDEX IDX_APPOINTMENTS_STATUS (status),
            INDEX IDX_APPOINTMENTS_DATE (preferred_date),
            CONSTRAINT FK_APPOINTMENTS_SERVICE FOREIGN KEY (service_id) REFERENCES services (id)
        ) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE appointments');
    }
}
