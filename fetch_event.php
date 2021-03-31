<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "project");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "SELECT * FROM event where ev_name LIKE '%".$search."%' ";
}
else
{
 $query = "SELECT * FROM event ORDER BY ev_name";
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
                        <th>Event ID</th>
                        <th>Event Name</th>
                        <th>View</th>
                        <th>Edit</th>
                        <th>Delete</th>
                      </tr>
					</thead>
 ';
 while($row = mysqli_fetch_array($result))
 {
	 $ic = $row['ev_id'];
	 $name = $row['ev_name'];
	 
  $output .= '
   <tr>
    <td>'.$ic.'</td>
    <td>'.$name.'</td>
	<td><a href="info_event.php?ev_id='.$ic.'" class="btn btn-template-outlined btn-sm">VIEW</a></td>
	<td><a href="edit_event.php?ev_id='.$ic.'" class="btn btn-template-outlined btn-sm">EDIT</a></td>
	<td><a href="" class="btn btn-template-outlined btn-sm delete" data-action="delete" data-body-message="Are you sure to delete this data?" data-redirect-url="delete_event.php?ev_id='.$ic.'">DELETE</a></td>
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
