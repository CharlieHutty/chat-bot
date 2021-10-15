<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\ValueObject\Destination;

class DestinationValueObjectTest extends TestCase
{
    public function test_setHolidayReference()
    {
        $destination = new Destination();
        $destination->setHolidayReference(4);
        $this->assertEquals(4, $destination->getHolidayReference());
    }

    public function test_setHotelName()
    {
        $destination = new Destination();
        $destination->setHotelName('Hotel');
        $this->assertEquals('Hotel', $destination->getHotelName());
    }

    public function test_setCity()
    {
        $destination = new Destination();
        $destination->setCity('Hull');
        $this->assertEquals('Hull', $destination->getCity());
    }

    public function test_setContinent()
    {
        $destination = new Destination();
        $destination->setContinent('Europe');
        $this->assertEquals('Europe', $destination->getContinent());
    }

    public function test_setCountry()
    {
        $destination = new Destination();
        $destination->setCountry('France');
        $this->assertEquals('France', $destination->getCountry());
    }

    public function test_setCategory()
    {
        $destination = new Destination();
        $destination->setCategory('lazy');
        $this->assertEquals('lazy', $destination->getCategory());
    }

    public function test_setRating()
    {
        $destination = new Destination();
        $destination->setRating(5);
        $this->assertEquals(5, $destination->getRating());
    }

    public function test_setTempRating()
    {
        $destination = new Destination();
        $destination->setTempRating('cold');
        $this->assertEquals('cold', $destination->getTempRating());
    }

    public function test_setLocation()
    {
        $destination = new Destination();
        $destination->setLocation('Mountain');
        $this->assertEquals('Mountain', $destination->getLocation());
    }

    public function test_setPricePerNight()
    {
        $destination = new Destination();
        $destination->setPricePerNight(500);
        $this->assertEquals(500, $destination->getPricePerNight());
    }
}