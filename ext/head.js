const arrowDown = document.querySelectorAll(".arrow_down");
const sProperty = document.querySelector('.sub_property');
const sService = document.querySelector(".sub_service");

// sub-items dropdown
arrowDown[0].addEventListener('click', function(){show_items(sProperty)})
arrowDown[1].addEventListener('click', function(){show_items(sService)})

// Function to show/hide sub-items (toggle)
function show_items(x, y="block"){
    if (x.style.display == y){
        x.style.display = "none";
    }else{x.style.display = y}
}

// Function to hide sub-items
function hide_items(x, y="none"){
    x.style.display = y;
}

const menuNav = document.querySelector('.menu_nav');
const menu = document.querySelector('.menu');

// NavMenu Dropdowns
menu.addEventListener('click', function(){
    show_items(menuNav, "inline-grid");
    hide_items(sProperty);
    hide_items(sService);
})