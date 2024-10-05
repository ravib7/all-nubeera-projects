<?php

if($_GET['data'] = "log_out")
{
   session_start();
   unset( $_SESSION['fname'] );
   unset( $_SESSION['emailid']);
   header("Location: index.php");
}


if($_GET['data'] = "chngPsswrd")
{
  
}

?>