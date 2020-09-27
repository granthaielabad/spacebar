<?php
	include 'connection.php';

	$nfpostNewCount = $_POST['nfpostNewCount'];
	
	$sql = "SELECT * FROM news LIMIT $nfpostNewCount";
	$result = mysqli_query($connection, $sql);
	if (mysqli_num_rows($result) > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			echo "<p>";
			echo "<br>";
			echo "ID: ".$row['id'];
			echo "<br>";
			echo "Subject: ".$row['subject'];
			echo "<br>";
			echo "Story: ".$row['story'];
			echo "<br>";
			echo "Tags: ".$row['tags'];
			echo "</p>";
		}
	} else {
		echo "There are no posts.";
	}
?>