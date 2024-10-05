<?php

session_start();
//$accessToken = $_SESSION['my_access_token'];
if(isset($_SESSION['emailValid']))
	header("Location:../User/User.php");


?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">

  <title>NubeEra</title>
	<link rel="icon" type="image/png" href="../img/logo.ico">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.4.6/css/flag-icon.min.css">
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'>
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'><link rel="stylesheet" href="./style.css">
  <link rel="stylesheet" href="../styles/style.nav1.css">
  <link rel="stylesheet" href="../styles/style.footer.css">
	<link rel="stylesheet" href="../styles/style.progress.css">
  <style media="screen">

    .move_down{
      padding-top:40%
    }
  </style>
  <script src="login.js"></script>
</head>
<body>

<!--<div id="preloader"></div>-->

<main>


<?php require '../templates/folder_navbar.php';?>

<!-- partial:index.partial.html -->

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


	    <div class="form-group">
	      <!-- <label for="email">Username:</label> -->
	      <div class="relative">
	        <input class="form-control" name="mobile" type="text" required pattern="^[0][1-9]\d{9}$|^[1-9]\d{9}$" maxlength="11" autofocus="" title="" autocomplete="" placeholder="Mobile Number">
	        <i class="fa fa-phone"></i>
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
	<div class="clearfix"></div>
	<center>
	  <div class="row d-inline-flex ">
	      <div class="social-btn clearfix">

	    <!--    <a href="<?php echo $auth_url?>"><button class="movebtn google" >Google <i class="fa fa-fw fa-google"></i></button></a>-->


	      </div>
	      <div class="social-btn clearfix">
	        <a href="#"><button class="movebtn twiteer" >Twitter <i class="fa fa-fw fa-twitter"></i></button></a>
	      </div>
	      <div class="social-btn clearfix">
	        <a href="#"><button class="movebtn github" >GitHub <i class="fa fa-fw fa-github"></i></button></a>
	      </div>
	  </div>
	</center>
	    <div class="sign-up">
	      <a href="index.php" class="signbtn"><small>Already member? Sign in <i>(Click me)</i></small></a>
	    </div>
	  </div>



</div>
</main>



<!-- partial -->
  <script src='https://code.jquery.com/jquery-3.3.1.min.js'></script>
  <script  src="./script.js"></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
  <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
  <script src="../js/navmenu.js"></script>

</body>
</html>
