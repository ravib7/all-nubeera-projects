<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Nubeera Trainings</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.ico" rel="icon">
  <link href="assets/img/logo.ico" rel="apple-touch-icon">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">

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
  <link href="assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.footer.css">
  <link rel="stylesheet" href="assets/css/login.css">
  
  <style>
    .padTop {
      padding-top: 20px;
    }

    .price-old .sizeColor {
      font-size: 12px;
      color: #A9A9A9;
    }

    .sizeColor{
        font-size: 12px;
        color:#A9A9A9
      }
  </style>

</head>

<body>

   <!-- ======= Header ======= -->
  
   <?php require 'Templates/navBar.php';?>


  <main id="main">

    <section id="features" >

    <div class="form">
  <br><br><br><br>



	<form class="form-horizontal signup" id="register" onsubmit="return authenticate('register'); return false">
	  <div class="form-wrap" style="position: relative;">
	    <h2>Sign Up</h2>

	    <div class="form-group">
	      <label id="message"></label>
	      <div class="relative">
	        <input class="form-control" name="firstName"  type="text" required autofocus="" title="" autocomplete="" placeholder="First Name">
	        <i class="fa fa-user"></i>
	      </div>
	    </div>

	    <div class="form-group">
	      <!-- <label for="email">Username:</label> -->
	      <div class="relative">
	        <input class="form-control" name="lastName" type="text" required autofocus="" title="" autocomplete="" placeholder="Last Name">
	        <i class="fa fa-user"></i>
	      </div>
	    </div>

	    <div class="form-group">
	     <!-- <label for="email">Username:</label> -->
	     <div class="relative">
	       <input class="form-control" name="email" type="email" required autofocus="" title="" autocomplete="" placeholder="Email Address">
	       <i class="fa fa-envelope"></i>
	     </div>
	   </div>


	    <br><br>

	    <div class="form-group">
	      <!-- <label for="email">Password:</label> -->
	      <div class="relative">
	        <input id="myinput" name="password" class="form-control" type="password" required placeholder="Password">
	        <i class="fa fa-key"></i>
	      </div>

	    </div>

	    <div class="form-group">
	      <!-- <label for="email">Password:</label> -->
	      <div class="relative">
	        <input id="myinput" name="password2" type="password" class="form-control" type="text" required placeholder="Confirm Password">
	        <i class="fa fa-key"></i>
	      </div>

	    </div>
	  <input type="submit" hidden>
	<a href="#"><button  class="movebtn movebtnsu" type="submit">Sign Up<i class="fa fa-fw fa-lock"></i></button></a>
	</form>


	<div class="relative"><hr><span class="login-text">or</span></div><br>
	<div class="social-btn clearfix">

				<?php require '../sign_in/google.php';?>


    			  	<!--  	<form> <a href=""  ><button class="movebtn google">&nbsp&nbsp&nbsp&nbsp  Google <i class="fa fa-fw fa-google"></i></button></a> 			</form>
						-->

					<?php
					echo "<center><a href='$auth_url' class='movebtn google'> Google <i class='fa fa-fw fa-google'></i></a></center>";	?>



        <?php
          echo "<center><a href='#' class='movebtn facebook'> Facebook <i class='fa fa-fw fa-facebook'></i></button></a>";	?>
    			  </div>


            <div class="social-btn clearfix">

              <a href="#"><button class="movebtn twiteer" >Twitter <i class="fa fa-fw fa-twitter"></i></button></a>
							<script type="text/javascript">
								function github(){
									document.location="https://github.com/login/oauth/authorize?client_id=30076d3f4f3eac96271f";
								}
							</script>

			  		<a onclick="github()"><button class="movebtn github" >GitHub <i class="fa fa-fw fa-github"></i></button></a>
            
            </div>
		      </div>
      </div>



</div>
    
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <!-- <footer id="footer">


    <?php require "Templates/footer_outer.php" ?>
  </footer> -->

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
  <script src="restcall.js"></script>

  <!-- Show Password -->
  <script src="assets/js/showpassword.js"></script>
</body>

</html>