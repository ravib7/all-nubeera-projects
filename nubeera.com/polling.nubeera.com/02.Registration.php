<!DOCTYPE html>
<html>
    <head>
        <title>NubeEra Polling Registration</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
    body
        {
            background-image: url("regBackground.jpg"); /* The image used */
            background-position: center; /* Center the image */
            background-repeat: no-repeat; /* Do not repeat the image */
            background-size: cover;
        }
.regBox
{
    background: white;
    border-radius: 10px;
    box-shadow: 5px 5px 5px gray;
}
.box div
{
position: relative;
background: red;
margin-bottom: 45px;
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
    background: blue;
    color: white;
    border-radius: 8px;
    box-shadow: 2px 2px 5px gray;
}
button[type="submit"]:hover
{
    box-shadow: 2px 2px 8px 2px blue;
}
a[href="03.login.php"]:hover
{
    color: blue;
}
    </style>
    </head>
<body>

  <div class="container py-4 w-50 my-5 px-5 regBox">
    <h1>Registration Form</h1>
    <p>Please fill in this form to create an account.</p>
    <hr><br/>
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
    <input type="password" placeholder="" name="psw-cnfrm" id="psw-cnfrm" autocomplete="off" required>
    <label for="psw-cnfrm">Confirm Password</label>
    </div>
    </div>
    
    <center><button type="submit" class="registerbtn">Register</button></center>
    <a href="03.login.php" style="display: block; width: 100%;" class="btn mt-2">Already a member? Login</a>

  </div>
</form>
<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
                
            include("A.Connect_Db.php");

            $slctregquery = "SELECT * FROM registration WHERE Email_Id = '".$_POST['emailid']."'";
            $slctregresult = mysqli_query($conn, $slctregquery);
            if ($slctregresult)
            {
                if(mysqli_fetch_array($slctregresult) > 0)
                {
                    ?> <script> alert("You are already registered!"); </script> <?php
                    // header("Refresh:1; url=04.response.php");
                } 
                else
                {
                    // echo $_SERVER['SERVER_ADDR']; 
                    $sqlquery = "INSERT INTO registration (`Full_Name`, `Email_Id`, `User_Password`) VALUES('".$_POST['fname']."', '".$_POST['emailid']."', '".$_POST['pswrd']."')";

                    if(mysqli_query($conn, $sqlquery))
                    {
                        ?> <script> alert("Registration successfull!"); </script> <?php
                        // header("Refresh: 5; url: 03.login.php");
                        header("Refresh:5; url=03.login.php");
                    }
                    else
                    {
                        ?> <script> alert("Registration Failed!"); </script> <?php
                    }
                    mysqli_close($conn);
                } 
            }
    }
  


    

if(isset($_GET["code"]))
{
    // header("Refresh:1; url=01.trainer_qs.php");
     include("C.config.php");
     

     $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);


        if(!isset($token['error']))
        {  
    
            $google_client->setAccessToken($token['access_token']);
        
            
            $_SESSION['access_token'] = $token['access_token'];
        
        
            $google_service = new Google_Service_Oauth2($google_client);
        
            
            $data = $google_service->userinfo->get();
        
            
            if(!empty($data['given_name']))
            {
                $_SESSION['user_first_name'] = $data['given_name'];
            }
        
            if(!empty($data['family_name']))
            {
                $_SESSION['user_last_name'] = $data['family_name'];
            }
        
            if(!empty($data['email']))
            {
                $_SESSION['emailid'] = $data['email'];
            }

            $_SESSION['fname'] = $_SESSION['user_first_name']." ".$_SESSION['user_last_name'];

                 if(isset($_SESSION['fname'])  && isset($_SESSION['emailid']))
                 {
                    include("A.Connect_Db.php");
                    $slctregquery = "SELECT * FROM registration WHERE Email_Id = '".$_SESSION['emailid']."'";
                    $slctregresult = mysqli_query($conn, $slctregquery);
                    if ($slctregresult)
                    {
                        if($regRow = mysqli_fetch_array($slctregresult))
                        {
                            $_SESSION['emailid'] = $regRow['Email_Id'];
                            $_SESSION['fname'] = $regRow['Full_Name'];
                            header("Refresh:0.001; url=04.response.php");
                        } 
                        else
                        {
                            $randNo = (rand(100,999)); 
                            $_POST['pswrd'] = $_SESSION['user_last_name'].$randNo;
                            
                            $insrtquery = "INSERT INTO registration (`Full_Name`, `Email_Id`, `User_Password`) VALUES('".$_SESSION['fname']."', '".$_SESSION['emailid']."', '".$_POST['pswrd']."')";

                                if(mysqli_query($conn, $insrtquery))
                                {
                                    ?> <script> alert("Logged in successfully"); </script> <?php
                                    header("Location: 04.response.php");
                                }
                                else
                                {
                                    ?> <script> alert("login with google failed!"); </script> <?php
                                    header("Refresh:0; url=03.login.php");
                                }
                                mysqli_close($conn);
                        }
                    }
                 }
                 else
                 {
                    echo "could not fetch details from google";
                 }
                
     }else { echo "token error"; }//token condition closed
}//get code condition closed

?>
</body>
</html>