<?php
require("config.php");
session_start(); // Starting Session
$error = ''; // Variable To Store Error Message
if (isset($_POST['signin'])) 
{

    if (empty($_POST['usrmail']) || empty($_POST['usrpass'])) 
    {
        $error = "Email or Password is invalid";
    }
    else
    {
        // Define $username and $password
        $email = $_POST['usrmail'];
        $password = $_POST['usrpass'];
        global $email;
        // SQL query to fetch information of registerd users and finds user match.
        
        $query = "SELECT email, password from User where email=? AND password=? LIMIT 1";
        
        // To protect MySQL injection for Security purpose

        $stmt = $conn->prepare($query);
        $stmt->bind_param("ss", $email, $password);
        $stmt->execute();
        $stmt->bind_result($email, $password);
        $stmt->store_result();
        if($stmt->fetch()) //fetching the contents of the row 
        {
            $_SESSION['login_user'] = $email; // Initializing Session
            header("location: profile.php"); // Redirecting To Profile Page
        }
        else
        {
            echo "failed";
        }
        mysqli_close($conn); // Closing Connection
    }
}
?>