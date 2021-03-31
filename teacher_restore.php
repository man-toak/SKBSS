<?php
		// to retrieve data		
		if (isset($_GET['ht_ic'])) {
			$ht_ic = $_GET['ht_ic'];
			include 'dbconnect.php';
			$query = "INSERT INTO teacher (t_ic, t_name, t_address, state_id, educationID, t_nophone, g_id,form_id, class_id, t_email) SELECT * FROM history_teacher WHERE ht_ic = $ht_ic";
			$query2 = "DELETE FROM history_teacher where ht_ic = $ht_ic";
			$result = mysqli_query($conn , $query) or die('SQL ERROR delete 1');	
			if ($result)
			{
				$result = mysqli_query($conn , $query2) or die('SQL ERROR delete 2');
				header("Location: history_teacher.php");
			}
			else
			
				echo "DELETE FAILED";
		}

?>