<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Register Account</title>
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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>

  <!-- CHECK PASSWORD SAMA KE TAK -->
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script type="text/javascript"><!--
    function checkPasswordMatch() {
    var password1 = $("#password1").val();
    var password2 = $("#password2").val();

    if (password1 != password2)
        $("#divCheckPasswordMatch").html("Passwords do not match!").addClass('text-danger').removeClass('text-success');
    else if ((password1 == 0) && (password2 == 0))
        $("#divCheckPasswordMatch").html("Password is required").addClass('text-danger').removeClass('text-success');
    else
        $("#divCheckPasswordMatch").html("Passwords match!").addClass('text-success').removeClass('text-danger');
}
//--></script>

<!-- CHECK USRNAME EXIST -->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">

function checkname()
{
 var user_name=document.getElementById( "user_name" ).value;
  
 if(user_name)
 {
  $.ajax({
  type: 'post',
  url: 'checkdata.php',
  data: {
   username:user_name,
  },
  success: function (response) {
   $( '#name_status' ).html(response);
   if(response=="OK") 
   {
    return true;  
   }
   else
   {
    return false; 
   }
  }
  });
 }
 else
 {
  $( '#name_status' ).html("");
  return false;
 }
}


function checkall()
{
 var namehtml=document.getElementById("name_status").innerHTML;
 

 if((namehtml)=="OK")
 {
  return true;
 }
 else
 {
  return false;
 }
}

</script>

</head>

<style type="text/css">
  .text-success {
    color: #28a745; 
}
.text-danger {
    color: #dc3545;
}
</style>

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
                <div class="login"><a href="index.php" data-toggle="modal" data-target="#login-admin" class="login-btn"><i class="fa fa-home"></i><span class="d-none d-md-inline-block">HOME</span></a></div>
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
          <div class="container"><a href="index.php" class="navbar-brand home"><img src="img/logosekolah.jpg" height="60px;" width="60p;" alt="SK BSS logo" class="d-none d-md-inline-block"><img src="img/logosekolah-small.png" alt="SKBSS logo" class="d-inline-block d-md-none"><span class="sr-only">SK BSS - go to homepage</span></a><h5>WELCOME TO SEKOLAH KEBANGSAAN <br>BANDAR SUNWAY SEMENYIH SYSTEM</h5>
            <button type="button" data-toggle="collapse" data-target="#navigation" class="navbar-toggler btn-template-outlined"><span class="sr-only">Toggle navigation</span><i class="fa fa-align-justify"></i></button>
            <div id="navigation" class="navbar-collapse collapse">
              <ul class="nav navbar-nav ml-auto">

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
			  
      <div id="heading-breadcrumbs">
        <div class="container">
          <div class="row d-flex align-items-center flex-wrap">
            <div class="col-md-7">
              <h1 class="h2">New Account / Sign In</h1>
            </div>
            <div class="col-md-5">
              <ul class="breadcrumb d-flex justify-content-end">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active">New Account / Sign In</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div id="content">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <div class="box">
                <h2 class="text-uppercase">New account</h2>
                <p class="lead">Not our registered admin yet?</p>
                <p>With registration with our new system, fantastic interface and much more opens to you! The whole process will not take you more than a minute!</p>
                <p class="text-muted">If you have any questions, please feel free to <a href="contact.php">contact us</a>, our customer service center is working for you 24/7.</p>
                <hr>
                <form action="signup.php" method="post">

                  <div class="form-group">
                    <label for="Username">Username</label>
                    <input type="text" placeholder="username" id="user_name" name="user_name" class="form-control" onkeyup="checkname();" required>
                    <span role="alert" style="color:blue;" id="name_status"></span>
                  </div>
                  <div class="form-group">
                    <label for="password-login">Password</label>
                    <input type="password" placeholder="Password" id="password1" name="password1" class="form-control" required>
                  </div>
				          <div class="form-group">
                    <label for="password-login">Re-type Password (Confirmation)</label>
                    <input type="password" placeholder="Re-type Password" id="password2" name="password2" class="form-control" onkeyup="checkPasswordMatch();" required>
                    
                  </div>
                  <span class="registrationFormAlert" id="divCheckPasswordMatch"></span>
                  <div class="text-center">
                    <button type="submit" name="add" class="btn btn-template-outlined"><i class="fa fa-user-md"></i> Register</button>
                  </div>
                </form>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="box">
                <h2 class="text-uppercase">Login</h2>
                <p class="lead">Already have an account?</p>
                <p class="text-muted">Haa masuk-masuk jangan malu-malu, buat lah macam rumah sendiri. Tak faham boleh tanya lah yeee..</p>
                <hr>
                <form action="action_loginHR.php" method="post">
                  <div class="form-group">
                    <label for="email">Username</label>
                    <input type="text" name="user_name" placeholder="username" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password1" placeholder="password" class="form-control" required>
                  </div>
                  <div class="text-center">
                    <button name="login" type="submit" class="btn btn-template-outlined"><i class="fa fa-sign-in"></i> Log in</button>
                  </div>
                </form>
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
                    <h5 class="mb-0"> <a href="404.php">Blog post name</a></h5>
                  </div>
                </li>
                <li class="d-flex align-items-center">
                  <div class="image"><img src="img/luffy.png" alt="..." class="img-fluid"></div>
                  <div class="text">
                    <h5 class="mb-0"> <a href="404.php">Blog post name</a></h5>
                  </div>
                </li>
                <li class="d-flex align-items-center">
                  <div class="image"><img src="img/luffy.png" alt="..." class="img-fluid"></div>
                  <div class="text">
                    <h5 class="mb-0"> <a href="404.php">Very very long blog post name</a></h5>
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
    <script src="distribution/vendor/jquery/jquery.min.js"></script>
    <script src="distribution/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="distribution/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="distribution/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="distribution/vendor/waypoints/lib/jquery.waypoints.min.js"> </script>
    <script src="distribution/vendor/jquery.counterup/jquery.counterup.min.js"> </script>
    <script src="distribution/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="distribution/vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.min.js"></script>
    <script src="distribution/js/jquery.parallax-1.1.3.js"></script>
    <script src="distribution/vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
    <script src="distribution/vendor/jquery.scrollto/jquery.scrollTo.min.js"></script>
    <script src="distribution/js/front.js"></script>
  </body>
</html>