import {createTable} from "./createTable.js";

export function loadDoc(holidayLocation, holidayCategory) {
    $(document).ready(function () {
        $.ajax({
            type: "GET",
            url: "https://127.0.0.1:8000/ajax.json?category=",
            data: {
                category: holidayCategory.toLowerCase(),
                location: holidayLocation.toLowerCase()
            },
            success: function (response) {
                let data = response;
                data = JSON.parse(data);
                createTable(data);
                window.scrollBy(0, 500);
            }
        })
    })
}