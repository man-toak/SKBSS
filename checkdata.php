<?php

include 'dbconnect.php';

      if(isset($_POST['username']))
      {
       $name=$_POST['username'];

       $checkdata=" SELECT user_name FROM user WHERE user_name ='$name' ";
       $result = mysqli_query($conn,$checkdata) or die('SQL error USER'); 

       if(mysqli_num_rows($result)>0)
       {
        echo ("Username '$name' Already Exist!");
       }
       else
       {
        echo "Username is available!";
       }
       exit();
      }

?>
