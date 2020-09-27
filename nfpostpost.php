<?php
	include 'connection.php';
	$select = mysqli_select_db($connection, $dbName);	//select db from established connection
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
			
			$subject = $_POST["nfPost_subject"];//must be bracket instead of parenthesis
			$story = $_POST["nfPost_story"];	//in order to be read as a string
			$tags = $_POST["nfPost_tags"];		//instead of a function
	
			$postForm = "INSERT INTO news (subject, story, tags) VALUES ('$subject', '$story', '$tags');";
	
			if(!mysqli_query($connection,$postForm)){
				echo $dollarStr."postForm status: Not inserted<br>";
			}
			else{
				echo $dollarStr."postForm status: Inserted<br>";
			}
		}
	}
	
	header("refresh:1; url=index.html");
?>