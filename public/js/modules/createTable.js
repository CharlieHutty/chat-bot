export function createTable(data) {
    let div = document.createElement('div')
    div.className = 'bot-questions box sb1';
    let table = document.createElement("table"), row, holidayReference, hotelName, city, continent, country,
        category, rating, temp_rating, location, pricePerNight;
    let headerRow = document.createElement("tr");
    let holidayReferenceHeader = document.createElement("th");
    let hotelNameHeader = document.createElement("th");
    let cityHeader = document.createElement("th");
    let continentHeader = document.createElement("th");
    let countryHeader = document.createElement("th");
    let categoryHeader = document.createElement("th");
    let ratingHeader = document.createElement("th");
    let tempRatingHeader = document.createElement("th");
    let locationHeader = document.createElement("th");
    let pricePerNightHeader = document.createElement("th");

    holidayReferenceHeader.innerHTML = 'Holiday Reference';
    hotelNameHeader.innerHTML = 'Hotel Name';
    cityHeader.innerHTML = 'City';
    continentHeader.innerHTML = 'Continent';
    countryHeader.innerHTML = 'Country';
    categoryHeader.innerHTML = 'Category';
    ratingHeader.innerHTML = 'Rating';
    tempRatingHeader.innerHTML = 'Temp rating';
    locationHeader.innerHTML = 'Location';
    pricePerNightHeader.innerHTML = 'Price Per Night';

    table.appendChild(headerRow);
    headerRow.appendChild(holidayReferenceHeader);
    headerRow.appendChild(hotelNameHeader);
    headerRow.appendChild(cityHeader);
    headerRow.appendChild(continentHeader);
    headerRow.appendChild(countryHeader);
    headerRow.appendChild(categoryHeader);
    headerRow.appendChild(ratingHeader);
    headerRow.appendChild(tempRatingHeader);
    headerRow.appendChild(locationHeader);
    headerRow.appendChild(pricePerNightHeader);

    document.getElementById('results').appendChild(table);
    for (let key in data) {
        row = document.createElement("tr");
        holidayReference = document.createElement("td");
        hotelName = document.createElement("td");
        city = document.createElement("td");
        continent = document.createElement("td");
        country = document.createElement("td");
        category = document.createElement("td");
        rating = document.createElement("td");
        temp_rating = document.createElement("td")
        location = document.createElement("td")
        pricePerNight = document.createElement("td")

        holidayReference.innerHTML = data[key]['holiday_reference'];
        hotelName.innerHTML = data[key]['hotel_name'];
        city.innerHTML = data[key]['city'];
        continent.innerHTML = data[key]['continent'];
        country.innerHTML = data[key]['country'];
        category.innerHTML = data[key]['category'];
        rating.innerHTML = data[key]['rating'];
        temp_rating.innerHTML = data[key]['temp_rating'];
        location.innerHTML = data[key]['location'];
        pricePerNight.innerHTML = data[key]['price_per_night'];

        table.appendChild(row);
        row.appendChild(holidayReference);
        row.appendChild(hotelName);
        row.appendChild(city);
        row.appendChild(continent);
        row.appendChild(country);
        row.appendChild(category);
        row.appendChild(rating);
        row.appendChild(temp_rating);
        row.appendChild(location);
        row.appendChild(pricePerNight);
    }
}