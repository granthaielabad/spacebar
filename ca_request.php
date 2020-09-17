<?php
	$dbServerName = "localhost";
	$dbUsername = "root";
	$dbPassword = "";
	$dbName = "accrecord";
	$connection = mysqli_connect($dbServerName, $dbUsername, $dbPassword, $dbName);	//establish connection
	$select = mysqli_select_db($connection, $dbName);								//select db from established connection
	//with $connection and $select === [string host, string username, string passwd, dbname]
	
	$dollarStr = "$";//'$' string; in able to be included within another string
	
	//check if connection to server is established
	if(!$connection){
		echo $dollarStr."connection status: Not connected to server<br>";
	}
	else{
		echo $dollarStr."connection status: Connected to the server<br>";
		//check if database is selected
		if(!$select){
		echo $dollarStr."dbName status: Database not selected<br>";
		}
		else{
			echo $dollarStr."dbName status: Database selected<br>";
			
			$username = $_POST["ca_username"];	//must be bracket instead of parenthesis
			$password = $_POST["ca_password"];	//in order to be read as a string
			$email = $_POST["ca_email"];		//instead of a function
	
			$postForm = "INSERT INTO accdata (username, password, email) VALUES ('$username', '$password', '$email');";
	
			if(!mysqli_query($connection,$postForm)){
				echo $dollarStr."postForm status: Not inserted<br>";
			}
			else{
				echo $dollarStr."postForm status: Inserted<br>";
			}
		}
	}
	
	header("refresh:2; url=index.html");
?>
