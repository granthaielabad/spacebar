<?php
	include 'connection.php';

	$nfpostNewCount = $_POST['nfpostNewCount'];
	
	$sql = "SELECT * FROM news";
	$result = mysqli_query($connection, $sql);
	if (mysqli_num_rows($result) > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			echo "<style>
			* {
				margin: 0;
				padding: 0;
			}
			#mainTable {
				margin: 20px 20% 20px 20%;
				width: 60%;
				background-color: #1a1a1a;
				border: 1px solid transparent;
				border-radius: 6px;
                display: grid;
			}
			#mainTable:hover {
				background-color: #262626;
			}
            #divbase {
                display: grid;
                grid-template-columns: auto;
                grid-template-rows: auto auto auto;
            }
			</style>";
			echo "<table id='mainTable'>
				    <tr>
                        <td>
                            <div id='divbase'>
                                            <div id='R1_C1'><div id='R1_C1_1'>".$row['id']."</div><div id='R1_C2_1'>".$row['subject']."</div></div>
                                            <div id='R2_C1'>".$row['story']."</div>
                                            <div id='R2_C1'>".$row['tags' ]."</div>
                            </div>
                        </td>
                    </tr>
			    </table>";
		}
	} else {
		echo "There are no posts.";
	}
?>