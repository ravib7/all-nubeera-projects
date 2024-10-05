<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>NubeEra Trainings</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../user1/assets/img/logo.ico" rel="icon">
  <link href="../user1/assets/img/logo.ico" rel="apple-touch-icon">
<!--===============================================================================================-->
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../user1/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../user1/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="../user1/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../user1/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../user1/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../user1/assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../user1/assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="../user1/assets/css/style.footer.css">
  <link rel="stylesheet" href="../user1/assets/css/login.css">
  
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
  
   <?php require '../user1/Templates/nav.php';?>


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
	        <input name="password" class="form-control" type="password" required placeholder="Password">
	        <i class="fa fa-key"></i>
	      </div>

	    </div>

	    <div class="form-group">
	      <!-- <label for="email">Password:</label> -->
	      <div class="relative">
	        <input  name="password2" type="password" class="form-control" type="text" required placeholder="Confirm Password">
	        <i class="fa fa-key"></i>
	      </div>

	    </div>
	  <input type="submit" hidden>
	<a href="#"><button  class="movebtn movebtnsu" type="submit">Sign Up<i class="fa fa-fw fa-lock"></i></button></a>
	</form>


	<div class="relative"><hr><span class="login-text">or</span></div><br>


  
            <div class="social-btn clearfix">
                  <center><a href='$auth_url' class='movebtn google'> Google <i class='fa fa-fw fa-google'></i></a></center>
                  <center><a href='#' class='movebtn facebook'> Facebook <i class='fa fa-fw fa-facebook'></i></a></center>
    			  </div>
	


</div>
    
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <!-- <footer id="footer">


  </footer> -->

  <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="../user1/assets/vendor/jquery/jquery.min.js"></script>
  <script src="../user1/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../user1/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="../user1/assets/vendor/php-email-form/validate.js"></script>
  <script src="../user1/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="../user1/assets/vendor/counterup/counterup.min.js"></script>
  <script src="../user1/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="../user1/assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="../user1/assets/js/main.js"></script>
  <script src="js/login.js"></script>

  <!-- Show Password -->
  <script src="../user1/assets/js/showpassword.js"></script>
</body>

</html>