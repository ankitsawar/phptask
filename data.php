<?php
	$server = "localhost";
	$username = "root";
	$password = "";
	$database = "phpproject";

	$conn = mysqli_connect($server,$username,$password,$database);

	if(!$conn)  {
		die("could not connect". mysqli_connect_error());
	}
	else {
		echo "connected sucessfully";
	}

?>
