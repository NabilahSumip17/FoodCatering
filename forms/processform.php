<?php
session_start();

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

// Initialize the variables
if (isset($_POST['submit'])) {
    // Retrieve form data
    $event_id = mysqli_real_escape_string($conn, $_POST["order_id"]);
    $occassion = mysqli_real_escape_string($conn, $_POST["occassion"]);
    $event_date = mysqli_real_escape_string($conn, $_POST["event_date"]);
    $event_time = mysqli_real_escape_string($conn, $_POST["event_time"]);
    $budget = mysqli_real_escape_string($conn, $_POST["budget"]);
    $num_pax = mysqli_real_escape_string($conn, $_POST["num_pax"]);
    $address = mysqli_real_escape_string($conn, $_POST["address"]);
    $location = mysqli_real_escape_string($conn, $_POST["location"]);
    $contact_person = mysqli_real_escape_string($conn, $_POST["contact_person"]);
    $contact_no = mysqli_real_escape_string($conn, $_POST["contact_no"]);
    $company_name = mysqli_real_escape_string($conn, $_POST["company_name"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $special_req = mysqli_real_escape_string($conn, $_POST["special_req"]);
    $promo_code = mysqli_real_escape_string($conn, $_POST["promo_code"]);
    $subscribe= mysqli_real_escape_string($conn, $_POST["subscribe"]);
 
// Assuming $event_id, $occassion, and other variables are defined elsewhere in your code

// SQL query with prepared statement
$query = "INSERT INTO order_table (order_id, occassion, event_date, event_time, budget, num_pax, address, location, contact_person, contact_no, company_name, email, special_req, promo_code, subscribe) 
          VALUES ('$order_id', '$occassion', '$event_date', '$event_time', '$budget', '$num_pax', '$address', '$location', '$contact_person', '$contact_no', '$company_name', '$email', '$special_req', '$promo_code', '$subscribe')";

// Execute/run the SQL statement
if (mysqli_query($conn, $query)) {
    // Display a success pop-up
    echo "<script>alert('New user has been successfully registered');</script>";
} else {
    // Display an error message
    echo "Failed to save data " . mysqli_error($conn);
}


// Close the database connection
mysqli_close($conn);
}

?>
