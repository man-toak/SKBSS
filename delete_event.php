

	<?php   
		//TO ADD DATA
			if (isset($_GET['ev_name'])) {
			$ev_id = $_GET['ev_name'];	
			include 'dbconnect.php';
			
			$query1 = "INSERT INTO history_event SELECT * FROM event where ev_name=$ev_name";
			$result1 = mysqli_query($conn,$query1);
			if ($result1)
			{echo "<script type='text/javascript'>alert('DELETE SUCCESS')</script>";
				header("Location: list_event.php");}
			else
				echo "<script type='text/javascript'>alert('DELETE FAILED')</script>";}
			
		?>
<?php
		
		// to retrieve data		
		if (isset($_GET['ev_id'])) {
			$ev_id = $_GET['ev_id'];
			include 'dbconnect.php';
			
			$query = "DELETE FROM event where ev_id = $ev_id";
			$result = mysqli_query($conn,$query) or die('SQL error Delete');
			
			if ($result)
			{
				header("Location: list_event.php");}
			else
			{
				echo "<script type='text/javascript'>alert('DELETE FAILED')</script>";
			}
				
			
		}
		?>
		

		
	
  