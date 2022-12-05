import { showToggle, hide_items } from "../stf/js/docFunctions.js";

const arrowDown = document.querySelectorAll(".arrow_down");
const sProperty = document.querySelector('.sub_property');
const sService = document.querySelector(".sub_service");

// sub-items dropdown
arrowDown[0].addEventListener('click', function(){showToggle(sProperty)})
arrowDown[1].addEventListener('click', function(){showToggle(sService)})

const menuNav = document.querySelector('.menu_nav');
const menu = document.querySelector('.menu');
const menuNavB = document.querySelector('.menu_nav_b');

// NavMenu Dropdowns
menu.addEventListener('click', function(){
    showToggle(menuNav, "inline-grid");
    hide_items(sProperty);
    hide_items(sService);
    showToggle(menuNavB, "block")
})