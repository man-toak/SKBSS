

	<?php 
	   
		//TO ADD DATA
		if (isset($_POST['add'])){
			$ev_name = addslashes($_POST['ev_name']);
			$ev_guest = addslashes($_POST['ev_guest']);
			$ev_date = addslashes($_POST['ev_date']);
			$ev_place = addslashes($_POST['ev_place']);
			$ev_desc = addslashes($_POST['ev_desc']);
		
			include 'dbconnect.php';
			
			$query = "INSERT INTO event (ev_name, ev_date, ev_place, ev_guest, ev_desc) VALUES 
				('$ev_name', '$ev_date ', '$ev_place ', '$ev_guest ','$ev_desc')";
			$result = mysqli_query($conn,$query) or die ('SQL error event');
			if ($result){		
				echo "<script type='text/javascript'>alert('REGISTER SUCCESS')</script>";
				header("Location: list_event.php");
			}
			else
				echo "<script type='text/javascript'>alert('REGISTER FAILED')</script>";
		}
		?>

      <!--
	<div align="center">
	<h1>REGISTER EVENT</h1>
		<form action="" method="post">
			<TABLE border="1" cellpadding="5" cellspacing="2">
				
				<TR>
					<td>EVENT NAME :</td>
					<td><input name="ev_name" value="" type="text" size="50" maxlength="50"></td>
				</TR>
				
				<TR>
					<td>EVENT GUEST :</td>
					<TD><input name="ev_guest" value="" type="text" size="50" maxlength="50"></TD>
				</TR>
				
				<TR>
                  <td>EVENT DESCPTION:</td>
					<TD><input name="ev_desc" value="" type="text" size="50" maxlength="50"></TD>
				</TR><br></br>
				
				<TR align="center">
					<td colspan="2">
						
						<input id="submit" type="submit" name="add" value=" Submit ">
					
					</td>
				</TR>

			
	
</body>
</html>