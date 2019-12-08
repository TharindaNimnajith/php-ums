<?php

	require_once ('inc/connection.php');

?>

<br />
<br />

<?php

	$query = "SELECT id, firstName, lastName, email 
			  FROM user";

	$result_set = mysqli_query($connection, $query);

	if ($result_set)
	{

		// Checking how many records returned from the query

		echo mysqli_num_rows($result_set) . " records found.";

		echo "<br>";

		echo "Query is successful. <hr>";

		/*

		$record = mysqli_fetch_assoc($result_set);
		echo "<pre>";
		print_r($record);
		echo "</pre>";

		*/

		// To display multiple records

		/*

		$record = mysqli_fetch_assoc($result_set);
		echo "<pre>";
		print_r($record);
		echo "</pre>";

		$record = mysqli_fetch_assoc($result_set);
		echo "<pre>";
		print_r($record);
		echo "</pre>";

		*/

		$table = '<table>';
		$table .= '<tr><th>ID</th><th>First Name</th><th>
				  Last Name</th><th>Email</th></tr>';

		/*		  

		while ($record = mysqli_fetch_assoc($result_set))
		{
			echo $record['firstName'] . "<br>";
		}

		*/

		while ($record = mysqli_fetch_assoc($result_set))
		{

			$table .= '<tr>';

			$table .= '<td>' . $record['id'] . '</td>';
			$table .= '<td>' . $record['firstName'] . '</td>';
			$table .= '<td>' . $record['lastName'] . '</td>';
			$table .= '<td>' . $record['email'] . '</td>';

			$table .= '<tr>';
		}

		$table .= '</table>';
		
	}

?>

<!DOCTYPE html>

<html lang="en">

<head>

	<meta charset="UTF-8">

	<title></title>

	<style>

		table 
		{
			border-collapse: collapse;
		}

		td, th
		{
			border: 1px solid black;
			padding: 10px;
		}

	</style>

</head>

<body>

	<?php

		echo $table;

	?>

</body>

</html>

<?php

	mysqli_close($connection);

?>