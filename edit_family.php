<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Edit Family</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Google fonts - Roboto-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,700">
    <!-- Bootstrap Select-->
    <link rel="stylesheet" href="vendor/bootstrap-select/css/bootstrap-select.min.css">
    <!-- owl carousel-->
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon and apple touch icons-->
    <link rel="shortcut icon" href="img/skbsslogo.jpg" type="image/x-icon">
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="57x57" href="img/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/apple-touch-icon-152x152.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <div id="all">
      <!-- Top bar-->
      <div class="top-bar">
        <div class="container">
          <div class="row d-flex align-items-center">
            <div class="col-md-6 d-md-block d-none">
              <p>Contact us on +60 0133927175 or toak@gmail.com</p>
            </div>
            <div class="col-md-6">
              <div class="d-flex justify-content-md-end justify-content-between">
                <ul class="list-inline contact-info d-block d-md-none">
                  <li class="list-inline-item"><a href="#"><i class="fa fa-phone"></i></a></li>
                  <li class="list-inline-item"><a href="#"><i class="fa fa-envelope"></i></a></li>
                </ul>
				<div class="panel-body">
                  <ul class="nav nav-pills flex-column text-sm">
                    <li class="nav-item"><a href="index.php" class="nav-link"><i class="fa fa-sign-out"></i> Logout</a></li>
                  </ul>
                </div>
                <ul class="social-custom list-inline">
                  <li class="list-inline-item"><a href="https://www.facebook.com/muhammadaimanroselee"><i class="fa fa-facebook"></i></a></li>
                  <li class="list-inline-item"><a href="https://www.instagram.com/_arolee/"><i class="fa fa-google-plus"></i></a></li>
                  <li class="list-inline-item"><a href="https://twitter.com/aimanroselee"><i class="fa fa-twitter"></i></a></li>
                  <li class="list-inline-item"><a href="https://accounts.google.com/ServiceLogin?sacu=1&hl=en&service=lso#identifier"><i class="fa fa-envelope"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Top bar end-->

      <!-- Navbar Start-->
      <header class="nav-holder make-sticky">
        <div id="navbar" role="navigation" class="navbar navbar-expand-lg">
          <div class="container"><a href="homepage_admin.php" class="navbar-brand home"><img src="img/logosekolah.jpg" height="60px;" width="60p;" alt="SK BSS logo" class="d-none d-md-inline-block"><img src="img/logosekolah-small.png" alt="SKBSS logo" class="d-inline-block d-md-none"><span class="sr-only">SK BSS - go to homepage</span></a><h5>WELCOME TO SEKOLAH KEBANGSAAN <br>BANDAR SUNWAY SEMENYIH SYSTEM</h5>
            <button type="button" data-toggle="collapse" data-target="#navigation" class="navbar-toggler btn-template-outlined"><span class="sr-only">Toggle navigation</span><i class="fa fa-align-justify"></i></button>
            <div id="navigation" class="navbar-collapse collapse">
              <ul class="nav navbar-nav ml-auto">
                <li class="nav-item "><a href="contact.php">Contact <b class="caret"></b></a></li>
              </ul>
            </div>
            <div id="search" class="collapse clearfix">
              <form role="search" class="navbar-form">
                <div class="input-group">
                  <input type="text" placeholder="Search" class="form-control"><span class="input-group-btn">
                    <button type="submit" class="btn btn-template-main"><i class="fa fa-search"></i></button></span>
                </div>
              </form>
            </div>
          </div>
        </div>
      </header>
      <!-- Navbar End-->
      
    <?php  
    //to retrived data
    if (isset($_GET['s_ic']))
      $s_ic = $_GET['s_ic'];
    else
      $s_ic = 0;
    
    include 'dbconnect.php';
    $query = "SELECT * FROM family where s_ic = $s_ic";
    $result = mysqli_query($conn,$query) or die('SQL error FAMILY');
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC); 
    
  
    //to edit data
    if (isset($_POST['edit']) && isset($_POST['s_ic'])) {
      
      //$fam_id = addslashes($_POST['fam_id']);
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
      
      $query = "UPDATE family SET 
        fam_fathername = '$fam_fathername',
        fam_fatherIC = '$fam_fatherIC',
        fam_fatherjob = '$fam_fatherjob',
        fam_fatherbirthday = '$fam_fatherbirthday',
        fam_fatherphone = '$fam_fatherphone',
        fam_mothername = '$fam_mothername',
        fam_motherIC = '$fam_motherIC',
        fam_motherjob = '$fam_motherjob',
        fam_motherbirthday = '$fam_motherbirthday',
        fam_motherphone = '$fam_motherphone',
        fam_numsibling = '$fam_numsibling'
        WHERE s_ic = '$s_ic'";
        
      $result = mysqli_query($conn,$query);
      if ($result){ 
        echo"<script type='text/javascript'>alert('EDIT SUCCESS')</script>";
        //header ("Location : info_family.php?s_ic={$row['s_ic']}");
        //echo "<meta http-equiv='refresh' content='0;url=info_family.php?s_ic={$row['s_ic']}>";
        }
      else
        echo"<script type='text/javascript'>alert('EDIT FAILED')</script>";  
    }
    ?>
  
    <?php 
    if 
      (isset($_GET['s_ic'])) $s_ic = $_GET['s_ic'];
    else 
      $s_ic = 0;
    
    include 'dbconnect.php';
         if (isset($_POST['submit']) && isset($_POST['s_ic']))
         {
        $s_ic = addslashes($_POST['s_ic']);
             }
           $query1 = "SELECT  s_ic, s_name FROM student";
       $result1 = mysqli_query($conn,$query1) or die('SQL error state');
       $row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC);
    ?>
		
      <div id="heading-breadcrumbs">
        <div class="container">
          <div class="row d-flex align-items-center flex-wrap">
            <div class="col-md-7">
              <h1 class="h2">edit family</h1>
            </div>
            <div class="col-md-5">
              <ul class="breadcrumb d-flex justify-content-end">
                <li class="breadcrumb-item"><a href="homepage_admin.php">Home</a></li>
                <li class="breadcrumb-item"><a href="list_teacher.php">Family</a></li>
                <li class="breadcrumb-item active">Edit Family</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div id="content">
        <div class="container">
          <div class="row bar">
            <div id="customer-order" class="col-lg-9">
              <p class="lead text-muted">If you have any questions, please feel free to <a href="contact.php">contact us</a>, our customer service center is working for you 24/7.</p>
              <div class="box">
                <div class="table-responsive">
                  <table class="table">
                    <tbody>
						  <form action="" method="post">
<div align="center" class="container">
 	<th><h3><br>FATHER INFORMATION</h3></th>
	<tr>
    <th>FATHER NAME</th>
    <td><input class="form-control" type="text" name="fam_fathername" value="<?php echo $row['fam_fathername'];?>"></td>
    </tr>
<input type="hidden" name="s_ic" value="<?php echo $_GET['s_ic']; ?>">
	<tr>
    <th>IC NUMBER</th>
    <td><input class="form-control" type="text" name="fam_fatherIC" value="<?php echo $row['fam_fatherIC'];?>"></td>
    </tr>

	<tr>
    <th>JOB</th>
    <td><input class="form-control" type="text" name="fam_fatherjob" value="<?php echo $row['fam_fatherjob'];?>"></td>
    </tr>

	<tr>
    <th>DATE OF BIRTH</th>
    <td><input class="form-control" type="date" name="fam_fatherbirthday" value="<?php echo $row['fam_fatherbirthday'];?>"></td>   
    </tr>

	<tr>
    <th><label for="t_email">NUMBER PHONE</label></th> 
    <td><input class="form-control" type="text"name="fam_fatherphone" value="<?php echo $row['fam_fatherphone'];?>"></td> 
    </tr>  
	
	<th><h3><br>MOTHER INFORMATION</h3></th>
    <tr>
	<th><label for="fam_mothername">MOTHER NAME</label></th> 
    <td><input class="form-control" type="text" name="fam_mothername" value="<?php echo $row['fam_mothername'];?>"></td>
    </tr>               
  
	<tr>
	<th><label for="fam_motherIC">IC NUMBER</label></th> 
    <td><input class="form-control" type="text" name="fam_motherIC" value="<?php echo $row['fam_motherIC'];?>"></td>
    </tr>

	<tr>
	<th><label for="fam_motherjob">JOB</label></th> 
    <td><input class="form-control" type="text" name="fam_motherjob" value="<?php echo $row['fam_motherjob'];?>"></td>
    </tr>
    
	<tr>
	<th><label for="fam_motherbirthday">DATE OF BIRTH</label></th> 
    <td><input class="form-control" type="date" name="fam_motherbirthday" value="<?php echo $row['fam_motherbirthday'];?>"></td>
    </tr>

	<tr>
	<th><label for="fam_motherphone">PHONE NUMBER</label></th> 
    <td><input class="form-control" type="text" name="fam_motherphone" value="<?php echo $row['fam_motherphone'];?>"></td>
    </tr>
	
	<th><h3><br>SIBLING</h3></th>
    <tr>
	<th><label for="fam_numsibling">NUMBER OF SIBLING</label></th> 
    <td><input class="form-control" type="text" name="fam_numsibling" value="<?php echo $row['fam_numsibling'];?>"></td>
    </tr>

                  </table>
								
		<br><center><div class="btn btn-outline-info"><a href="#" data-toggle="modal" data-target="#login-modal" class="login-btn">SAVE</a></div></center>
		<div id="login-modal" tabindex="-1" role="dialog" aria-labelledby="login-modalLabel" aria-hidden="true" class="modal fade">
        <div role="document" class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 id="login-modalLabel" class="modal-title">EDIT FAMILY INFO</h4>
              <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
              <form action="registration_family.php" method="post">
                <br><h5 id="login-modalLabel" class="modal-title"><center>ARE YOU SURE TO EDIT THIS FAMILY INFO?</center></h5>
                <center><div class="form-group">
                <br><tr><td><center><input class="btn-template-outlined-black" id="submit" name="edit" type="submit" value="YES"></center></td></tr>
				  </div></center>
              </form>
            </div>
          </div>
        </div>
      </div>
							  <center><td><a href="info_family.php?s_ic=<?php echo $row['s_ic']; ?>" class="btn btn-outline-dark">CLOSE</a></td></center>
    </div>
  </form>
</tbody>
                    
                
              </div>
            </div>
            <div class="col-lg-3 mt-4 mt-lg-0">
              <!-- CUSTOMER MENU -->
              <div class="panel panel-default sidebar-menu">
                <div class="panel-heading">
                  <h3 class="h4 panel-title">Menu section</h3>
                </div>
                <div class="panel-body">
                  <ul class="nav nav-pills flex-column text-sm">
                    <li class="nav-item"><a href="list_teacher.php" class="nav-link"><i class="fa fa-list"></i> Teacher</a></li>
                    <li class="nav-item"><a href="list_student.php" class="nav-link active"><i class="fa fa-heart"></i> Students</a></li>
					<li class="nav-item"><a href="list_event.php" class="nav-link"><i class="fa fa-clock-o"></i> Events</a></li>
                    <li class="nav-item dropdown"><a href="" class="nav-link" data-toggle="dropdown" class="dropdown-toggle"><i class="fa fa-calendar"></i> Attendance<i class="fa fa-caret-down"></i></a>
					  	<ul class="dropdown-menu">
						<li class="dropdown-item"><a href="list_attendance.php" class="nav-link">Class</a></li>
							<li class="dropdown-item"><a href="list_attendance_event.php" class="nav-link">Event</a></li>
						</ul>
					</li>
					<li class="nav-item dropdown" ><a href="" class="nav-link" data-toggle="dropdown" class="dropdown-toggle"><i class="fa fa-clipboard" ></i> Report <i class="fa fa-caret-down"></i></a>
					  	<ul class="dropdown-menu">
						<li class="dropdown-item"><a href="barChart.php" class="nav-link">Bar Chart</a></li>
    					<li class="dropdown-item"><a href="chart.php" class="nav-link">Donut Chart(Class)</a></li>
    					<li class="dropdown-item"><a href="donutchart.php" class="nav-link">Donut Chart(Education)</a></li>
						<li class="dropdown-item"><a href="piechart.php" class="nav-link">Pie Chart(Gender Student)</a></li>
						<li class="dropdown-item"><a href="piechart2.php" class="nav-link">Pie Chart(Gender Teacher)</a></li>
						<li class="dropdown-item"><a href="piechart4.php" class="nav-link">Pie Chart(State Student)</a></li>
						<li class="dropdown-item"><a href="piechart3.php" class="nav-link">Pie Chart(State Teacher)</a></li>
						</ul>
					</li>
                  </ul>
                </div>
              </div>
			</div>
          </div>
        </div>
      </div>

	<!-- FOOTER -->
      <footer class="main-footer">
        <div class="container">
          <div class="row">
            <div class="col-lg-3">
              <h4 class="h6">About Us</h4>
              <p>Sekolah yang hebat melahirkan generasi yang dasyat demi memimpin masyarakat yang sudah tenat.</p>
              <hr>
              <h4 class="h6">Join Our Webmaster Group</h4>
              <form>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="phone number">
                  <div class="input-group-append">
                    <button type="button" class="btn btn-secondary"><i class="fa fa-send"></i></button>
                  </div>
                </div>
              </form>
              <hr class="d-block d-lg-none">
            </div>
            <div class="col-lg-3">
              <h4 class="h6">Blog</h4>
              <ul class="list-unstyled footer-blog-list">
                <li class="d-flex align-items-center">
                  <div class="image"><img src="img/luffy.png" alt="..." class="img-fluid"></div>
                  <div class="text">
                    <h5 class="mb-0"> <a href="post.html">Blog post name</a></h5>
                  </div>
                </li>
                <li class="d-flex align-items-center">
                  <div class="image"><img src="img/luffy.png" alt="..." class="img-fluid"></div>
                  <div class="text">
                    <h5 class="mb-0"> <a href="post.html">Blog post name</a></h5>
                  </div>
                </li>
                <li class="d-flex align-items-center">
                  <div class="image"><img src="img/luffy.png" alt="..." class="img-fluid"></div>
                  <div class="text">
                    <h5 class="mb-0"> <a href="post.html">Very very long blog post name</a></h5>
                  </div>
                </li>
              </ul>
              <hr class="d-block d-lg-none">
            </div>
            <div class="col-lg-3">
              <h4 class="h6">Contact</h4>
              <p class="text-uppercase"><strong>SK Bandar Sunway Semenyih</strong><br>Jalan Sunway 1/1, <br>Bandar Sunway Semenyih, <br>43500 Semenyih, <br>Selangor <br><strong>Malaysia</strong></p>
              <hr class="d-block d-lg-none">
            </div>
            <div class="col-lg-3">
              <br><br><br><br><br><br><a href="contact.php" class="btn btn-template-main">Go to contact page</a>
            </div>
          </div>
        </div>
        <div class="copyrights">
          <div class="container">
            <div class="row">
              <div class="col-lg-4 text-center-md">
                <p>&copy; 2018. cap Ayam Kampung / Damia Sarah To'Ak</p>
              </div>
              
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- Javascript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/waypoints/lib/jquery.waypoints.min.js"> </script>
    <script src="vendor/jquery.counterup/jquery.counterup.min.js"> </script>
    <script src="vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.min.js"></script>
    <script src="js/jquery.parallax-1.1.3.js"></script>
    <script src="vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
    <script src="vendor/jquery.scrollto/jquery.scrollTo.min.js"></script>
    <script src="js/front.js"></script>
	  	<script>
function goBack() {
    window.history.back();
}
</script>
  </body>
</html>