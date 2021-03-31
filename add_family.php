<?php

session_start();


?>
	 <?php   

  
		//to retrived data
		if (isset($_GET['s_ic']))
			$s_ic = $_GET['s_ic'];
		else
			$s_ic = 0;
		
		include 'dbconnect.php';
		


		//TO ADD DATA
		if (isset($_POST['add'])) {
			$fam_fathername = addslashes($_POST['fam_fathername']);
			$fam_fatherIC = addslashes($_POST['fam_fatherIC']);
			$fam_fatherjob = addslashes($_POST['fam_fatherjob']);
			$fam_fatherbirthday = addslashes($_POST['fam_fatherbirthday']);
			$fam_fatherphone = addslashes($_POST['fam_fatherphone']);
			$fam_mothername = addslashes($_POST['fam_mothername']);
			$fam_motherIC = addslashes($_POST['fam_motherIC']);
			$fam_motherjob = addslashes($_POST['fam_motherjob']);
			$fam_motherbirthday = addslashes($_POST['fam_motherbirthday']);
			$fam_motherphone = addslashes($_POST['fam_motherphone']);
			$fam_numsibling = addslashes($_POST['fam_numsibling']);
			$s_ic = addslashes($_POST['s_ic']);
			
			include 'dbconnect.php';
			
			$query = "INSERT INTO family (fam_fathername, fam_fatherIC, fam_fatherjob, fam_fatherbirthday, fam_fatherphone, fam_mothername, fam_motherIC, fam_motherjob, fam_motherbirthday, fam_motherphone, fam_numsibling, s_ic) VALUES 
				( '$fam_fathername', '$fam_fatherIC',  '$fam_fatherjob', '$fam_fatherbirthday', '$fam_fatherphone', '$fam_mothername', '$fam_motherIC',  '$fam_motherjob', '$fam_motherbirthday',$fam_motherphone, '$fam_numsibling', '$s_ic')";
			
			$result = mysqli_query($conn,$query);
			
			if ($result){
			
				echo "<script type='text/javascript'>alert('REGISTER SUCCESS')</script>";}
			else
				echo "<script type='text/javascript'>alert('FAILED SUCCESS')</script>";
		}
		?>
	