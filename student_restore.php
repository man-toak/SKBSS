<?php
		// to retrieve data		
		if (isset($_GET['hs_ic'])) {
			$hs_ic = $_GET['hs_ic'];
			include 'dbconnect.php';
			$query = "INSERT INTO student (s_ic, s_name, form_id, class_id, s_address, state_id, g_id, s_age, s_nophone, s_email) SELECT * FROM history_student WHERE hs_ic = $hs_ic";
			$query2 = "DELETE FROM history_student where hs_ic = $hs_ic";
			$result = mysqli_query($conn , $query) or die('SQL ERROR delete 1');	
			if ($result)
			{
				$result = mysqli_query($conn , $query2) or die('SQL ERROR delete 2');
				header("Location: history_student.php");
			}
			else
			
				echo "Delete FAILED";
		}

?>