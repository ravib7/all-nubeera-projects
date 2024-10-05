<?php
require('database.php');

if (isset($_POST['type']) && count($_POST) > 0) {
    if ($_POST['type'] == 1) {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $birthday=$_POST['birthday'];
        $phone=$_POST['phone'];
        $aphone=$_POST['aphone'];
        $aadhaar=$_POST['aadhaar'];
        $gender=$_POST['gender'];
        $cast=$_POST['cast'];
        $job=$_POST['job'];
        $state=$_POST['state'];
        $district=$_POST['district'];
        $city=$_POST['city'];
        $address=$_POST['address'];
        
        $sql = "INSERT INTO `job-form`( `name`, `email`,`birthday`,`phone`, `aphone`,`aadhaar`,`gender`,`cast`, `job`,`state`,`district`,city`,`address`) 
        VALUES ('$name','$email','$birthday','$phone', '$aphone','$aadhaar','$gender','$cast', '$job','$state','$district','$city','$address')";
        if (mysqli_query($conn, $sql)) {
            echo json_encode(array("statusCode"=>200));
        } 
        else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
    }
}

if (isset($_POST['type']) && count($_POST) > 0) {
    if ($_POST['type'] == 2) {
        $id=$_POST['id'];
        $name=$_POST['name'];
        $email=$_POST['email'];
        $gender=$_POST['gender'];
        $birthday=$_POST['birthday'];
        $phone=$_POST['phone'];
        $aphone=$_POST['aphone'];
        $city=$_POST['city'];
        $district=$_POST['district'];
        $state=$_POST['state'];
        $aadhaar=$_POST['aadhaar'];
        $address=$_POST['address'];
        $cast=$_POST['cast'];
        $job=$_POST['job'];
        $sql = "UPDATE `job-form` SET `name`='$name',`email`='$email',`birthday`='$birthday',`phone`='$phone',`aphone`='$aphone',`aadhaar`='$aadhaar',`gender`='$gender',`cast`='$cast', `job`='$job',`state`='$state',`district`='$district',`city`='$city',`address`='$address' WHERE id=$id";
        if (mysqli_query($conn, $sql)) {
            echo json_encode(array("statusCode"=>200));
        } 
        else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
    }
}

if (isset($_POST['type']) && count($_POST) > 0) {
    if ($_POST['type'] == 3) {
        $id=$_POST['id'];
        $sql = "DELETE FROM `job-form` WHERE id=$id ";
        if (mysqli_query($conn, $sql)) {
            echo $id;
        } 
        else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
    }
}

if (isset($_POST['type']) && count($_POST) > 0) {
    if ($_POST['type'] == 4) {
        $id=$_POST['id'];
        $sql = "DELETE FROM `job-form` WHERE id in ($id)";
        if (mysqli_query($conn, $sql)) {
            echo $id;
        } 
        else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
    }
}
?>
