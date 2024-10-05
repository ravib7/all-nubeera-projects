<?php


class DB{

    static $host = 'localhost';
    static $user = 'root';
    static $pass = '';
    static $db = 'nubeera';
    static $con;

    public function db_connect(){
        
        self::$con = mysqli_connect(self::$host, self::$user, self::$pass, self::$db);

        if(!self::$con){
            echo "Unable to Connect, Debugging Error: ".mysqli_connect_errno().", ".mysqli_connect_error();
        }else {
            return self::$con;
        }

    }

    public function addUser($email, $password, $name, $mobile){
    
        $sql = "insert into USERS(EMAIL, USERPASSWORD, USERNAME, MOBILE) values('".$email."','".$password."','".$name."','".$mobile."');";
        mysqli_query(self::$con, $sql);
        header('Location:../index.php');
    }
    

















}

?>