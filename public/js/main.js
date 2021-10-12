let holidayCategoryNode = document.getElementById("holiday-category");
let holidayLocationNode = document.getElementById("holiday-location");

let lazyCategory = holidayCategoryNode.children[0];
let activeCategory = holidayCategoryNode.children[1];
let mountainLocation = holidayLocationNode.children[0];
let cityLocation = holidayLocationNode.children[1];
let seaLocation = holidayLocationNode.children[2];

let holidayCategory = '';
let holidayLocation = '';

lazyCategory.onclick = function () {
    holidayCategory = 'Lazy';
    showAnswers();
};

activeCategory.onclick = function () {
    holidayCategory = 'Active';
    showAnswers();
};

mountainLocation.onclick = function () {
    holidayLocation = 'Mountain'
    showAnswers();
}

cityLocation.onclick = function () {
    holidayLocation = 'City'
    showAnswers();
}

seaLocation.onclick = function () {
    holidayLocation = 'Sea'
    showAnswers();
}

function showAnswers() {
    document.getElementById('answers').innerHTML = holidayLocation + holidayCategory
}

function showRecords(location, category) {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function () {
        document.getElementById("txtHint").innerHTML = this.responseText;
    }
    xhttp.open("GET", "ajax.php?q="+location,category);
    xhttp.send();
}