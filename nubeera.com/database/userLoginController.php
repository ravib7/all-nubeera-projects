<?php


if(!isset($_POST['email'])){


}else{
    require 'db.php';

    $obj = new DB();
    $con = $obj->db_connect();

    if($con){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = ("SELECT * FROM USERS WHERE EMAIL=?;");
        $stmt = mysqli_stmt_init($con);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            echo "SQL statement failed";
        }else{
            mysqli_stmt_bind_param($stmt,"s",$email);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            $row = mysqli_fetch_assoc($result);
            if(password_verify($password, $row['USERPASSWORD'])){
                session_start();
                $_SESSION['emailValid'] = $email;
                $response = "ok";
                echo $response;

            }
        }

    }

}

?>