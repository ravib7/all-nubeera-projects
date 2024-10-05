<!DOCTYPE html>
<html>
   <head>
   <meta charset="utf-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
   <meta name="description" content="NubeEra Live Registration Form" />
   <meta name="author" content="NubeEra" />
   <title>NubeEra Live Registration</title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <link rel="icon" type="image/png" href="../img/logo.ico">
   <script type="text/javascript" src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
   <?php
   if (!isset($_GET["code"])) 
   { ?>
    <style>
      html
      {
         font-size: 100%;
      }
      body
      {
         background-image: url("images/regBackground.jpg"); /* The image used */
         background-position: center; /* Center the image */
         background-repeat: no-repeat; /* Do not repeat the image */
         background-size: cover;
      }
      .regBox
      {
         background: white;
         border-radius: 10px;
         box-shadow: 5px 5px 5px gray;
         width:50%!important;
         font-size: 1rem;
      }
      div#message
      {
         border: 2px solid red;
         border-radius: 8px;
         padding: 05px 10px;
         margin: 0;
         display: none;
         width: 100%;
      }
      .box div
      {
      position: relative;
      margin-bottom: 35px;
      }
      .box div label
      {
      position : absolute;
      top: 0px;
      Left: 0;
      color: #999;
      transition: .5s;
      pointer-events: none;
      }
      .box input[type="text"], .box input[type="email"], .box input[type="password"]
      {
         border: none;
         width: 100%;
         border-bottom: 2px solid #989798 ;
         outline: none;
         box-sizing: border-box;
      }
      .box div input:focus ~ label,
      .box input:valid ~ label
      {
         position : absolute;
         top: -25px;
         Left: 0;
         Left: 0;
         color: #065AF7;
         font-size: 15px;
      }
      button[type="submit"]
      {
         align: center;
         padding: 5px 15px;
         background: darkblue;
         color: white;
         border-radius: 8px;
         box-shadow: 2px 2px 5px gray;
      }
      button[type="submit"]:hover
      {
         box-shadow: 2px 2px 8px 2px blue;
      }
      a[href="index.php"]:hover
      {
         color: blue;
         text-decoration: underline;
      }
      @media (max-width: 1000px)
      {
         .regBox
         {
            padding:2rem!important;
            width: 60%!important;
            border-radius: 5px;
            font-size: 0.80rem;
         }
      }
      @media (max-width: 800px)
      {
         .regBox
         {
            padding:1.5rem!important;
            width: 70%!important;
            border-radius: 5px;
            font-size: 0.80rem;
         }
      }
      @media (max-width: 600px)
      {
         .regBox
         {
            padding:1.5rem!important;
            width: 80%!important;
            border-radius: 5px;
            font-size: 0.80rem;
         }
         .box div
         {
            margin-bottom: 25px;
         }
         .box div input:focus ~ label,
         .box input:valid ~ label
         {
            top: -18px;
            font-size: 12px;
         }
      }
      @media (max-width: 450px)
      {
         .regBox
         {
           padding-top: 0.5rem;
           width: 90%!important;
           border-radius: 5px;
           font-size: 0.70rem;
         }
         .box div
         {
            margin-bottom: 25px;
         }
         .box div input:focus ~ label,
         .box input:valid ~ label
         {
            top: -18px;
            font-size: 12px;
         }
      }
    </style>
   </head>

<body>

   <img src="../img/logo.ico" height="50px" style="margin: 10px 0px 0 40px;">
   <div class="container pb-5 pt-3 mb-5 mt-1 px-5 regBox">
      <div id="message"></div>
      <div class="mb-5 header">
         <h1>Registration Form</h1>
         <p>Please fill in this form to create an account.</p>
         <hr>
      </div>
      <div class="box">
         <form action=" " method="post">
            <div>
               <input type="text" placeholder="" name="fname" id="fname" autocomplete="off" required />
               <label for="fname">Full Name</label>
            </div>

            <div>
               <input type="email" placeholder="" name="emailid" id="emailid" autocomplete="off" required>
               <label for="emailid">Email ID</label>
            </div>

            <div>
               <input type="password" placeholder="" name="pswrd" id="pswrd" autocomplete="off" required>
               <label for="pswrd">Password</label>
            </div>

            <div>
               <input type="password" placeholder="" name="psw-cnfrm" id="psw-cnfrm" autocomplete="off" onfocusout="checkPasswordMatch()" required>
               <label for="psw-cnfrm">Confirm Password</label>
            </div>
         </form>
      </div>
      <center><button type="submit" class="registerbtn">Register</button></center>
      <a href="index.php" style="display: block; width: 100%;" class="btn mt-2">Already a member? Login</a>
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
<?php
} //not set google code

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    include "Connect_Db.php";

    $slctregquery = "SELECT * FROM registration WHERE Email_Id = '" . $_POST['emailid'] . "'";
    $slctregresult = mysqli_query($conn, $slctregquery);
    if ($slctregresult) {
        if (mysqli_fetch_array($slctregresult) > 0) {
            echo " $('#message').html('You are already registered!');
                                $('#message').attr('class','alert alert-warning');
                                $('#message').css('display', 'flex'); ";
} else {
            // echo $_SERVER['SERVER_ADDR'];
            $sqlquery = "INSERT INTO registration (`Full_Name`, `Email_Id`, `User_Password`) VALUES('" . $_POST['fname'] . "', '" . $_POST['emailid'] . "', '" . $_POST['pswrd'] . "')";

            if (mysqli_query($conn, $sqlquery)) {
                ?> <script> $("#message").html("Registration successfull! Redirecting to login page...");
                                    $("#message").attr("class","alert alert-success");
                                    $("#message").css("display", "flex"); </script> <?php
// header("Refresh: 5; url: 03.login.php");
                header("Refresh:3; url=index.php");
            } else {
                ?> <script> $("#message").html("Registration Failed! due to server error!");
                                    $("#message").attr("class","alert alert-danger");
                                    $("#message").css("display", "flex"); </script> <?php
}
            mysqli_close($conn);
        }
    }
}

if (isset($_GET["code"])) {
    // header("Refresh:1; url=01.trainer_qs.php");
    include "config.php";

    $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);

    if (!isset($token['error'])) {

        $google_client->setAccessToken($token['access_token']);

        $_SESSION['access_token'] = $token['access_token'];

        $google_service = new Google_Service_Oauth2($google_client);

        $data = $google_service->userinfo->get();

        if (!empty($data['given_name'])) {
            $_SESSION['user_first_name'] = $data['given_name'];
        }

        if (!empty($data['family_name'])) {
            $_SESSION['user_last_name'] = $data['family_name'];
        }

        if (!empty($data['email'])) {
            $_SESSION['emailid'] = $data['email'];
        }

        $_SESSION['fname'] = $_SESSION['user_first_name'] . " " . $_SESSION['user_last_name'];

        if (isset($_SESSION['fname']) && isset($_SESSION['emailid'])) {
            include "Connect_Db.php";
            $slctregquery = "SELECT * FROM registration WHERE Email_Id = '" . $_SESSION['emailid'] . "'";
            $slctregresult = mysqli_query($conn, $slctregquery);
            if ($slctregresult) {
                if ($regRow = mysqli_fetch_array($slctregresult)) {
                    $_SESSION['emailid'] = $regRow['Email_Id'];
                    $_SESSION['fname'] = $regRow['Full_Name'];
                    header("Refresh:0.001; url=dashboard.php");
                } else {
                    $randNo = (rand(100, 999));
                    $_POST['pswrd'] = $_SESSION['user_last_name'] . $randNo;

                    $insrtquery = "INSERT INTO registration (`Full_Name`, `Email_Id`, `User_Password`) VALUES('" . $_SESSION['fname'] . "', '" . $_SESSION['emailid'] . "', '" . $_POST['pswrd'] . "')";

                    if (mysqli_query($conn, $insrtquery)) {
                        require 'vendor/autoload.php';
                        $mailContent = "Thank You For registering with NubeEra.
                                                    Use your Default Password " . $_POST['pswrd'] . " to Login again.";
                        $email = new \SendGrid\Mail\Mail();
                        $email->setFrom("info@nubeera.com", "NubeEra");
                        $email->setSubject("NubeEra Credentials");
                        $email->addTo($_SESSION['emailid'], $_SESSION['fname']);
                        $email->addContent("text/plain", $mailContent);
                        // $email->addContent(
                        //    "text/html", "<strong>and easy to do anywhere, even with PHP</strong>"
                        // );
                        $sendgrid = new \SendGrid("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");

                        if ($sendgrid->send($email));
                        {
                            header("Location: dashboard.php");
                        }
                    } else {
                        ?> <script> $("#message").html("login with google failed!");
                                    $("#message").attr("class","alert alert-danger");
                                    $("#message").css("display", "flex"); </script> <?php
header("Refresh:0; url=index.php");
                    }
                    mysqli_close($conn);
                }
            }
        } else {
            ?> <script> $("#message").html("could not fetch details from google");
                                $("#message").attr("class","alert alert-danger");
                                $("#message").css("display", "flex"); </script> <?php
}

    } else {?> <script> $("#message").html("token error");
                         $("#message").attr("class","alert alert-danger");
                         $("#message").css("display", "flex");</script> <?php } //token condition closed
} //get code condition closed

?>

<script>

    if (window.history.replaceState)
    {
        window.history.replaceState( null, null, window.location.href );
    }

    function checkPasswordMatch() {
    var password = $("#pswrd").val();
    var confirmPassword = $("#psw-cnfrm").val();

    if (password != confirmPassword){
        $("#message").html("Passwords do not match!");
        $("#message").attr("class","alert alert-danger");
        $("#message").css("display", "flex");
        $("#pswrd").val("");
        $("#psw-cnfrm").val("");
    }
    else
    {
        $("#message").css("display", "none");
    }
}
</script>
</body>
</html>