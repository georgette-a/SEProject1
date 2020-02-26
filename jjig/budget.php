<?php

include('session.php');
if(!isset($_SESSION['login_user'])){
header("location: index.php"); // Redirecting To Home Page
}


if (isset($_POST['b_budget'])) 
{
    $budget = $_POST['budget'];
    global $budget;
    header("location: profile.php");

}


?>
