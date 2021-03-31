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
                        <th>ID EVENT</th>
					    <th>NAME EVENT</th>
					    <th>VIEW</th>
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
	<td><a href="info_event1.php?ev_id='.$ic.'" class="btn btn-template-outlined btn-sm">VIEW</a></td>
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
<script type="text/javascript">
function confirmDelete(){
return confirm('Confirm Delete?');
}
</script>
