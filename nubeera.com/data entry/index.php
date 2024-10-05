<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css"
      integrity="sha512-GQGU0fMMi238uA+a/bdWJfpUGKUkBdgfFdgBm72SUQ6BeyWjoY/ton0tEjH+OSH9iP4Dfh+7HM0I9f5eR0L/4w=="
      crossorigin="anonymous" referrerpolicy="no-referrer" /> 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
      integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
      crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>

<div class="container mt-3">
<a href="with_csv.php">Go with .CSV File</a>
<div id="message"> </div>
  <h2>Recordings Details Upload form</h2>
  <form action="" method="POST">
    <div class="mb-3 mt-3">
      <label for="email">Batch Name:</label>
      <select class="form-control" id="batchName" placeholder="Enter Batch Name" name="batchName" onchange="batchDetail(this.value)" required>
        
      </select>
    </div>
    <div class="mb-3">
      <label for="pwd">Material Name:</label>
      <input type="text" class="form-control" id="matName" placeholder="Enter Material Name" name="matName" required>
    </div>
    <div class="mb-3">
      <label for="pwd">Material URL:</label>
      <input type="text" class="form-control" id="matUrl" placeholder="Enter Material URL in format https://youtube.com/embed/<video id>" name="matUrl" required>
    </div>
    <div class="mb-3">
      <label for="pwd">Playlist URL:</label>
      <input type="text" class="form-control" id="plylstUrl" placeholder="Enter Playlist URL" name="plylstUrl" required>
    </div>
    <div class="mb-3">
      <label for="pwd">Email:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter Email" name="email" required>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
<script>

   if (window.history.replaceState) {
      window.history.replaceState(null, null, window.location.href);
   }

$(document).ready(function(){ 
                              $.ajax({
                                             url: 'backend.php?target=fetchBatch',
                                             type: 'GET',
                                             dataType: 'json',
                                             success: function(data)
                                             {
                                               
                                                if(data.status) 
                                                {
                                                   let i=0;
                                                   while (data[i]) {
                                                   $("#batchName").append("<option>"+data[i]+"</option>");
                                                   i++;
                                                   }         
                                                }
                                                else 
                                                {
                                                   $("#message").html("data fetch failed");
                                                   $('#message').attr('class','alert alert-success');
                                                }   
                                             }
                                       })
                                    .fail( function (data, status) {
                                       alert(status);
                                    });
});         
function batchDetail(batchName)
      {
         $.ajax({
                  url: 'batchDetail.php?batchName='+batchName,
                  type: 'GET',
                  dataType: 'json',
                  success: function(data)
                  {
                     if(data.status) 
                     {
                        // $("#message").html("hey success");
                        // $('#message').attr('class','alert alert-success');
                        $("#plylstUrl").val(data.Playlist_URL);
                        $("#email").val(data.Email);
                     }         
                     else 
                     {
                        $("#message").html("data fetch failed");
                        
                     }   
                  }         
            })
         .fail( function (data, status) {
            alert(status);
         });
      }

</script>

</html>


<?php


      if ($_SERVER["REQUEST_METHOD"] == "POST") 
      {
            include("Connect_Db.php");

            $batch_name = $_POST['batchName'];
            $mat_name = $_POST['matName'];
            $mat_url = $_POST['matUrl'];
            $plylst_url = $_POST['plylstUrl'];
            $email = $_POST['email'];

    $insrtquery = "INSERT INTO material (`Batch_Name`, `MaterialName`, `MaterialURL`, `Playlist_URL`, `Email`) VALUES('".$batch_name."','".$mat_name."','".$mat_url."','".$plylst_url."','".$email."')";
         if (mysqli_query($conn_2, $insrtquery)) {
            
            echo "<script> $('#message').html('Data Added Succesfully');
                           $('#message').attr('class','alert alert-success');
                           $('#message').css('display', 'flex');
                  </script>";
         } else {
            
            echo  die(mysqli_error($conn_2))."<script> $('#message').html('Failed to Add Data');
                                                       $('#message').attr('class','alert alert-success');
                                                       $('#message').css('display', 'flex'); 
                                             </script>";
         }
         mysqli_close($conn);
}

?>