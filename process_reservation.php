<html>
    <head>
        <title>TUMMY FOR YUM-YUM</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <script src="js/bootstrap.min.js"></script>   
    </head>

    <body>      
        <article class="formvalidateOutput">
            <?php
            // Constants for accessing our DB:
            define("DBHOST", "161.117.122.252"); 
            define("DBNAME", "p2_5"); 
            define("DBUSER", "p2_5"); 
            define("DBPASS", "rBs4CTxkDU");  
            $res_First_Name = $res_Last_Name = $resEmail = $res_ContactNumber = $resDate = $resTime= $resPax = $resComment = $errorMsg = "";
            $success = true; 

            if (empty($_POST["res_First_Name"])) {
                $errorMsg .= "First name is required.<br>";     
                $success = false; 
            } else {
                $res_First_Name = sanitize_input($_POST["res_First_Name"]); 
                if (!preg_match("/^([a-zA-Z' ]+)$/", $res_First_Name)) {
                    $errorMsg .= "Please enter a proper first name.<br>";     
                    $success = false; 
                } else {
                    $res_First_Name = sanitize_input($_POST["res_First_Name"]);    
                }
            }
            
            if (empty($_POST["res_Last_Name"])) {
                $errorMsg .= "Last name is required.<br>";     
                $success = false; 
            } else {
                $res_Last_Name = sanitize_input($_POST["res_Last_Name"]); 
                if (!preg_match("/^([a-zA-Z' ]+)$/", $res_Last_Name)) {
                    $errorMsg .= "Please enter a proper last name.<br>";         
                    $success = false; 
                } else {
                    $res_Last_Name = sanitize_input($_POST["res_Last_Name"]);    
                }
            }
            
            if (empty($_POST["resEmail"])) {     
                $errorMsg .= "Email is required.<br>";     
                $success = false; 
            } else {     
                $resEmail = sanitize_input($_POST["resEmail"]); // Additional check to make sure e-mail address is well-formed.     
                if (!filter_var($resEmail, FILTER_VALIDATE_EMAIL)) {         
                    $errorMsg .= "Invalid email format.<br>";         
                    $success = false;       
                }
            } 
            
            if (empty($_POST["res_ContactNumber"])) {
                $errorMsg .= "Contact Number is required.<br>";     
                $success = false; 
            } else {
                $res_ContactNumber = sanitize_input($_POST["res_ContactNumber"]); 
                if (!preg_match("/^[0-9]{8}$/", $res_ContactNumber)) {
                    $errorMsg .= "Please enter a valid contact number.<br>";         
                    $success = false; 
                } else {
                    $res_ContactNumber = sanitize_input($_POST["res_ContactNumber"]);    
                }
            }
            
            if (empty($_POST["resDate"])) {
                $errorMsg .= "Date is required.<br>";     
                $success = false; 
            } else {
                $resDate = sanitize_input($_POST["resDate"]); 
            }
            
            if ($_POST["resTime"] == 0) {
                $errorMsg .= "Please select a time.<br>";     
                $success = false; 
            } else {
                $resTime = $_POST["resTime"]; 
            }
            
            if (empty($_POST["resPax"])) {
                $errorMsg .= "Number of pax is required.<br>";     
                $success = false; 
            } else {
                $resPax = sanitize_input($_POST["resPax"]); 
                if (!preg_match("/^[1-9]\d*$/", $resPax)) {
                    $errorMsg .= "Please enter a valid number.<br>";     
                    $success = false; 
                }
            }
            
            if (empty($_POST["resComment"])) {
                $errorMsg .= "Number of pax is required.<br>";     
                $success = false; 
            } else {
                $resComment = sanitize_input($_POST["resComment"]); 
            }
              
            
            if ($success) {     
                echo "<h2>Registration successful!</h2>";  
                echo "<p> Thank you for signing up, " .$first_name . " " .$last_name . "!" . "</p>";
                echo "<a id='btnLogin' href='login.php' class='btn btn-default'>Login</a>";
                echo "<section id='divider'></section>";
                echo "<a id='btnHome' href='index.php' class='btn btn-default'>Return to Home</a>";
                saveMemberToDB();
            } else {    
                echo "<h1>Oops!</h1>";
                echo "<h4>The following input errors were detected:</h4>";     
                echo "<p>" . $errorMsg . "</p>"; 
                echo "<a id='btnRegister' href='register.php' class='btn btn-default'>Return to Sign Up</a>";
            } 
            
            //Helper function that checks input for malicious or unwanted content. 
            function sanitize_input($data) {   
                $data = trim($data);   
                $data = stripslashes($data);   
                $data = htmlspecialchars($data);   
                return $data; 
            }
            
            //Save user input into database.
            function saveMemberToDB() {  
                global $res_First_Name, $res_Last_Name, $resEmail, $res_ContactNumber, $resDate, $resTime, $resPax, $resComment, $errorMsg; 
                // Create connection     
                $conn = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);
                // Check connection     
                if ($conn->connect_error) {            
                    $errorMsg = "Connection failed: " . $conn->connect_error;         
                    $success = false;                         
                } else {         
                    $sql = "INSERT INTO customer_reservation (fname, lname, email, mobileNumber, reservationDate, reservationTime, reservationPax, reservationRequest)";         
                    $sql .= " VALUES ('$res_First_Name', '$res_Last_Name', '$resEmail', '$res_ContactNumber', '$resDate', '$resTime', '$resPax', '$resComment')"; 
                    // Execute the query         
                    if (!$conn->query($sql)) {             
                        $errorMsg = "Database error: " . $conn->error;             
                        $success = false;                          
                    }     
                } 
                $conn->close(); } 
            ?> 
            
        </article>
    </body>
</html>

