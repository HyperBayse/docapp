<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content='width=device-width' initial-scale=1.0>
        <title>properties</title>
        <link rel="stylesheet" href="/docapp/stf/css/properties.css">
    </head>
    <body>
    <?php include '/xampp/htdocs/docapp/ext/head.php';?>
    
        <!-- Properties Page -->
        <div id="properties">
            <p>Properties</p>
        
        <section id="filter">
            <img class="filter_icon" src="/docapp/stf/img/filter.svg" alt="fi">
            <div clas="filter_box">
                <p>Filter Search</p>
                <div class="filter">
                    <label for="state">State:</label>
                    <select id="state">
                        <option value="" >__select state__</option>
                        <option value="lagos">Lagos</option>
                        <option value="oyo">Oyo</option>
                        <option value="abuja">Abuja</option>
                        <option value="ogun">Ogun</option>
                        <option value="kwara">Kwara</option>
                        <option value="osun">Osun</option>
                    </select>

                    <p><label for="state">Sort by:</label></p>

                </div>
            </div>
        </section>
            
            
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

<?php include '/xampp/htdocs/docapp/ext/base.php';?>
    </body>
    
</html>