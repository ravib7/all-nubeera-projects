<?php

session_start();
$accessToken = $_SESSION['my_access_token'];
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
	    <h2>Forget Password</h2>


			<div class="form-group">
	      <div class="relative">
	        <input class="form-control" name="firstName"  type="text" required autofocus="" title="" autocomplete="" placeholder="Enter your Email ID">
	        <i class="fa fa-user-o"></i>
	      </div>
	    </div>
			<div style="padding:30px;">

			</div>
			<div class="">
					<center>
					 		<small>An Email is send to your email address, <i>EMail ID</i></small><br>
							<small>Follow the directions in the email to reset the password</small>
					</center>
			</div>

	  <input type="submit" hidden>
	<a href="#"><button  class="movebtn movebtnsu" type="submit">Send <i class="fa fa-fw fa-paper-plane"></i></button></a>
	</form>



	    <div class="sign-up">
	      <a href="index.php" class="signbtn"><small>Back to!! Login <i>(Click me)</i></small></a>
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
