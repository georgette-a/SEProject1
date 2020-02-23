<?php
include('../session.php');
require('budget.php');
require('../settings/config.php');
include('../login.php');

if(!isset($_SESSION['login_user'])){
header("location: index.php"); // Redirecting To Home Page
}

if (isset($_POST['expense'])) 
{
    if (empty($_POST['item']) || empty($_POST['cost'])){
echo "Please fill up all the required field.";
}
else
{

$item = $_POST['item'];
$cost = $_POST['cost'];
$mail = $usr_mail;


$sql = "INSERT INTO expense (ExpID, Amount, email, Item)
VALUES (?, ?, ?, ?)";


$sql = "INSERT INTO expense ( Amount,  email, Item)
VALUES ( '$cost', '$mail', '$item')";

if (mysqli_query($conn, $sql)) {
    header("location:profile.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    mysqli_close($conn);}
}
}
else{
    echo "failed";
}






?>