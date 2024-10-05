<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
  <!-- Custom fonts for this template-->
  <link href="../lib/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../styles/css/sb-admin-2.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../styles/css/style.playlist.css">
  <link rel="stylesheet" href="../styles/css/style.productBuy.css">
  <link rel="stylesheet" type="text/css" href="../styles/css/style.customCardBox.css" media="screen">    
  <script type="text/javascript">
        function PlayVideo(v1){
            document.getElementById("ifVideoPlayer").src=v1;
        }
    </script>
</head>
<body>
    <h1 class="my-5">Welcome, <b><?php echo htmlspecialchars($_SESSION["email"]); ?></b>!</h1>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
    </p>
    
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <div class="col-lg-10">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">selected couse name goes here</h1>
        </div>    
        <div class="card shadow mb-4">
            <iframe 
                id="ifVideoPlayer"
                name="ifVideoPlayer"
                src="https://player.vdocipher.com/playerAssets/1.x/vdo/embed/index.html#otp=20160313versASE323BROzcC9wvJiDpzlDFenOf2678PmMC7OggD8RRp4Vk1jcyi&playbackInfo=eyJ2aWRlb0lkIjoiZDkxOGM3ZjMwNDRiZmVkZDI0ZTA5ZjI2NzUxNjM2NTgifQ==" 
                style="border:0;max-width:100%"  width="100%" height="500px" 
                allowFullScreen="true" allow="encrypted-media">
            </iframe>
            <!-- <iframe width="100%" height="500px" src="https://www.youtube.com/embed/3AyMjyHu1bA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">
              <!-- video Title name -->
              </h6>
            </div>
          </div>
        </div>
    
            <div class="col-lg-10">
                <div class="card shadow mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Course Videos</h6>
                    </div>
                    <div class="card-body">
                    <nav class="archive-links">
                    <ol>
                    <?php
                        // Include config file
                        require_once "./config.php";
                        
                        if (isset($_SESSION['email']))
                        {
                            //Step0: Prepare Array to Store all Values
                            $StdId=0;
                            $CourseId=0;
                            $MaterialURL="";
                            //Step1: Find Current User Id
                            $sql="select id  from net.users where email='" . strval($_SESSION["email"]) . "';";
                            $result = mysqli_query($link,$sql);
                            while($row = mysqli_fetch_array($result)) {
                                $StdId=$row['id'];
                                break;   
                            }
                            //Step2: Find CourseId based on User Id
                            $sql="SELECT CourseId_Fk FROM coursesubscribe WHERE UserId_Fk=".$StdId;
                            $result = mysqli_query($link,$sql);
                            while($row = mysqli_fetch_array($result)) {
                                $CourseId=$row['CourseId_Fk'];
                                break;   
                            }
                            //Step3: Select Material based on CourseId
                            $sql="SELECT * FROM materialdetails where CourseId_Fk=".$CourseId;
                            $result = mysqli_query($link,$sql);
                            while($row = mysqli_fetch_array($result)) {
                                $MaterialURL=$row['MaterialURL'];
                                echo "<li>
                                    <a href=\"javascript:PlayVideo('".$MaterialURL."')\">
                                    <div class=\"main-image\"></div>
                                    <span class=\"link-title\">Dynamic=".$StdId."</span>
                                    <span class=\"link-excerpt\">13:42</span>
                                    </a>
                                    </li>"; 
                                break;   
                            }                            

                        }

                        //Step2:  
                        /*while($row = mysql_fetch_array($result)) {
                        $id = $row['id'];
                        echo "<li>
                        <a href=\"javascript:PlayVideo('https://www.youtube.com/embed/3AyMjyHu1bA')\">
                        <div class=\"main-image\"></div>
                        <span class=\"link-title\">Section Intro</span>
                        <span class=\"link-excerpt\">13:42</span>
                        </a>
                        </li>"; 
                        }*/
                        ?>
                    </ol>
                    <ol>
                        <li>
                            <a href="javascript:PlayVideo('https://www.youtube.com/embed/3AyMjyHu1bA')">
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
    
</body>
</html>