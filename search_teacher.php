<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
	
<body>
	<?php include ('dbconnect.php'); ?>
	 <?php 
         if (isset($_GET['search'])) {
		$t_name = addslashes($_GET['t_name']);
		//echo $s_name; 
			 
		$query = "SELECT * FROM teacher where t_name like '%$t_name%' ";
		$result = mysqli_query($conn,$query) or die('SQL error gender');
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
		 //print_r($row);
		 }
          ?>

	
	<div align="center"

<p></p>

<form method="get" class="example" action="" style="margin:auto;max-width:300px">
  <input type="text" placeholder="Search.." name="t_name">
  <button type="submit" name="search" value="search"><i class="fa fa-search"></i></button>
</form><p></p>
	</table>
	
	 <?php 
         if (isset($_GET['search'])) {
		$t_name = addslashes($_GET['t_name']);
		//echo $s_name; 
			 
		$query = "SELECT * FROM teacher where t_name like '%$t_name%' ";
		$result = mysqli_query($conn,$query) or die('SQL error gender');
		//$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
		 //print_r($row);
			?> 
			<TABLE border="1" cellpadding="5" cellspacing="2">
			<TR>
			  <TH>TEACHER IC</TH>
			  <TH>TEACHER NAME</TH>
			  <TH>VIEW</TH>
			  <TH>EDIT</TH>
			  <TH>DELETE</TH>
			</TR>
			<?php 
			while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
			{
			?>
			<TR>
				<td><?php echo $row['t_ic']; ?></td>
				<td><?php echo $row['t_name']; ?></td>
				<TD><a href="info_teacher.php?t_ic=<?php echo $row['t_ic']; ?>" class="btn btn-template-outlined btn-sm">VIEW</a></TD>
				<TD><a href="edit_teacher.php?t_ic=<?php echo $row['t_ic']; ?>" class="btn btn-template-outlined btn-sm">EDIT</a></TD>
				<td><a href="#" data-toggle="modal" data-target="#login-modal" class="btn btn-template-outlined btn-sm">DELETE</a></td>
							<div id="login-modal" tabindex="-1" role="dialog" aria-labelledby="login-modalLabel" aria-hidden="true" class="modal fade">
        						<div role="document" class="modal-dialog">
          							<div class="modal-content">
            							<div class="modal-header">
             				 				<h4 id="login-modalLabel" class="modal-title">DELETE TEACHER's INFO</h4>
              									<button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
            							</div>
										<div class="modal-body">
										  <form action="registration_teacher.html" method="post">
											<br><h5 id="login-modalLabel" class="modal-title"><center>ARE YOU SURE YOU WANT TO REMOVE THIS INFO?</center></h5>
											<center><div class="form-group">
											<br><center><a href="edit_teacher.php?t_ic=<?php echo $row['t_ic']; ?>" class="btn btn-template-outlined btn-sm">YES</a></center>
											  </div></center>
										  </form>
									</div>
								  </div>
								</div>
							  </div>
			</TR>
			<?php 
			}
			?>
		</TABLE>
		<?php
		 }
         ?>

	
	
</form>
	

</body>
</html>