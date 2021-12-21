<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20211015141339_Add_data_Destination_table extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Add data to destination table';
    }

    public function up(Schema $schema): void
    {
        $this->addSql("
            INSERT INTO Destination VALUES 
                (1,'Uptown','Bali','Asia','Indonesia','active',3,'mild','mountain',120),
                (2,'Relaxamax','New Orleans','North America','USA','lazy',4,'mild','city',28),
                (3,'WindyBeach','Ventry','Europe','Ireland','active',3,'mild','sea',42),
                (4,'Twighlight','Marrakech','Africa','Morocco','lazy',5,'cold','mountain',50),
                (5,'TooHot','Sydney','Australia','Australia','lazy',5,'hot','sea',67),
                (6,'Castaway',NULL,'Africa','The Maldives','lazy',3,'mild','sea',120),
                (7,'Eiffel Park','Paris','Europe','France','active',4,'mild','city',45),
                (8,'The Cape','Cape Town','Africa','South Africa','active',4,'mild','sea',78),
                (9,'Desert Dreams','Dubai','Asia','U.A.E','active',4,'hot','mountain',67),
                (10,'SeaViews','Bora Bora','Australia','French Polynesia','active',3,'mild','sea',54),
                (11,'AppleCity','New York','North America','USA','active',3,'mild','city',27),
                (12,'IslandHopper','Dubrovnik','Europe','Croatia','active',5,'mild','sea',78),
                (13,'CastleTown','Edinburgh','Europe','Scotland','lazy',3,'mild','city',53),
                (14,'WineValley','Rome','Europe','Italy','lazy',5,'mild','city',25),
                (15,'WearyTraveller','Paro Valley','Asia','Bhutan','active',5,'mild','mountain',54),
                (16,'HotTimes','Jaipur','Asia','India','lazy',4,'hot','sea',67),
                (17,'ForestRetreat','Waikato','Australia','New Zealand','active',4,'mild','mountain',89),
                (18,'Casablanca','Havana','North America','Cuba','lazy',5,'mild','city',29),
                (19,'TechCity','Tokyo','Asia','Japan','active',3,'mild','city',71),
                (20,'IceHotel','Base Marambio','Antarctica','Antartica','active',5,'cold','mountain',270),
                (21,'NorthStar',NULL,'Arctic','Greenland','active',5,'cold','mountain',250);
        ");

    }

    public function down(Schema $schema): void
    {
        $this->addSql("
            DELETE FROM Destination;
        ");

    }
}