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
        <meta name="description" content="YUM-YUM's restaurant and catering services food menu. We provide a huge selection of dishes, including vegetarian!">
        <meta name="keywords" content="restaurant, catering, menu, vegetarian, food">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" href="css/header_footer.css">
        <link rel="stylesheet" href="css/menu.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css" type="text/css" />

        <script defer src="js/menu.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php
            include "navbar.inc.php";
        ?>
        
        <section class="container-fluid imgcontainer">
            <img class="figimage" src="image/CATERING.png" alt="topimage">
            <!--Url: https://www.flickr.com/photos/inthe-arena/13727335133/in/explore-2014-04-08 | Title: Takito | Author: Seaman Andrea | Publish: April,2014 | Publisher: Flickr | Visted: October 5, 2019-->
        </section>

        <section class="menue_section">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <img src="image/bento1.jpg" alt="Pasta and Wine">
                        <!--<author>Ashley Tyler</author><page name>BRIT+CO</page name><url>https://www.brit.co/vegetarian-bento-box-lunch/</url>-->
                        <div class="menue-text-padding">
                            <h3>Vegeterian Set</h3>
                            <cite>~$50~</cite>
                            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <div class="input-group">
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-colour white-text" id="vegedec"
                                            onclick="vegedecValue()" value="Decrease Value">-</button>
                                </span>
                                <div class="form-group">
                                    <input type="tel" class="form-control" id="vegenumber" value="0"
                                           placeholder="Enter quantity">
                                </div>
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-colour white-text" id="veginc"
                                            onclick="vegeincValue()" value="Decrease Value">+</button>
                                </span>
                            </div>
                            <p></p>
                            <p><button type="button" class="btn btn-colour white-text">Add to cart</button></P>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <img src="image/bento1.jpg" alt="Pasta and Wine">
                        <!--<author>Ashley Tyler</author><page name>BRIT+CO</page name><url>https://www.brit.co/vegetarian-bento-box-lunch/</url>-->
                        <div class="menue-text-padding">
                            <h3>Seafood Set</h3>
                            <cite>~$150~</cite>
                            <p> lorem lorem lorem lorem ipsum text praesent tincidunt ipsum lipsum.</p>
                            <div class="input-group">
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-colour white-text" id="fishdec"
                                            onclick="fishdecValue()" value="Decrease Value">-</button>
                                </span>
                                <div class="form-group">
                                    <input type="tel" class="form-control" id="fishnumber" value="0"
                                           placeholder="Enter quantity">
                                </div>
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-colour white-text" id="fishinc"
                                            onclick="fishincValue()" value="Decrease Value">+</button>
                                </span>
                            </div>
                            <p></p>
                            <p><button type="button" class="btn btn-colour white-text">Add to cart</button></P>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <img src="image/bento1.jpg" alt="Pasta and Wine">
                        <!--<author>Ashley Tyler</author><page name>BRIT+CO</page name><url>https://www.brit.co/vegetarian-bento-box-lunch/</url>-->
                        <div class="menue-text-padding">
                            <h3>Meat Deluxe Set</h3>
                            <cite>~$100~</cite>
                            <p> lorem lorem lorem lorem ipsum text praesent tincidunt ipsum lipsum.</p>
                            <div class="input-group">
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-colour white-text" id="beefdec"
                                            onclick="beefdecValue()" value="Decrease Value">-</button>
                                </span>
                                <div class="form-group">
                                    <input type="tel" class="form-control" id="beefnumber" value="0"
                                           placeholder="Enter quantity">
                                </div>
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-colour white-text" id="beefinc"
                                            onclick="beefincValue()" value="Decrease Value">+</button>
                                </span>
                            </div>
                            <p></p>
                            <p><button type="button" class="btn btn-colour white-text">Add to cart</button></P>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <img src="image/bento1.jpg" alt="Pasta and Wine">
                        <!--<author>Ashley Tyler</author><page name>BRIT+CO</page name><url>https://www.brit.co/vegetarian-bento-box-lunch/</url>-->
                        <div class="menue-text-padding">
                            <h3>Meat Set</h3>
                            <cite>~$80~</cite>
                            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <div class="input-group">
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-colour white-text" id="chickdec"
                                            onclick="chickdecValue()" value="Decrease Value">-</button>
                                </span>
                                <div class="form-group">
                                    <input type="tel" class="form-control" id="chicknumber" value="0"
                                           placeholder="Enter quantity">
                                </div>
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-colour white-text" id="chickinc"
                                            onclick="chickincValue()" value="Decrease Value">+</button>
                                </span>
                            </div>
                            <p></p>
                            <p><button type="button" class="btn btn-colour white-text">Add to cart</button></P>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <?php
            include "footer.inc.php";
        ?>
        
    </body>
</html>
