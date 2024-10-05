<?php
session_start();
if (isset($_SESSION['fname'])) {
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8" />

   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
   <meta name="description" content="" />
   <meta name="author" content="" />
   <title>NubeEra Dashboard</title>

   <link rel="icon" type="image/png" href="../img/logo.ico">
   <link href="css/styles.css" rel="stylesheet" />
   <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"> </script>
   <script type="text/javascript" src="https://code.jquery.com/jquery-1.9.1.min.js"></script>                        <!-- jquery -->
   <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet"> -->   <!-- bootstrap 5.1.2 css -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">              <!-- bootstrap 4.5.2 css -->
   <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>           bootstrap 5.1.2 js -->
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>                      <!--  bootstrap 4.5.2 js-->
   <link href="css/mystyle.css" rel="stylesheet" />
</head>
<style>
html
      {
         font-size: 100%;
      }
.division {
    /* background: red; */
    float: none;
    position: relative;
    margin: 1.875rem auto 1.25rem;
    text-align: center;
    width: 100%;
    box-sizing: border-box;
}

.division .line {
    border-top: 0.09375rem solid DarkSlateBlue;
    position: absolute;
    top: 0.8125rem;
    width: 80%;
}

.line.l {
    left: 3.25rem;
}

.line.r {
    right: 3.25rem;
}

.division span {
    font-weight: 600;
    font-size: 0.875rem;
}

.myform {
    padding: 0 1.5625rem 0 2.0625rem;
}

.form-control {
    border: 0.0625rem solid DarkSlateBlue;
    border-radius: 0.1875rem;
    background: white;
    margin-bottom: 1.25rem;
    letter-spacing: 0.0625;
}

.form-control:focus {
    border: 0.0625rem solid #57557A;
    border-radius: 0.1875rem;
    box-shadow: none;
    background: Lavender;
    color: black;
    letter-spacing: 0.0625rem;
}
.btn-primary {
    background: DarkSlateBlue;
    border: none;
    border-radius: 3.125rem;
    width: 100%;
    color: white;
}
.btn-primary:hover {
    background: SlateBlue;
}
small {
    color: #F2CEFF
}
   @media (max-width: 767px)
   {
      .sb-topnav .navbar-brand 
      {
         margin-right: 15rem;
      }
   }
   @media (max-width: 600px)
   {
      .division .line 
      {
         width: 70%;
      }
      .sb-topnav .navbar-brand 
      {
         margin-right: 6.2rem;
      }
     html
      {
         font-size: 85%;
      }
      #vid-plylst {
	    margin-top: 5px;
	   }
      .sb-nav-fixed #layoutSidenav #layoutSidenav_content
       {
         padding-left: 300px;
         top: 45px;
         margin-right: -10px;
       }
   }
   @media (max-width: 400px)
   {
      .division .line 
      {
         width: 50%;
      }
      .sb-topnav .navbar-brand 
      {
         margin-right: 2.1875rem;
      }
     html
      {
         font-size: 75%;
      }
      .sb-nav-fixed #layoutSidenav #layoutSidenav_nav
      {
         width: 15.625rem;
      }
      #vid-plylst {
	    margin-top: 5px;
	   }
      .sb-nav-fixed #layoutSidenav #layoutSidenav_content {
    padding-left: 300px;
    top: 45px;
    margin-right: -10px;
}
   }

</style>

<body class="sb-nav-fixed">
   <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
      <!-- Navbar Brand-->
      <a class="navbar-brand " href="dashboard.php"><img  src="../img/logo.ico" height="40px"></a>
      <!-- Sidebar Toggle-->
      <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
      <!-- Navbar Search-->
      <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
         <!-- <div class="input-group" style="display:none">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div> -->
      </form>
      <span id="listToggle" data-toggle="modal" data-target="#listModal"> topics </span>
         <!-- Navbar--><span id="greet" > Welcome, <?php echo $_SESSION['fname'] ?></span>
      <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
         <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
               <li> <span class="dropdown-item" style="font-size: 1.125rem;"><i class="fas fa-user-circle" style="opacity: 50%; height: 1.875rem; width: 1.875rem;"> </i> <?php echo $_SESSION['emailid'] ?> </a></li>
               <li>
                  <hr class="dropdown-divider" />
               </li>
                <li><a class="dropdown-item" data-toggle="modal" data-target="#myModal">Change Password</a></li>
               <!--<li><a class="dropdown-item" href="#!">Activity Log</a></li> -->
               <li>
                  <hr class="dropdown-divider" />
               </li>
               <li><a class="dropdown-item" href="backend(1).php?data=log_out"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
            </ul>
         </li>
      </ul>
   </nav>

<!-- Modal Popup -->
   <div class="modal" id="myModal">
    <div class="modal-dialog container-fluid h-75 pt-5" style="background: white;">
      <div id="message" style="padding: 0.3125rem 0.625rem; display: none; width: 100%;">f</div>
      <div class="modal-content" style="border-top: 0.1875rem solid DarkSlateBlue">
            <div class="card-body ">
               <div class="division">
                  <div class="row">
                        <div class="col-3">
                           <div class="line l"></div>
                        </div>
                        <div class="col-6"><span>CHANGE PASSWORD</span></div>
                        <div class="col-3">
                           <div class="line r"></div>
                        </div>
                  </div>
               </div>
               <form class="myform" action=" " method="post">
                  <div class="form-group"> <input type="password" class="form-control" placeholder="Current Password" name="currPass"> </div>
                  <div class="form-group"> <input type="password" class="form-control" placeholder="New Password" name="newPass" id="newPsswrd"> </div>
                  <div class="form-group"> <input type="password" class="form-control" placeholder="Confirm New Password" name="cnfrmPass" id="cnfrmPsswrd" onfocusout="checkPasswordMatch()"> </div>
                  <div class="form-group"> <button type="submit" class="btn btn-block btn-primary btn-lg" name="chngePsswrd"><small> <i class="far fa-save pr-2"></i> Save</small></button> </div>
               </form>
            </div>
      </div>
    </div>
  </div>
<!-- modal pop-up -->



   <div id="layoutSidenav">
      <div id="layoutSidenav_nav">
         <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
               <div class="nav">
                  <div class="sb-sidenav-menu-heading">Materials</div>
                  <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseVideos"
                     aria-expanded="false" aria-controls="collapseVideos">
                     <div class="sb-nav-link-icon"><i class="fas fa-video"></i></div>
                     Recordings
                     <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                  </a>
                  <div class="collapse" id="collapseVideos" aria-labelledby="headingOne"
                     data-bs-parent="#sidenavAccordion">
                     <nav class="sb-sidenav-menu-nested nav">
                     <?php 
                              include "Connect_Db.php";
                              $getBatchquery = "SELECT DISTINCT `Batch_Name` FROM material WHERE Email LIKE '%".$_SESSION['emailid']."%'";

                              $batchResult = mysqli_query($conn_2, $getBatchquery);
                              if (mysqli_num_rows($batchResult) > 0)
                              {
                                 // output data of each row
                                 while($Batchrow = mysqli_fetch_assoc($batchResult))
                                 { 
                     ?>
                                    <a href="#vid-list" class="nav-link" style="cursor: pointer;" onClick="showPlaylist('<?php echo $Batchrow["Batch_Name"]; ?>')"> <?php echo $Batchrow["Batch_Name"]; ?></a>

                     <?php       }
                              }
                              else
                              {
                              echo "You Are Not registered user Of NubeEra";
                              }
                              mysqli_close($conn);
                     ?>
                     </nav>

                  </div>
                  <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseNotes"
                     aria-expanded="false" aria-controls="collapseNotes">
                     <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                     Notes
                     <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                  </a>
                  <div class="collapse" id="collapseNotes" aria-labelledby="headingOne"
                     data-bs-parent="#sidenavAccordion">
                     <nav class="sb-sidenav-menu-nested nav">
                        <span class="nav-link"><i>Coming Soon</i></span>
                        <!-- <span class="nav-link" onClick="changeContent('http://localhost/nubeera.com/docs.nubeera.com/'); $('#vid-plylst').css('display', 'none');">Python</span> -->
                     </nav>
                  </div>
               </div>
            </div>
            <div class="sb-sidenav-footer">
               <div class="small"></div>

            </div>
         </nav>
      </div>





      <div id="layoutSidenav_content">

         
         <div class="modal row" id="listModal">
            <div class="row">
               <div class="col-md-2" style="background: red;">r</div>
               <div class="col-md-8" style="background: yellow;">y</div>
               <div class="col-md-2" style="background: green;">g</div>
         </div>


         <main>
            <div>
               <div class="vid-container embed-responsive" id="vid-cont">
                  <iframe id="vid_frame" src="" class="embed-responsive-item"></iframe>
               </div>
               <div id="vid-plylst">
                  <ol id="vid-list">
                  
                  </ol>
               </div>
            </div>
         </main>







         <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid px-4">
               <div class="d-flex align-items-center justify-content-between small">
                  <div class="text-muted">Copyright &copy; NubeEra 2021</div>
                  <div>
                     <a href="#">Privacy Policy</a>
                     &middot;
                     <a href="#">Terms &amp; Conditions</a>
                  </div>
               </div>
            </div>
         </footer>
      </div>
   </div>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"> </script>
   <script src="js/script.js"></script>
   <script src="js/myscript.js"></script>
   <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script> -->
   <!-- <script src="assets/demo/chart-area-demo.js"></script> -->
   <!-- <script src="assets/demo/chart-bar-demo.js"></script> -->
   <!-- <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script> -->
   <!-- <script src="js/datatables-simple-demo.js"></script> -->
   
</body>

</html>
<?php
} else {
    header("Location: index.php");
}



?>











<!-- <li>
         <a href="javascript:void();" onClick="document.getElementById('vid_frame').src='https://youtube.com/embed/jOs2h8A5nPk?rel=0&showinfo=0&autohide=1'">
            <span class="vid-thumb"><img width=110 src="https://img.youtube.com/vi/cOSEOYi9JS4/default.jpg" /></span>
            <div class="desc">WeatherBeater™ Product Video</div>
         </a>
      </li>
                         -->
