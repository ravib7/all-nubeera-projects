<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>NubeEra Trainings</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.ico" rel="icon">
  <link href="assets/img/logo.ico" rel="apple-touch-icon">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <!-- <link id="theme-style" rel="stylesheet" href="assets/css/theme.css"> -->

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.footer.css">
  <style>
    .padTop {
      padding-top: 20px;
    }

    .price-old .sizeColor {
      font-size: 12px;
      color: #A9A9A9;
    }
  </style>

</head>

<body>

  <!-- ======= Header ======= -->
  
  <?php
  session_start();
  if(!isset($_SESSION['emailValid'])){
        require 'Templates/navBar.php';
    }
  else
	require 'Templates/user-nav.php';
  ?>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
      <h1>NubeEra Trainings</h1>
      <h2>Supportive Learning Environment and Teaching Quality.</h2>
      <a href="" class="btn-get-started">Get Started</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">


    <section id="counts" class="counts section-bg">
      <div class="container">
        <div class="row counters">
          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">952</span>
            <p>Students Enrolled</p>
          </div>
          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">4</span>
            <p>Categorys</p>
          </div>
          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">50</span>
            <p>Courses</p>
          </div>
          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">10</span>
            <p>Trainers</p>
          </div>
        </div>
      </div>
    </section><!-- End Counts Section -->


    <section id="features" class="features">
      <div class="container" data-aos="fade-up">
        <br>
        <div class="section-title">
          <h2>Course</h2>
          <p>Category</p>
        </div>


        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-lg-3 col-md-4">
            <a href="Category.php">
              <div class="icon-box">
                <i class="ri-line-chart-fill" style="color: #5578ff;"></i>
                <h3><a href="Category.php">Analytics</a></h3>
              </div>
            </a>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
            <a href="Category.php">
              <div class="icon-box">
                <i class="ri-database-2-line" style="color: #5578ff;"></i>
                <h3><a href="Category.php">Big Data</a></h3>
              </div>
            </a>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
            <a href="Category.php">
              <div class="icon-box">
                <i class="ri-cloudy-2-line" style="color: #5578ff;"></i>
                <h3><a href="Category.php">Cloud Computing</a></h3>
              </div>
            </a>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
            <a href="Category.php">
              <div class="icon-box">
                <i class="ri-reactjs-line" style="color: #5578ff"></i>
                <h3><a href="Category.php">DevXXX</a></h3>
              </div>
            </a>
          </div>

        </div>

      </div>
    </section><!-- End Features Section -->

    <!-- ======= Popular Courses Section ======= -->
    <section id="popular-courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Popular</h2>
          <p>Courses</p>
        </div>

        <div class="row" id='getCourses' data-aos="zoom-in" data-aos-delay="100">







        </div>
      </div>
    </section><!-- End Popular Courses Section -->
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About</h2>
          <p>NubeEra</p>
        </div>

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="assets/img/NEV2_500X326.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">

            <p class="font-italic">
              NubeEra is a collaboration of skilled team having years of experience in information technology industry.
            </p>
            <p class="font-italic">
              Feather to our cap are our data scientist leaders, each spending decades of tenure in the industry bringing us plethora of knowledge and unsurpassed skills to help us set new milestones.
            </p>
            <ul>
              <li><i class="icofont-check-circled"></i>Sub-Points</li>
              <li><i class="icofont-check-circled"></i>Sub-Points</li>
              <li><i class="icofont-check-circled"></i>Sub-Points</li>
              <li><i class="icofont-check-circled"></i>Sub-Points</li>
            </ul>

            <a href="www.nubeera.com" class="learn-more-btn">Learn More</a>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->









  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">


    <?php require "Templates/footer_outer.php" ?>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="js/restcall.js"></script>
</body>

</html>