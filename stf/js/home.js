import {auto_change} from "/docapp/stf/js/docFunctions.js";

const imageSlides = document.querySelectorAll(".images img");
const homeAbout = document.querySelectorAll(".home_about > div");

auto_change(imageSlides, 7000);
auto_change(homeAbout);