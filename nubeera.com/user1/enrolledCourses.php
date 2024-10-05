<!DOCTYPE html>
<html lang="en">

<head>
<link rel="icon" type="image/png" href="../img/logo.ico">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Online Training NubeEra</title>

  <!-- Custom fonts for this template-->
  <link href="../lib/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../styles/css/sb-admin-2.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../styles/css/style.productBuy.css">

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
            <?php require "Templates/kart.php"; ?>
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
            <h1 class="h3 mb-0 text-gray-800">Enrolled Courses</h1>
          </div>
          <div class="row">
            <div class="col-md-4">
              <figure class="card card-product">
                <div class="card border-bottom-info shadow h-100 py-2">
                <div class="img-wrap"><img height=""width="" src="../img/MainPage/aws.jpg"></div>
                <figcaption class="info-wrap">
                    <div class="text-l font-weight-bold text-primary text-uppercase mb-1">Amazon Web Services</div>
                    <p class="desc">Some small description goes here</p>

                </figcaption>
                <div class="bottom-wrap">

                  <a href="displayEnrolledCourse.php" class="btn btn-light btn-icon-split">
                    <span class="icon text-gray-600">
                      <i class="fas fa-play"></i>
                    </span>
                    <span class="text">View Course</span>
                  </a>

                </div>
                </div>
              </figure>
            </div>

            <div class="col-md-4">
              <figure class="card card-product">
                <div class="card border-bottom-info shadow h-100 py-2">
                <div class="img-wrap"><img height=""width="" src="../img/MainPage/logo.png"></div>
                <figcaption class="info-wrap">
                    <div class="text-l font-weight-bold text-primary text-uppercase mb-1">Amazon Web Services</div>
                    <p class="desc">Some small description goes here</p>

                </figcaption>
                <div class="bottom-wrap">

                  <a href="#" class="btn btn-light btn-icon-split">
                    <span class="icon text-gray-600">
                      <i class="fas fa-play"></i>
                    </span>
                    <span class="text">View Course</span>
                  </a>

                </div>
                </div>
              </figure>
            </div>




            <div class="col-md-4">
              <figure class="card card-product">
                <div class="card border-bottom-info shadow h-100 py-2">
                <div class="img-wrap"><img height=""width="" src="../img/MainPage/microsoft.jpg"></div>
                <figcaption class="info-wrap">
                    <div class="text-l font-weight-bold text-primary text-uppercase mb-1">Microsoft  </div>
                    <p class="desc">Some small description goes here</p>

                </figcaption>
                <div class="bottom-wrap">

                  <a href="#" class="btn btn-light btn-icon-split">
                    <span class="icon text-gray-600">
                      <i class="fas fa-play"></i>
                    </span>
                    <span class="text">View Course</span>
                  </a>

                </div>
                </div>
              </figure>
            </div>

          </div>





            <!-- Pending Requests Card Example -->
          </div>
          <!-- Pending Requests Card Example -->
        </div>

        <a class="scroll-to-top rounded" href="#page-top">
          <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
      <?php require "Templates/logoutModal.php"; ?>







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
