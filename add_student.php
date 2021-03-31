
		<?php   
		//TO ADD DATA
		if (isset($_POST['add'])) {
			$s_ic = addslashes($_POST['s_ic']);
			$s_name = addslashes($_POST['s_name']);
			$form_id = addslashes($_POST['form_id']);
			$class_id = addslashes($_POST['class_id']);
			$s_address = addslashes($_POST['s_address']);
			$state_id = addslashes($_POST['state_id']);
			$g_id = addslashes($_POST['g_id']);
			$s_age = addslashes($_POST['s_age']);
			$s_nophone = addslashes($_POST['s_nophone']);
			$s_email = addslashes($_POST['s_email']);
			
			include 'dbconnect.php';
			
			$query = "INSERT INTO student (s_ic, s_name, form_id, class_id, s_address, state_id, g_id, s_age, s_nophone, s_email) VALUES 
				('$s_ic', '$s_name',$form_id, '$class_id', '$s_address', '$state_id',  '$g_id', '$s_age', '$s_nophone', '$s_email')";
			$result = mysqli_query($conn,$query);
			if ($result){
				echo "<script type='text/javascript'>alert('REGISTER SUCCESS')</script>";
				header("Location: list_student.php");}
			else
				echo "<script type='text/javascript'>alert('FAILED SUCCESS')</script>";
		}
		?>

		
