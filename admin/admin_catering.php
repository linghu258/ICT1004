<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html class="no-js" lang="zxx">

<head>
    <title>TUMMY FOR YUMMY</title>
    <link rel="icon" href="../image/1004 Logo 2.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/admin_order.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">


    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">

    <script defer src="../js/admin.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>



</head>

<body>

    <?php
    include "adminHeader.inc.php";
    ?>

    <article>
        <section>
            <div class="jumbotron">
                <h2>View Catering Order</h2>
            </div>
            <div class="container">
                <div class="table-responsive">
                    <input type="text" id="searchInput" onkeyup="tableFunction()" placeholder="Search"
                        title="Search for...">
                    <table id="orderTable" class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Customer Name</th>
                                <th>Reference ID</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Pax</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="counterCell"></td>
                                <td>User 1</td>
                                <td>C-201901888</td>
                                <td>19 October 2019</td>
                                <td>05:45PM</td>
                                <td>10</td>
                                <td>Upcoming</td>
                                <td>
                                    <button type="button" class="btn btn-primary btn-xs" data-toggle="tooltip"
                                        data-placement="bottom" title="View Details"><span
                                            class="glyphicon glyphicon-menu-hamburger"></span></a>
                                        <button type="button" class="btn btn-primary btn-xs" data-toggle="tooltip"
                                            data-placement="bottom" title="Update"><span
                                                class="glyphicon glyphicon-edit"></span></button>
                                </td>
                            </tr>
                            <tr>
                                <td class="counterCell"></td>
                                <td>User 2</td>
                                <td>C-201901890</td>
                                <td>28 October 2019</td>
                                <td>04:45PM</td>
                                <td>10</td>
                                <td>Upcoming</td>
                                <td>
                                    <button type="button" class="btn btn-primary btn-xs" data-toggle="tooltip"
                                        data-placement="bottom" title="View Details"><span
                                            class="glyphicon glyphicon-menu-hamburger"></span></a>
                                        <button type="button" class="btn btn-primary btn-xs" data-toggle="tooltip"
                                            data-placement="bottom" title="Update"><span
                                                class="glyphicon glyphicon-edit"></span></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </article>

    <?php
    include "adminFooter.inc.php";
    ?>

</body>


</html>