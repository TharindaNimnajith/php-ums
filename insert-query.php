<?php

	require_once ('inc/connection.php');

?>

<br />
<br />

<?php

	/*

		INSET INTO tableName (column1, column2, etc.)
		VALUES (value1, value2, etc.)

	*/

	$firstName = 'Tharinda';
	$lastName  = 'Nimnajith';
	$email     = 'academy@bestjobslk.com';
	$password  = 'mypassword';
	$isDeleted = 0;

	$hashedPassword = sha1($password);

	echo "Hashed Password: {$hashedPassword} <br><br>";

	$query = "INSERT INTO user 
		(firstName, lastName, email, password, isDeleted) 
		VALUES ('{$firstName}', '{$lastName}', '{$email}', 
		'{$hashedPassword}', {$isDeleted})";

	$result = mysqli_query($connection, $query);

	if($result)
	{
		echo "1 record added";
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

	<title>Home</title>

	<link rel="stylesheet" href="css/main.css">

</head>

<body>

	<!---code--->

</body>

</html>

<?php

	mysqli_close($connection);

?>