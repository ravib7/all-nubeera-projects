<?php

        session_start();
        
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                
                include("A.Connect_Db.php");
        
                $result = mysqli_query($conn, "SELECT * FROM registration where User_ID=".$_SESSION['username']);
                
                $row = mysqli_fetch_array($result);
                
        $sqlquery = "INSERT INTO Responses (`Question_Id`,`Question`,`Student_Name`,`Response`) VALUES('".$_POST['quest_id']."', '".$_POST['quest']."','".$row['Full_Name']."','".$_POST['resp']."')";
        
        
        if(mysqli_query($conn, $sqlquery))
        {

            ?> <script> alert("Response posted successfully!"); </script> <?php
            
            header("location: 04.response.php");

        }
        else{
            
            ?> <script> alert("Failed to post response!"); </script> <?php
        }
mysqli_close($conn);


}
        
?>