<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Edit Student Information</title>
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
		$query = "SELECT * FROM student  where s_ic = $s_ic";
		$result = mysqli_query($conn,$query) or die('SQL error teacher ');
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC); 
		
	
		//to edit data
		if (isset($_POST['edit'])) {
			
			$s_ic = addslashes($_POST['s_ic']);
			$s_name = addslashes($_POST['s_name']);
			$s_address = addslashes($_POST['s_address']);
			$state_id = addslashes($_POST['state_id']);
			$s_age = addslashes($_POST['s_age']);
			$s_nophone = addslashes($_POST['s_nophone']);
			$s_email = addslashes($_POST['s_email']);
			$form_id = addslashes($_POST['form_id']);
			$class_id = addslashes($_POST['class_id']);

			
			include 'dbconnect.php';
			
			$query = "UPDATE student SET 
				s_ic = '$s_ic',
				s_name = '$s_name',
				s_address = '$s_address',
				state_id = '$state_id',
				s_age = '$s_age',
				s_nophone = '$s_nophone',
				s_email = '$s_email',
				form_id = '$form_id',
				class_id = '$class_id'
				WHERE s_ic = '$s_ic'";
				
			$result = mysqli_query($conn,$query);
			if ($result){
				//header("Location: info_student.php?s_ic={$rowA['s_ic']}");
				echo"<script type='text/javascript'>alert('UPDATE SUCCESS')</script>";
			}
			else
				echo"<script type='text/javascript'>alert('UPDATE FAILED')</script>";
		}
	?>
	
		 <?php 

		if (isset($_GET['s_ic']))
			$s_ic = $_GET['s_ic'];
		else
			$s_ic = 0;
		
		include 'dbconnect.php';
		if (isset($_POST['submit']) && isset($_POST['state_id'])) {
			  $state_id = addslashes($_POST['state_id']);
             }
		$query11 = "SELECT s.*, t.* FROM state t, student s where s.state_id=t.state_id AND s.s_ic=$s_ic";
		$result11 = mysqli_query($conn,$query11) or die('SQL error gender');
		$row11 = mysqli_fetch_array($result11, MYSQLI_ASSOC);
          ?>
          
	  <?php 
            if (isset($_GET['state_id'])) 
			{$state_id = $_GET['state_id'];}
		else 
			$state_id = 0;
	
		
		include 'dbconnect.php';
		if (isset($_POST['submit']) && isset($_POST['state_id'])) {
			  $state_id = addslashes($_POST['state_id']);
             }
		$query1 = "SELECT * FROM state ";
		$result1 = mysqli_query($conn,$query1) or die('SQL error state 1');
          ?>
	
	  <?php 

		if (isset($_GET['s_ic']))
			$s_ic = $_GET['s_ic'];
		else
			$s_ic = 0;
		
		include 'dbconnect.php';
		if (isset($_POST['submit']) && isset($_POST['g_id'])) {
			  $g_id = addslashes($_POST['g_id']);
             }
		$query33 = "SELECT s.*, g.* FROM gender g, student s where s.g_id=g.g_id AND s.s_ic=$s_ic";
		$result33 = mysqli_query($conn,$query33) or die('SQL error gender');
		$row33 = mysqli_fetch_array($result33, MYSQLI_ASSOC);
          ?>
          
	  <?php 
            if (isset($_GET['g_id'])) 
			{$g_id = $_GET['g_id'];}
		else 
			$g_id = 0;
	
		
		include 'dbconnect.php';
		if (isset($_POST['submit']) && isset($_POST['g_id'])) {
			  $g_id = addslashes($_POST['g_id']);
             }
		$query3 = "SELECT * FROM gender ";
		$result3 = mysqli_query($conn,$query3) or die('SQL error gender 1');
          ?>

         
	
           <?php 

		if (isset($_GET['s_ic']))
			$s_ic = $_GET['s_ic'];
		else
			$s_ic = 0;
		
		include 'dbconnect.php';
		if (isset($_POST['submit']) && isset($_POST['class_id'])) {
			  $class_id = addslashes($_POST['class_id']);
             }
		$query44 = "SELECT s.*, c.* FROM class c, student s where s.class_id=c.class_id AND s.s_ic=$s_ic";
		$result44 = mysqli_query($conn,$query44) or die('SQL error class');
		$row44 = mysqli_fetch_array($result44, MYSQLI_ASSOC);
          ?>
          
	  <?php 
            if (isset($_GET['class_id'])) 
			{$class_id = $_GET['class_id'];}
		else 
			$class_id = 0;
	
		
		include 'dbconnect.php';
		if (isset($_POST['submit']) && isset($_POST['class_id'])) {
			  $class_id = addslashes($_POST['class_id']);
             }
		$query4 = "SELECT * FROM class ";
		$result4 = mysqli_query($conn,$query4) or die('SQL error class');
          ?>
	
	<?php 

		if (isset($_GET['s_ic']))
			$s_ic = $_GET['s_ic'];
		else
			$s_ic = 0;
		
		include 'dbconnect.php';
		if (isset($_POST['submit']) && isset($_POST['form_id'])) {
			  $form_id = addslashes($_POST['form_id']);
             }
		$query55 = "SELECT s.*, f.* FROM form f, student s where s.form_id=f.form_id AND s.s_ic=$s_ic";
		$result55 = mysqli_query($conn,$query55) or die('SQL error form');
		$row55 = mysqli_fetch_array($result55, MYSQLI_ASSOC);
          ?>
          
	  <?php 
            if (isset($_GET['form_id'])) 
			{$form_id = $_GET['form_id'];}
		else 
			$form_id = 0;
	
		
		include 'dbconnect.php';
		if (isset($_POST['submit']) && isset($_POST['form_id'])) {
			  $form_id = addslashes($_POST['form_id']);
             }
		$query5 = "SELECT * FROM form ";
		$result5 = mysqli_query($conn,$query5) or die('SQL error form 1');
          ?>
		
      <div id="heading-breadcrumbs">
        <div class="container">
          <div class="row d-flex align-items-center flex-wrap">
            <div class="col-md-7">
              <h1 class="h2"><?php echo $row['s_name']; ?></h1>
            </div>
            <div class="col-md-5">
              <ul class="breadcrumb d-flex justify-content-end">
                <li class="breadcrumb-item"><a href="homepage_admin.php">Home</a></li>
                <li class="breadcrumb-item"><a href="list_teacher.php">Student</a></li>
                <li class="breadcrumb-item active"><?php echo $row['s_name']; ?></li>
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
            <tr>
              <th>NAME</th>
              <td><input class="form-control" type="text"  name="s_name" value="<?php echo $row['s_name']; ?>"></td>
            </tr>

            <tr>
              <th>IC NUMBER</th>
              <td><input class="form-control" type="text" name="s_ic" value="<?php echo $row['s_ic']; ?>"></td>
            </tr>

            <tr>
              <th>ADDRESS</th>
              <td><input class="form-control" type="text"  name="s_address" value="<?php echo $row['s_address']; ?>"></td>
            </tr>
             
             <tr>
              <th><label for="state_id">STATE </label></th>
              <td><select class="form-control" id="state_id" name="state_id">
        			<option value="<?php echo ($row11['state_id']); ?>" hidden><?php echo ($row11['state_name']);?></option>
					<?php while ($row1=mysqli_fetch_array($result1,MYSQLI_ASSOC)){ ?>
					<option value="<?php echo $row1['state_id']; ?>" ><?php echo $row1['state_name']; ?></option>
					<?php } ?>
    			  </select></td>
             </tr>
              
              <tr>
              	<th>EMAIL</th>
              	<td><input class="form-control" type="text"  name="s_email" value="<?php echo $row['s_email']; ?>"></td>
              </tr>
              
              <tr>
              	<th>PHONE NUMBER</th>
              	<td><input class="form-control" type="text"  name="s_nophone" value="<?php echo $row['s_nophone']; ?>"></td>
              </tr>
              
              <tr>
              	<th>AGE</th>
              	<td><input class="form-control" type="text"  name="s_age" value="<?php echo $row['s_age']; ?>"></td>
              </tr>
              
              <tr>
              	<th>GENDER</th>
              	<td><select class="form-control" id="g_id" name="g_id">
      				<option value="<?php echo ($row33['g_id']); ?>" hidden><?php echo ($row33['g_type']); ?></option>
					<?php while ($row3=mysqli_fetch_array($result3,MYSQLI_ASSOC)){ ?>
					<option value="<?php echo $row3['g_id']; ?>" ><?php echo $row3['g_type']; ?></option>
					<?php } ?>
    				</select></td>
              </tr>
              
              <tr>
              	 <th>FORM</th>
              	 <td><select class="form-control" id="form_id" name="form_id">
      				<option value="<?php echo ($row55['form_id']); ?>" hidden><?php echo ($row55['form_name']); ?></option>
					<?php while ($row5=mysqli_fetch_array($result5,MYSQLI_ASSOC)){ ?>
					<option value="<?php echo $row5['form_id']; ?>" ><?php echo $row5['form_name']; ?></option>
					<?php } ?>
    				</select></td>
              </tr>
             
             <tr>
             	 <th>CLASS</th>
             	 <td><select class="form-control" id="class_id" name="class_id">
            		<option value="<?php echo ($row44['class_id']); ?>" hidden><?php echo ($row44['class_name']); ?></option>
					<?php while ($row4=mysqli_fetch_array($result4,MYSQLI_ASSOC)){ ?>
					<option value="<?php echo $row4['class_id']; ?>" ><?php echo $row4['class_name']; ?></option>
					<?php } ?>
    				</select></td>
             </tr>
                    </tbody>
                  </table>
                </div>
				  <center><td><input name="edit" type="submit" value="SAVE" class="btn btn-outline-success"></td></center>
				  <br><center><td><a href="list_student.php?s_ic=<?php echo $row['s_ic']; ?>" class="btn btn-dark">CLOSE</a></td></center>
              </div>
            </div>
			  
			  </form>
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
  </body>
</html>