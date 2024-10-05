<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <!-- ======================================================================================== -->
  <title>Nubeera</title>
  <!-- ======================================================================================== -->
  <link rel="stylesheet" href="lib/bootstrap-grid.processed.css">
  <!-- ======================================================================================== -->
  <link rel="icon" type="image/png" href="../img/logo.ico">
  <!-- ======================================================================================== -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
  <!-- ======================================================================================== -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.4.6/css/flag-icon.min.css">

  <!-- ======================================================================================== -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>

  <!-- Default values-->

  <link rel="stylesheet" href="../styles/style.nav1.css">
  <link rel="stylesheet" href="../styles/style.processed.css">
  <link rel="stylesheet" href="../styles/style.footer.css">
  <link rel="stylesheet" href="../styles/style.table.css">
  <!-- ======================================================================================== -->
</head>

<body class="ru home">
  <!-- <div id="preloader"></div> -->

  <!-- ===============================NAVIGATION BAR=========================================== -->

  <!-- ================================DISPLAY=============================================== -->

  <main class="site-content">
    <section>
      <!-- ===============================NAVIGATION BAR=========================================== -->
      <?php require '../templates/folder_navbar.php'; ?>
      <!-- ================================DISPLAY=============================================== -->



<div class="container">
  <div class="col-md-12">
    <br><br>
    <center><h2>CAREERS</h2></center>
    <br>
  </div>

  <form class="material-form" action="" method="POST">
  <div class="container">

      <div class="row">
        <div class="col-12">
              <div class="form_material-group"><input class="form_material-input"  onkeyup="this.value = this.value.toUpperCase();" type="text" required><span class="highlight"></span><span class="bar"></span><label>Full Name</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col">
          <div class="form_material-group"><input class="form_material-input" type="email" required><span class="highlight"></span><span class="bar"></span><label>Email</label></div>
        </div>
        <div class="col">
          <div class="form_material-group"><input class="form_material-input" type="text" required><span class="highlight"></span><span class="bar"></span><label>Mobile Number</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col">
          <div class="form_material-group"><input class="form_material-input" type="text" required><span class="highlight"></span><span class="bar"></span><label>Highest Qualification</label></div>
        </div>
        <div class="col">
          <div class="form_material-group"><input class="form_material-input" type="text" required><span class="highlight"></span><span class="bar"></span><label>Current Salary</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col">
          <div class="form_material-group"><input class="form_material-input"  type="text" required><span class="highlight"></span><span class="bar"></span><label>Total Experience</label></div>
        </div>
        <div class="col">
          <div class="form_material-group"><input class="form_material-input" type="text" required><span class="highlight"></span><span class="bar"></span><label>Expected Salary</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <div class="form_material-group"><textarea class="form_material-input" rows="5" cols="50" required></textarea><span class="highlight"></span><span class="bar"></span><label>Previous Job Description</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col">
          <button class="btn" type="submit">Submit</button>
        </div>
        <div class="col">
          <button class="btn" type="reset">Reset</button>
        </div>
      </div>

  </div>
</form>
</div>

</main>

<!-- ================================END Application Form======================================== -->

  <?php require "../templates/footer_outer.php" ?>
<!-- ==================================================Script Section============================================== -->

<script type="text/javascript" src="../lib/vanilla-tilt.min.js"></script>
<!-- ======================================================================================================== -->
<script type="text/javascript" src="https://unpkg.com/aos@2.3.0/dist/aos.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
<!-- ======================================================================================================== -->
<script src="../js/main.js"></script>
<script  src="../js/table.js"></script>
<script src="../js/navmenu.js"></script>
<!-- ======================================================================================================== -->
</body>
</html>
