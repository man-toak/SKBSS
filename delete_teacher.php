

	<?php   
		//TO ADD DATA
			if (isset($_GET['t_ic'])) {
			$t_ic = $_GET['t_ic'];	
			include 'dbconnect.php';
			
			$query1 = "INSERT INTO history_teacher SELECT * FROM teacher where t_ic=$t_ic";
			$result1 = mysqli_query($conn,$query1);
			if ($result1)
			{echo 'REGISTER SUCCESS';
				header("Location: list_teacher.php");}
			else
				echo 'REGISTER FAILED';}
			
		?>
<?php
		
		// to retrieve data		
		if (isset($_GET['t_ic'])) {
			$t_ic = $_GET['t_ic'];
			include 'dbconnect.php';
			
			$query = "DELETE FROM teacher where t_ic = $t_ic";
			$result = mysqli_query($conn,$query) or die('SQL error Delete');
			
			if ($result)
			{
				header("Location: list_teacher.php");}
			else
			
				echo 'DELETE FAILED';
				
			
		}
		?>
		

		
	
  