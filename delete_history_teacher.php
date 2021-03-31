<?php
		// to retrieve data		
		if (isset($_GET['ht_ic'])) {
			$ht_ic = $_GET['ht_ic'];
			include 'dbconnect.php';
			
			$query = "DELETE FROM history_teacher where ht_ic = $ht_ic";
			$result = mysqli_query($conn , $query) or die('SQL ERROR delete 1');
			
			if ($result)
			{
				header("Location: history_teacher.php");
			}
			else	
				echo 'Delete FAILED';					
		}
?>
		

		
	
  