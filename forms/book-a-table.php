<?php

  // include ('db_connection.php');

$servername = "localhost";
$username = "root";
$password = "";
$db = "cateringdata";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);

// Check connection
if(isset($_POST['submit'])){

  if(!empty($_POST['order_id']) && !empty($_POST['email']) && !empty($_POST['occasion']) && !empty($_POST['event_date']) && !empty($_POST['event_time']) && !empty($_POST['budget']) && !empty($_POST['num_pax']) && !empty($_POST['location']) && !empty($_POST['contact_person']) && !empty($_POST['contact_no']) && !empty($_POST['company_name']) && !empty($_POST['special_req']) && !empty($_POST['promo code']) && !empty($_POST['subscribe']) && !empty($_POST['address'])){

    $id = $_POST['order_id'];
    $email = $_POST['email'];
    $occasion = $_POST['occasion'];
    $event_date = $_POST['event_date'];
    $event_time = $_POST['event_time'];
    $budget = $_POST['budget'];
    $num_pax = $_POST['num_pax'];
    $location = $_POST['location'];
    $contact_person = $_POST['contact_person'];
    $contact_no = $_POST['contact_no'];
    $company_name = $_POST['company_name'];
    $special_req = $_POST['special_req'];
    $promo_code = $_POST['promo_code'];
    $subscribe = $_POST['subscribe'];
    $address = $_POST['address'];

    $query = "insert into order(order_id,email,address,occasion,event_date,event_time,budget,num_pax,location,contact_person,contact_no,company_name,special_req,promo_code,subscribe) values ('$order_id','$email','$address','$occasion','$event_date','$event_time','$budget','$num_pax','$location','$contact_person','$contact_no','$company_name','$special_req','$promo_code','$subscribe')";

    $run = mysqli_query($conn, $query) or die (mysqli_error());

    if($run){
      echo "Form submitted successfully";
    } else {
      echo "Form not submitted";
    }
  } else {
    echo "all fields required";
  }
}
?>