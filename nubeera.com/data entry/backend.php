 <?php

include("Connect_Db.php");

if($_GET['target'] = "fetchBatch"){
$batchList = array();

$slctbatchQuery = "SELECT DISTINCT `Batch_Name` FROM material";

$result = mysqli_query($conn_2, $slctbatchQuery);
if($result)
{  
   $batchList['status'] = "true";
    while($row = mysqli_fetch_array($result))
    {
      array_push($batchList, $row['Batch_Name']);
    }
}
else
{
   die(mysqli_error($conn_2));
}
 
 echo json_encode($batchList);
}


// if($_GET['target'] = "other"){


// echo "hello";


// }
?>
