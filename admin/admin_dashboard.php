<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

    <head>
        <title>TUMMY FOR YUMMY</title>
        <link rel="icon" href="../image/1004 Logo 2.png">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/main.css">
        <link rel="stylesheet" href="../css/admin_order.css">
        <link rel="stylesheet" href="../css/bootstrap.min.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    </head>

    <body>

        <?php
        include 'adminHeader.inc.php';
        ?>


        <article>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 pen">
                        <div class="page-header">
                            <h1>Hello Admin 1!</h1>
                            <p class="lead">Your last login at: 09 October 2019, 12:47 AM.</p>
                        </div>
                    </div>
                </div>
                <section>
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="card card-default">
                                <div class="card-header">Account Profile</div>
                                <div class="card-body">
                                    <p>Username: Admin 1</p>
                                    <p>Email: admin1@yumyum.com</p>
                                </div>
                                <div class="card-footer"><a href="../admin/admin_account.html">View More...</a></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-5">
                                <div class="card card-default">
                                    <div class="card-header">Total Number of Orders and Reservations</div>
                                    <div class="panel-body">
                                        <h4 class="value">300 orders</h4>
                                        <p class="description">
                                        </p>
                                        <div class="progress progress-sm mbn">
                                            <div role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"
                                                 style="width: 60%;" class="progress-bar progress-bar-info">
                                                <span class="sr-only">60% Complete (success)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- <div class="row">
                        <div class="col-sm-4">
                            <div class="card card-default">
                                <div class="card-header">Total Number of Orders and Reservations</div>
                                <div class="card-body card-5-7">
                                    <h4 class="value">120 orders</h4>
                                    <p class="description">
                                    </p>
                                    <div class="progress progress-sm mbn">
                                        <div role="progressbar" aria-valuenow="120" aria-valuemin="0" aria-valuemax="100"
                                            style="width: 60%;" class="progress-bar progress-bar-info">
                                            <span class="sr-only">120% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->

                        <!-- <div class="row">
                        <div class="col-sm-4">
                            <h4>Menu</h4>
                            <div class="card card-default">
                                <div class="card-body">
                                    <p>A stitch in time saves nine. All good things come to those who wait. Too many
                                        cooks spoil
                                        the broth. I have seen the future, and it works.</p>
                                </div>
                            </div>
    
                        </div> -->
                    </div>


                    <div class="row">
                        <div class="col-sm-5">
                            <h4>Total Number of Reservations</h4>
                            <div class="card card-default">
                                <div class="card-header">160 Reservations</div>
                                <div class="card-body">
                                    <p>Upcoming Reservation: 28 October 2019</p>
                                    <p><a href="../admin/admin_reservation.html">More...</a></p>
                                </div>
                            </div>

                        </div>
                        <div class="col-sm-5">

                            <h4>Total Number of Catering Orders</h4>
                            <div class="card card-default">
                                <div class="card-header">140 Orders</div>
                                <div class="card-body">
                                    <p>Upcoming order: 09 December 2019</p>
                                    <p><a href="../admin/admin_catering.html">More...</a></p>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
        </article>

        <?php
        include 'adminFooter.inc.php';
        ?>

    </body>


</html>