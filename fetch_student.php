<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "project");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM student
  WHERE s_ic LIKE '%".$search."%'
  OR s_name LIKE '%".$search."%' 
 ";
}
else
{
 $query = "SELECT `student`.*, `class`.*, `form`.* FROM `student`
				INNER JOIN `class` ON  `class`.`class_id`=`student`.`class_id`
				INNER JOIN `form` ON `form`.`form_id`=`student`.`form_id`";
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
                        <th>Student IC</th>
                        <th>Student Name</th>
                        <th>View</th>
                        <th>Edit</th>
                        <th>Delete</th>
                      </tr>
					</thead>
 ';
 while($row = mysqli_fetch_array($result))
 {
	 $ic = $row['s_ic'];
	 $name = $row['s_name'];
	 
  $output .= '
   <tr>
    <td>'.$ic.'</td>
    <td>'.$name.'</td>
	<td><a href="info_student.php?s_ic='.$ic.'" class="btn btn-template-outlined btn-sm">VIEW</a></td>
	<td><a href="edit_student.php?s_ic='.$ic.'" class="btn btn-template-outlined btn-sm">EDIT</a></td>
	<td><a href="" class="btn btn-template-outlined btn-sm delete" data-action="delete" data-body-message="Are you sure to delete this data?" data-redirect-url="delete_student.php?s_ic='.$ic.'">DELETE</a></td>
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