<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
    font-family: Arial;
}

* {
    box-sizing: border-box;
}

form.example input[type=text] {
    padding: 10px;
    font-size: 17px;
    border: 1px solid grey;
    float: left;
    width: 80%;
    background: #f1f1f1;
}

form.example button {
    float: left;
    width: 20%;
    padding: 10px;
    background: #2196F3;
    color: white;
    font-size: 17px;
    border: 1px solid grey;
    border-left: none;
    cursor: pointer;
}

form.example button:hover {
    background: #0b7dda;
}

form.example::after {
    content: "";
    clear: both;
    display: table;
}
</style>
</head>
	
<body>
	<?php
	include 'dbconnect.php';
		
	?>

	
	<div align="center"

<br></br>
<!--
	
	<form method="GET" action="">
<input type="text" name="ev_name" placeholder="search">
<input type="submit" name="search" value="search">
 </form>
-->
	
	<form method="get" class="example" action="" style="margin:auto;max-width:300px" >
  <input type="text" placeholder="Search.." name="ev_name" >
  <button type="submit" name="search" value="search"><i class="fa fa-search"></i></button>
</form><p></p></div>
	
	 <?php 
         if (isset($_GET['search'])) {
		$ev_name = addslashes($_GET['ev_name']);
		//echo $s_name; 
			 
		$query = "SELECT * FROM event where ev_name like '%$ev_name%' ";
		$result = mysqli_query($conn,$query) or die('SQL error gender');
		//$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
		 //print_r($row);
			?> <TABLE border="1" cellpadding="5" cellspacing="2">
			<TR>
			  <TH>ID </TH>
			  <TH>EVENT NAME </TH>
			  <TH>VIEW</TH>
			  <TH>EDIT</TH>
			  <TH>DELETE</TH>
			</TR>
			<?php 
			while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
			{
			?>
			<TR>
				<td><?php echo $row['ev_id']; ?></td>
				<td><?php echo $row['ev_name']; ?></td>
				<TD><a href="info_event.php?ev_id=<?php echo $row['ev_id']; ?>">DETAIL</a></TD>
				<TD><a href="edit_event.php?ev_id=<?php echo $row['ev_id']; ?>">EDIT</a></TD>
				<TD><a href="delete_event.php?ev_id=<?php echo $row['ev_id']; ?>">DELETE</a></TD>

			</TR>
			<?php 
			}
			?>
		</TABLE><?php
		 }
	
          ?>
	
	

	
	
</form>
	

</body>
</html>