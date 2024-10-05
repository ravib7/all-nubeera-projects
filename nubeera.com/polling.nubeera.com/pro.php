<?php
include("A.Connect_Db.php");
session_start();

if(isset($_POST['qsIdvalue']))
{
    $response = Array();

    $response['status'] = false;

    $query = mysqli_query($conn,"SELECT * FROM `questions` WHERE Question_Id = '".$_POST['qsIdvalue']."'");

    if($query) {

      if(mysqli_num_rows($query) > 0)
      {
        $qsData = mysqli_fetch_array($query);

        $response['qsData'] = $qsData['Question'];
        $response['status'] = true;   
      }         
    }
    echo json_encode($response);
 }


    if(isset($_GET['delqsIdval']))
    {
      $query = mysqli_query($conn,"DELETE FROM Responses WHERE Question_Id = '".$_GET['delqsIdval']."' AND Student_Id = '".$_SESSION['emailid']."'");
      
      if($query)
      {
         $rslt['status'] = true;   
        
      }
      echo json_encode($rslt);
    }
      







    
?>