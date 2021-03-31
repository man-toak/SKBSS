	<?php
	ob_start();
	$message = '';
	if ( isset ($_POST['login']))
	{
		$user_name = $_POST['user_name'];
		$password1 = $_POST['password1'];
		if ($user_name != '' && $password1 != '')
		{
			include ("dbconnect.php");
			$sql = "SELECT user_id, user_name, password1 FROM user
				WHERE user_name = '$user_name' AND password1 = '$password1'";
			$result = mysqli_query($conn,$sql) or die('SQL error user');
			$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
			if (mysqli_num_rows($result) ==1)
			{
				session_start();
				$_SESSION['isLogged_in'] = true;
				$_SESSION['user_name'] = $row['user_name'];
				$_SESSION['password1'] = $row['password1'];
				//$_SESSION['name'] = $row['m_name'];
				//$message = 'Logged-in successfully';
				header("Location: homepage_admin.php");
			}
			else if (($user_name==='$user_name') && ($password1==='$password1'))
			{
				session_start();
				$_SESSION['isLogged_in'] = true;
				header("Location: homepage_admin.php");
				
			}
			else
			{
				echo "<script type='text/javascript'>alert('LOGIN FAILED! PLEASE RE-ENTER YOUR USERNAME AND PASSWORD')</script>";
				header("Location: login_error.php");

			}
			
		}
		
	
	}
	?>