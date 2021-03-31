		<?php   
		//TO ADD DATA
			if (isset($_GET['s_ic'])) {
			$s_ic = $_GET['s_ic'];	
			include 'dbconnect.php';
			
			$query1 = "INSERT INTO history_student SELECT * FROM student where s_ic=$s_ic";
			$result1 = mysqli_query($conn,$query1);
			if ($result1)
			{
				header("Location: list_student1.php");
			}
			else
				echo 'REGISTER FAILED';}
			
		?>
<?php
		
		// to retrieve data		
		if (isset($_GET['s_ic'])) {
			$s_ic = $_GET['s_ic'];
			include 'dbconnect.php';
			
			$query = "DELETE FROM student where s_ic = $s_ic";
			$result = mysqli_query($conn,$query) or die('SQL error Delete');
			
			if ($result){
				echo "<script type='text/javascript'>alert('DELETE SUCCESS')</script>";
				header("Location: list_student1.php");}
			else
			
				echo 'DELETE FAILED';
				
			
		}
		?>
		

		
	
  