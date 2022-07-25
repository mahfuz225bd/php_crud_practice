<?php
require_once './connectDB.php';

// Getting values of name, roll amount from the HTML form
$name = $_POST['name'];
$roll = $_POST['roll'];
$amount = $_POST['amount'];

// $sql = SQL code for executing
$sql = "INSERT INTO students (name, roll, amount) VALUES ('" . $name . "', " . $roll . ", " . $amount . ")";

// Execute SQL query and if successful, $query=TRUE or $query=FALSE
$query = $conn->query($sql);

if ($query == TRUE) {
  // *** Bellow code (commented) should be removed *** 
  // Show executable sql code
  // echo $sql;

  // Go to homepage
  header('Location: index.php');
  exit();
} else {
  echo "Error inserting record: " . $conn->error;
}

$conn->close();
