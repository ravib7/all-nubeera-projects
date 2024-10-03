<?php include "Components/core/connection.php"?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <title>M.P.C.C</title> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
   	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	  <link rel="stylesheet" href="Components/CSS/navbar.css"> 
	  <link rel="stylesheet" href="Components/CSS/style.css">
	  <link rel="stylesheet" href="Components/CSS/about-us.css">
    <link rel="stylesheet" href="Components/CSS/EventsNews.css">
    <link rel="stylesheet" href="Components/CSS/image-slide.css"> 
</head>


<body>

 <!-------------------------Navbar-start---------------------------->

 <nav>
      <label for="btn" class="icon">
        <span class="fas fa-bars"></span>
      </label> 

      <input type="checkbox" id="btn"> 
      <ul>
			<li style=""><a href="view.php">Home</a></li>
        
       <li>
          <label for="btn-1" class="show">Application +</label>
          <a href="#">Application</a>
          <input type="checkbox" id="btn-1">
          <ul>
            <li><a href="business-form.php">Business</a></li>
            <br>
            <li><a href="Job-form.php">Job</a></li>
          </ul>
        </li>
        
        <li>
          <li><a href="events-news.html">Events & News</a></li>
          <li><a href="GR-page.php">GR</a>
        </li>
     
        <li>
          <label for="btn-2" class="show">Login +</label>
          <a href="Admin-Login.php">Login</a>
        </li>

            <li><a href="about-us.html">About us</a></li>
            <li ><a href="contact-us.html">Contact us</a></li>
              </ul>
            </li> 
          </ul> 
        </li>
      </ul>
    </nav>          
  <!-------------------------Navbar-End---------------------------->

<!--------------------------Image-Upload Start------------------->

<div class="container-fluid">
  <div class="upload-image">
  <?php 
          $sql = "SELECT * FROM upload ORDER BY id DESC";
          $res = mysqli_query($conn,  $sql);

          if (mysqli_num_rows($res) > 0) {
          	while ($upload = mysqli_fetch_assoc($res)) {  ?>
             
             <div class="alb">
             	<img src="Components/uploads/<?=$upload['image_url']?>">
             </div>
          		
    <?php } }?>
  </div>
</div>
              
<!--------------------------Image-Upload End--------------------->


<!-------------------------Image-slide Heading Start-------------->

  <div class="heading">
    <h2><b><i><u>विकास कामे</u></i></b></h2>
  </div>

<!-------------------------Image-slide Heading End-------------------->

<!-----------------------Image and Text-slide start------------------------>

<?php
ob_start(); // Start output buffering

// Retrieve images from the database
$pdo = new PDO("mysql:host=localhost; dbname=mpcc; charset=utf8", 'root', '');
$sql = "SELECT * FROM pslide ORDER BY id DESC LIMIT 10";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$images = $stmt->fetchAll(PDO::FETCH_ASSOC);

ob_end_flush(); // Flush the output buffer and send the output to the browser
?>

<!-- HTML code for displaying images -->
<div class="image-container">
    <?php foreach ($images as $image) { ?>
        <div style="position: relative;">
            <img class="slide-image" style="display: block; width: 100%; height: auto; margin: 0 auto;" src="Components/uploads/<?php echo $image['image_url']; ?>">
            <div class="slide-text" style="position: absolute; top: 105%; left: 50%; transform: translate(-50%, -50%); width: 100%; text-align: center; font-size: 20px;"><?php echo $image['text']; ?></div>
        </div>
    <?php } ?>
</div>


<!-------------------------Image and Text-slide End-------------------------->
  
      <script src="https://kit.fontawesome.com/your-font-awesome-kit.js" crossorigin="anonymous"></script>
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> 
      <script src="Components/JS/image-slide.js"></script> 

</body>
</html>