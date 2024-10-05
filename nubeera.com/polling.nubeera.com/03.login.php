<?php
session_start();
session_destroy();

include("C.config.php");
?>


<html>
    <head>
        <title>NubeEra Polling Login</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <style>
    body
        {
            background-image: url("loginBackground.jpg"); /* The image used */
            background-position: center; /* Center the image */
            background-repeat: no-repeat; /* Do not repeat the image */
            background-size: cover;
        }
        .loginBox
{
    background: white;
    border-radius: 10px;
    box-shadow: 5px 5px 5px gray;
}
.form label, .form input, a[href="02.Registration.php"]
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
a[href="02.Registration.php"]:hover
{
    color: blue;
}
        </style>
    </head>
<body>
    
<div class="container py-5 w-50 my-5 px-5 loginBox">
<div id="message" style="background: #E18888; border: 2px solid red; border-radius: 8px; padding: 05px 10px; margin: 0; display: none; width: 100%;"></div>

    <center> <h2 class="my-4"> Participant Login Form </h2> </center> 
    
    <form action=" " method="post">  
        <div class="container form">  
            <label>User ID : </label>  
            <input type="text" placeholder="Enter your registered Email ID" name="userid" autocomplete="off" required><br/><br/>
            <label>Password : </label>   
            <input type="password" placeholder="Enter Password" name="psswrd" autocomplete="off" required><br/><br/>
            <button type="submit" class="logBtn">Login</button> 
            <a class="btn btn-outline-primary googlelogbtn" href=<?php echo $google_client->createAuthUrl(); ?>>Login With Google</a>
            <a href="02.Registration.php" class="btn mt-2">Not a member? Register Now!</a>
        </div>
</div>  
</form>     
</body>
</html>



<?php

            if ($_SERVER["REQUEST_METHOD"] == "POST") 
            {
                include("A.Connect_Db.php");
                
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
                            ?> <script> document.getElementById("message").innerHTML = "Login Success! Redirecting...";
                            document.getElementById("message").style.display = "flex";
                            document.getElementById("message").style.background = "#83F1AE "; 
                            document.getElementById("message").style.border = "2px solid #006E2B ";</script> <?php 
                        header("Refresh:1; url=04.response.php");
                        }
                    }
                    else
                    {    
                        ?> <script> document.getElementById("message").innerHTML = "Invalid username or Password!";
                        document.getElementById("message").style.display = "flex"; </script> <?php  
                    } 
                        
                }
                else
                {
                    echo"Query run failed";
                }
                mysqli_close($conn);
            }        
    ?>