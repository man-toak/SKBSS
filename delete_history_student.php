<?php
		// to retrieve data		
		if (isset($_GET['hs_ic'])) {
			$hs_ic = $_GET['hs_ic'];
			include 'dbconnect.php';
			
			$query = "DELETE FROM history_student where hs_ic = $hs_ic";
			$result = mysqli_query($conn , $query) or die('SQL ERROR delete 1');
			
			if ($result)
			{
				header("Location: history_student.php");
			}
			else	
				echo 'Delete FAILED';					
		}
?>
		

		
	
  