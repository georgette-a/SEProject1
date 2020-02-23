
<?php
require("config.php");
session_start();// Starting Session
// Storing Session
$user_check = $_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$query = "SELECT fname from User where email = '$user_check'";
$ses_sql = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($ses_sql);
$login_session = $row['fname'];

$query2 = "SELECT email from User where email = '$user_check'";
$ses_sql2 = mysqli_query($conn, $query2);
$row2 = mysqli_fetch_assoc($ses_sql2);
$usr_mail = $row2['email'];

//$query3 = "SELECT SUM (Amount) FROM expense WHERE email = $user_check'";
$result = mysql_query('SELECT SUM (Amount) 
FROM expense 
WHERE email = $user_check'); 
$row = mysql_fetch_assoc($result); 
$sum = $row['value_sum'];
?>