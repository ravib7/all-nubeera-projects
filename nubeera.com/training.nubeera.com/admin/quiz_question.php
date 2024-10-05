<?php 
session_start();
if(!isset($_SESSION['emailValid']) and !isset($_SESSION['isAdmin'])){
  header('Location:../index.php');
  die();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
<link rel="icon" type="image/png" href="../img/logo.ico">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>NubeEra - Admin</title>

  <!-- Custom fonts for this template-->
  <link href="../lib/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../styles/css/sb-admin-2.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../styles/css/style.productBuy.css">



  <link rel="stylesheet" href="../styles/style.fold_out.css">
  <link rel="stylesheet" href="../styles/css/style.input.css">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper" >

  <?php require "Templates/sidebar.php" ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">



      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
            <?php require "Templates/notification.php"; ?>
            <?php require "Templates/messages.php"; ?>
            <div class="topbar-divider d-none d-sm-block"></div>
            <!-- Nav Item - User Information -->
            <?php require "Templates/userInfo.php"; ?>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Add Question</h1>
          </div>




            <div class="card border-left-primary shadow h-100 py-2">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                  <input class="form_material-input"  value="" type="text" spellcheck="false" required><span class="highlight"></span><span class="bar"></span><label class="text-xs font-weight-bold text-primary text-uppercase mb-1">Question</label>
                  </div>
                  <div class="col-auto">
                    <i class="fas fa-question fa-2x text-gray-300"></i>
                  </div>
                </div>
              </div>
            </div>
            <br>
            <br>



            <div class="card border-left-primary shadow h-100 py-2">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                  <input class="form_material-input"  value="" type="text" spellcheck="false" required><span class="highlight"></span><span class="bar"></span><label class="text-xs font-weight-bold text-primary text-uppercase mb-1">Option 1</label>
                  </div>
                  <div class="col-auto">
                    <i class="fas fa-question fa-2x text-gray-300"></i>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                  <input class="form_material-input"  value="" type="text" spellcheck="false" required><span class="highlight"></span><span class="bar"></span><label class="text-xs font-weight-bold text-primary text-uppercase mb-1">Option 2</label>
                  </div>
                  <div class="col-auto">
                    <i class="fas fa-question fa-2x text-gray-300"></i>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                  <input class="form_material-input"  value="" type="text" spellcheck="false" required><span class="highlight"></span><span class="bar"></span><label class="text-xs font-weight-bold text-primary text-uppercase mb-1">Option 3</label>
                  </div>
                  <div class="col-auto">
                    <i class="fas fa-question fa-2x text-gray-300"></i>
                  </div>
                </div>
              </div>  <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    <input class="form_material-input"  value="" type="text" spellcheck="false" required><span class="highlight"></span><span class="bar"></span><label class="text-xs font-weight-bold text-primary text-uppercase mb-1">Option 4</label>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-question fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>





              </div>
<br><br>
            <center>
               <div class="dropdown no-arrow mb-4">
                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-check" aria-hidden="true"></i> Correct Option
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="#">option 1</a>
                  <a class="dropdown-item" href="#">option 2</a>
                  <a class="dropdown-item" href="#">option 3</a>
                  <a class="dropdown-item" href="#">option 4</a>
                </div>
              </div>
            </center>


            <!-- Pending Requests Card Example -->
          </div>
          <!-- Pending Requests Card Example -->
        </div>

        <a class="scroll-to-top rounded" href="#page-top">
          <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
      <?php require "Templates/logoutModal.php"; ?>
      <?php require "createCategory.php"; ?>







  <!-- Bootstrap core JavaScript-->
  <script src="../lib/vendor/jquery/jquery.min.js"></script>
  <script src="../lib/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../lib/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../js/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="../lib/vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="../js/js/demo/chart-area-demo.js"></script>
  <script src="../js/js/demo/chart-pie-demo.js"></script>

</body>

</html>
