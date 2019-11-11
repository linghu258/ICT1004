<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TUMMY FOR YUMMY</title>
        <link rel="icon" href="image/1004 Logo 2.png">
        <meta name="description" content="YUM-YUM's restaurant and catering services main menu. Using only quality ingredients and the freshest cuts of meat to fill your tummy! Vegetarian options available too!">
        <meta name="keywords" content="restaurant, catering, menu, reservation, main, vegetarian, meat, quality">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" href="css/header_footer.css">
        <link rel="stylesheet" href="css/menu.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css" type="text/css" />

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php
            include "navbar.inc.php";
        ?>
        
        <section class="container-fluid imgcontainer">
            <img class="figimage" src="image/MAIN.png" alt="topimage">
            <!--Url: https://www.flickr.com/photos/inthe-arena/13727335133/in/explore-2014-04-08 | Title: Takito | Author: Seaman Andrea | Publish: April,2014 | Publisher: Flickr | Visted: October 5, 2019-->
        </section>

        <section class="menue_section">
            <div class="container">
                <div class="txt-on-img">
                    <h3>FISH</h3>
                    <hr>
                    <div class="row">
                        <figure class="col-md-6 menu-collum">
                            <div class="menue-text-padding">
                                <img src="image/bento1.jpg" alt="image of fish">
                                <!--<author>Ashley Tyler</author><page name>BRIT+CO</page name><url>https://www.brit.co/vegetarian-bento-box-lunch/</url>-->
                                <h3>SALMON</h3>
                                <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto illo delectus...</p>
                            </div>
                        </figure>
                        <figure class="col-md-6 menu-collum">
                            <div class="menue-text-padding">
                                <img src="image/bento1.jpg" alt="image of fish">
                                <!--<author>Ashley Tyler</author><page name>BRIT+CO</page name><url>https://www.brit.co/vegetarian-bento-box-lunch/</url>-->
                                <h3>DORY</h3>
                                <p> lorem lorem lorem lorem ipsum text praesent tincidunt ipsum lipsum.</p>
                            </div>
                        </figure>
                    </div>
                </div>
            </div>
        </section>

        <section class="menue_section">
            <div class="container">
                <div class="txt-on-img">
                    <h3>BEEF</h3>
                    <hr>
                    <div class="row">
                        <figure class="col-md-6 menu-collum">
                            <div class="menue-text-padding">
                                <img src="image/bento1.jpg" alt="image of beef">
                                <!--<author>Ashley Tyler</author><page name>BRIT+CO</page name><url>https://www.brit.co/vegetarian-bento-box-lunch/</url>-->
                                <h3>WAGYU BEEF</h3>
                                <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto illo delectus...</p>
                            </div>
                        </figure>
                        <figure class="col-md-6 menu-collum">
                            <div class="menue-text-padding">
                                <img src="image/bento1.jpg" alt="image of beef">
                                <!--<author>Ashley Tyler</author><page name>BRIT+CO</page name><url>https://www.brit.co/vegetarian-bento-box-lunch/</url>-->
                                <h3>KOBE BEEF</h3>
                                <p> lorem lorem lorem lorem ipsum text praesent tincidunt ipsum lipsum.</p>
                            </div>
                        </figure>
                    </div>
                </div>
            </div>
        </section>

        <section class="menue_section">
            <div class="container">
                <div class="txt-on-img">
                    <h3>CHICKEN</h3>
                    <hr>
                    <div class="row">
                        <figure class="col-md-6 menu-collum">
                            <section class="menue-text-padding">
                                <img src="image/bento1.jpg" alt="image of chicken">
                                <!--<author>Ashley Tyler</author><page name>BRIT+CO</page name><url>https://www.brit.co/vegetarian-bento-box-lunch/</url>-->
                                <h3>TENDER CHICKEN</h3>
                                <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto illo delectus...</p>
                            </section>
                        </figure>
                        <figure class="col-md-6 menu-collum">
                            <div class="menue-text-padding">
                                <img src="image/bento1.jpg" alt="image of chicken">
                                <!--<author>Ashley Tyler</author><page name>BRIT+CO</page name><url>https://www.brit.co/vegetarian-bento-box-lunch/</url>-->
                                <h3>SPRING CHICKEN</h3>
                                <p> lorem lorem lorem lorem ipsum text praesent tincidunt ipsum lipsum.</p>
                            </div>
                        </figure>
                    </div>
                </div>
            </div>
        </section>
        
        <?php
            include "footer.inc.php";
        ?>
    </body>
</html>