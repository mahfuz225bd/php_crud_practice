<?php
include './connectDB.php';

// Get id
$id = $_GET['id'];

// $sql = SQL code for executing
$sql = "DELETE FROM students WHERE id=" . $id . "";

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
  echo "Error deleting record: " . $conn->error;
}

// Close database after all work done
$conn->close();
