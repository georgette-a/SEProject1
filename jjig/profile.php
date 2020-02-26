<?php
include('session.php');
if(!isset($_SESSION['login_user'])){
header("location:index.php"); // Redirecting To Home Page
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
		<li class="active"><a href="profile.php">Home</a></li>
        <li><a href="logout.php">Log Out</a></li>
       
  </div>
</nav>


<div class = "split left">
<div class="centered">
  <h1 id="welcome">Welcome <?php echo $login_session; ?></h1>
  <h4 class="text-muted"><i>What would you like to do?</i></h4><br>
  <button type="button" class="btn_1 my-4 btn-block" id="myBtn">Set Monthly Budget</button>
  <br>
  <button type="button" class="btn_1 my-4 btn-block" id="myBtn1">Log Expense</button>
  <br>
  
  <form class="text-center border border-light p-5" method="POST" action="expense.php">
   <button type="submit" name="reset" class="btn_1 my-4 btn-block" id="rstBtn1">RESET</button>
  </form>
  
  <br>
  <a href="graphs.php"><button type="button" class="btn_1 my-4 btn-block" id="rstBtn1">View Graph</button></a>

<!-- Modal -->

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <form class="text-center border border-light p-5" action="budget.php" method="POST">

    <h4 class="h3 mb-4">GHS</h4><br>

    <!-- Budget -->
    <input type="number" id="budget" name="budget" class="form-control mb-8" placeholder="Budget">
<br>
  

    <!--  button -->
    <button class="btn btn-info btn-block my-4" name="b_budget" id="b_budget" type="submit">Submit</button>


</form>
  </div>

</div>

<!-- Modal -->

<!-- The Modal -->
<div id="myModal2" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <form class="text-center border border-light p-5" action="expense.php" method="POST">

    <h4 class="h3 mb-4">Log Expenditure</h4><br>
    <!-- Item -->
    <input type="text" id="item" name="item" class="form-control mb-8" placeholder="Item">
<br>
    <!-- Cost -->
    <input type="number" step="0.01" min="0" id="budget" name="cost" class="form-control mb-8" placeholder="Cost of item">
<br>

  

    <!--  button -->
    <button class="btn btn-info btn-block my-4" name="expense" id="expense" type="submit">Submit</button>


</form>
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById("myModal");
var modal2 = document.getElementById("myModal2");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");
var btn2 = document.getElementById("myBtn1");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}
btn2.onclick = function() {
  modal2.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}
span.onclick = function() {
  modal2.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
window.onclick = function(event) {
  if (event.target == modal2) {
    modal2.style.display = "none";
  }
}
</script>

  </div>
</div>
</div>
</div>

<div class ="split right">
  <div class= "centered">
  <div> 
    <?php ?>  
  </div>
    <table>
      <tr>
        <th>Item</th>
        <th>Cost</th>
      </tr>
      <?php
      require("config.php");
    
      $sql = "SELECT Amount,item FROM expense where email = '$usr_mail'";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
        // output data of each row
    
        while($row = $result->fetch_assoc()) {
          echo "</td><td>" . $row["item"] . "</td><td>". $row["Amount"] . "</td></tr>";
        }
        echo "</table>";
      } 
      else 
      { 
        echo "No History"; 
      }
      $conn->close();
      ?>
      </table>
      <h5>Total Is: <?php echo $sum; ?></h1>
   
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