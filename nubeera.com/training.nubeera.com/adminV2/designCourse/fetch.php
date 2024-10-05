<?php
    require_once "../includes/config.php";
    
    if($_POST['type'] == ""){

        $sql = "SELECT * FROM technology";
        $query = mysqli_query($conn,$sql) or die("Errorrr");
        $str = "";

        while($row = mysqli_fetch_assoc($query)){
            $str .= "<option value='{$row['TechId_PK']}'>{$row['TechName']}</option>";
        }
    }else if($_POST['type'] == "courses"){
        $sql = "SELECT * FROM courses WHERE TechId_FK = {$_POST['id']}";
        $query = mysqli_query($conn,$sql) or die("Errorrr");
        $str = "";

        while($row = mysqli_fetch_assoc($query)){
            $str .= "<option value='{$row['CId_PK']}'>{$row['CName']}</option>";
        }
    }
    echo $str;
?>