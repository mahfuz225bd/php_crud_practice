<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Student List App</title>

	<link rel="stylesheet" href="default.css" />
</head>

<body>
	<h1>Student List App</h1>
	<h3>For Educational Tour</h3>
	<main>
		<form method="POST" action="./insert.php">
			<label for="name">Student Name</label>
			<input type="text" id="name" name="name" />

			<label for="roll">Student ID</label>
			<input type="text" id="roll" name="roll" />

			<label for="amount">Amount</label>
			<input type="text" id="amount" name="amount" value="700" />

			<button class="btn" type="submit" class="btn">Add</button>
		</form>
		<!-- HTML Form: https://www.w3schools.com/tags/tag_form.asp -->

		<table>
			<thead>
				<tr>
					<th>#</th>
					<th>Student Name</th>
					<th>Roll</th>
					<th>Amount</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<?php
				include './connectDB.php';

				$result = $conn->query("SELECT * FROM students");

				if ($result->num_rows > 0) {
					// *** Bellow code (commented) should be deleted ***
					// $text = json_encode($result);
					// echo "<script>console.log(" . $text . ");</script>";

					while ($row = $result->fetch_assoc()) {
						// *** Bellow code (commented) should be deleted ***
						$text = json_encode($row);
						echo "<script>console.log(" . $text . ");</script>";

						echo '<tr>
						<td>' . $row['id'] . '</td>
						<td>' . $row['name'] . '</td>
						<td>' . $row['roll'] . '</td>
						<td>' . $row['amount'] . '</td>
						<td>
							<a class="btn btn-green" href="">Edit</a>
							<a class="btn btn-red" href="delete.php?id=' . $row['id'] . '">Delete</a>
						</td>
					</tr>';
					}
				}

				// *** Bellow code (commented) should be deleted *** 
				// if ($x = 0) {
				// 	echo "<script>console.log('YES');</script>";
				// } else {
				// 	echo "<script>console.log('NO');</script>";
				// }

				// *** Bellow code (commented) should be deleted *** 
				// while ($x = 1) {
				// 	echo "<script>console.log('YES');</script>";
				// }
				?>
			</tbody>
		</table>
		<!-- HTML Table: https://www.w3schools.com/tags/tag_table.asp -->
	</main>
</body>

</html>