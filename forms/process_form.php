<?php
// Include your database connection file

$servername = "localhost";
$username = "root";
$password = "";
$db = "cateringdata";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $contact_person = $_POST['contact_person'];
    $email = $_POST['email'];
    $location = $_POST['location'];
    $address = $_POST['address'];
    $company_name = $_POST['company_name'];
    $promo_code = $_POST['promo_code'];
    $occasion = $_POST['occasion'];
    $budget = $_POST['budget'];
    $contact_no = $_POST['contact_no'];
    $event_date = $_POST['event_date'];
    $event_time = $_POST['event_time'];
    $num_pax = $_POST['num_pax'];
    $special_req = $_POST['special_req'];
    $subscribe = $_POST['subscribe'];

    // Perform validation and sanitize input if necessary

    // Perform database insertion
    $sql = "INSERT INTO order_table (contact_person, email, location, address, company_name, promo_code, occasion, budget, contact_no, event_date, event_time, num_pax, special_req, subscribe) VALUES ('$contact_person', '$email', '$location', '$address', '$company_name', '$promo_code', '$occasion', '$budget', '$contact_no', '$event_date', '$event_time', '$num_pax', '$special_req', '$subscribe')";

    // Insert data into the database
    $result = mysqli_query($conn, $sql);

if ($result) {
    echo "Form submitted successfully";
} else {
    echo "Form submission failed: " . mysqli_error($conn);
}
}

?>
