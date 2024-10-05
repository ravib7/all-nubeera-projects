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
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css'>

  

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
  <link rel="stylesheet" href="assets/css/trainer.css">
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
  
<?php
  session_start();
  if(!isset($_SESSION['emailValid'])){
        require 'Templates/navBar.php';
        session_destroy();
    }
  else
      require 'Templates/user-nav.php';
  ?>

  <main id="main">
    <br><br><br><br>
    <!-- ======= Cource Details Section ======= -->
    <section id="course-details" class="course-details">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-8">
            <img id='courseImage' src="" class="img-fluid" alt="">
            <h3 id='courseTitle'></h3>
            <p id='shortDescription'>
             <!-- Short Description -->
            </p>
          </div>
          <div class="col-lg-4">
            <div class="course-info d-flex justify-content-between align-items-center">
              <h5>Category</h5>
              <p id='categoryName' ><a href="#"></a></p>
            </div>
            <div class="course-info d-flex justify-content-between align-items-center">
              <h5>Course Duration</h5>
              <p id='courseDuration'></p>
            </div>
            <div class="course-info d-flex justify-content-between align-items-center">
              <h5>Language</h5>
              <p id='courseLanguage'><a href="#"></a></p>
            </div>
            <div class="course-info d-flex justify-content-between align-items-center">
              <h5>Level</h5>
              <p id='level'><a href="#"></a></p>
            </div>
            <div class="course-info d-flex justify-content-between align-items-center">
              <h5>Trainer</h5>
              <p id='trainerName'><a href="#"></a></p>
            </div>
            <div class="course-info d-flex justify-content-between align-items-center">
              <h5>Course Fee</h5>
              <p id='price'>Free</p>
            </div>
            <br>
            <div class="center">
            <div class="text-center"><button class="enroll get-started-btn" type="button">Enroll</button></div>
               <!-- <center><a href="" style="height:20%" >Get Enroll</a></center> -->
            </div>
            <br>
            <div class="form-group">
                <input type="text" class="form-control" name="" id="" placeholder="Redeem Code" text-align="center" onkeyup="this.value = this.value.toUpperCase();" maxlength="12" data-rule="minlen:4" data-msg="Enter Reedm Code If you have..." />
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Cource Details Section -->











     <!-- ======= Cource Details Tabs Section ======= -->
     <section id="cource-details-tabs" class="cource-details-tabs">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-toggle="tab" href="#tab-1">What you'll learn</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab-2">Requirements</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab-3">Description</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab-4">Who this course is for</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab-5">Title</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="tab-content">

              <div class="tab-pane active show" id="tab-1">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>What you'll learn</h3>
                    <p id='outcomes' ></p>
                    <p></p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2" data-aos="fade-left" data-aos-delay="500">
                    <img src="https://previews.123rf.com/images/makc76/makc761904/makc76190400013/124138758-creative-idea-business-innovation-teamwork-searching-for-new-solutions-small-people-look-at-the-big-.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>

              <div class="tab-pane" id="tab-2">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Requirements</h3>
                    <p id='requirements' ></p>
                    <p></p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2"  data-aos="fade-left" data-aos-delay="500">
                    <img src="https://www.digitallabdubai.com/wp-content/uploads/2019/07/Graphic-Design.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>

              <div class="tab-pane" id="tab-3">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Description</h3>
                    <p id='description' ></p>
                    <p></p>
                </div>
                 <div class="col-lg-4 text-center order-1 order-lg-2"  data-aos="fade-left" data-aos-delay="500">
                    <img src="https://www.digitallabdubai.com/wp-content/uploads/2019/07/Graphic-Design.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>

              <div class="tab-pane" id="tab-4">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Who this course is for</h3>
                    <p id='target' ></p>
                    <p></p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2"  data-aos="fade-left" data-aos-delay="500">
                    <img src="https://www.digitallabdubai.com/wp-content/uploads/2019/07/Graphic-Design.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>

              <div class="tab-pane" id="tab-4">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Title</h3>
                    <p class="font-italic">Dyanmic Data</p>
                    <p>Dyamic Data</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2"  data-aos="fade-left" data-aos-delay="500">
                    <img src="https://www.digitallabdubai.com/wp-content/uploads/2019/07/Graphic-Design.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>

      </div>
    </section><!-- End Cource Details Tabs Section -->

    <!-- ======= Course Content =======  -->
    <section id="course-details" class="course-details">
    <div class="container" data-aos="fade-up">
        <div class="course-curriculum-box">


          <div class="course-curriculum-title clearfix">
            <div class="title float-left">Course Content</div>
            <div class="float-right">
              <span class="total-lectures">
                Total Length of Course
              </span>
              <span class="total-time">
                Total Min
              </span>
            </div>
          </div>
		  
		  
		  
          <div class="course-curriculum-accordion">
            <div class="lecture-group-wrapper">
              <div class="lecture-group-title clearfix" data-toggle="collapse" data-target="#collapse1" aria-expanded="true">
                <div class="title float-left">
                  Curriculum
                </div>
                <div class="float-right">
                  <span class="total-lectures">
                    1
                  </span>
                  <span class="total-time">
                   960
                  </span>
                </div>
              </div>
			  
			  
			
			  

              <div id="collapse1" class="lecture-list collapse show">
                <ul>
                <a href="course-display.php">
                  <li class="lecture has-preview">
                    <span class="lecture-title">Intro</span>
                    <span class="lecture-time float-right">12.09</span>
                    <!-- <span class="lecture-preview float-right" data-toggle="modal" data-target="#CoursePreviewModal">Preview</span> -->
                 </li>
                </a>
                 

              </ul>
            </div>
			
			
        </div>
      </div>
    </div>

</div>
</section>


<section class="course-details">
<div class="container" data-aos="fade-up">
    <center>
    <div id="panel" class="center panel-container">
     <h3>How satisfied are our Students with this Course</h3>
      <div class="ratings-container">
      
        <div class="rating">
          <img src="https://image.flaticon.com/icons/svg/187/187150.svg" alt=""/><br>
          <small>Terreble</small>
          <div class="on-hover-rating"><h6 style="text-align:center;">&nbsp12%</h6></div>
        </div>

        <div class="rating">
          <img src="https://image.flaticon.com/icons/svg/187/187136.svg" alt=""/><br>
          <small>Bad</small>
          <div class="on-hover-rating"><h6 style="text-align:center;">&nbsp23%</h6></div>
        </div>

        <div class="rating">
          <img src="https://image.flaticon.com/icons/svg/187/187130.svg" alt=""/><br>
          <small>Okay</small>
          <div class="on-hover-rating"><h6 style="text-align:center;">&nbsp12%</h6></div>
        </div>

        <div class="rating">
          <img src="https://image.flaticon.com/icons/svg/187/187134.svg" alt=""/><br>
          <small>Good</small>
          <div class="on-hover-rating"><h6 style="text-align:center;">&nbsp12%</h6></div>
        </div>

        <div class="rating">
          <img src="https://image.flaticon.com/icons/svg/187/187133.svg" alt=""/><br>
          <small>Excellent</small>
          <div class="on-hover-rating"><h6 style="text-align:center;">&nbsp12%</h6></div>
        </div>
        
      </div>
     
    </div>
  </center>
  </div>
</section>




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
    
  <script src="js/restdetails.js"></script>

</body>

</html>