<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content='width=device-width' initial-scale=1.0>
        <title>properties</title>
        <link rel="stylesheet" href="../stf/css/property_info.css">
        <link rel="icon" type="image/x-icon" href="/docapp//stf/img/doc_logo.svg">
    </head>
<body>
<?php include '../ext/head.php';?>
<div id="property_info">
    <div class="property">
        <p>Property at (Town)</p>
        <div class="p_image">
            <img src="../properties/prop/bgel2.jpeg" alt="active image">
        </div>
        <div class="p_images">
            <img src="../properties/prop/bgel1.jpeg" alt="List Image">
            <img src="../properties/prop/bgel2.jpeg" alt="List Image">
            <img src="../properties/prop/bgel3.jpeg" alt="List Image">
            <img src="../properties/prop/bgel4.jpeg" alt="List Image">
            <img src="../properties/prop/bgel5.jpeg" alt="List Image">
        </div>
        
        <p class="descr">Bridgegate Estate Lekki, Nigeria</p>
        <p><li class="tag">For Sale</li></p>
        <p class="price">#55,000,000</p>
        <br>
        <p>Features</p>
        <div class="info">
            <div class="bed">
                <img src="bed.svg">
                <p>4</p>
            </div>
            <div class="bath">
                <img src="bath.svg">
                <p>3</p>
            </div>
            <div class="size">
                <img src="size.svg">
                <p>1450 x 1670sqm</p>
            </div>
            <div class="address">
                <img src="address.svg">
                <p>address</p>
            </div>
        </div>

        <div class="other_info">
            <label for="others">Other Features</label>
            <textarea id="others" rows="8" maxlength="250" placeholder="list other features here"></textarea>
        </div>

        <input type="button" value="Contact Agent">
    </div>
</div>

<div id="related">
    <p>Related properties</p>
    <div class="related">
        <img>
        <img>
        <img>
        <img>

    </div>
</div>
    
<?php include '../ext/base.php';?>
</body>
    
</html>