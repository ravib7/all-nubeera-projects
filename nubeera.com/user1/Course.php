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
  <link rel="stylesheet" href="../styles/css/style.playlist.css">
  <link rel="stylesheet" href="../styles/css/style.productBuy.css">

  <style media="screen">
  textarea
  {
      background: rgba(0, 0, 0, 0);
      border: none;
      outline: none;
  }

  .size{
    height:55px;
    width:55px;
  }

  .size1{
    height:100px;
    width:100px;
  }

  .size4{
    height:40px;
    width:40px;
  }

  .projcard-tagbox {
	position: absolute;
	bottom: 3%;
	font-size: 14px;
	cursor: default;
	user-select: none;
	pointer-events: none;
}
.projcard-tag {
	display: inline-block;
	background: #E0E0E0;
	color: #777;
	border-radius: 3px 0 0 3px;
	line-height: 26px;
	padding: 0 10px 0 23px;
	position: relative;
	margin-right: 20px;
	cursor: default;
	user-select: none;
	transition: color 0.2s;
}
.projcard-tag::before {
	content: '';
	position: absolute;
	background: #fff;
	border-radius: 10px;
	box-shadow: inset 0 1px rgba(0, 0, 0, 0.25);
	height: 6px;
	left: 10px;
	width: 6px;
	top: 10px;
}
.projcard-tag::after {
	content: '';
	position: absolute;
	border-bottom: 13px solid transparent;
	border-left: 10px solid #E0E0E0;
	border-top: 13px solid transparent;
	right: -10px;
	top: 0;
}

  </style>

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
          <div class="col-lg-12">


          <div class="container">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <strong><h2>Course Name Goes Here</h2></strong>
            </div>

            <div class="media mb-4">
              <img class="d-flex mr-3 size rounded-circle" src="../img/Team/unknown.png" alt="">
              <div class="media-body">
                <h6 class="mt-0">Instructor Name   |  Number of Lessons (Count) | <i class="fas fa-clock fa-sm"></i> Duration</h6>

              </div>
            </div>
            <div class="row">
                <p style="text-align:justify; color:black;font-size:14px;">The Pandas DataFrame is a structure that contains two-dimensional data and its corresponding labels. DataFrames are widely used in data science, machine learning, scientific computing, and many other data-intensive fields.
                  DataFrames are similar to SQL tables or the spreadsheets that you work with in Excel or Calc. In many cases, DataFrames are faster, easier to use, and more powerful than tables or spreadsheets because they’re an integral part of the Python and NumPy ecosystems.
                </p>
            </div>

            <center> <button class="btn btn-primary" type="button">
                <i class="fa fa-play" aria-hidden="true"></i>&nbsp Get Started
              </button></center>
              <br><br>
        </div>

        <div class="row">
          <div class="col-lg-6">

          <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">By the End of Course, you'll know how to: </h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header">Action</div>
                      <a class="dropdown-item" href="#"></a>
                      <a class="dropdown-item" href="#"></a>

                    </div>
                  </div>
                </div>



                <!-- Card Body -->
                <div class="card-body">
                  <ul style="font-size:14px; color:black;">
                    <li> What a Pandas DataFrame is and how to create one</li>
                    <li> How to access, modify, add, sort, filter, and delete data</li>
                    <li> How to handle missing values</li>
                    <li> How to work with time-series data</li>
                    <li> How to quickly visualize data</li>
                    <li> How to work with time-series data</li>
                    <li>It’s time to get started with Pandas DataFrames!</li>
                    <li>It’s time to get started with Pandas DataFrames!</li>
                  </ul>
                </div>
              </div>



            <!-- Pending Requests Card Example -->
          </div>

          <div class="col-lg-6">
            <div class="card shadow mb-4">

                  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">About Instructor</h6>
                  </div>

                  <div class="card-body">
                  <center><img class="m-0 d-flex size1 rounded-circle" src="../img/Team/unknown.png" alt=""></center>
                  <br>
                  <center><h5 class="m-0 font-weight-bold text-primary">Mr. ABC</h5><center>
                    <p style="font-size:14px;text-align:justify; color:black">
                      ABC is a video tutorial author at NubeEra. He's currently an AI Architech. He has completed his graduation from XYZ University.
                    </p>
                  </div>

                </div>
              </div>
        </div>


        <div class="card shadow mb-4">

              <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Course Videos</h6>
              </div>

              <div class="card-body">

              <nav class="archive-links">
               <ol>
                 <li>
                   <a href="#">
                     <div class="main-image"></div>
                     <span class="link-title">Section Intro</span>
                     <span class="link-excerpt">13:42</span>
                   </a>
                 </li>
                 <li>
                   <a href="#">
                     <div class="main-image"></div>
                     <span class="link-title">A Brief Introduction to JavaScript</span>
                     <span class="link-excerpt">41:14</span>
                   </a>
                 </li>
                 <li>
                   <a href="#">
                     <div class="main-image"></div>
                     <span class="link-title">Variables and Data Types</span>
                     <span class="link-excerpt">32:12</span>
                   </a>
                 </li>
                 <li>
                   <a href="#">
                     <div class="main-image"></div>
                     <span class="link-title">Variable Mutation and Type Coercion</span>
                     <span class="link-excerpt">35:26</span>
                   </a>
                 </li>
                 <li>
                   <a href="#">
                     <div class="main-image"></div>
                     <span class="link-title"> Basic Operators</span>
                     <span class="link-excerpt">25:22</span>
                   </a>
                 </li>
                 <li>
                   <a href="#">
                     <div class="main-image"></div>
                     <span class="link-title"> Basic Operators</span>
                     <span class="link-excerpt">25:22</span>
                   </a>
                 </li>
                 <li>
                   <a href="#">
                     <div class="main-image"></div>
                     <span class="link-title"> Basic Operators</span>
                     <span class="link-excerpt">25:22</span>
                   </a>
                 </li>
               </ol>
              </nav>

              </div>

            </div>
          </div>



        <a class="scroll-to-top rounded" href="#page-top">
          <i class="fas fa-angle-up"></i>
        </a>
</div>
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
