<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "project");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM teacher 
  WHERE t_ic LIKE '%".$search."%'
  OR t_name LIKE '%".$search."%' 
 ";
}
else
{
 $query = "
  SELECT * FROM teacher ORDER BY t_name
 ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="box mt-0 mb-lg-0">
                <div class="table-responsive">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>Teacher IC</th>
                        <th>Teacher Name</th>
                        <th>View</th>
                        <th>Edit</th>
                        <th>Delete</th>
                      </tr>
					</thead>
 ';
 while($row = mysqli_fetch_array($result))
 {
	 $ic = $row['t_ic'];
	 $name = $row['t_name'];
	 
  $output .= '
   <tr>
    <th>'.$ic.'</th>
    <td>'.$name.'</td>
	<td><a href="info_teacher.php?t_ic='.$ic.'" class="btn btn-template-outlined btn-sm">VIEW</a></td>
	<td><a href="edit_teacher.php?t_ic='.$ic.'" class="btn btn-template-outlined btn-sm">EDIT</a></td>
	<td><a href="" class="btn btn-template-outlined btn-sm delete" data-action="delete" data-body-message="Are you sure to delete this data?" data-redirect-url="delete_teacher.php?t_ic='.$ic.'">DELETE</a></td>
   </tr>
  ';
 }
 echo $output;
}
else
{
 echo 'Data Not Found';
}

?>

<!--untuk guna onclick function -->
<script type="text/javascript">
function confirmDelete(){
return confirm('Are you sure you want to delete this?');
}
</script>

<script src="js/delete.js"></script>