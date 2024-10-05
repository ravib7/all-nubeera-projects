<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>NubeEra - Verify</title>
  <link rel="icon" type="image/png" href="../img/logo.ico">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.1.2/tailwind.min.css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="../styles/style.nav1.css">
  <link rel="stylesheet" href="../styles/style.processed.css">
  <link rel="stylesheet" href="../styles/UserStyle/style.main.css">
  <link rel="stylesheet" href="../styles/style.footer.css">
  <link rel="stylesheet" href="../styles/style.table.css">
</head>
<body>
  <main class="site-content">
    <!-- ===============================NAVIGATION BAR=========================================== -->
    <?php require '../templates/folder_navbar.php'; ?>
    <!-- ================================DISPLAY=============================================== -->

    <section id="works">

      <div class="container">
        <div class="col-md-12">

          <center><h2>Verify Certificate</h2></center>
        </div>

        <div class="d-flex justify-content-center">

                <div class="bg-gray-100 p-8 relative mt-8 rounded-lg">

                    <form class="material-form" action="" method="POST">
                    <div class="container">

                        <div class="row">
                          <div class="col-12">
                                <div class="form_material-group"><input class="form_material-input"  onkeyup="this.value = this.value.toUpperCase();" type="text" required><span class="highlight"></span><span class="bar"></span><label>Cerificate Number</label></div>
                          </div>
                        </div>
                    </div>
                  </form>

                    <p class="text-gray-600 text-sm xl:text-normal mt-6 text-center px-4">Enter <span class="font-bold">NubeEra</span> Cerification
                        details in above input Feild</p>
                    <div class="h-16 bg-gray-400 flex flex-col justify-center text-center rounded mt-4 hover:bg-green-400 transition cursor-pointer">
                        <div class="w-full">

                            <span class="text-lg uppercase font-medium text-white inline-block">Verify</span>
                        </div>
                    </div>
                </div>


            </div>
  <br>
          <br><br><br>

        </main>

        <!-- ================================END Application Form======================================== -->

          <?php require "../templates/footer_outer.php" ?>

<!-- partial -->
  <script  src="../js/dashboard.js"></script>
  <script src = "jquery.js" type = "text/javascript"></script>
  <script src = "script.js" type = "text/javascript"></script>
  <script type="text/javascript" src="https://unpkg.com/aos@2.3.0/dist/aos.js"></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
  <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
  <!-- ======================================================================================================== -->

  <script src="../js/navmenu.js"></script>

</body>
</html>
