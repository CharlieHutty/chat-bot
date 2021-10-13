import {loadDoc} from "./modules/loadDoc.js";
import {getUserName} from "./modules/getUserName.js";

export function main() {

    let userNameBtn = document.querySelector('form');
    userNameBtn.addEventListener('click', function (event) {
        getUserName();
        window.scrollBy(0, 200);
    })

    let chosenCategoryAndLocation = [];

    let holidayCategory = document.querySelector('.holiday-category');
    let holidayLocation = document.querySelector('.holiday-location');

    holidayCategory.addEventListener('click', function(event) {
        if (chosenCategoryAndLocation.length < 1) {
            chosenCategoryAndLocation.push(event.target.id);
            window.scrollBy(0, 350);
        } else {
            chosenCategoryAndLocation = [];
        }
    }, false);

    holidayLocation.addEventListener('click', function (event) {
        if (chosenCategoryAndLocation.length < 2) {
            chosenCategoryAndLocation.push(event.target.id);
            loadDoc(chosenCategoryAndLocation[1], chosenCategoryAndLocation[0])
        } else {
            chosenCategoryAndLocation = [];
        }
    })
}
