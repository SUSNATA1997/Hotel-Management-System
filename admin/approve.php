<?php
include('db_connect.php'); // Include the database connection file

// Check if the 'id' parameter exists in the URL
if (isset($_GET['id'])) {
  // Get the customer ID from the URL parameter
  $customer_id = $_GET['id'];

  // Update the 'approved' column to 1 for the specified customer ID
  $sql = "UPDATE roombook SET approved = 1 WHERE c_id = '$customer_id'";
  $query = mysqli_query($con, $sql);

  if ($query) {
    // Approval successful
    //echo "Customer details approved.";
  } else {
    // Approval failed
    /*echo "Error approving customer details.";*/
  }
} else {
  // 'id' parameter is missing in the URL
  /*echo "Invalid request. Customer ID not provided.";*/
}

include('display.php');
?>
