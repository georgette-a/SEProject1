<?php
include('../login/login.php'); // Includes Login Script
if(isset($_SESSION['login_user'])){
header("location: view/profile.php"); // Redirecting To Profile Page
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Expense Tracker</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  
  <link rel="stylesheet" href="css/style1.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar" style="background-color: white;">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">
    <img src="logo.png" width="120" height="24" alt="">
  </a>
	</div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
		<li class="active"><a href="index.php">Home</a></li>
       
  </div>

<div class = "split left">
<div class="centered">
   <img class=""src="logo.png" width="300" height="95" alt="">
</div>
</div>

<div class ="split right">
  <div class= "centered">
    <!-- Default form login -->
<form class="text-center border border-light p-5" action="" method="POST">

    <h3 class="h3 mb-4">Sign in</h3>

    <!-- Email -->
    <input type="email" id="usrmail" name="usrmail" class="form-control mb-8" placeholder="E-mail">
<br>
    <!-- Password -->
    <input type="password" id="usrpass" name="usrpass" class="form-control mb-4" placeholder="Password">

    <div class="d-flex justify-content-around">
        <div>
            
        </div>
        
        <div>
            <!-- Forgot password -->
            <a href="">Forgot password?</a>
        </div>
    </div>

    <!-- Sign in button -->
    <button class="btn btn-info btn-block my-4" name="signin" type="submit">Sign in</button>


</form>
<hr>
<!-- Default form login -->

<h3>Dont have an account?</h3>

<!-- Default form register -->
<form class="text-center border border-light p-5" action="insert.php" method="POST">

    <p class="h4 mb-4">Sign up</p>

    <div class="form-row mb-6">
        <div class="col">
            <!-- First name -->
            <input type="text" id="fname" name="fname" class="form-control" placeholder="First name">
        </div>
        <br>
        <div class="col">
            <!-- Last name -->
            <input type="text" id="lname" name="lname"  class="form-control" placeholder="Last name">
        </div>
    </div>
    <br>
    <!-- E-mail -->
    <input type="email" id="email" name="email" class="form-control mb-4" placeholder="E-mail">
<br>
    <!-- Password -->
    <input type="password" id="password" name="password"class="form-control" placeholder="Password" aria-describedby="defaultRegisterFormPasswordHelpBlock">
    <br> <!-- Confirm Password -->
    <input type="password" id="cpassword" name="cpassword"class="form-control" placeholder="Confirm Password" aria-describedby="defaultRegisterFormPasswordHelpBlock">
    <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
        At least 8 characters and 1 digit
    </small>


    <!-- Sign up button -->
    <button class="btn btn-info my-4 btn-block" name="signup" type="submit">Sign Up</button>


</form>
<!-- Default form register -->
   
</div>
</div>
    
<footer class="container-fluid">
    <div class="collapse navbar-collapse" id="#myNavbar">
        <ul class="nav navbar-nav navbar-left">
             <li ><a >Contact Us</a></li>
             <li><a>+233 03 0000 000</a></li>
             <li><a>jjig@expensetracker.com</a></li>
        </ul>
    <div>
</footer>
</body>
</html>

