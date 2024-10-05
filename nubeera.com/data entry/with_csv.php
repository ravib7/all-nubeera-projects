<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css"
      integrity="sha512-GQGU0fMMi238uA+a/bdWJfpUGKUkBdgfFdgBm72SUQ6BeyWjoY/ton0tEjH+OSH9iP4Dfh+7HM0I9f5eR0L/4w=="
      crossorigin="anonymous" referrerpolicy="no-referrer" /> <!-- bootstrap CSS -->
   <title>data upload</title>
</head>
<body>
<div class="container">
<a href="index.php">Go with manual Upload</a>
   <form action="insertData.php" method="post" enctype="multipart/form-data">
            <input type="file" name="file" />
            <input type="submit" class="btn btn-primary" name="importSubmit" value="IMPORT">
   </form>
  <a href="https://docs.google.com/spreadsheets/d/1yS74lr_QOF34_0wSYjMKzf0qkDt9Sosh5uP-Uou_rRQ/edit?usp=sharing">csv file template</a> 
</div>
</body>
<?php

// Get status message
if(!empty($_GET['status']))
{
    switch($_GET['status'])
    {
        case 'succ':
            $statusType = 'alert-success';
            $statusMsg = 'Members data has been imported successfully.';
            break;
        case 'err':
            $statusType = 'alert-danger';
            $statusMsg = 'Some problem occurred, please try again.';
            break;
        case 'invalid_file':
            $statusType = 'alert-danger';
            $statusMsg = 'Please upload a valid CSV file.';
            break;
        case 'nofilercvd':
            $statusType = 'alert-success';
            $statusMsg = 'nofilercvd';
            break;
        case 'queryrunfailed':
            $statusType = 'alert-danger';
            $statusMsg = 'queryrunfailed';
            break;
        default:
            $statusType = 'alert-danger';
            $statusMsg = 'default';
    }
}
?>

<!-- Display status message -->
<?php 
if(!empty($statusMsg))
{ 
   echo " <div class='col-xs-12'>
            <div class='alert". $statusType."'>". $statusMsg. "</div>
         </div>"; 
} 
?>
<script>
   if (window.history.replaceState) 
    {
        window.history.replaceState( null, null, window.location.href );
    }
   </script>
</html>