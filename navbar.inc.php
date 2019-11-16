<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>

<header>
        <nav class="navbar navbar-default navbar-fixed-top">
            <section class="container">
                <section class="navbar-header">
                    <a class="navbar-brand" href="index.php">YUM-YUM</a>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </section>
                <section class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar">
                        <li><a href="index.php">HOME</a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">MENU <span
                                    class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="menu_appetizer.php">Appetizer</a></li>
                                <li class="divider"></li>
                                <li><a href="menu_main.php">MAIN</a></li>
                                <li class="divider"></li>
                                <li><a href="menu_dessert.php">DESSERT</a></li>
                                <li class="divider"></li>
                                <li><a href="menu_beverage.php">BEVERAGE</a></li>
                                <li class="divider"></li>
                                <li><a href="catering_menu.php">CATERING</a></li>
                            </ul>
                        </li>
                        <li><a href="reservation.php">RESERVATION</a></li>
                        <!--<li><a href="catering_menu.php">CATERING</a></li>-->
                        <li><a href="about_contact.php">ABOUT US</a></li>
                        <li><a href="faq.php">FAQ</a></li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="catering_cart.php"><span class="glyphicon glyphicon-shopping-cart"></span>ORDER CATERING</a></li>
                    </ul>
                </section>
            </section>
        </nav>
    </header>
