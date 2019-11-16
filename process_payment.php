<html>
    <head>
        <title>TUMMY FOR YUM-YUM</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/header_footer.css">
        <link rel="stylesheet" href="css/process_payment.css">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <script src="js/bootstrap.min.js"></script>   
    </head>

    <body>      
        <?php
            include "navbar.inc.php";
        ?>
        
        <article class="formvalidateOutput">
            <?php
            $key = 'qkwjdiw239&&jdafweihbrhnan&^%$ggdnawhd4njshjwuuO';
            // Constants for accessing our DB:
            define("DBHOST", "161.117.122.252"); 
            define("DBNAME", "p2_5"); 
            define("DBUSER", "p2_5"); 
            define("DBPASS", "rBs4CTxkDU");  
            $custname = $custemail = $custnumber = $streetadd = $blknumber = $unitnumber = $zipcode = $deldate = $deltime = $ccname = $ccnumber = $expdate = $ccvnumber = $errorMsg = "";
            $success = true; 

            if (empty($_POST["custname"])) {
                $errorMsg .= "First name is required.<br>";     
                $success = false; 
            } else {
                $custname = sanitize_input($_POST["custname"]); 
                if (!preg_match("/^([a-zA-Z']+)$/", $custname)) {
                    $errorMsg .= "Please enter a proper first name.<br>";     
                    $success = false; 
                } else {
                    $custname = sanitize_input($_POST["custname"]);    
                }
            }
            
            if (empty($_POST["custemail"])) {     
                $errorMsg .= "Email is required.<br>";     
                $success = false; 
            } else {     
                $custemail = sanitize_input($_POST["custemail"]); // Additional check to make sure e-mail address is well-formed.     
                if (!filter_var($custemail, FILTER_VALIDATE_EMAIL)) {         
                    $errorMsg .= "Invalid email format.<br>";         
                    $success = false;       
                }
            } 
            
            if (empty($_POST["custnumber"])) {
                $errorMsg .= "Contact Number is required.<br>";     
                $success = false; 
            } else {
                $custnumber = sanitize_input($_POST["custnumber"]); 
                if (!preg_match("/^([0-9]{8})$/", $custnumber)) {
                    $errorMsg .= "Please enter a valid contact number.<br>";         
                    $success = false; 
                } else {
                    $custnumber = sanitize_input($_POST["custnumber"]);    
                }
            }
            
            if (empty($_POST["streetadd"])) {
                $errorMsg .= "Address is required.<br>";     
                $success = false; 
            } else {
                $streetadd = sanitize_input($_POST["streetadd"]); 
                if (!preg_match("/^([A-Za-z0-9'\.\-\#\s\,])+$/", $streetadd)) {
                    $errorMsg .= "Please enter a valid address.<br>";         
                    $success = false; 
                } else {
                    $streetadd = sanitize_input($_POST["streetadd"]);    
                }
            }
            
            if (empty($_POST["blknumber"])) {
                $errorMsg .= "Blk number is required.<br>";     
                $success = false; 
            } else {
                $blknumber = sanitize_input($_POST["blknumber"]); 
                if (!preg_match("/^([0-9]{3})$/", $blknumber)) {
                    $errorMsg .= "Please enter a valid blk number.<br>";         
                    $success = false; 
                } else {
                    $blknumber = sanitize_input($_POST["blknumber"]);    
                }
            }
            
            if (empty($_POST["unitnumber"])) {
                $errorMsg .= "Unit number is required.<br>";     
                $success = false; 
            } else {
                $unitnumber = sanitize_input($_POST["unitnumber"]); 
                if (!preg_match("/^([0-9]{2}\-[0-9]{3})$/", $unitnumber)) {
                    $errorMsg .= "Please enter a valid unit number.<br>";         
                    $success = false; 
                } else {
                    $unitnumber = sanitize_input($_POST["unitnumber"]);    
                }
            }
            
            if (empty($_POST["zipcode"])) {
                $errorMsg .= "Zipcode is required.<br>";     
                $success = false; 
            } else {
                $zipcode = sanitize_input($_POST["zipcode"]); 
                if (!preg_match("/^([0-9]{6})$/", $zipcode)) {
                    $errorMsg .= "Please enter a valid zipcode.<br>";         
                    $success = false; 
                } else {
                    $zipcode = sanitize_input($_POST["zipcode"]);    
                }
            }
            
            if (empty($_POST["deldate"])) {
                $errorMsg .= "Date is required.<br>";     
                $success = false; 
            } else {
                $deldate = sanitize_input($_POST["deldate"]); 
            }
            
            if ($_POST["deltime"] == 0) {
                $errorMsg .= "Please select a time.<br>";     
                $success = false; 
            } else {
                $deltime = $_POST["deltime"]; 
            }
            
            if (empty($_POST["ccname"])) {
                $errorMsg .= "Credit card name is required.<br>";     
                $success = false; 
            } else {
                $ccname = sanitize_input($_POST["ccname"]); 
                if (!preg_match("/^([a-zA-Z']+)$/", $ccname)) {
                    $errorMsg .= "Please enter a valid credit card name.<br>";     
                    $success = false; 
                } else {
                    $ccname = encryptthis(sanitize_input($_POST["ccname"]), $key);    
                }
            }
            
            if (empty($_POST["ccnumber"])) {
                $errorMsg .= "Credit Card Number is required.<br>";     
                $success = false; 
            } else {
                $ccnumber = sanitize_input($_POST["ccnumber"]); 
                if (!preg_match("/^([0-9]{16})$/", $ccnumber)) {
                    $errorMsg .= "Please enter a valid credit card number.<br>";         
                    $success = false; 
                } else {
                    $ccnumber = encryptthis(sanitize_input($_POST["ccnumber"]), $key);    
                }
            }
            
            if (empty($_POST["expdate"])) {
                $errorMsg .= "Exp date is required.<br>";     
                $success = false; 
            } else {
                $expdate = sanitize_input($_POST["expdate"]); 
                if (!preg_match("/^([0-9]{2}\/[0-9]{2})$/", $expdate)) {
                    $errorMsg .= "Please enter a valid exp date.<br>";         
                    $success = false; 
                } else {
                    $expdate = encryptthis(sanitize_input($_POST["expdate"]), $key);    
                }
            }
            
            if (empty($_POST["ccvnumber"])) {
                $errorMsg .= "CCV number is required.<br>";     
                $success = false; 
            } else {
                $ccvnumber = sanitize_input($_POST["ccvnumber"]); 
                if (!preg_match("/^([0-9]{3})$/", $ccvnumber)) {
                    $errorMsg .= "Please enter a valid ccv number.<br>";         
                    $success = false; 
                } else {
                    $ccvnumber = encryptthis(sanitize_input($_POST["ccvnumber"]), $key);    
                }
            }
            
            if ($success) {     
                //header('Location: cart_information.php');
                savePaymentInfoToDB();
                saveCustomerInfoToDB();
                connectID();
                saveOrderToTable();
                echo "<h1>Your Order Has been Placed!</h1>";
                echo "<h2>Thank You For Your Support</h2>";    
                echo "<h4>A email will be send to you shortly</h4>"; 
                echo "<h4>Have A Nice Day</h4>"; 
                //header('Refresh:3; url=index.php');
            } else {    
                echo "<h1>Oops!</h1>";
                echo "<h4>The following input errors were detected:</h4>";     
                echo "<p>" . $errorMsg . "</p>"; 
                echo "<a id='btnRegister' href='register.php' class='btn btn-default'>Return to Sign Up</a>";
                header('Refresh:3; url=payment_information.php');
            } 
            
            //Helper function that checks input for malicious or unwanted content. 
            function sanitize_input($data) {   
                $data = trim($data);   
                $data = stripslashes($data);   
                $data = htmlspecialchars($data);   
                return $data; 
            }
            
            function encryptthis($data, $key) {
                $encryption_key = base64_decode($key);
                $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length('aes-256-cbc'));
                $encrypted = openssl_encrypt($data, 'aes-256-cbc', $encryption_key, 0, $iv);
                return base64_encode($encrypted . '::' . $iv);
            }
            
            //Save user information into database.
            function savePaymentInfoToDB() {  
                global $ccname, $ccnumber, $expdate, $ccvnumber, $errorMsg; 
                // Create connection     
                $conn = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);
                if ($conn->connect_error) {            
                    $errorMsg = "Connection failed: " . $conn->connect_error;         
                }
                else{ //prepared statement
                    $compile = $conn->prepare("INSERT INTO customer_payment_information (fullName, creditcardNumber, expiry, ccv) VALUES (?, ?, ?, ?)");            
                    $compile->bind_param("sdsi", $ccname, $ccnumber, $expdate, $ccvnumber);
                    $compile->execute();
                    $compile->close();
                    $conn->close();
                } 
            } 
            
            //Save user information into database.
            function saveCustomerInfoToDB() {  
                global $custname, $custemail, $custnumber, $streetadd, $blknumber, $unitnumber, $zipcode, $deldate, $deltime, $errorMsg; 
                // Create connection     
                $conn = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);
                // Check connection     
                if ($conn->connect_error) {            
                    $errorMsg = "Connection failed: " . $conn->connect_error;         
                }
                else{ //prepared statement
                    $compile = $conn->prepare("INSERT INTO customer_information (name, email, mobileNumber, streetName, blkNumber, unitNumber, zipcode, deliveryDate, deliveryTime) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
                    $compile->bind_param("ssisssiss", $custname, $custemail, $custnumber, $streetadd, $blknumber, $unitnumber, $zipcode, $deldate, $deltime);
                    $compile->execute();
                    $compile->close();
                    $conn->close();
                } 
            } 
            
            function connectID(){
                global $errorMsg;
                $conn = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);
                if ($conn->connect_error) {            
                    $errorMsg = "Connection failed: " . $conn->connect_error;         
                }
                else{ //prepared statement
                    $sql = "UPDATE customer_payment_information SET customer_id = (SELECT customer_id FROM customer_information ORDER BY customer_id DESC LIMIT 1) ORDER BY customer_id ASC LIMIT 1;";
                    if (mysqli_query($conn, $sql)) {
                        //echo "ID has been sucessfully updated";
                    } else {
                        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                    }
                    $conn->close();
                } 
            }
                
            //Save user order into database.
            function saveOrderToTable() {
                session_start();
                global $errorMsg;
                $connect = mysqli_connect('161.117.122.252', 'p2_5', 'rBs4CTxkDU', 'p2_5');
                $array = $_SESSION['shopping_cart'];
                if ($connect->connect_error) {
                    $errorMsg = "Connection failed: " . $connect->connect_error;  
                } else {
                    foreach ($array as $product) {
                        //prepared statement
                        $compile = $connect->prepare("INSERT INTO customer_order (productName, quantity, totalPrice, pax) VALUES (?, ?, ?, ?)");
                        $compile->bind_param("siii", $product['name'],$product['quantity'], $product['price'], $product['pax']);
                        $compile->execute();
                        $compile->close();
                        //normal mysql queries
                        //if ($errorMsg != 'Connection failed: ') {
                        //    echo $errorMsg; 
                        //    $connect->close();
                        //   return;
                        //}
                        //$sql = "INSERT INTO customer_order (productName, quantity, totalPrice, pax) VALUES ('{$product['name']}', '{$product['quantity']}', '{$product['price']}', '{$product['pax']}')";
                        //if ($connect->query($sql)) {
                        //    $product = [];
                        //    $errorMsg = "Connection failed: " . $connect->connect_error;
                        //    $success = false;
                        //}
                        //if ($errorMsg != 'Connection failed: ') {
                        //    echo $errorMsg; 
                        //    $connect->close();
                        //   return;
                        //}
                    }
                }
                session_destroy();
                $connect->close();
            }
            
        ?> 
        </article>
        
        <?php
            include "footer.inc.php";
        ?>
    </body>
</html>
