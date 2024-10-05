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
  <title>Online Training NubeEra</title>

  <!-- Custom fonts for this template-->
  <link href="../lib/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../styles/css/sb-admin-2.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../styles/css/style.productBuy.css">
  <link rel="stylesheet" href="../styles/css/style.profileEdit.css">
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
            <h1 class="h3 mb-0 text-gray-800">Profile</h1>
          </div>


          <form method="post">
               <div class="row">
                   <div class="col-md-4">
                       <div class="profile-img">
                           <img src="../img/Team/balsamleti.jpg" height="150" width="150" alt="User_Profile_Picture"/>
                           <div class="file btn   btn-lg btn-primary">
                               Change Photo
                               <input type="file" name="file"/>
                           </div>
                       </div>
                   </div>
                   <div class="col-md-6">
                       <div class="profile-head">
                                   <h5>
                                       Balchandra Samleti
                                   </h5>
                                   <h6>
                                     <input type="text" size="40" spellcheck="false" class="inp-size text-primary input-weight"  placeholder="Update Bio" value="balsamleti" name="">
                                   </h6>
                                  <br> <!-- <p class="proile-rating">RANKINGS : <span>8/10</span></p> -->
                           <ul class="nav nav-tabs" id="myTab" role="tablist">
                               <li class="nav-item">
                                   <a class="nav-link active" id="home-tab" data-toggle="tab" href="#basic" role="tab" aria-controls="home" aria-selected="true">Basic</a>
                               </li>
                               <li class="nav-item">
                                   <a class="nav-link" id="profile-tab" data-toggle="tab" href="#educational" role="tab" aria-controls="profile" aria-selected="false">Educational</a>
                               </li>
                               <li class="nav-item">
                                   <a class="nav-link" id="profile-tab" data-toggle="tab" href="#Additional" role="tab" aria-controls="profile" aria-selected="false">Additional</a>
                               </li>
                           </ul>
                       </div>
                   </div>

               </div>
               <div class="row">
                   <div class="col-md-4">

                   </div>
                   <div class="col-md-8">
                       <div class="tab-content profile-tab" id="myTabContent">
                           <div class="tab-pane fade show active" id="basic" role="tabpanel" aria-labelledby="home-tab">
                                       <div class="row">
                                           <div class="col-md-6">
                                               <label>User Id</label>
                                           </div>
                                           <div class="col-md-6">
                                                 <input type="text" size="30" spellcheck="false" class="text-primary input-weight"  placeholder="Update this Field" value="balsamleti" name="">
                                           </div>
                                       </div>
                                       <div class="row">
                                           <div class="col-md-6">
                                               <label>Name</label>
                                           </div>
                                           <div class="col-md-6">
                                                <input type="text" size="30" spellcheck="false" class="text-primary input-weight"  placeholder="Update this Field" value="Balchandra Samleti" name="">
                                           </div>
                                       </div>
                                       <div class="row">
                                           <div class="col-md-6">
                                               <label>Email</label>
                                           </div>
                                           <div class="col-md-6">
                                                <input type="text" size="30" spellcheck="false" class="text-primary input-weight"  placeholder="Update this Field" value="" name="">
                                           </div>
                                       </div>
                                       <div class="row">
                                           <div class="col-md-6">
                                               <label>Phone</label>
                                           </div>
                                           <div class="col-md-6">
                                                <input type="text" size="30" spellcheck="false" class="text-primary input-weight"  placeholder="Update this Field" value="" name="">
                                           </div>
                                       </div>
                                       <div class="row">
                                           <div class="col-md-6">
                                               <label>Date of Birth</label>
                                           </div>
                                           <div class="col-md-6">
                                                <input type="text" class="text-primary input-weight textbox-n"  placeholder="Update this Field"  id="date"  onfocus="(this.type='date')" onblur="(this.type='text')" />
                                           </div>
                                       </div>
                                       <div class="row">
                                           <div class="col-md-6">
                                               <label>Address</label>
                                           </div>
                                           <div class="col-md-6">
                                              <input type="text" size="30" spellcheck="false" class="text-primary input-weight"  placeholder="Update this Field" value=""  name="">
                                           </div>
                                       </div>
                                       <div class="row">
                                           <div class="col-md-6">
                                               <label>Country</label>
                                           </div>
                                           <div class="col-md-6">
                                              <input type="text" size="30" spellcheck="false" class="text-primary input-weight"  placeholder="Update this Field" value=""  name="">
                                           </div>
                                       </div>
                                       <div class="row">
                                           <div class="col-md-6">
                                               <label>State</label>
                                           </div>
                                           <div class="col-md-6">
                                              <input type="text" size="30" spellcheck="false" class="text-primary input-weight"  placeholder="Update this Field" value=""  name="">
                                           </div>
                                       </div>
                                       <div class="row">
                                           <div class="col-md-6">
                                               <label>City</label>
                                           </div>
                                           <div class="col-md-6">
                                              <input type="text" size="30" spellcheck="false" class="text-primary input-weight"  placeholder="Update this Field" value=""  name="">
                                           </div>
                                       </div>
                                       <div class="row">
                                           <div class="col-md-6">
                                               <label>Zip Code</label>
                                           </div>
                                           <div class="col-md-6">
                                              <input type="text" size="30" spellcheck="false" class="text-primary input-weight"  placeholder="Update this Field" value=""  name="">
                                           </div>
                                       </div>


                           </div>



                           <div class="tab-pane fade" id="educational" role="tabpanel" aria-labelledby="profile-tab">
                                     <div class="row">
                                         <div class="col-md-6">
                                             <label>College Name</label>
                                         </div>
                                         <div class="col-md-6">
                                            <input type="text" spellcheck="false" class="text-primary input-weight"  placeholder="Update this Field" value=""  name="">
                                         </div>
                                     </div>

                                     <div class="row">
                                         <div class="col-md-6">
                                             <label>University Name</label>
                                         </div>
                                         <div class="col-md-6">
                                            <input type="text" spellcheck="false" class="text-primary input-weight"  placeholder="Update this Field" value=""  name="">
                                         </div>
                                     </div>

                                     <div class="row">
                                         <div class="col-md-6">
                                             <label>Qualification</label>
                                         </div>
                                         <div class="col-md-6">
                                            <input type="text" spellcheck="false" class="text-primary input-weight"  placeholder="Update this Field" value=""  name="">
                                         </div>
                                     </div>




                           </div>



                           <div class="tab-pane fade" id="Additional" role="tabpanel" aria-labelledby="profile-tab">
                                       <div class="row">
                                           <div class="col-md-6">
                                               <label>Linked In Profile</label>
                                           </div>
                                           <div class="col-md-6">
                                              <input type="text" spellcheck="false" class="text-primary input-weight"  placeholder="Update this Field" value=""  name="">
                                           </div>
                                       </div>
                                       <div class="row">
                                           <div class="col-md-6">
                                               <label>Socail Profile</label>
                                           </div>
                                           <div class="col-md-6">
                                              <input type="text" spellcheck="false" class="text-primary input-weight"  placeholder="Update this Field" value=""  name="">
                                           </div>
                                       </div>
                                       <div class="row">
                                           <div class="col-md-6">
                                               <label>Total Projects</label>
                                           </div>
                                           <div class="col-md-6">
                                              <input type="text" spellcheck="false" class="text-primary input-weight"  placeholder="Update this Field" value=""  name="">
                                           </div>
                                       </div>
                                       <div class="row">
                                           <div class="col-md-6">
                                               <label>English Level</label>
                                           </div>
                                           <div class="col-md-6">
                                              <input type="text" spellcheck="false" class="text-primary input-weight"  placeholder="Update this Field" value=""  name="">
                                           </div>
                                       </div>

                           </div>


                       </div>
                       <br>
                       <div class="col-md-2">
                           <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Save"/>
                       </div>
                   </div>
               </div>
           </form>



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
