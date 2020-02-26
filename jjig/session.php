
<?php
require("config.php");
session_start();// Starting Session
// Storing Session
$user_check = $_SESSION['login_user'];
// SQL Query To Fetch User First Name
$query = "SELECT fname from User where email = '$user_check'";
$ses_sql = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($ses_sql);
$login_session = $row['fname'];

// SQL Query To Fetch User Email
$query2 = "SELECT email from User where email = '$user_check'";
$ses_sql2 = mysqli_query($conn, $query2);
$row2 = mysqli_fetch_assoc($ses_sql2);
$usr_mail = $row2['email'];

/// SQL Query To Fetch User Budget 
$query3 = "SELECT amount from budget where email = '$user_check'";
$ses_sql3 = mysqli_query($conn, $query3); 
$row3 = mysqli_fetch_assoc($ses_sql3); 
$balance = $row3['amount'];

/// SQL Query To Fetch User Balance 
$query4 = "SELECT balance from budget where email = '$user_check'";
$ses_sql4 = mysqli_query($conn, $query4); 
$row4 = mysqli_fetch_assoc($ses_sql4); 
$budd = $row4['balance'];
?>