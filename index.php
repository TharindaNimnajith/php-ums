<?php

	// index.php

	// Including the conncetion file

	require_once('inc/connection.php');

?>

<!DOCTYPE html>

<html lang="en">

<head>
	
	<meta charset="UTF-8">
	
	<title>Database Connection</title>

</head>

<body>

	<p>Testing MySQL Connection!</p>

</body>

</html>

<?php

	// Closing the connection

	mysqli_close($connection);

?>