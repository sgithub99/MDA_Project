<?php
	$host= "localhost";
	$username = "root";
	$password = "";
	$database = "thietbi";

	$con = mysqli_connect($host, $username, $password, $database);
	mysqli_query($con, "SET NAME'.utf8.'");

?>