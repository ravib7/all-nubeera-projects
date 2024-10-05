<?php
require("Admin-Login-Button.php");
require("Components/core/admin-connection.php");

session_start();
if(!isset($_SESSION['AdminLoginId']))
{
   header("location: Admin-Login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="Components\CSS\admin_page.css">
</head>
<body>

<nav class="navbar" style="width:102%; margin-left:-9px;">
    <ul>
      <li><a href="view.php">Home</a></li>
      <li class="dropdown">
        <a href="#" class="dropbtn">Uploads</a>
        <div class="dropdown-content">
          <a href="#" data-target="option1">Top-Image Upload</a>
          <a href="#" data-target="option2">Image-Slide Upload</a>
          <a href="#" data-target="option3">GR Upload</a>
        </div>
      </li>
      <li><a href="#" id="downloadLink">Data Download</a></li>
     <li>
    <?php echo $_SESSION['AdminLoginId']?>
    <form method="POST">
    <button name="Logout">LOG OUT</button>
    </form>
     </li>
    </ul>
  </nav>

  <!--------------Content Option-1-------------->

<div id="content">
  
  <div id="option1" class="page" style="margin-left:40%;">

  <h1>Top Image Upload</h1>

  <p>max-width: 100%;<br>
     width: 102%;<br>
     max-height: 537px;
  </P>

  <?php if (isset($_GET['error'])): ?> 
      <p><?php echo $_GET['error']; ?></p>   
  <?php endif ?>

  <form action="upload.php" method="post" enctype="multipart/form-data">

  <input type="file" name="image">

  <input type="submit" name="submit" value="Upload">

  </form>

  </div>

<!---------------------Option-2--------------------->

  <div id="option2" class="page" style="margin-left:40%; margin-bottom:20px;">

  <h1>Image Slide Upload</h1>

  <p>width: 100%;</P>
  
  <form method="POST" action="upload-image_slide.php" enctype="multipart/form-data">
        <input type="file" name="image" required><br><br>
        <input type="text" name="text" placeholder="text" required><br><br>
        <input type="submit" name="submit" value="Upload">
 </form>

  </div>

 <!---------------------Option-3--------------------->

  <div id="option3" class="page"  style="margin-left:40%;">

  <h1>GR Upload</h1>
    
  <form action="pdf-upload.php" method="POST" enctype="multipart/form-data">
  <input type="file" name="pdfFile" accept=".pdf">
  <input type="submit" value="Upload PDF">
</form>

  </div>

  
  <?php
if(isset($_POST['Logout']))
{
    session_destroy();
    header("location: Admin-Login.php");
}
?>
  
  <script src="Components/JS/script.js"></script>
</body>
</html>