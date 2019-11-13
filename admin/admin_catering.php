<?php
// Constants for accessing our DB:
    define("DBHOST", "161.117.122.252");
    define("DBNAME", "p2_5");
    define("DBUSER", "p2_5");
    define("DBPASS", "rBs4CTxkDU");
    $fullname = $orderid = $email = $date = $time = $price = $errorMsg = "";
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
        $sql = "SELECT customer_order.order_id, customer_order.email, customer_order.fullName, customer_order.productName, customer_order.quantity, customer_order.totalPrice, customer_information.deliveryDate, customer_information.deliveryTime";
        $sql .= " FROM customer_order INNER JOIN customer_information ON customer_order.customer_id = customer_information.customer_id";
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
        include 'adminHeader.inc.php';
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
                                <th>Order ID</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while($row = $result->fetch_assoc())
                                {
                            ?>
                                <tr>
                                    <td class="counterCell"></td>
                                    <td><?php echo $row['fullName']; ?></td>
                                    <td><?php echo $row['order_id']; ?></td>
                                    <td><?php echo $row['deliveryDate']; ?></td>
                                    <td><?php echo $row['deliveryTime']; ?></td>
                                    <td><?php echo $row['totalPrice']; ?></td>
                                    <td>
                                    <a class="btn btn-primary btn-xs" href="admin_viewOrder.php" data-toggle="tooltip" data-placement="bottom" title="View Details"><span
                                        class="glyphicon glyphicon-menu-hamburger"></span></a>
                                    <a class="btn btn-primary btn-xs" href="#" data-toggle="tooltip" data-placement="bottom" title="Update Details"><span
                                        class="glyphicon glyphicon-edit"></span></a>
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