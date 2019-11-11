<html>
    <head>
        <title>TUMMY FOR YUM-YUM</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/header_footer.css">
        
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
                    // Constants for accessing our DB:
            define("DBHOST", "161.117.122.252"); 
            define("DBNAME", "p2_5"); 
            define("DBUSER", "p2_5"); 
            define("DBPASS", "rBs4CTxkDU");  
            $contactName = $email = $contactPhoneNumber = $errorMsg = "";
            $success = true; 

            if (empty($_POST["contactName"])) {
                $errorMsg .= "First name is required.<br>";     
                $success = false; 
            } else {
                $contactName = sanitize_input($_POST["contactName"]); 
                if (!preg_match("/^([a-zA-Z']+)$/", $contactName)) {
                    $errorMsg .= "Please enter a proper first name.<br>";     
                    $success = false; 
                }
            }
            
            if (empty($_POST["email"])) {     
                $errorMsg .= "Email is required.<br>";     
                $success = false; 
            } else {     
                $email = sanitize_input($_POST["email"]); // Additional check to make sure e-mail address is well-formed.     
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {         
                    $errorMsg .= "Invalid email format.<br>";         
                    $success = false;       
                }
            }
            
            if (empty($_POST["contactPhoneNumber"])) {
                $errorMsg .= "Contact number is required.<br>";     
                $success = false; 
            } else {
                $contactPhoneNumber = sanitize_input($_POST["contactPhoneNumber"]); 
                if (!preg_match("/^([0-9']{8})$/", $contactPhoneNumber)) {
                    $errorMsg .= "Please enter a valid number.<br>";     
                    $success = false; 
                }
            }

            if ($success) {     
                header('Refresh:3; url=index.php');
                saveMemberToDB();
                
            } else {    
                header('Refresh:3; url=about_contact.php');
            } 
            
            //Helper function that checks input for malicious or unwanted content. 
            function sanitize_input($data) {   
                $data = trim($data);   
                $data = stripslashes($data);   
                $data = htmlspecialchars($data);   
                return $data; 
            }
            
            function saveMemberToDB() {  
                global $contactName, $email, $contactPhoneNumber, $contactMessage, $errorMsg; 
                // Create connection     
                $conn = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);
                // Check connection     
                if ($conn->connect_error) {            
                    $errorMsg = "Connection failed: " . $conn->connect_error;         
                    $success = false;                         
                } else {         
                    $sql = "INSERT INTO customer_enquiries (name, email, mobileNumber, enquiryMessage)";         
                    $sql .= " VALUES ('$contactName', '$email', '$contactPhoneNumber', '$contactMessage')"; 
                    // Execute the query         
                    if (!$conn->query($sql)) {             
                        $errorMsg = "Database error: " . $conn->error;             
                        $success = false;                          
                    }     
                } 
                $conn->close(); } 
            ?> 
            
        </article>
        
        <?php
            include "footer.inc.php";
        ?>
    </body>
</html>

