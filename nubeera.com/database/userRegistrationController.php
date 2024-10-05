<?php

require 'db.php';

if(!isset($_POST['email'])){


}else{

    $obj = new DB();
    $con = $obj->db_connect();
    if(!$con){

    }else{
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $name = $firstName." ".$lastName;

        $sql = ('insert into USERS(EMAIL, USERPASSWORD, USERNAME, MOBILE) values(?,?,?,?);');

        $stmt = mysqli_stmt_init($con);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            echo "SQL statement Failed";
        }else{
            mysqli_stmt_bind_param($stmt, "ssss", $_POST['email'], password_hash($_POST['password'], PASSWORD_DEFAULT), $name, $_POST['mobile']);
            mysqli_stmt_execute($stmt);
           
        }
       

    }
}


?>