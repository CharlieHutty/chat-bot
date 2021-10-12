<?php

namespace App\Database;

use Doctrine\DBAL\Driver\Connection;

class Destination
{
    CONST TABLE_DESTINATION = 'Destination';
    CONST COLUMN_HOLIDAY_REFERENCE = 'holiday_reference';
    CONST COLUMN_HOTEL_NAME = 'hotel_name';
    CONST COLUMN_CITY = 'city';
    CONST COLUMN_CONTINENT = 'continent';
    CONST COLUMN_COUNTRY = 'country';
    CONST COLUMN_CATEGORY = 'category';
    CONST COLUMN_RATING = 'rating';
    CONST COLUMN_TEMP_RATING = 'temp_rating';
    CONST COLUMN_LOCATION = 'location';
    CONST COLUMN_PRICE_PER_NIGHT = 'price_per_night';

    private Connection $connection;

    public function __construct(Connection $connection)
    {
        $this->connection = $connection;
    }

    public function fetch($category = null, $location = null): array
    {
        $query = $this->connection->createQueryBuilder();
        $query->select('*')
            ->from(self::TABLE_DESTINATION)
            ->where(self::COLUMN_CATEGORY . '= :category')
            ->andWhere(self::COLUMN_LOCATION . '= :location')
            ->setParameter('category', $category)
            ->setParameter('location', $location)
            ->execute();
        $destinationArray = [];
        foreach ($query->execute()->iterateAssociative() as $destination) {
            $destinationArray[] = $this->toValueObject($destination);
        }
        return $destinationArray;
    }

    private function toValueObject(array $destination)
    {
        return (new \App\ValueObject\Destination())
            ->setHolidayReference($destination[self::COLUMN_HOLIDAY_REFERENCE])
            ->setHotelName($destination[self::COLUMN_HOTEL_NAME])
            ->setCity($destination[self::COLUMN_CITY])
            ->setContinent($destination[self::COLUMN_CONTINENT])
            ->setCountry($destination[self::COLUMN_COUNTRY])
            ->setCategory($destination[self::COLUMN_CATEGORY])
            ->setRating($destination[self::COLUMN_RATING])
            ->setTempRating($destination[self::COLUMN_TEMP_RATING])
            ->setLocation($destination[self::COLUMN_LOCATION])
            ->setPricePerNight($destination[self::COLUMN_PRICE_PER_NIGHT]);
    }
}