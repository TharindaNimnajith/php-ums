<?php

	require_once ('inc/connection.php');

?>

<?php

/*

	DELETE 
	FROM user
	WHERE id = 3
	LIMIT 1

*/	

	$query = "DELETE
			  FROM user
			  WHERE id = 2
			  LIMIT 1";

	$result_set = mysqli_query($connection, $query);	      

	// mysql_affected_rows() = retuns number of rows affected

	if ($result_set)
	{
		echo "<br> <br>";
		echo mysqli_affected_rows($connection);
		echo " records deleted.";
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

	<title>Delete Query</title>

</head>

<body>

</body>

</html>
