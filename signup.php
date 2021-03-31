
	<?php
		//TO ADD DATA
		if (isset($_POST['add'])){
			$username = addslashes($_POST['user_name']);
			$password1 = addslashes($_POST['password1']);
            $password2 = addslashes($_POST['password2']);
			
			
			include 'dbconnect.php';
			
			$query = "INSERT INTO user (user_name, password1, password2 ) VALUES 
				('$username' , '$password1', '$password2')";
			$result = mysqli_query($conn,$query) or die ('SQL error username');
			if ($result){		
				echo "<script type='text/javascript'>alert('Register Success');window.location='user-register.php'</script>";
				header("Location=user-register.php");
			}
			else
				echo "<script type='text/javascript'>alert('Failed to Register')</script>";
		}
		?>

      
