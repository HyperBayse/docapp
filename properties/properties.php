<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content='width=device-width' initial-scale=1.0>
        <title>properties</title>
        <link rel="stylesheet" href="../stf/css/properties.css">
        <link rel="icon" type="image/x-icon" href="/docapp//stf/img/doc_logo.svg">
    </head>
    <body>
    <?php include '../ext/head.php';?>
    
        <section class="property_head">
            <p>Properties</p>

            <div id="search">
                <?php include '../ext/search.php';?>
            </div>  
        </section>
    <!-- Properties Page -->
    <div id="properties">
             
        <div class="properties">
            <div class="l_property">
                <img class="active" src="../properties/prop/lpce1.jpeg" alt="List Image">
                <p class="descr">Newly Built 5 Bedroom Detached House</p>
                <p class="tag">For Sale</p>
                <p class="price">#90,000,000</p>
                <hr>
                <div class="info">
                    <div class="bed">
                        <img src="bed.svg">
                        <p>4</p>
                    </div>
                    <div class="bath">
                        <img src="bath.svg">
                        <p>3</p>
                    </div>

                    <!-- If the property is land, land size should be visible -->
                    <!-- <div class="size">
                        <img src="size.svg">
                        <p>1450 x 1670sqm</p>
                    </div> -->

                    <div class="address">
                        <img src="address.svg">
                        <p>state</p>
                    </div>
                </div>
                <hr>
                <a href="property_info.php"><input type="button" value="View Details"></a>
            </div>

            <div class="l_property">
                <img src="../properties/prop/bgel4.jpeg" alt="List Image">
                <p class="descr">Bridgegate Estate Lekki, Nigeria</p>
                <p class="tag">For Sale</p>
                <p class="price">#55,000,000</p>
                <hr>
                <div class="info">
                    <div class="bed">
                        <img src="bed.svg">
                        <p>4</p>
                    </div>
                    <div class="bath">
                        <img src="bath.svg">
                        <p>3</p>
                    </div>

                    <!-- If the property is land, land size should be visible -->
                    <!-- <div class="size">
                        <img src="size.svg">
                        <p>1450 x 1670sqm</p>
                    </div> -->

                    <div class="address">
                        <img src="address.svg">
                        <p>state</p>
                    </div>
                </div>
                <hr>
                <input type="button" value="View Details">
            </div>

            <div class="l_property">
                <img src="../properties/prop/shan2.jpeg" alt="List Image">
                <p class="descr">Shangisha Fully Ensuite House</p>
                <p class="tag">For Rent</p>
                <p class="price">#2,000,000</p>
                <p class="info infos">
                    <ul>
                        <li>xNo Bedroom</li>
                        <li>xNo Bath</li>
                        <li>xNo Land Size</li>
                        <li>Others: </li>
                        <li>Address: </li>
                    </ul>
                </p>
                <input type="button" value="View Details">
            </div>

            <div class="l_property">
                <img src="../properties/prop/wlie1.jpeg" alt="List Image">
                <p class="descr">Westlink Iconic Estate</p>
                <p class="tag">For Sale
                </p>
                <p class="price">#25,000,000</p>
                <p class="info infos">
                    <ul>
                        <li>xNo Bedroom</li>
                        <li>xNo Bath</li>
                        <li>xNo Land Size</li>
                        <li>Others: </li>
                        <li>Address: </li>
                    </ul>
                </p>
                <input type="button" value="View Details">
            </div>

            <div class="l_property">
                <img src="../properties/prop/abl1.jpeg" alt="List Image">
                <p class="descr">Land</p>
                <p class="tag">For Sale
                </p>
                <p class="price">#85,000,000</p>
                <p class="info infos">
                    <ul>
                        <li>xNo Bedroom</li>
                        <li>xNo Bath</li>
                        <li>xNo Land Size</li>
                        <li>Others: </li>
                        <li>Address: </li>
                    </ul>
                </p>
                <input type="button" value="View Details">
            </div>
            
        </div>
    
        <div class="properties">
            <div class="l_property">
                <p>Descriptive Name</p>
                <img alt="Property Image">
                <p>Detailed Information</p>
            </div>
            <div class="l_property">
                <p>Descriptive Name</p>
                <img alt="Property Image">
                <p>Detailed Information</p>
            </div>
            <div class="l_property">
                <p>Descriptive Name</p>
                <img alt="Property Image">
                <p>Detailed Information</p>
            </div>
            <div class="l_property">
                <p>Descriptive Name</p>
                <img alt="Property Image">
                <p>Detailed Information</p>
            </div>
        </div>
    </div>

    <!-- Footer base information -->

<?php include '../ext/base.php';?>
    </body>
    
</html>