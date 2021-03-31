<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SK BSS</title>
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
                <div class="login">
					<a href="#" data-toggle="modal" data-target="#login-admin" class="login-btn"><i class="fa fa-sign-in"></i><span class="d-none d-md-inline-block">ADMIN</span></a>
					<a href="#" data-toggle="modal" data-target="#login-teacher" class="login-btn"><i class="fa fa-sign-in"></i><span class="d-none d-md-inline-block">TEACHER</span></a>
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
      <!-- Login admin-->
      <div id="login-admin" tabindex="-1" role="dialog" aria-labelledby="login-modalLabel" aria-hidden="true" class="modal fade">
        <div role="document" class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 id="login-modalLabel" class="modal-title">Admin Login</h4>
              <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
              <form action="action_loginHR.php" method="post">
                <div class="form-group">
                  <input type="text" name="user_name" placeholder="username" class="form-control" required>
                </div>
                <div class="form-group">
                  <input type="password" name="password1" placeholder="password" class="form-control" required>
                </div>
                <center><div class="form-group">
                <button type="submit" class="btn btn-primary" name="login">Login</button>
				  </div></center>
              </form>
              <p class="text-center text-muted">Not registered yet?</p>
              <p class="text-center text-muted"><a href="user-register.php"><strong>Register now</strong></a>! It is easy and done in 1 minute and gives you extra salary and many more lol.</p>
            </div>
          </div>
        </div>
      </div>
      <!-- Login admin end-->
	 <!-- Login teacher-->
      <div id="login-teacher" tabindex="-1" role="dialog" aria-labelledby="login-modalLabel" aria-hidden="true" class="modal fade">
        <div role="document" class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 id="login-modalLabel" class="modal-title">Teacher Login</h4>
              <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
              <form action="action_loginTEACHER.php" method="post">
                <div class="form-group">
                  <input type="text" name="t_name" placeholder="username" class="form-control" required>
                </div>
                <div class="form-group">
                  <input type="password" name="t_ic" placeholder="ic number" class="form-control" required>
                </div>
                <center><div class="form-group">
                <button type="submit" class="btn btn-primary" name="login1">Login</button>
				  </div></center>
              </form>
              
            </div>
          </div>
        </div>
      </div>
      <!-- Login teacher end-->
      <!-- Navbar Start-->
      <header class="nav-holder make-sticky">
        <div id="navbar" role="navigation" class="navbar navbar-expand-lg">
          <div class="container"><a href="index.php" class="navbar-brand home"><img src="img/logosekolah.jpg" height="60px;" width="60p;" alt="SK BSS logo" class="d-none d-md-inline-block"><img src="img/logosekolah-small.png" alt="SKBSS logo" class="d-inline-block d-md-none"><span class="sr-only">SK BSS - go to homepage</span></a><h5>WELCOME TO SEKOLAH KEBANGSAAN <br>BANDAR SUNWAY SEMENYIH SYSTEM</h5>
            <button type="button" data-toggle="collapse" data-target="#navigation" class="navbar-toggler btn-template-outlined"><span class="sr-only">Toggle navigation</span><i class="fa fa-align-justify"></i></button>
            <div id="navigation" class="navbar-collapse collapse">
              <ul class="nav navbar-nav ml-auto">
                <li class="nav-item dropdown active"><a href="javascript: void(0)" data-toggle="dropdown" class="dropdown-toggle">Home <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li class="dropdown-item"><a href="index.php" class="nav-link">Home 1: Default Page</a></li>
                    <li class="dropdown-item"><a href="index2.php" class="nav-link">Home 2: Second Page</a></li>
                    
                  </ul>
                </li>
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
      
      <section style="background: url('img/background.jpg') center center repeat; background-size: cover;" class="bar background-white relative-positioned">
        <div class="container">
          <!-- Carousel Start-->
          <div class="home-carousel">
            <div class="dark-mask mask-primary"></div>
            <div class="container">
              <div class="homepage owl-carousel">
                <div class="item">
                  <div class="row">
                    <div class="col-md-5 text-right">
                      <p><img src="img/logosekolah.jpg" alt="" class="ml-auto"></p>
                      <h1>Intranet School System</h1>
                      <p>Program. Corporate. Agency.<br>Portfolio. Blog. E-commerce.</p>
                    </div>
                    <div class="col-md-7"><img src="img/slider1.png" alt="" class="img-fluid"></div>
                  </div>
                </div>
                <div class="item">
                  <div class="row">
                    <div class="col-md-7 text-center"><img src="img/slider2.png" alt="" class="img-fluid"></div>
                    <div class="col-md-5">
                      <h2>Top 10 Best School in Selangor</h2>
                      <ul class="list-unstyled">
                        <li>Professional Headmaster</li>
                        <li>Quality Teacher</li>
                        <li>Excellent Student</li>
                        <li>Best Environment</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="row">
                    <div class="col-md-5 text-right">
                      <h1>Events</h1>
                      <ul class="list-unstyled">
                        <li>Productive event</li>
                        <li>Fully sponsered</li>
                        <li>Easily understand the objectives</li>
                        <li>Prepared modules</li>
                      </ul>
                    </div>
                    <div class="col-md-7"><img src="img/slider3.png" alt="" class="img-fluid"></div>
                  </div>
                </div>
                <div class="item">
                  <div class="row">
                    <div class="col-md-7"><img src="img/tt.png" alt="" class="img-fluid"></div>
                    <div class="col-md-5">
                      <h1>Easy to monitor</h1>
                      <ul class="list-unstyled">
                        <li>Many function provided</li>
                        <li>Friendly user</li>
						<li>Wowerz gila</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Carousel End-->
        </div>
      </section>
      <section class="bar background-white">
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-4 col-md-6">
              <div class="box-simple">
                <div class="icon-outlined"><i class="fa fa-desktop"></i></div>
                <h3 class="h4">System</h3>
                <p>tepuk amai-amai, belalang kupu-kupu, tepuk adik pandai, emak buat susu. Susu yang manis, santan kelapa muda, adik jangan nangis, emak pergi kerja. pepandai la kau type apa2 nanti man.</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="box-simple">
                <div class="icon-outlined"><i class="fa fa-print"></i></div>
                <h3 class="h4">Print</h3>
                <p>tepuk amai-amai, belalang kupu-kupu, tepuk adik pandai, emak buat susu. Susu yang manis, santan kelapa muda, adik jangan nangis, emak pergi kerja. pepandai la kau type apa2 nanti man.</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="box-simple">
                <div class="icon-outlined"><i class="fa fa-globe"></i></div>
                <h3 class="h4">ALOLO</h3>
                <p>tepuk amai-amai, belalang kupu-kupu, tepuk adik pandai, emak buat susu. Susu yang manis, santan kelapa muda, adik jangan nangis, emak pergi kerja. pepandai la kau type apa2 nanti man.</p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-4 col-md-6">
              <div class="box-simple">
                <div class="icon-outlined"><i class="fa fa-lightbulb-o"></i></div>
                <h3 class="h4">Consulting</h3>
                <p>tepuk amai-amai, belalang kupu-kupu, tepuk adik pandai, emak buat susu. Susu yang manis, santan kelapa muda, adik jangan nangis, emak pergi kerja. pepandai la kau type apa2 nanti man.</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="box-simple">
                <div class="icon-outlined"><i class="fa fa-envelope-o"></i></div>
                <h3 class="h4">Email</h3>
                <p>tepuk amai-amai, belalang kupu-kupu, tepuk adik pandai, emak buat susu. Susu yang manis, santan kelapa muda, adik jangan nangis, emak pergi kerja. pepandai la kau type apa2 nanti man.</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="box-simple">
                <div class="icon-outlined"><i class="fa fa-user"></i></div>
                <h3 class="h4">ZZZ</h3>
                <p>tepuk amai-amai, belalang kupu-kupu, tepuk adik pandai, emak buat susu. Susu yang manis, santan kelapa muda, adik jangan nangis, emak pergi kerja. pepandai la kau type apa2 nanti man.</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="bar background-pentagon no-mb text-md-center">
        <div class="container">
          <div class="heading text-center">
            <h2>Webmaster</h2>
          </div>
          <p class="lead">We are noobies, but we are trying our best to complete this system n to make sure everything works fine and smooth.<br>Good luck to us zzzz</p>
          <!-- Carousel Start-->
          <ul class="owl-carousel testimonials list-unstyled equal-height">
            <li class="item">
              <div class="testimonial d-flex flex-wrap">
                <div class="text">
                  <p>One morning, when To'Ak woke from troubled dreams, he found himself transformed in his bed into a mutan. He lay on his armour-like back, and if he lifted his head a little he could see his squishy belly, slightly munchy and super yummy when grilled.</p>
                </div>
                <div class="bottom d-flex align-items-center justify-content-between align-self-end">
                  <div class="icon"><i class="fa fa-quote-left"></i></div>
                  <div class="testimonial-info d-flex">
                    <div class="title">
                      <h5>To'Ak</h5>
                      <p>CEO, lanun</p>
                    </div>
                    <div class="avatar"><img alt="" src="img/toak.png" class="img-fluid"></div>
                  </div>
                </div>
              </div>
            </li>
            <li class="item">
              <div class="testimonial d-flex flex-wrap">
                <div class="text">
                  <p>Amir thinks he's found the perfect gift for his expectant wife, Mia (Annabelle Wallis) : a vintage doll in a beautiful white dress. However, the couple's delight doesn't last long: One terrible night, devil worshippers invade their home and launch a violent attack against the couple.</p>
                </div>
                <div class="bottom d-flex align-items-center justify-content-between align-self-end">
                  <div class="icon"><i class="fa fa-quote-left"></i></div>
                  <div class="testimonial-info d-flex">
                    <div class="title">
                      <h5>Ainin Damia</h5>
                      <p>CEO, Ayam Kampung</p>
                    </div>
                    <div class="avatar"><img alt="" src="img/mia.png" class="img-fluid"></div>
                  </div>
                </div>
              </div>
            </li>
            <li class="item">
              <div class="testimonial d-flex flex-wrap">
                <div class="text">
                  <p>Her room, a meesy human room although a little too small, lay peacefully between its four familiar walls.
                  A collection of textile samples lay spread out on the table - Sarah was a travelling saleswoman - and above it there hung a picture that she had recently cut out of an illustrated K-Pop's magazine and her crush in a nice, RM2 frame.</p>
                </div>
                <div class="bottom d-flex align-items-center justify-content-between align-self-end">
                  <div class="icon"><i class="fa fa-quote-left"></i></div>
                  <div class="testimonial-info d-flex">
                    <div class="title">
                      <h5>Siti Sarah</h5>
                      <p>CEO, Ayam Kampung</p>
                    </div>
                    <div class="avatar"><img alt="" src="img/sarah.png" class="img-fluid"></div>
                  </div>
                </div>
              </div>
            </li>
            <li class="item">
              <div class="testimonial d-flex flex-wrap">
                <div class="text">
                  <p>"Spider-Man" centers on student To'Ak who, after being bitten by a genetically-altered spider, gains superhuman strength and the spider-like ability to cling to any surface. He vows to use his abilities to complete a system, coming to understand the words of his beloved Sir Hapes: "Kau budak ladang ke budak cs?".</p>
                </div>
                <div class="bottom d-flex align-items-center justify-content-between align-self-end">
                  <div class="icon"><i class="fa fa-quote-left"></i></div>
                  <div class="testimonial-info d-flex">
                    <div class="title">
                      <h5>To'Ak</h5>
                      <p>DESIGNER, Ayam Kampung</p>
                    </div>
                    <div class="avatar"><img alt="" src="img/toak.png" class="img-fluid"></div>
                  </div>
                </div>
              </div>
            </li>
            <li class="item">
              <div class="testimonial d-flex flex-wrap">
                <div class="text">
                  <p>Before she was Wonder Woman, she was Damia, princess of the Amazons, trained to be an unconquerable warrior. Raised on a sheltered island paradise, Damia meets a Nepal pilot (Siti Sarah) who tells her about the massive conflict that's raging in the outside world.</p>
                </div>
                <div class="bottom d-flex align-items-center justify-content-between align-self-end">
                  <div class="icon"><i class="fa fa-quote-left"></i></div>
                  <div class="testimonial-info d-flex">
                    <div class="title">
                      <h5>Ainin Damia</h5>
                      <p>FOUNDER, Ayam Kampung</p>
                    </div>
                    <div class="avatar"><img alt="" src="img/mia.png" class="img-fluid"></div>
                  </div>
                </div>
              </div>
            </li>
          </ul>
          <!-- Carousel End-->
        </div>
      </section>
      <section style="background: url(img/bc.jpg) center top no-repeat; background-size: cover;" class="bar no-mb color-white text-center bg-fixed relative-positioned">
        <div class="dark-mask"></div>
        <div class="container">
          <div class="icon icon-outlined icon-lg"><i class="fa fa-home"></i></div>
          <h3 class="text-uppercase">Do you want to see more?</h3>
          <p class="lead">Nanti lah update yang lain-lain, sekarang ni ini je ada.</p>
          <p class="text-center"><a href="index2.php" class="btn btn-template-outlined-white btn-lg">See another homepage</a></p>
        </div>
      </section>
     
      <section class="bar bg-gray">
        <div class="container">
          <div class="heading text-center">
            <h2>Our Sponsor</h2>
          </div>
          <ul class="list-unstyled owl-carousel customers no-mb">
            <li class="item"><img src="img/kfc.png" alt="" class="img-fluid"></li>
            <li class="item"><img src="img/harihari.png" alt="" class="img-fluid"></li>
            <li class="item"><img src="img/mcd.png" alt="" class="img-fluid"></li>
            <li class="item"><img src="img/kementerian.png" alt="" class="img-fluid"></li>
            <li class="item"><img src="img/pibg.png" alt="" class="img-fluid"></li>
            <li class="item"><img src="img/bankrakyat.png" alt="" class="img-fluid"></li>
          </ul>
        </div>
      </section>

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
              <h4 class="h6">IDOLA</h4>
              <ul class="list-unstyled footer-blog-list">
                <li class="d-flex align-items-center">
                  <div class="image"><img src="img/luffy.png" alt="..." class="img-fluid"></div>
                  <div class="text">
                    <h5 class="mb-0"> <a href="post.html">Hi</a></h5>
                  </div>
                </li>
                <li class="d-flex align-items-center">
                  <div class="image"><img src="img/luffy.png" alt="..." class="img-fluid"></div>
                  <div class="text">
                    <h5 class="mb-0"> <a href="post.html">saya</a></h5>
                  </div>
                </li>
                <li class="d-flex align-items-center">
                  <div class="image"><img src="img/luffy.png" alt="..." class="img-fluid"></div>
                  <div class="text">
                    <h5 class="mb-0"> <a href="post.html">Luffy</a></h5>
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