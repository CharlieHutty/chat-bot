<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211006091716 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Test Migration';
    }

    public function up(Schema $schema): void
    {
        $this->addSql("
            CREATE TABLE `Destination`(
				`id` INT primary key,
				`name` VARCHAR(45),
				`country` VARCHAR(45)	    
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
