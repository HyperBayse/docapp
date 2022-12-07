import {showToggle, hide_items, changeAttribute} from "../stf/js/docFunctions.js";

const arrowDown = document.querySelectorAll(".arrow_down");
const sProperty = document.querySelector('.sub_property');
const sService = document.querySelector(".sub_service");

// sub-items dropdown
arrowDown[0].addEventListener('click', function(){showToggle(sProperty)})
arrowDown[1].addEventListener('click', function(){showToggle(sService)})

const menuNav = document.querySelector('.menu_nav');
const menu = document.querySelector('.menu');

// NavMenu Dropdowns
menu.addEventListener('click', function(){
    showToggle(menuNav, "inline-grid");
    hide_items(sProperty);
    hide_items(sService);
    plusMinusIcon.forEach(icon =>{
        icon.setAttribute("src", "/docapp/stf/img/plus.svg")})
})

const plusMinusIcon = document.querySelectorAll(".menu_nav img");

// Icons value changing
plusMinusIcon.forEach(icon => {
    icon.addEventListener('click', ()=>{
    changeAttribute(icon, "src", "/docapp/stf/img/plus.svg", "/docapp/stf/img/minus.svg")
})
});

menu.addEventListener('click', ()=>{
    changeAttribute(menu, "src", "/docapp/stf/img/menu.svg", "/docapp/stf/img/cancelIcon.svg")
})