<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Student List App</title>

	<link rel="stylesheet" href="./default.css" />
</head>

<body>
	<h1>Student List App</h1>
	<h3>For Educational Tour</h3>
	<main>
		<form method="POST" action="./insert.php">
			<label for="name">Student Name</label>
			<input type="text" id="name" name="name" required />

			<label for="roll">Student ID</label>
			<input type="text" id="roll" name="roll" required />

			<label for="amount">Amount</label>
			<input type="text" id="amount" name="amount" required value="700" />

			<button class="btn" type="submit">Add</button>
		</form>
		<!-- HTML Form: https://www.w3schools.com/tags/tag_form.asp -->


		<?php
		require_once './connectDB.php';

		$table_start =  '<table>
			<thead>
				<tr>
					<th>#</th>
					<th>Student Name</th>
					<th>Roll</th>
					<th>Amount</th>
					<th></th>
				</tr>
			</thead>
			<tbody>';

		$table_end = '</tbody>
			</table>
			<!-- HTML Table: https://www.w3schools.com/tags/tag_table.asp -->
		';

		$result = $conn->query("SELECT * FROM students");

		if ($result->num_rows > 0) {
			// *** Bellow code (commented) should be removed ***
			// $text = json_encode($result);
			// echo "<script>console.log(" . $text . ");</script>";

			echo $table_start;

			while ($row = $result->fetch_assoc()) {
				// *** Bellow code (commented) should be removed ***
				// $text = json_encode($row);
				// echo "<script>console.log(" . $text . ");</script>";

				echo '<tr>
					<td>' . $row['id'] . '</td>
					<td>' . $row['name'] . '</td>
					<td>' . $row['roll'] . '</td>
					<td>' . $row['amount'] . '</td>
					<td>
						<a class="btn btn-green" href="edit.php?id=' . $row['id'] . '">Edit</a>
						<a class="btn btn-red" href="delete.php?id=' . $row['id'] . '">Delete</a>
					</td>
				</tr>';
			}
			echo $table_end;
		} else {
			echo '<p style="text-align:center; font-weight:bold;">There is no data found to show.</p>';
		}

		// *** Bellow code (commented) should be removed *** 
		// if ($x = 0) {
		// 	echo "<script>console.log('YES');</script>";
		// } else {
		// 	echo "<script>console.log('NO');</script>";
		// }

		// *** Bellow code (commented) should be removed *** 
		// while ($x = 1) {
		// 	echo "<script>console.log('YES');</script>";
		// }
		?>

	</main>
</body>

</html>