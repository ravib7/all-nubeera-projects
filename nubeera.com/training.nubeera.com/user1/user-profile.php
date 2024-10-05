<?php 
session_start();
if(!isset($_SESSION['emailValid'])){
  header('Location:../index.php');
  die();
}
?>

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
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css'

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

  <!-- Template Main CSS File -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/style.footer.css">
  <link rel="stylesheet" href="assets/css/course-content.css">
  <!-- <link rel="stylesheet" href="assets/css/trainer.css"> -->
  <link rel="stylesheet" href="assets/css/ratings.css">
  <!-- <link id="theme-style" rel="stylesheet" href="../documentation/assets/css/theme.css"> -->

  <style>
      .padTop{
          padding-top:20px;
      }

      .sizeColor{
        font-size: 12px;
        color:#A9A9A9
      }

      .enroll{
          text-decoration:none;
          height:40%;
      }
  </style>

</head>

<body>

  <!-- ======= Header ======= -->
  
  <?php require 'Templates/user-nav.php';?>

  <main id="main">
    <br><br><br><br>
    
     <!-- ======= Popular Courses Section ======= -->
    <section id="popular-courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>USER`s</h2>
          <p>Learnings</p>
        </div>

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          

          
          <div class="padTop col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="row" id='getCourses' data-aos="zoom-in" data-aos-delay="100">







             </div> 
          </div> <!-- End Course Item-->

          </div>
    </section>

     <section id="user-stat" class="pricing user-stat">
      <div class="container" data-aos="fade-up">

      <div class="section-title">
          <h2>USER`s</h2>
          <p>Statistics</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="box featured">
              <h3>Credits</h3>
              <h4>45<sup>*</sup><span>&nbspPoints</span></h4>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">See More</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
            <div class="box featured">
              <h3>Enrolled</h3>
              <h4>4<span> Course</span></h4>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">See More</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
            <div class="box featured">
              <h3>Accomplishment</h3>
              <h4>0<span> Courses</span></h4>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">See More</a>
              </div>
            </div>
          </div>

          <!-- <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
            <div class="box featured">
              <h3>Wishlist</h3>
              <h4>2<span> Courses</span></h4>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">See More</a>
              </div>
            </div>
          </div> -->

        </div>

      </div>
    </section><!-- End Pricing Section -->





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
  <script src="./assets/js/main.js"></script>
  <script src="./js/userprofile.js"></script>

</body>

</html>