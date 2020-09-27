<?php
	//establish connection to the server and db
	$dbServerName = "localhost";
	$dbUsername = "root";
	$dbPassword = "";
	$dbName = "nfposts";
	
	$connection = mysqli_connect($dbServerName, $dbUsername, $dbPassword, $dbName);
?>