<?php

include("Connect_Db.php");

$batchDetail = array();

$batchdetailQuery = "SELECT DISTINCT `Playlist_URL`,`Email` FROM material where Batch_Name = '".$_GET['batchName']."'";

$result = mysqli_query($conn_2, $batchdetailQuery);
if($result)
{  
   $batchDetail['status'] = "true";
    $row = mysqli_fetch_array($result);
   
   // array_push($batchDetail, $row['Playlist_URL']);
   $batchDetail['Playlist_URL'] = $row['Playlist_URL'];
    $batchDetail['Email'] = $row['Email'];
}
else
{
   die("hello");
   // die(mysqli_error($conn_2));
}
 
 echo json_encode($batchDetail);

?>