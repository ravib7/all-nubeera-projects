<?php
require("Components\core\admin-connection.php");

/*------------ SIGN-IN BUTTON -------------*/

if(isset($_POST['singin']))
{
    $query="SELECT * FROM `admin-login` WHERE `Admin-Name`='$_POST[aname]' AND `Admin-Password`='$_POST[apassword]'";
    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result)==1)
    {
       session_start();
       $_SESSION['AdminLoginId']=$_POST['aname'];
       header("location: Admin-panel.php");
    }
    else
    {
        echo"<script>alert('Inncorrect Password')</script>";
    }
}

/*------------ LOGOUT BUTTON -------------*/


?>