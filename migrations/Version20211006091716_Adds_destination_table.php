<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20211006091716_Adds_destination_table extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Adds Destination table';
    }

    public function up(Schema $schema): void
    {
        $this->addSql("
            CREATE TABLE `Destination`(
				`holiday_reference` INT primary key,
				`hotel_name` VARCHAR(45),
				`city` VARCHAR(45),
				`continent` VARCHAR(45),
				`country` VARCHAR(45),
				`category` VARCHAR(45),
				`rating` INT,
				`temp_rating` VARCHAR(45),
				`location` VARCHAR(45),
				`price_per_night` INT  
			);
        ");
    }

    public function down(Schema $schema): void
    {
        $this->addSql("
            DROP TABLE `Destination`;
        ");

    }
}
