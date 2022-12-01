function show_items(x, y="block"){
    // Function to show/hide sub-items (toggle)
    if (x.style.display == y){
        x.style.display = "none";
    }else{x.style.display = y}
};

function hide_items(x, y="none"){
    // Function to hide sub-items
    x.style.display = y;
};

function show_this(x1, y1, x2="block", y2="block"){
    // A function that switches the display between two elements
    if (x1.style.display == x2){
        y1.style.display = "none";
    } else{
        x1.style.display = x2;
        y1.style.display =  "none";
    }
};

function auto_change(array, time=7000, display1="block", display2="none"){
    // It changes the display value of the current array_index the specified display in the parameter value with time.
    // The default displays are "block" and "none" respectively and time is 7 seconds.
    // You can specify your display after the array has been parsed. It takes maximum of only two extra arguments.
    // The first display value is what you want as your display while the other is for what you don't want.
    var i = Math.ceil(Math.random() * array.length-1);
    array[i].style.display = display1;

    for (let x=0; x<=array.length;x++){
        setInterval(()=>{
            if (x == array.length){
                array[array.length-1].style.display = display2;
                array[0].style.display = display1
                x = 1;
            } else{
                array.forEach(item => { item.style.display=display2});
                array[x].style.display = display1;
                x++;
            } 
        }, time)
    }

}


export {show_items, hide_items, show_this, auto_change};