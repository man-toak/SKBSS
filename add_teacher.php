<?php   
		//TO ADD DATA
		if (isset($_POST['add'])) {
			$t_ic = addslashes($_POST['t_ic']);
			$t_name = addslashes($_POST['t_name']);
			$form_id = addslashes($_POST['form_id']);
			$class_id = addslashes($_POST['class_id']);
			$t_address = addslashes($_POST['t_address']);
			$state_id = addslashes($_POST['state_id']);
			$g_id = addslashes($_POST['g_id']);
			$t_nophone = addslashes($_POST['t_nophone']);
			$t_email = addslashes($_POST['t_email']);
			$educationID = addslashes($_POST['educationID']);
			
			include 'dbconnect.php';
			
			$query = "INSERT INTO teacher (t_ic, t_name, form_id, class_id, t_address, state_id, g_id, t_nophone, t_email, educationID) VALUES 
				('$t_ic', '$t_name',$form_id, '$class_id', '$t_address', '$state_id',  '$g_id', '$t_nophone', '$t_email', '$educationID')";
			$result = mysqli_query($conn,$query);
			if ($result){
				echo "<script type='text/javascript'>alert('REGISTER SUCCESS')</script>";
				header("Location: list_teacher.php");}
			else
				echo "<script type='text/javascript'>alert('FAILED')</script>";
		}
		?>