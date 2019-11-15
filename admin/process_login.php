<?php

// Constants for accessing our DB:
define("DBHOST", "161.117.122.252");
define("DBNAME", "p2_5");
define("DBUSER", "p2_5");
define("DBPASS", "rBs4CTxkDU");
$email = $password = $fname = $encryptpassword = $errorMsg = "";
$success = true;


// Email
if (empty($_POST["email"])) {
    $errorMsg .= "Email is required.<br>";
    $success = false;
} else {
    $email = sanitize_input($_POST["email"]);
    // Additional check to make sure e-mail address is well-formed.
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errorMsg .= "Invalid email format.";
        $success = false;
    }
}

// Password 
if (empty($_POST["password"])) {
    $errorMsg .= "Password is required.";
    $success = false;
} 
else {
    $password = $_POST["password"];
}

//Helper function that checks input for malicious or unwanted content.
function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
// **(remaining code from process_login.php was removed from here)**
// Create connection
$conn = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);

// Check connection
if ($conn->connect_error)
{
    $errorMsg = "Connection failed: " . $conn->connect_error;
    $success = false;
}
else
{
    $sql = "SELECT * FROM admin_table WHERE ";
    $sql .= "email='$email'"; //AND password='$password'
    // Execute the query
    $result = $conn->query($sql);
    $conn->close();
    if ($result->num_rows > 0)
    {
        $row = $result->fetch_assoc();
        (isset($result)) ? $result->free_result() : "";
        $encryptpassword = $row["password"];
        unset($row);
        if(password_verify($password, $encryptpassword))
        {
            header('Location: admin_dashboard.php');
        }   
        else
        {
            header('refresh: 0; url=../index.php');
            echo "<script>alert('Login failed. Email and Password does not match.')</script>";  
        }
    }
    else
    {
        header('refresh: 0; url=../index.php');
        echo "<script>alert('Account does not exist. You will be redirected.')</script>";  
    }
}
?>
