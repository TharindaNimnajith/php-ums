<?php

	// connection.php page

	/* 

	This code should be at the top of all the pages of the web
	application that are connected to the database. 

	Therefore, the best practice is to save this code as an 
	external file and include this in necessary pages. 

	Also it is considered a good practice to close the 
	database connection using mysqli_close at the end of 
	the page.

	*/
	
/*

	Function to connect to the MySQL Database

 $connection = mysqli_connect(server, username, password, name);

*/

 $connection = mysqli_connect('localhost', 'root', '', 'userdb');

 	// 127.0.0.1 = localhost

 	/*

 	Functions available too check whether the database is 
 	connected successfully or whether there are any errors:

 	1. mysqli_connect_errno();
 	2. mysqli_connect_error();

 	*/

 	// Checking the connection

 	if(mysqli_connect_errno())
 	{

 		die('DB connection failed' . mysqli_connect_error());

 		/*

 		die => Don't execute any further. Stop by displaying 
 		the error message. 

 		*/

 	} 

 	else
 	{
 		echo "Connection Successful.";
 	}

?>