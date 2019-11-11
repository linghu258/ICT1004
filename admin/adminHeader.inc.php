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
                <a class="navbar-brand" href="#">YUM-YUM</a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </section>
            <section class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar">
                    <li><a href="../admin/admin_dashboard.html">HOME</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">VIEW ORDER <span
                                class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="../admin/admin_catering.html">CATERING</a></li>
                            <li class="divider"></li>
                            <li><a href="../admin/admin_reservation.html">RESERVATIONS</a></li>
                        </ul>
                    </li>
                    <li><a href="../admin/admin_account.html">ACCOUNT</a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="../index.php"><span class="glyphicon glyphicon-log-out"></span> LOGOUT</a></li>
                </ul>
            </section>
        </section>
    </nav>
</header>