<?php
// Constants for accessing our DB:
    define("DBHOST", "161.117.122.252");
    define("DBNAME", "p2_5");
    define("DBUSER", "p2_5");
    define("DBPASS", "rBs4CTxkDU");
    $fname = $lname = $email = $mobileNumber = $date = $time = $pax = $request = $errorMsg = "";
    $success = true;

//Helper function that checks input for malicious or unwanted content.
    function sanitize_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

// Create connection
    $conn = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);

// Check connection
    if ($conn->connect_error) {
        $errorMsg = "Connection failed: " . $conn->connect_error;
        $success = false;
    } else {
        $sql = "SELECT * FROM customer_reservation";
        $sql .= " WHERE email='$email";
        // Execute the query
        $result = $conn->query($sql);
    }
    
?>

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
    <link rel="stylesheet" href="assets/fonts/fontawesome/css/font-awesome.min.css">


    <script defer src="../js/admin.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</head>

<body>

    <?php
        include 'adminHeader.inc.php';
    ?>

    <article>
        <section>
            <div class="jumbotron">
                <h2>View Restaurant Reservations</h2>
            </div>
            <div class="container">
                <div class="table-responsive">
                    <input type="text" id="searchInput" onkeyup="tableFunction()" placeholder="Search"
                        title="Search for...">
                    <table id="orderTable" class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Reservation ID</th>
                                <th>Customer Name</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Pax</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php while($row = $result->fetch_assoc())
                            {
                        ?>
                            <tr>
                                <td class="counterCell"></td>
                                <td><?php echo $row['reservation_id']; ?></td>
                                <td><?php echo $row['fname']; ?></td>
                                <td><?php echo $row['reservationDate']; ?></td>
                                <td><?php echo $row['reservationTime']; ?></td>
                                <td><?php echo $row['reservationPax']; ?></td>
                                <td>
                                <button onclick="admin_viewOrder" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="bottom" title="View Details"><span
                                                class="glyphicon glyphicon-hamburger"></span></button>
                                <button type="button" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="bottom" title="Update"><span
                                        class="glyphicon glyphicon-edit"></span></button>
                                </td>
                            </tr>
                        <?php
                            }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </article>

    <?php
        include 'adminFooter.inc.php';
    ?>

</body>


</html>