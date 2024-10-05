<?php

session_start();

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



	<form id="login" class="form-horizontal signin" onsubmit="return authenticate('login'); return false;">
		<div class="form-wrap" style="position: relative;">
		  <h2>Login</h2>
		  <div class="form-group">
			  <label id="message"></label>
			  <div class="relative">
				  <input class="form-control" id="name" name="email" type="email" required autofocus="" title="" autocomplete="" placeholder="Username">
				  <i class="fa fa-user"></i>
			  </div>
		  </div>

		  <div class="form-group">
		  	<!-- <label for="email">Password:</label> -->
        <div class="relative">
          <input id="myinput" name="password" class="form-control" type="password" required placeholder="Password">
          <i class="fa fa-key"></i>
        </div>
        <span class="pull-right"><small><a href="#" id="showhide">show / hide</a></small></span>
		  	<span class="pull-left"><small><a href="#">Forgot Password?</a></small></span>
		  </div>


		  <div class="login-btn">
      <input type="submit" hidden>
		  	<a href="#"><button class="movebtn movebtnsu" type="">Login <i class="fa fa-fw fa-lock"></i></button></a>
		  	<div class="relative"><hr><span class="login-text">or login with</span></div><br>
		  	<div class="clearfix"></div>
        <div class="">
	</form>


    		  	<div class="social-btn clearfix">

				<?php require '../sign_in/google.php';?>


    			  	<!--  	<form> <a href=""  ><button class="movebtn google">&nbsp&nbsp&nbsp&nbsp  Google <i class="fa fa-fw fa-google"></i></button></a> 			</form>
						-->

					<?php
					echo "<center><a href='$auth_url' class='movebtn google'> Google <i class='fa fa-fw fa-google'></i></a></center>";	?>




    			  	<a href="#"><button class="movebtn facebook" >Facebook <i class="fa fa-fw fa-facebook"></i></button></a>
    			  </div>


            <div class="social-btn clearfix">

              <a href="#"><button class="movebtn twiteer" >Twitter <i class="fa fa-fw fa-twitter"></i></button></a>
							<script type="text/javascript">
								function github(){
									document.location="https://github.com/login/oauth/authorize?client_id=30076d3f4f3eac96271f";
								}
							</script>

			  		<a onclick="github()"><button class="movebtn github" >GitHub <i class="fa fa-fw fa-github"></i></button></a>
             <!-- <a href="#"><button class="movebtn github" >GitHub <i class="fa fa-fw fa-github"></i></button></a>-->
            </div>
		      </div>
      </div>


		<div class="sign-up">
	        <a href="register.php" class="signbtn"><small>Not a member? Sign Up <i>(Click me)</i></small></a>
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
