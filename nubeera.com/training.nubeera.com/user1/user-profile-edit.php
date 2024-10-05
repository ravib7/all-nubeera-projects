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
  <link rel="stylesheet" href="assets/css/trainer.css">
  <link rel="stylesheet" href="assets/css/ratings.css">
  <!-- <link id="theme-style" rel="stylesheet" href="../documentation/assets/css/theme.css"> -->
<link rel="stylesheet" href="assets/css/user-edit.css">
<link rel="stylesheet" href="assets/css/tabs.css">
<style>
  .about .content .learn-more-btn {
  background: #4285f4;
  color: #fff;
  border-radius: 50px;
  padding: 8px 25px 9px 25px;
  white-space: nowrap;
  transition: 0.3s;
  font-size: 14px;
  display: inline-block;
}

.about .content .learn-more-btn:hover {
  background: #2958a5;
  color: #fff;
}

@media (max-width: 768px) {
  .about .content .learn-more-btn {
    margin: 0 48px 0 0;
    padding: 6px 18px;
  }
}


.fill {
    display: flex;
    justify-content: center;
    align-items: center;
    overflow: hidden
}
.fill img {
    flex-shrink: 0;
    min-width: 100%;
    min-height: 100%
}
</style>



</head>
<body>

 

  <main id="main">

   <!-- ======= Header ======= -->
  
   <?php require 'Templates/user-nav.php';?>

    <!-- ======= Contact Section ======= -->


    <!-- <section id="contact" class="contact">

    <br><br><br><br><br>

    <div class="container" data-aos="fade-up"> 
    <div class="blog-slider">
  <div class="blog-slider__wrp swiper-wrapper">
    <div class="blog-slider__item swiper-slide">
      <div class="fill blog-slider__img">
        
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQmqi2z3guFMK6jzMKrbLX7n9orbrk8c_ma-Q&usqp=CAU" onerror="this.src='https://thednetworks.com/wp-content/uploads/2012/01/picture_not_available_400-300.png'" alt="">
      </div>
      <div class="blog-slider__content">

      <h3>Fname+" "+Lname </h3>
      <h6>Designation or Short Bio of User</h6>
      <br>
      <ul class="social-icons">
          <li><a class="facebook" href=""><i class="fa fa-facebook"></i></a></li>
          <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a class="github" href=""><i class="fa fa-github"></i></a></li>
          <li><a class="linkedin" href=""><i class="fa fa-linkedin"></i></a></li>
        </ul>
        <br><br>
        <div class="upload-btn-wrapper">
          <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i>&nbsp&nbspUpload ProfiePic</button>
          <input type="file" name="myfile" />
        </div>
     
    </div>
</div>    
</div>
  
</div>
 


</section>

 -->



<br><br>




<section>
      
      <div class="container" data-aos="fade-up">

    
        <div class="profile-head">
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="home-tab" data-toggle="tab" href="#basic" role="tab" aria-controls="home" aria-selected="true">Profile Details</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="profile-tab" data-toggle="tab" href="#changePass" role="tab" aria-controls="profile" aria-selected="false">Change Password</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="profile-tab" data-toggle="tab" href="#Additional" role="tab" aria-controls="profile" aria-selected="false">Social Details</a>
            </li>
          </ul>
        </div>

      
        <div class="tab-content profile-tab" id="myTabContent">

            <div class="tab-pane fade show active" id="basic" role="tabpanel" aria-labelledby="home-tab">

            <div class="section-title">
              <h2>Profile</h2>
              <p> Details</p>
             </div>
             <br>
            
               
            <form action="" method="post" role="form" class="php-email-form">

            <div class="section-title">
              <h2>Basic</h2>
            </div>

              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="First Name" data-rule="minlen:2" data-msg="Please enter Valid First Name" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Last Name" data-rule="minlen:2" data-msg="Please enter Valid Last Name" />
                  <div class="validate"></div>
                </div>
              </div>

              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" maxlength="10" placeholder="Contact Number"  data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" name="name" class="form-control" id="name" disabled value=<?php echo $_SESSION['emailValid']?>  />
                  <div class="validate"></div>
                </div>
              </div>


              <div class="form-group">
                  <input type="text" name="bio" disabled class="form-control" id="name" placeholder="Designation or Short Bio" data-msg="Please enter at Bio" />
                  <div class="validate"></div>
              </div>


          
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <select class="form-control" id="name" placeholder="" disabled data-msg="Please Select" >
                    <option value="" class="form-control">Education Qualification</option>
                    <option value="" class="form-control">Class 10 (SSC)</option>
                    <option value="" class="form-control">Class 10+2 (HSC)</option>
                    <option value="" class="form-control">B.E</option>
                    <option value="" class="form-control">B.Tech.</option>
                    <option value="" class="form-control">B.C.S.</option>
                    <option value="" class="form-control">B.C.A.</option>
                    <option value="" class="form-control">M.E.</option>
                    <option value="" class="form-control">M.Tech.</option>
                    <option value="" class="form-control">M.C.S.</option>
                    <option value="" class="form-control">M.C.A</option>
                    <option value="" class="form-control">Ph.D</option>
                  </select>
                  </select>
                  </select>
                  </select>
                  </select>
                  <div class="validate"></div>
                </div>

                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Specialization in" disabled data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>

                <!-- <div class="col-md-6 form-group">
                  <input type="date" onfocus="(this.type='date')" onblur="(this.type='text')" name="name" class="form-control" id="name" placeholder="Date of Birth" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div> -->

              </div>


              <br>
              
    

              <div class="section-title">
              <h2>Skills</h2>
              <br>
              <div class="form-group">
                <textarea disabled class="form-control" name="message" rows="5" data-msg="Please write something for us" placeholder="Mention your Skills Here"></textarea>
                <div class="validate"></div>
              </div>
              </div>

              



              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>


             <div class="text-center"><button class="enroll get-started-btn" type="button">Get Enroll</button></div>
            </form>
            
            </div>


            <div class="tab-pane fade" id="changePass" role="tabpanel" aria-labelledby="profile-tab">
            <div class="section-title">
              <h2>Change</h2>
              <p>Password</p>
             </div>
             <br>
            
              <form action="" method="post" role="form" class="php-email-form">
                  <div class="form-row">
                    <div class="col-md-6 form-group">
                      <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                      <div class="validate"></div>
                    </div>
                    <div class="col-md-6 form-group">
                      <input type="text" name="name" class="form-control" id="name" placeholder="Your Current Password" data-rule="minlen:4" data-msg="Please Enter Correct Password" />
                      <div class="validate"></div>
                    </div>
                  </div>
                  <div class="form-row">
                  <div class="col-md-6 form-group">
                    <input type="password" class="form-control" name="subject" id="subject" placeholder="New Password" data-rule="minlen:4" data-msg="Password Should be at least 8 chars" />
                    <div class="validate"></div>
                  </div>
                  <div class="col-md-6 form-group">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Re-Enter Your New Password" data-rule="minlen:4" data-msg="Please enter at Correct Password" />
                    <div class="validate"></div>
                  </div>
                  </div>

                  <input type="checkbox">&nbsp I acknowledge that I have read, and do hereby accept the terms and conditions contained in this
 Disclosure and the Electronic Statement</input>

                  <!-- <div class="mb-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>
                  </div> -->

                  <div class="text-center"><button class="enroll get-started-btn" type="button">Get Enroll</button></div>
                </form>
            </div>


            <div class="tab-pane fade" id="Additional" role="tabpanel" aria-labelledby="profile-tab">

          
              <form action="" method="post" role="form" class="php-email-form">
              <div class="section-title">
              <h2>Social</h2>
              <br>
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Enter Your Facebook URL Here" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Enter Your LinkedIn URL Here" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
              </div>

              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Enter Your GitHub URL Here" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Enter Your Twiteer URL Here" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
              </div>

              </div>
 
              </form>
            </div>





        </div>

         

      </div>
    </section><!-- End Contact Section -->

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
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>

</body>

</html>