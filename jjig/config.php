<?php
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "jjigtracker";

// Create connection
$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

/* We first connect to our database */
$connection = mysqli_connect($host, $dbusername, $dbpassword, $dbname);

/* Capture connection error if any */
if (mysqli_connect_errno($connection)) {
        echo "Failed to connect to DataBase: " . mysqli_connect_error();
    }
else {

  /* Declare an array containing our data points */
   $data_points = array();

  /* Usual SQL Queries */
     $query = "SELECT `Amount` FROM `expense`";

     $result = mysqli_query($connection, $query);

     while($row = mysqli_fetch_array($result))
        {        
      /* Push the results in our array */
            $point = array("Amnt" =>  $row['Amount']);

            array_push($data_points, $point);
        }
    /* Encode this array in JSON form */
            $finalPoint = json_encode($data_points, JSON_NUMERIC_CHECK);
        }

    mysqli_close($connection);
?>t