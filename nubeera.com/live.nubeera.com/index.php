<?php
session_start();
session_destroy();

include("config.php");
?>


<html lang="en">

   <head>
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <meta name="description" content="NubeEra Live Login Form" />
      <meta name="author" content="NubeEra" />
      <title>NubeEra Live Login</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css" integrity="sha512-GQGU0fMMi238uA+a/bdWJfpUGKUkBdgfFdgBm72SUQ6BeyWjoY/ton0tEjH+OSH9iP4Dfh+7HM0I9f5eR0L/4w==" crossorigin="anonymous" referrerpolicy="no-referrer" /> <!-- bootstrap CSS -->      
      <link rel="icon" type="image/png" href="../img/logo.ico"> 
      <script type="text/javascript" src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
      <style>
            html
            {
               font-size: 100%;
            }
            body
            {
               background-image: url("images/loginBackground.jpg"); /* The image used */
               background-position: center; /* Center the image */
               background-repeat: no-repeat; /* Do not repeat the image */
               background-size: cover;
            }
            .loginBox
            {
               background: white;
               border-radius: 10px;
               box-shadow: 5px 5px 5px gray;
               width:50%!important;
               font-size: 1rem;
            }
            div#message
            {
               background: #E18888;
               border: 2px solid red;
               border-radius: 8px;
               padding: 05px 10px;
               margin: 0;
               display: none;
               width: 100%;
            }
            .form label, .form input, a[href="signup.php"]
            {
               display: block;
               width: 100%;
               
            }
            .form input
            {
               border: none;
               border-bottom: 2px solid gray;
               outline: none;
            }
            .logBtn
            {
               width: 100%;
               background: #001B9B;
               color: white;
               padding: 7px 0;
               border: none;
               border-radius: 5px;
               margin-bottom: 10px;
            }
            .logBtn:hover
            {
               background: #0055FE;
            }
            .googlelogbtn
            {
               width: 100%;
            }
            a[href="signup.php"]:hover, a[href="#"]:hover
            {
               color: blue;
               text-decoration: underline;
            }

            @media (max-width: 1000px) 
            {
	            .loginBox
               {
	             padding:2rem!important;
                 width: 60%!important;
                 border-radius: 5px;
                 font-size: 0.80rem;
               }
	         }
            @media (max-width: 800px) 
            {
	            .loginBox
               {
	             padding:1.5rem!important;
                 width: 70%!important;
                 border-radius: 5px;
                 font-size: 0.80rem;
	            }
	         }
            @media (max-width: 600px) 
            {
	            .loginBox
               {
	             padding:1.5rem!important;
                 width: 80%!important;
                 border-radius: 5px;
                 font-size: 0.80rem;
	            }
	         } 
            @media (max-width: 450px) 
            {
	            .loginBox
               {
	              padding:0.25rem!important;
                 width: 90%!important;
                 border-radius: 5px;
                 font-size: 0.80rem;
	            }
	         }
      </style>
   </head>
   <body>
  <img src="../img/logo.ico" height="50px" width="" style="margin: 10 0 0 40;">  
<div class="container pb-5 pt-3 mb-5 mt-1 px-5 loginBox">
   <div id="message"></div>

    <center> <h2 class="mb-4 mt-2"> Login </h2> </center> 
    
    <form action=" " method="post">  
        <div class="container form">  
            <label>User ID : </label>  
            <input type="text" placeholder="Enter your registered Email ID" name="userid" required><br/><br/>
            <label>Password : </label>   
            <input type="password" placeholder="Enter Password" name="psswrd" autocomplete="off" required><br/><br/>
            <button type="submit" class="logBtn">Login</button> 
            <a class="btn btn-outline-primary googlelogbtn" href=<?php echo $google_client->createAuthUrl(); ?>>Login With Google</a>
            <div class="row mt-3">
               <div class="col-md-6" style="text-align: center;"><a href="signup.php" class="btn">Not a member? Register Now!</a> </div>
               <div class="col-md-6" style="text-align: center;"><a href="#" class="btn">Forgot Password?</a></div>
            </div>
        </div>
    </form>
</div>  
<footer class="py-4 bg-light mt-auto">
   <div class="container-fluid px-4">
      <div class="d-flex align-items-center justify-content-between small">
         <div class="text-muted">Copyright &copy; NubeEra 2021</div>
         <!-- <div>
            <a href="!#">Privacy Policy</a>
            &middot;
            <a href="!#">Terms &amp; Conditions</a>
         </div> -->
      </div>
   </div>
</footer>     
</body>
<script>
   if (window.history.replaceState) 
    {
        window.history.replaceState( null, null, window.location.href );
    }
   </script>
</html>



<?php

            if ($_SERVER["REQUEST_METHOD"] == "POST") 
            {
                include("Connect_Db.php");
                
                $sqlquery = "SELECT * FROM registration WHERE Email_Id = '".$_POST['userid']."' AND User_Password = '".$_POST['psswrd']."'";
                
                if(mysqli_query($conn, $sqlquery))
                {

                    $row = mysqli_fetch_array(mysqli_query($conn, $sqlquery));

                    if(is_array($row)) 
                    {
                        $_SESSION['emailid'] = $row['Email_Id'];
                        $_SESSION['fname'] = $row['Full_Name'];

                        if(isset($_SESSION['emailid']))
                        { 
                            ?> <script> $("#message").html("Login Success! Redirecting...");
                            $("#message").css("display", "flex");
                            $("#message").css("background", "#83F1AE");
                            $("#message").css("border", "2px solid #006E2B"); 
                            window.location.replace("dashboard.php");</script> <?php 
                           //  header("Refresh:1; url=dashboard.php");
                        }
                    }
                    else
                    {    
                        ?> <script> $("#message").html("Invalid username or Password!");
                                    $("#message").css("display", "flex"); </script> <?php  
                    } 
                        
                }
                else
                {
                    echo"Query run failed";
                }
                mysqli_close($conn);
            }        
    ?>