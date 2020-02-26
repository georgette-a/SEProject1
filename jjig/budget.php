<?php
include('session.php');
include('config.php');
if(!isset($_SESSION['login_user'])){
header("location: index.php"); // Redirecting To Home Page
}


if (isset($_POST['b_budget'])) 
{
    $budget = $_POST['budget'];
     $user = $_SESSION['login_user'] ;

    $sql = "UPDATE budget SET amount = '$budget', balance = '$budget' WHERE email= '$user'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("location: profile.php");
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
   
    }



?>
