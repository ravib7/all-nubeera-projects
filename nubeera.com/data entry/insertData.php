<?php

include_once 'Connect_Db.php';

if(isset($_POST['importSubmit']))
{
    
   $csvMimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain');
    if(!empty($_FILES['file']['name']) && in_array($_FILES['file']['type'], $csvMimes))
    {
      if(is_uploaded_file($_FILES['file']['tmp_name']))
      {
         $csvFile = fopen($_FILES['file']['tmp_name'], 'r');
         fgetcsv($csvFile);
         while(($line = fgetcsv($csvFile)))
         {
            $batch_name = $line[0];
            $mat_name = $line[1];
            $mat_url = $line[2];
            $plylst_url =$line[3];
            $email = $line[4];

    $insrtquery = "INSERT INTO material (`Batch_Name`, `MaterialName`, `MaterialURL`, `Playlist_URL`, `Email`) VALUES('".$batch_name."','".$mat_name."','".$mat_url."','".$plylst_url."','".$email."')";
      $result = mysqli_query($conn_2, $insrtquery)  or die(mysqli_error($conn));
      
      // VALUES('".$batch_name."','".$mat_name."','".$mat_url."','".$plylst_url."','".$email."')";
            // $insrtquery = $conn->query("INSERT INTO material (`Batch_Name`, `MaterialName`, `MaterialURL`, `Playlist_URL`, `Email`) VALUES ('".$batch_name."','".$mat_name."','".$mat_url."','".$plylst_url."','".$email."')");
               If($result)
               {
                  $qstring = '?status=succ';
               } 
               else
               {
                  $qstring = '?status=queryrunfailed';
               }
        }
     }
     else
     {
        $qstring = '?status=err';
     }
   }
   else
   {
      $qstring = '?status=invalid_file';
   }
}
else
{ 
   $qstring = '?status=no file rcvd'; 
}
fclose($csvFile);
 header("Location: with_csv.php".$qstring);
 
 ?>