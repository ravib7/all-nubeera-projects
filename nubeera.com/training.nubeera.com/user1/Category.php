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

  <!-- Template Main CSS File -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/style.footer.css">
  <link id="theme-style" rel="stylesheet" href="assets/css/theme.css">

  <style>
      .padTop{
          padding-top:20px;
      }

      .sizeColor{
        font-size: 12px;
        color:#A9A9A9
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

  <!-- ======= Hero Section ======= -->
  <div class="page-header theme-bg-dark py-5 text-center position-relative">
	    <div class="theme-bg-shapes-right"></div>
	    <div class="theme-bg-shapes-left"></div>
	    <div class="container">
		    <h1 class="page-heading single-col-max mx-auto">Category Name</h1>
		    <div class="page-intro single-col-max mx-auto">Short Abstract About Category</div>
		    <div class="main-search-box pt-3 d-block mx-auto">
                 <form class="search-form w-100">
		            <input type="text" placeholder="Search the Category..." name="search" class="form-control search-input">
		            <button type="submit" class="btn search-btn" value="Search"><i class="fas fa-search"></i></button>
		        </form>
             </div>
	    </div>
    </div><!--//page-header-->

  <main id="main">

    



      <br><br><br><br>
    <section id="features" class="features">
      <div class="container" data-aos="fade-up">
        <br>
        <div class="section-title">
          <h2>Course</h2>
          <p>Category</p>
        </div>


        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-lg-3 col-md-4">
            <div class="icon-box">
              <i class="ri-line-chart-fill" style="color: #5578ff;"></i>
              <h3><a href="">Analytics</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="ri-database-2-line" style="color: #5578ff;"></i>
              <h3><a href="">Big Data</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="ri-cloudy-2-line" style="color: #5578ff;"></i>
              <h3><a href="">Cloud Computing</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
            <div class="icon-box">
              <i class="ri-reactjs-line" style="color: #5578ff"></i>
              <h3><a href="">DevXXX</a></h3>
            </div>
          </div>
          
        </div>

      </div>
    </section><!-- End Features Section -->

    <!-- ======= Popular Courses Section ======= -->
    <section id="popular-courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Category Name</h2>
          <p>Courses</p>
        </div>

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          
          <div class="padTop col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="course-item">
              <img src="https://bridgera.com/wp-content/uploads/2019/08/Iot-Big-data-Analytics.jpg" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Category Name</h4>
                  <p class="price">₹ 25032  <del class="sizeColor price-old">&nbsp₹ 1740 </del></p>
                </div>
                <h3><a href="course-details.php">Course Name</a></h3>
                <p>Course Descriprtion</p>
                <div class="bottom-wrap">
                    <a href="#" class="float-right btn btn-light btn-icon-split">
                      <span class="icon text-gray-600">
                        <i class="fas fa-credit-card"></i>
                      </span>
                      <span class="text">Buy</span>
                    </a>
                    <a href="#" class="float-right btn btn-light btn-icon-split">
                      <span class="icon text-gray-600">
                        <i class="fas fa-shopping-cart"></i>
                      </span>
                      <span class="text">Add</span>
                    </a>
                </div>
                <br><br><br>
                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                    <img src="assets/img/trainers/unknown.png" class="img-fluid" alt="">
                    <span>Instructor Name</span>
                  </div>
                  <div class="trainer-rank d-flex align-items-center">
                    <i class="bx bx-user"></i>&nbsp;35
                    &nbsp;&nbsp;
                    <i class="bx bx-heart"></i>&nbsp;42
                  </div>
                </div>
              </div>
            </div>
          </div> <!-- End Course Item-->

          <div class="padTop col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="course-item">
              <img src="https://images.hrtechnologist.com/images/uploads/content_images/what_is_people_analytics_5da987977cfcd.png" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Category Name</h4>
                  <p class="price">₹ 25032</p>
                </div>

                <h3><a href="course-details.php">Course Name</a></h3>
                <p>Course Descriprtion</p>
                <div class="bottom-wrap">
                    <a href="#" class="float-right btn btn-light btn-icon-split">
                      <span class="icon text-gray-600">
                        <i class="fas fa-credit-card"></i>
                      </span>
                      <span class="text">Buy</span>
                    </a>
                    <a href="#" class="float-right btn btn-light btn-icon-split">
                      <span class="icon text-gray-600">
                        <i class="fas fa-shopping-cart"></i>
                      </span>
                      <span class="text">Add</span>
                    </a>
                </div>
                <br><br><br>
                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                    <img src="assets/img/trainers/unknown.png" class="img-fluid" alt="">
                    <span>Instructor Name</span>
                  </div>
                  <div class="trainer-rank d-flex align-items-center">
                    <i class="bx bx-user"></i>&nbsp;35
                    &nbsp;&nbsp;
                    <i class="bx bx-heart"></i>&nbsp;42
                  </div>
                </div>
              </div>
            </div>
          </div> <!-- End Course Item-->
          

          <div class="padTop col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="course-item">
              <img src="https://niveldecalidad.com/wp-content/uploads/2018/06/google-analytics.jpg" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Category Name</h4>
                  <p class="price">₹ 25032 </p>
                </div>
                <h3><a href="course-details.php">Course Name</a></h3>
                <p>Course Descriprtion</p>
                <div class="bottom-wrap">
                    <a href="#" class="float-right btn btn-light btn-icon-split">
                      <span class="icon text-gray-600">
                        <i class="fas fa-credit-card"></i>
                      </span>
                      <span class="text">Buy</span>
                    </a>
                    <a href="#" class="float-right btn btn-light btn-icon-split">
                      <span class="icon text-gray-600">
                        <i class="fas fa-shopping-cart"></i>
                      </span>
                      <span class="text">Add</span>
                    </a>
                </div>
                <br><br><br>
                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                    <img src="assets/img/trainers/unknown.png" class="img-fluid" alt="">
                    <span>Instructor Name</span>
                  </div>
                  <div class="trainer-rank d-flex align-items-center">
                    <i class="bx bx-user"></i>&nbsp;35
                    &nbsp;&nbsp;
                    <i class="bx bx-heart"></i>&nbsp;42
                  </div>
                  
                </div>
                
              </div>
            </div>
          </div> <!-- End Course Item-->


          <div class="padTop col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="course-item">
              <img src="https://webcdn-adespressoinc.netdna-ssl.com/wp-content/uploads/2018/06/TWITTER-ANALYTICS-2018-06-21.jpg" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Category Name</h4>
                  <p class="price">₹ 25032</p>
                </div>

                <h3><a href="course-details.php">Course Name</a></h3>
                <p>Course Descriprtion</p>
                <div class="bottom-wrap">
                    <a href="#" class="float-right btn btn-light btn-icon-split">
                      <span class="icon text-gray-600">
                        <i class="fas fa-credit-card"></i>
                      </span>
                      <span class="text">Buy</span>
                    </a>
                    <a href="#" class="float-right btn btn-light btn-icon-split">
                      <span class="icon text-gray-600">
                        <i class="fas fa-shopping-cart"></i>
                      </span>
                      <span class="text">Add</span>
                    </a>
                </div>
                <br><br><br>
                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                    <img src="assets/img/trainers/unknown.png" class="img-fluid" alt="">
                    <span>Instructor Name</span>
                  </div>
                  <div class="trainer-rank d-flex align-items-center">
                    <i class="bx bx-user"></i>&nbsp;35
                    &nbsp;&nbsp;
                    <i class="bx bx-heart"></i>&nbsp;42
                  </div>
                </div>
              </div>
            </div>
          </div> <!-- End Course Item-->

          <div class="padTop col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="course-item">
              <img src="assets/img/course-2.jpg" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Category Name</h4>
                  <p class="price">₹ 25032</p>
                </div>
                <div class="bottom-wrap">
                    <a href="#" class="float-right btn btn-light btn-icon-split">
                      <span class="icon text-gray-600">
                        <i class="fas fa-credit-card"></i>
                      </span>
                      <span class="text">Buy</span>
                    </a>
                    <a href="#" class="float-right btn btn-light btn-icon-split">
                      <span class="icon text-gray-600">
                        <i class="fas fa-shopping-cart"></i>
                      </span>
                      <span class="text">Add</span>
                    </a>
                </div>
                <br><br><br>

                <h3><a href="course-details.php">Course Name</a></h3>
                <p>Course Descriprtion</p>
                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                    <img src="assets/img/trainers/unknown.png" class="img-fluid" alt="">
                    <span>Instructor Name</span>
                  </div>
                  <div class="trainer-rank d-flex align-items-center">
                    <i class="bx bx-user"></i>&nbsp;35
                    &nbsp;&nbsp;
                    <i class="bx bx-heart"></i>&nbsp;42
                  </div>
                </div>
              </div>
            </div>
          </div> <!-- End Course Item-->

          <div class="padTop col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="course-item">
              <img src="assets/img/aws.jpg" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Category Name</h4>
                  <p class="price">₹ 25032</p>
                </div>


                <h3><a href="course-details.php">Course Name</a></h3>
                <p>Course Descriprtion</p>
                <div class="bottom-wrap">
                    <a href="#" class="float-right btn btn-light btn-icon-split">
                      <span class="icon text-gray-600">
                        <i class="fas fa-credit-card"></i>
                      </span>
                      <span class="text">Buy</span>
                    </a>
                    <a href="#" class="float-right btn btn-light btn-icon-split">
                      <span class="icon text-gray-600">
                        <i class="fas fa-shopping-cart"></i>
                      </span>
                      <span class="text">Add</span>
                    </a>
                </div>
                <br><br><br>
                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                    <img src="assets/img/trainers/unknown.png" class="img-fluid" alt="">
                    <span>Instructor Name</span>
                  </div>
                  <div class="trainer-rank d-flex align-items-center">
                    <i class="bx bx-user"></i>&nbsp;35
                    &nbsp;&nbsp;
                    <i class="bx bx-heart"></i>&nbsp;42
                  </div>
                </div>
              </div>
            </div>
          </div> <!-- End Course Item-->

          <div class="padTop col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="course-item">
              <img src="assets/img/course-2.jpg" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Category Name</h4>
                  <p class="price">₹ 25032</p>
                </div>

                <h3><a href="course-details.php">Course Name</a></h3>
                <p>Course Descriprtion</p>
                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                    <img src="assets/img/trainers/unknown.png" class="img-fluid" alt="">
                    <span>Instructor Name</span>
                  </div>
                  <div class="trainer-rank d-flex align-items-center">
                    <i class="bx bx-user"></i>&nbsp;35
                    &nbsp;&nbsp;
                    <i class="bx bx-heart"></i>&nbsp;42
                  </div>
                </div>
              </div>
            </div>
          </div> <!-- End Course Item-->


          

          
        </div>
      </div>
    </section><!-- End Popular Courses Section -->

   <!-- ======= Counts Section ======= -->
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

</body>

</html>