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
  <link rel="stylesheet" href="../styles/css/style.profile.css">
  <link rel="stylesheet" href="../styles/style.fold_out.css">
  <link rel="stylesheet" href="../styles/css/style.input.css">
 
  
  <link rel="stylesheet" href="../styles/css/style.profileEdit.css">
  
  
  <style>
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
            <h1 class="h3 mb-0 text-gray-800">Add Instructor Details</h1>
          </div>

    <form class="" id="create" method="post" onsubmit="return addInstructor('create'); return false">


          <div class="row">

            <div class="col-xl-8 col-lg-7">
<!-- Instructor -->
              <div class="card shadow mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                          <div class="form_material-group">
                            <input id="instructorName" class="form_material-input" maxlength="60" value="" name="title" type="text" required>
                            <span class="highlight"></span><span class="bar"></span>
                            <label class="text-xs font-weight-bold text-primary text-uppercase mb-1">Instructor Name</label></div>
                         </div>
                      <div class="col-auto">
                        <i class="fas fa-graduation-cap fa-2x text-gray-300"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
<!-- Instructor email -->
              <div class="card shadow mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                          <div class="form_material-group">
                            <input id="email" class="form_material-input" maxlength="60" value="" name="" type="text" >
                            <span class="highlight"></span><span class="bar"></span>
                            <label class="text-xs font-weight-bold text-primary text-uppercase mb-1">Instructor Email ID</label></div>
                         </div>
                      <div class="col-auto">
                        <i class="fas fa-graduation-cap fa-2x text-gray-300"></i>
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
                        <img src="../img/Team/sakib.jpeg" height="150" width="150" alt="User_Profile_Picture"/>
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
            <div class="row">
    
           <div class="col-lg-6">
           <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Contact Details</h6>
                
                 
                </div>
                <!-- Card Body -->
                <div class="card-body">
                 <div class="container">
                                      <div class="row">     
                                          <div class="col-md-6">
                                               <label>Mobile Number 1</label>
                                           </div>
                                           <div class="col-md-6">
                                                 <input id="mobile1" type="text" size="30" spellcheck="false" class="text-primary input-weight"  placeholder="Add this Field" value="" name="">
                                           </div>
                                       </div>
                                       <div class="row">
                                           <div class="col-md-6">
                                               <label>Mobile Number 2</label>
                                           </div>
                                           <div class="col-md-6">
                                                <input id="mobile2" type="text" size="30" spellcheck="false" class="text-primary input-weight"  placeholder="Add this Field" value="" name="">
                                           </div>
                                       </div>
                                       <div class="row">
                                           <div class="col-md-6">
                                               <label>Address</label>
                                           </div>
                                           <div class="col-md-6">
                                              <input id="address" type="text" size="30" spellcheck="false" class="text-primary input-weight"  placeholder="Add this Field" value=""  name="">
                                           </div>
                                       </div>
                                       <div class="row">
                                           <div class="col-md-6">
                                               <label>Country</label>
                                           </div>
                                           <div class="col-md-6">
                                              <input id="country" type="text" size="30" spellcheck="false" class="text-primary input-weight"  placeholder="Add this Field" value=""  name="">
                                           </div>
                                       </div>
                                       <div class="row">
                                           <div class="col-md-6">
                                               <label>State</label>
                                           </div>
                                           <div class="col-md-6">
                                              <input id="state" type="text" size="30" spellcheck="false" class="text-primary input-weight"  placeholder="Add this Field" value=""  name="">
                                           </div>
                                       </div>
                                       <div class="row">
                                           <div class="col-md-6">
                                               <label>City</label>
                                           </div>
                                           <div class="col-md-6">
                                              <input id="city" type="text" size="30" spellcheck="false" class="text-primary input-weight"  placeholder="Add this Field" value=""  name="">
                                           </div>
                                       </div>
                                       <div class="row">
                                           <div class="col-md-6">
                                               <label>Zip Code</label>
                                           </div>
                                           <div class="col-md-6">
                                              <input id="zipcode" type="text" size="30" spellcheck="false" class="text-primary input-weight"  placeholder="Add this Field" value=""  name="">
                                           </div>
                                       </div>
                
                </div>
              </div>
              </div>
          </div> </div>
    
          <div class="col-lg-6">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Banking Details</h6>
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
                <div class="container">

                                        
                                       <div class="row">
                                           <div class="col-md-6">
                                               <label>Bank Name</label>
                                           </div>
                                           <div class="col-md-6">
                                                <input id="bankName" type="text" size="30" spellcheck="false" class="text-primary input-weight"  placeholder="Add this Field" value="" name="">
                                           </div>
                                       </div>
                                       <div class="row">
                                           <div class="col-md-6">
                                               <label>Account Number</label>
                                           </div>
                                           <div class="col-md-6">
                                                <input id="accountNo" type="text" size="30" spellcheck="false" class="text-primary input-weight"  placeholder="Add this Field" value="" name="">
                                           </div>
                                       </div>

                                       <div class="row">
                                           <div class="col-md-6">
                                               <label>Bank IFSC</label>
                                           </div>
                                           <div class="col-md-6">
                                                <input id="ifsc" type="text" size="30" spellcheck="false" class="text-primary input-weight"  placeholder="Add this Field" value="" name="">
                                           </div>
                                       </div>

                                       <div class="row">
                                           <div class="col-md-6">
                                               <label>Bank Branch</label>
                                           </div>
                                           <div class="col-md-6">
                                                <input id="branch" type="text" size="30" spellcheck="false" class="text-primary input-weight"  placeholder="Add this Field" value="" name="">
                                           </div>
                                       </div>

                                       <div class="row">
                                           <div class="col-md-6">
                                               <label>Branch Code</label>
                                           </div>
                                           <div class="col-md-6">
                                                <input id="code" type="text" size="30" spellcheck="false" class="text-primary input-weight"  placeholder="Add this Field" value="" name="">
                                           </div>
                                       </div>


                                       
                                       


                </div>
             
            </div>
          </div>

          </div>
          </div>
            



        
            


<!-- Category Selection -->
    

      <center><button class="btn btn-primary" type="submit" data-dismiss="modal">Add to My Record</button></center>
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

  <!-- Custom scripts for all pages-->
  <script src="../js/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="../lib/vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="../js/js/demo/chart-area-demo.js"></script>
  <script src="../js/js/demo/chart-pie-demo.js"></script>
 
  <script src="js/addInstructor.js"></script>
</body>

</html>
