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
        <meta name="description" content="YUM-YUM is a Singapore restaurant and catering business. Wide range of affordable and delicious food. Open all-day, seven days a week.">
        <meta name="keywords" content="restaurant, catering, menu, reservation, home, food, open, 7">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/header_footer.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css" type="text/css" />

        <script defer src="js/admin.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php
            include "navbar.inc.php";
        ?>
        
    <main>
        <section class="container-fluid">
            <section id="myCarousel" class="carousel slide" data-ride="carousel">
                <ul class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                </ul>

                <!-- Wrapper for slides -->
                <section class="carousel-inner">
                    <section class="item active">
                        <img src="image/restaurant3wide.jpg" alt="reservationimage">
                        <section class="carousel-caption">
                            <p>WELCOME</p>
                            <button onclick="window.location.href='reservation.php'" class="btncaro">RESERVE A
                                TABLE</button>
                        </section>
                    </section>

                    <section class="item">
                        <img src="image/catering.jpg" alt="cateringimage">
                        <section class="carousel-caption">
                            <p>CATERING</p>
                            <button onclick="window.location.href='catering.php'" class="btncaro">ORDER NOW</button>
                        </section>
                    </section>
                </section>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </section>
        </section>

        <section id="container_aboutus" class="container">
            <section class="row">
                <section class="col-sm-6">
                    <h1>HISTORY</h1>
                    <h2>ABOUT US</h2>
                    <P>Welcome to YUM-YUM, a humble restaurant where our founder wanted to provide customer with yummy
                        food to fill their belly at affordable prices</P>
                    <p>To widen our reach to more customer, our restaurant also provide catering services that provide
                        the same quality food our physical restaurant serve</p>
                </section>

                <figure id="home" class="col-sm-6">
                    <img src="image/kitchen.jpg" alt="kitchen">
                    <!--Url: https://unsplash.com/photos/zk5vJ8Duw9k | Author: Hansel Louis | Publish: August, 2019 | Publisher: Unsplash | Visited: October 5, 2019-->
                </figure>
            </section>
            <button onclick="window.location.href='about_contact.html'" class="btn-RM">READ MORE</button>
        </section>
    </main>

    <!-- Admin Login Modal Form -->
    <div id="adminLogin" class="modal">
        <span onclick="document.getElementById('adminLogin').style.display='none'" class="close"
              title="Close Modal">&times;
        </span>

        <!-- Modal Content -->
        <form class="modal-content animate" action="admin/admin_dashboard.php">

            <div class="flex-container">
                <label for="username"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="username" required>

                <label for="password"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password" required>

                <button type="submit" id="loginbtn">Login</button>
                <label>
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>
            </div>

            <div class="containerbottom">
                <button type="button" onclick="document.getElementById('adminLogin').style.display='none'"
                        class="cancelbtn" data-dismiss="modal">Cancel</button>
                <span class="password"><a href="#">Forgot password?</a></span>
            </div>
        </form>
    </div>
        
        <?php
            include "footer.inc.php";
        ?>
    </body>
</html>
