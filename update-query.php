<?php

	require_once ('inc/connection.php');

?>

<?php

/*

	UPDATE table_name
	SET column_1 = value_1, column_2 = value_2
	WHERE column_name = value
	LIMIT 1

*/	

	$query = "UPDATE user 
		      SET firstName = 'Pasan'
		      WHERE id = 2";

	$result_set = mysqli_query($connection, $query);	      

	// mysql_affected_rows() = retuns number of rows affected

	if ($result_set)
	{
		echo "<br> <br>";
		echo mysqli_affected_rows($connection);
		echo " records updated.";
	}

	else
	{
		echo "Database query failed";
	}

?>

<!DOCTYPE html>

<html lang="en">

<head>

	<meta charset="UTF-8">

	<title>Update Query</title>

</head>

<body>

</body>

</html>
