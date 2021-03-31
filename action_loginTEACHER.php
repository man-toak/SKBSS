<?php 


?>
	<?php
	ob_start();
	$message = '';
	if ( isset ($_POST['login1']))
	{
		$t_name = $_POST['t_name'];
		$t_ic = $_POST['t_ic'];
		if ($t_name != '' && $t_ic != '')
		{
			include ("dbconnect.php");
			$sql = "SELECT * FROM teacher
				WHERE t_name = '$t_name' AND t_ic = '$t_ic'";
			$result = mysqli_query($conn,$sql) or die('SQL error teacher');
			$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
			if (mysqli_num_rows($result) ==1)
			{
				session_start();
				$_SESSION['isLogged_in'] = true;
				$_SESSION['t_name'] = $row['t_name'];
				$_SESSION['t_ic'] = $row['t_ic'];
				//$_SESSION['name'] = $row['m_name'];
				//$message = 'Logged-in successfully';
				header("Location: homepage_teacher.php");
			}
			else if (($t_name==='$t_name') && ($t_ic==='$t_ic'))
			{
				session_start();
				$_SESSION['isLogged_in'] = true;
				header("Location: homepage_teacher.php");
				
			}
			else
			{
				echo "<script type='text/javascript'>alert('WRONG PASSWORD. TRY AGAIN')</script>";
				header("Location: login_error.php");

			}
			
		}
		
		
	}
	?>