<?php
session_start();
require_once('db_connection.php');
?>

<html>
<head>
    <title> Retrieve Users </title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>


<?php
// display message from $_SESSION
if (isset($_SESSION['msg_create'])) {
    ?>
    <div class="alert alert-success">
    <strong>Success!</strong>
    <?php
    echo $_SESSION['msg_create'];
    unset($_SESSION['msg_create']); 
}

if (isset($_SESSION['msg_update'])) {
    ?>
    <div class="alert alert-success">
    <strong>Success!</strong>
    <?php
    echo $_SESSION['msg_update'];
    unset($_SESSION['msg_update']);
}

if (isset($_SESSION['msg_delete'])) {
    ?>
    <div class="alert alert-success">
    <strong>Success!</strong>
    <?php
    echo $_SESSION['msg_delete'];
    unset($_SESSION['msg_delete']);
}
?>
</div>

<body>

  <div class="container">
    <h2>Show order</h2>
    <p>  </p>

    <a class="btn btn-primary" href="index.php">Return to home page </a><br><br>

    <table class="table">
        <thead>
            <tr>
                <th> Contact Person </th>
                <th> Email</th>
                <th> Location </th>
                <th> Address </th>
                <th> Company Name </th>
                <th> Promo Code </th>
                <th> Ocassion</th>
                <th> Budget </th>
                <th> Contact No </th>
                <th> Event Date </th>
                <th> Event Time </th>
                <th> Num Pax </th>
                <th> Special Request </th>
                <th> Subscribe </th>
        </thead>



        <tbody>

            <?php
                // create an sql statement (query) to retrieve all data from table users
                $sql = "select * FROM order_table";

                // run the sql statement/query
                $result = mysqli_query($conn, $sql);

                // check if the result has data or not
                if (mysqli_num_rows($result) > 0) {
                    // while loop will retrieve data from all rows in users table
                    // save all the data in an array -> $row['column_name']
                    // mysqli_fetch_assoc -> associative arrray
                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>

                     <!-- we are now in html. list all of the data
                     1 row 5 columns -->
                    <tr>
                        <td><?php echo $row['contact_person']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['location']; ?></td>
                        <td><?php echo $row['address']; ?></td>
                        <td><?php echo $row['company_name']; ?></td>
                        <td><?php echo $row['promo_code']; ?></td>
                        <td><?php echo $row['occasion']; ?></td>
                        <td><?php echo $row['budget']; ?></td>
                        <td><?php echo $row['contact_no']; ?></td>
                        <td><?php echo $row['event_date']; ?></td>
                        <td><?php echo $row['event_time']; ?></td>
                        <td><?php echo $row['num_pax']; ?></td>
                        <td><?php echo $row['special_req']; ?></td>
                        <td><?php echo $row['subscribe']; ?></td>

                        
                    </tr>

                    <?php
                    }
                }

            ?>

        </tbody>

    </table>


</div>
</body>
</html>





