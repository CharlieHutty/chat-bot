<?php

namespace App\ValueObject;

class Destination implements \JsonSerializable
{
    private int $holidayReference;
    private string $hotelName;
    private ?string $city;
    private string $continent;
    private string $country;
    private string $category;
    private int $rating;
    private string $tempRating;
    private string $location;
    private int $pricePerNight;

    public function getHolidayReference(): int
    {
        return $this->holidayReference;
    }

    public function setHolidayReference(int $holidayReference): Destination
    {
        $this->holidayReference = $holidayReference;
        return $this;
    }

    public function getHotelName(): string
    {
        return $this->hotelName;
    }

    public function setHotelName(string $hotelName): Destination
    {
        $this->hotelName = $hotelName;
        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(?string $city): ?Destination
    {
        $this->city = $city;
        return $this;
    }

    public function getContinent(): string
    {
        return $this->continent;
    }

    public function setContinent(string $continent): Destination
    {
        $this->continent = $continent;
        return $this;
    }

    public function getCountry(): string
    {
        return $this->country;
    }

    public function setCountry(string $country): Destination
    {
        $this->country = $country;
        return $this;
    }

    public function getCategory(): string
    {
        return $this->category;
    }

    public function setCategory(string $category): Destination
    {
        $this->category = $category;
        return $this;
    }

    public function getRating(): int
    {
        return $this->rating;
    }

    public function setRating(int $rating): Destination
    {
        $this->rating = $rating;
        return $this;
    }

    public function getTempRating(): string
    {
        return $this->tempRating;
    }

    public function setTempRating(string $tempRating): Destination
    {
        $this->tempRating = $tempRating;
        return $this;
    }

    public function getLocation(): string
    {
        return $this->location;
    }

    public function setLocation(string $location): Destination
    {
        $this->location = $location;
        return $this;
    }

    public function getPricePerNight(): int
    {
        return $this->pricePerNight;
    }

    public function setPricePerNight(int $pricePerNight): Destination
    {
        $this->pricePerNight = $pricePerNight;
        return $this;
    }

    public function jsonSerialize()
    {
        return
            [
                'holiday_reference' => $this->getHolidayReference(),
                'hotel_name' => $this->getHotelName(),
                'city' => $this->getCity(),
                'continent' => $this->getContinent(),
                'country' => $this->getCountry(),
                'category' => $this->getCategory(),
                'rating' => $this->getRating(),
                'temp_rating' => $this->getTempRating(),
                'location' => $this->getLocation(),
                'price_per_night' => $this->getPricePerNight()
            ];
    }

}