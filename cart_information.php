<!DOCTYPE html>
<html>
    <head>
        <title>TUMMY FOR YUM-YUM</title>
        <link rel="icon" href="image/1004 Logo 2.png">
        <meta name="description" content="YUM-YUM's restaurant and catering services checkout/payment page. Pay for your food after adding it in your shopping cart, safely and securely here! ">
        <meta name="keywords" content="restaurant, catering, menu, reservation, payment, checkout, shopping, cart">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" href="css/header_footer.css">
        <link rel="stylesheet" href="css/reservation.css">
        <link rel="stylesheet" href="css/shoppingcart.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <script src="js/paymentFormValidation.js"></script>
        <script src="js/shopcart.js"></script>
    </head>
    <body>
        <?php
            include "navbar.inc.php";
        ?>
        
        <section class="container-fluid imgcontainer">
            <img class="figimage" src="image/CHECKOUT.png" alt="topimage">
            <!--Url: https://www.flickr.com/photos/inthe-arena/13727335133/in/explore-2014-04-08 | Title: Takito | Author: Seaman Andrea | Publish: April,2014 | Publisher: Flickr | Visted: October 5, 2019-->
        </section>

        <!--Payment Form-->
        <section class="col-sm-5">
            <!--5 col out of 12 col for cart information-->
            <h1>CART</h1>
            <table class="carttable">
                <tr>
                    <th colspan="2">CANCEL ORDERED ITEMS:</th>
                    <th>Quantity:</th>
                    <th>Price:</th>
                </tr>
                <tr>
                    <td>
                        <button type="button" class="btn btn-default btn-lg rowbtn"
                                onclick="SomeDeleteRowFunction(this)"><span
                                class="glyphicon glyphicon-remove"></span></button>
                        Chicken
                    </td>
                    <td></td>
                    <td>3</td>
                    <td>$120</td>
                </tr>
                <tr>
                    <td>
                        <button type="button" class="btn btn-default btn-lg rowbtn"
                                onclick="SomeDeleteRowFunction(this)"><span
                                class="glyphicon glyphicon-remove"></span></button>
                        Beef
                    </td>
                    <td></td>
                    <td>2</td>
                    <td>$150</td>

                </tr>
                <tr>
                    <td>
                        <button type="button" class="btn btn-default btn-lg rowbtn"
                                onclick="SomeDeleteRowFunction(this)"><span
                                class="glyphicon glyphicon-remove"></span></button>
                        Fish
                    </td>
                    <td></td>
                    <td>1</td>
                    <td>$80</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Total</td>
                    <td>$80</td>
                </tr>
            </table>
        </section>
        
        <button type="submit" id="btnPayment" class="btn btn-default">CHECK OUT</button>
        
        <?php
            include "footer.inc.php";
        ?>
    </body>
</html>
