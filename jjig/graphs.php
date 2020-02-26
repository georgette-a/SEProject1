<?php
include('session.php');
if(!isset($_SESSION['login_user'])){
header("location:index.php"); // Redirecting To Home Page
}
?>



<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<link rel="stylesheet" href="css/style1.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script>

window.onload = function () { 

        $.getJSON("config.php", function(result){
            
            var dataPoints= [];

            //Insert Array Assignment function here
            for(var i = 0; i < result.length; i++) {
                
                dataPoints.push({"x" : i , "y" : result[i].Amnt});
            }

            var chart = new CanvasJS.Chart("chartContainer", {
            
            animationEnabled: true,

            theme: "light2",

            title:{
                text: "<?php echo $login_session , "'s" , " Expenditure";?>"
            },

            axisX:{
                title: "Expense Count"
            },
            axisY:{
                title: "Expenses",
                includeZero: false
                
            },
            data: [{        
                type: "line",

                dataPoints: dataPoints
                
                }]
            });

            chart.render();

        });
}
</script>

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
		<li class="active"><a href="profile.php">Home</a></li>
        <li><a href="logout.php">Log Out</a></li>
       
  </div>
</nav>

<div id="chartContainer" style="height: 400px; width: 100%;"></div>


<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>



</body>
</html>