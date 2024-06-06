<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "cateringdata";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);

// $conn = mysqli_connect("localhost", "root", "", "sitename");

// do checking if the connection fails
if (!$conn) {
  // die("Failed to connect to database ".mysqli_connect.error());
    echo "Failed to connect to database!";
} 
    // else {
//   echo "Successfully connected to database!<br/><br/><br/>";
// }



?>
