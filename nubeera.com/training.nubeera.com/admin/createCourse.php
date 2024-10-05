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
  <link rel='stylesheet' href='https://oss.maxcdn.com/icheck/1.0.2/skins/square/blue.min.css'>
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../styles/css/sb-admin-2.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../styles/css/style.productBuy.css">
  <link rel="stylesheet" href="../styles/css/style.profile.css">
  <link rel="stylesheet" href="../styles/style.fold_out.css">
  <link rel="stylesheet" href="../styles/css/style.input.css">
  <link rel="stylesheet" href="../styles/css/style.input.css">
    
  <link rel="stylesheet" href="../styles/css/style.profileEdit.css">
  
  <link rel="stylesheet" href="../Templates/form.css">
  
  <style>
  input[type="text"]{
      background: transparent;
      border: none;
  }

  input[type="text"]{
      background: transparent;
      border: none;
  }

  .option{
    background: transparent !important;
    border: none;
    width=100%;

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

            <?php require "Templates/messages.php"; ?>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->


            <?php require "Templates/userInfo.php"; ?>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <div class="container-fluid">

          <!-- Page Heading -->
         
         
         
         
         
         
         
         
         
         
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Create Course</h1>
          </div>

    <form class="" id="create" method="post" onsubmit="return createCourse('create'); return false">


          <div class="row">

            <div class="col-xl-8 col-lg-7">
<!-- Course Title -->
              <div class="card shadow mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                          <div class="form_material-group">
                            <input class="form_material-input" maxlength="60" value="" name="title" type="text" required>
                            <span class="highlight"></span><span class="bar"></span>
                            <label class="text-xs font-weight-bold text-primary text-uppercase mb-1">Course Name</label></div>
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-graduation-cap fa-2x text-gray-300"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
<!-- Instructor Name -->
              <div class="card shadow mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                          <div class="form_material-group">
                          <h5 class="text-xs font-weight-bold text-primary text-uppercase mb-1">Instructor Details</h5>
                          <select class="option form-control" id ="selectInstructor" class="form_material-group"></select>
                          <span class="highlight"></span><span class="bar"></span>
                          
                          </div>
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-users fa-2x text-gray-300"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              </div>

<!-- Thumbnail -->
              <div class="col-xl-4 col-lg-5">
                <div class="card shadow">
                  <div class="card shadow h-100">
                  <div class="card-body">
                    <div class="profile-img">
                        <img src="../img/Team/balsamleti.jpg" height="150" width="150" alt="User_Profile_Picture"/>
                        <div class="file btn   btn-lg btn-primary">
                            Change
                            <input type="file" name="file"/>
                        </div>
                    </div>
                  </div>
                  </div>
                </div>
              </div>


            </div>
            <br>


            <!-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
              <h4 class="h5 text-gray-800">Date & Payment Details</h1>
            </div> -->

         
        <div class="row">
    
          <div class="col-lg-6">
              <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                      <h6 class="m-0 font-weight-bold text-primary">What things are Covering in this lecture</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        
  <!-- Category -->
                        <div class="form_material-group">
                          <span class="highlight"></span><span class="bar"></span><label class="text-xs font-weight-bold text-primary text-uppercase mb-1">CATEGORY</label>
                          <br>
                          <select id="selectCategory" class="option form-control form_material-group" >
                          </select>
                        </div>
  <!-- Level of Course -->
                        <div class="form_material-group">
                          <span class="highlight"></span><span class="bar"></span><label class="text-xs font-weight-bold text-primary text-uppercase mb-1">course level</label>
                          <br>
                          <select id="" class="option form-control form_material-group" >
                              <option value="Begineer">Begineer</option>
                              <option value="Intermedite">Intermedite</option>
                              <option value="Advance">Advance</option>
                              <option value="AllLevel">All Level</option>
                          </select>
                        </div>


<!-- Language -->
                        <div class="form_material-group">
                          <span class="highlight"></span><span class="bar"></span><label class="text-xs font-weight-bold text-primary text-uppercase mb-1">Course Language</label>
                          <br>
                          <select id="" class="option form-control form_material-group" >
                              <option value="English">English</option>
                              <option value="Hindi">Hindi</option>
                          </select>
                        </div>

                    </div>
              </div>

              
<!-- Description -->
              <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Description</h6>
                </div>
                        <!-- Card Body -->
                <div class="card-body">
                    <textarea rows="15" cols="100" placeholder="Description for Course Goes Here"></textarea>
                  </div>
              </div>
          </div>

<!-- Price -->
          <div class="col-lg-6">
        <div class="mb-4">
          <div class="row">
          <div class="col-xl-6 col-md-6 mb-4">
                <div class="card shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                      <div class="form_material-group">
                        <input class="form_material-input"  value="" type="text" id="price">
                        <span class="highlight"></span><span class="bar"></span>
                        <label class="text-xs font-weight-bold text-primary text-uppercase mb-1">Course Fee</label>
                        <h3 class="text-xs font-weight-bold text-primary text-uppercase mb-1" >&nbsp&nbsp&nbspIs Free</h3>
                        <input id="isFree" class="control-label"  type="checkbox" name="isFree">
         
                     
                      </div>
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-rupee-sign  fa-2x text-gray-300"></i></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
<!-- Discount Price -->
              <div class="col-xl-6 col-md-6 mb-4">
                <div class="card shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                      <div class="form_material-group">
                      <input id="discount" class="form_material-input" value="5 %" type="text" >
                      <span class="highlight"></span><span class="bar"></span>
                      <label class="text-xs font-weight-bold text-primary text-uppercase mb-1">Discount on Fee</label></div>
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-arrow-down fa-2x text-gray-300"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div> 

              <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                      <h6 class="m-0 font-weight-bold text-primary">What you will learn</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                      <textarea id="outcome" rows="4" cols="100" placeholder="What you will learn Goes here"></textarea>
                    </div>
              </div>


              <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                      <h6 class="m-0 font-weight-bold text-primary">Requirements</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                      <textarea id="requirements" rows="4" cols="100" placeholder="Requirements for this Course goes here"></textarea>
                    </div>
              </div>


              <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                      <h6 class="m-0 font-weight-bold text-primary">Who is this course for</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                     <textarea id="courseFor" rows="4" cols="100" placeholder="Who is this course for goes here"></textarea>
                    </div>
              </div>

            
          </div>

          <!-- Pending Requests Card Example -->
        </div>





      </div>

     
      

      <center><button class="btn btn-primary" type="submit" data-dismiss="modal">Create Course</button></center>
      <br><br>
      </form>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; <?php echo date("Y");?>  All Rights Reserved by NubeEra</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

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
  <script src="js/dropdown.js"></script>
  <script src="js/submit.js"></script>
</body>

</html>
