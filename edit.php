<?php
require_once './connectDB.php';

// $sql = SQL code for executing
$sql = "SELECT * FROM students WHERE id=" . $_GET['id'] . " LIMIT 1";

// Execute SQL query and if successful, $query=TRUE or $query=FALSE
$result = $conn->query($sql);

// Get data \w $row
$row = $result->fetch_assoc();

// Show error message
if ($result === FALSE) {
  echo $conn->error;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student List App | Edit</title>
  <link rel="stylesheet" href="./default.css">
</head>

<body>
  <h1>Student List App</h1>
  <h3>Edit Form for #<?= $row['id'] ?></h3>
  <main>
    <form method="POST">
      <label for="name">Student Name</label>
      <br>
      <input type="text" id="name" name="name" required value="<?= $row['name'] ?>" />

      <br>
      <br>

      <label for="roll">Student ID</label>
      <br>
      <input type="text" id="roll" name="roll" required value="<?= $row['roll'] ?>" />

      <br>
      <br>

      <label for="amount">Amount</label>
      <br>
      <input type="text" id="amount" name="amount" required value="<?= $row['amount'] ?>" />

      <br>
      <br>

      <div style="text-align:center;">
        <button class="btn btn-blue" type="submit" name="submit">Update</button>
        <a class="btn btn-red" href="./index.php">Cancel</a>
      </div>
    </form>
  </main>
</body>

</html>

<?php
if (isset($_POST['submit'])) {
  // $sql = SQL code for executing
  $sql = "UPDATE students
  SET
    name='" . $_POST['name'] . "',
    roll='" . $_POST['roll'] . "',
    amount='" . $_POST['amount'] . "'
  WHERE id=" . $row['id'] . "";

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
    echo "Error editing record: " . $conn->error;
  }
}
?>
