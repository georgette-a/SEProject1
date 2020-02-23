<?php
require("../settings/config.php");

session_start();// Starting Session


if(isset($_SESSION['login_id'])){
  if (isset($_SESSION['pageStore'])) {
      $pageStore = $_SESSION['pageStore'];
header("location: profile.php"); // Redirecting To Profile Page
    }
}

//Register progess start, if user press the signup button
if (isset($_POST['signup'])) {
if (empty($_POST['fname']) || empty($_POST['lname']) || empty($_POST['email'])  || empty($_POST['password']) || empty($_POST['cpassword'])) {
echo "Please fill up all the required field.";
}
else
{

$first = $_POST['fname'];
$last = $_POST['lname'];
$mail= $_POST['email'];
$pass = $_POST['password'];
$cpass = $_POST['cpassword'];


if ($pass = $cpass) {
    $sQuery = "SELECT email from User where email='$mail' LIMIT 1";
$sql = "INSERT INTO User (fname, lname, email, password)
VALUES (?, ?, ?, ?)";


$sql = "INSERT INTO User (fname, lname, email, password)
VALUES ('$first', '$last', '$mail', '$pass')";

if (mysqli_query($conn, $sql)) {
    header("location:profile.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    mysqli_close($conn);}
}
else{ echo "Passwords do not match";}
}}
?>

