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
  <link rel="stylesheet" href="../styles/css/style.quiz.css">
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper" >

  <?php require "Templates/Quiz_sidebar.php" ?>

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
            <h1 class="h3 mb-0 text-gray-800">Quick Test..</h1>
              <a href="#" class="d-none d-sm-inline-block btn btn-xl btn-primary shadow-xl"><i class="fas fa-clock fa-sm text-white-50"></i> &nbsp 05 : 00</a>
          </div>




            <div class="card border-left-primary shadow h-100 py-2">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Question 1 of 30</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">Question Dispalyed Here</div>
                  </div>
                  <div class="col-auto">
                    <i class="fas fa-question fa-2x text-gray-300"></i>
                  </div>
                </div>
              </div>
            </div>
            <br>
            <br>



            <div class="card mb-4">
              <div class="card border-left-primary  shadow h-100 py-2">
              <div class="card-body">

                <label class="quiz-answer">
                  <input type="radio" value="a" name="answer" id="answer1">
                  <div class="highlight"></div>
                  <div class="circle"></div>
                  <p>Option 1</p>
                </label>

                <label class="quiz-answer">
                  <input type="radio" value="b" name="answer" >
                  <div class="highlight"></div>
                  <div class="circle"></div>
                  <p>Option 2</p>
                </label>

                <label class="quiz-answer">
                  <input type="radio" value="c" name="answer" >
                  <div class="highlight"></div>
                  <div class="circle"></div>
                  <p>Option 3</p>
                </label>

                <label class="quiz-answer">
                  <input type="radio" value="d" name="answer" >
                  <div class="highlight"></div>
                  <div class="circle"></div>
                  <p>Option 4</p>
                </label>

              </div>
            </div>
          </div>


          <a href="#" class="d-none d-sm-inline-block btn btn-xl btn-primary shadow-xl"><i class="fas fa-step-backward fa-sm text-white-50"></i> Back</a>
          <a href="#" class="d-none d-sm-inline-block btn btn-xl btn-primary shadow-xl"><i class="fas fa-step-forward fa-sm text-white-50"></i> Next</a>
          <br>
          <!-- <a href="#" style="float:90%;" class="float-left d-none d-sm-inline-block btn btn-xl btn-primary shadow-xl"><i class="fas fa-step-forward fa-sm text-white-50"></i> Next</a> -->





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
