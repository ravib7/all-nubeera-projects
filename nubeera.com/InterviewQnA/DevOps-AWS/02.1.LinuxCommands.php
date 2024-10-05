<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">

   <title>NubeEra.Training(Interview QnA): DevOps & AWS</title>
   <link rel="stylesheet" href="../../lib/bootstrap-grid.processed.css">
   <link rel="icon" type="image/png" href="../../img/logo.ico">
   <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
   <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css'>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.4.6/css/flag-icon.min.css">
   <link rel='stylesheet' href='http://www.microsoft.com/surface/assets/css/fonts/all/fonts.css'>

   <link rel="stylesheet" href="../../styles/style.interviewQnA.css">
   <link rel="stylesheet" href="../../js/searchbox/searchbox.css">

   <script src="../../js/searchbox/searchbox.js"></script>
   <!--START: for Panel-->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   <!--END:  for Panel-->

   <!--START: Collapsable-->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
   <!--END: Collapsable-->

   <link rel="stylesheet" href="../../styles/style.processed.css">
   <link rel="stylesheet" href="../../styles/style.footer.css">
   <link rel="stylesheet" href="../../styles/style.nav1.css">
   <link rel="stylesheet" href="../../styles/style.progress.css">
   <link rel="stylesheet" href="../../lib/blog-vendor/bootstrap/css/bootstrap.min.css">

   <style media="screen">
   body {
      padding-top: 56px;
   }

   .size {
      height: 55px;
      width: 55px;
   }

   .size1 {
      height: 300px;
      width: 100%;

   }

   .blockquote1 {
      background-color: #f0f0f0;

   }

   .pad-1 {
      padding-left: 20%;
      padding-right: 20%;
   }
   </style>

   <style>
   table,
   th,
   td {
      border: 1px solid black;
      border-collapse: collapse;
   }

   th,
   td {
      padding: 10px;
   }
   </style>
</head>

<body oncopy="return false" oncut="return false" onpaste="return false">
   <!--<div id="preloader"><?php require '../../templates/preloader.php'; ?></div>-->
   <main class="site-content">

      <!-- ===============================NAVIGATION BAR=========================================== -->
      <?php require '../../templates/folder_navbar.php'; ?>
      <!-- ================================DISPLAY=============================================== -->


      <section>

         <div class="container">

            <!-- Post Content Column -->
            <div class="col-lg-12">

               <!-- Title -->
               <h1 class="mt-4">General DevOps Interview QnA</h1>

               <!-- Author -->
               <center>
                  <h6>
                     by
                     <a href="#">Mujahed</a>
                     Posted on <?php 
                     $timezone =date('d-M-Y'); 
                     echo $timezone
                     ?>
                  </h6>
               </center>
               <!-- Date/Time -->
               <!-- <p>Posted on April Day, year at 00:00 AM</p> -->

               <hr>

               <!-- Preview Image -->
               <!-- <img class="img-fluid rounded size1" style="max-width:60%;" src="../../img/interviews/NGINX_1.jpg" alt=""> -->

               <input type="text" id="myInput" onkeyup="searchTopicsInQuestionNAnswers()" placeholder="Enter Topic...">
               <!--Start of UL Contents -->
               <ul id="myUL">
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              1) Cloud you tell me "Linux ls Command" and its Options?
                           </div>
                           <div class="panel-body">
                              ls command is used to <b>A list of all the files and directories present
                                 in the current Folder of your System</b>. <br />
                              <b>ls -ltr</b> option which means:<br />
                              l - List <br />
                              t - Time <br />
                              r - Recursive <br />

                           </div>
                        </div>
                     </a>
                  </li>
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              2) What is pwd Command?
                           </div>
                           <div class="panel-body">
                              “pwd” = “Present Working Directory”. It gives you the name of the directory name on which
                              you are currently present or working and shows the path of that directory. <br />
                           </div>
                        </div>
                     </a>
                  </li>
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              3) What is cd Command?
                           </div>
                           <div class="panel-body">
                              used to Change Directory, with the help of certain options we can find other details of
                              files<br />
                              cd Syntax: <br />
                              <div class="tagIdent5percent"><b>cd [directory/path]</b> </div>
                              Options are: <br />
                              <div class="tagIdent5percent">To navigate into the <b>root directory</b>, use
                                 <b>"cd /"</b><br />
                              </div>
                              <div class="tagIdent5percent">To navigate to your <b>home directory</b>, use
                                 <b>"cd" or "cd ~"</b><br />
                              </div>
                              <div class="tagIdent5percent">To navigate <b>up one directory level</b>, use
                                 <b>"cd .."</b><br />
                              </div>
                              <div class="tagIdent5percent">To navigate to the <b>previous directory (or
                                    back)</b>, use <b>"cd -"</b><br />
                              </div>
                              <div class="tagIdent5percent"> To navigate through multiple levels of directory at
                                 once, specify the full directory path. <br />
                              </div>
                              <div class="tagIdent10percent">Example: <b>cd /var/www</b>, <b>cd ~/Desktop</b> </div>
                              <br />
                              <div class="tagIdent5percent">Other Example of cd Command are</div>
                              <div class="tagIdent10percent">cd ../ - Levels Up one Directory </div>
                              <div class="tagIdent10percent">cd ../../ </div>
                              <div class="tagIdent10percent">cd 'Dir name with space' - if we have space we can use single quote(')</div> 
                           </div>
                        </div>
                     </a>
                  </li>
                  <li><a href="#">
                        <div class="panel panel-primary" style="margin-bottom:5px;">
                           <div class="panel-heading">
                              4) What is mkdir Command?
                           </div>
                           <div class="panel-body">
                              mkdir(MaKe DIRectory) command is used to create folder(directory) or folders on single execution. <br />
                              Syntax: mkdir [options] [folder].<br />
                              Example: <br />
                              # mkdir --version             //Display mkdir command version  <br/>
                              # mkdir --help                //Display mkdir command help   <br/>
                              # mkdir -p /aaa/bbb/ccc       //Create Folder with same sequence aaa-->bbb-->ccc <br/>
                              # mkdir -m a=rwx [folders]    //Create folders with RWX(read,write & eXecute) mode <br />
                           </div>
                        </div>
                     </a>
                  </li>
                  <li><a href="#">
                        <div class="panel panel-primary" style="margin-bottom:5px;">
                           <div class="panel-heading">
                              5) What is rmdir Command?
                           </div>
                           <div class="panel-body">
                              rmdir(ReMove DIRectory) command is used to remove folder(directory) or folders on single execution. <br />
                              Syntax: rmdir [options] [folder].<br />
                              Example: <br />
                              # rmdir --version             //Display rmdir command version  <br/>
                              # rmdir --help                //Display rmdir command help   <br/>
                              # rmdir -p /aaa/bbb/ccc       //Remove Folder with same sequence aaa-->bbb-->ccc <br/>
                              # mkdir -m a=rwx [folders]    //Create folders with RWX(read,write & eXecute) mode <br />
                           </div>
                        </div>
                     </a>
                  </li>
               </ul>

               <!--END of UL Contents -->
               <!-- Comments Form -->
               <div class="card my-4">
                  <h6 class="card-header">Leave a Comment:</h6>
                  <div class="card-body">
                     <form>
                        <div class="form-group">
                           <textarea class="form-control" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn-primary">Submit</button>
                     </form>
                  </div>
               </div>

               <!-- Single Comment -->
               <div class="media mb-4">
                  <img class="d-flex mr-3 size rounded-circle" src="../../img/sample.png" alt="">
                  <div class="media-body">
                     <h6 class="mt-0">Commenter Name</h6>
                     Text
                  </div>
               </div>

               <div class="media mb-4">
                  <img class="d-flex mr-3 size rounded-circle" src="../../img/sample.png" alt="">
                  <div class="media-body">
                     <h6 class="mt-0">Commenter Name</h6>
                     Text
                  </div>
               </div>



            </div>

         </div>



         </div>

         </div>
         <!-- /.row -->

         </div>
      </section>

      <?php require "../../templates/footer_outer.php" ?>
      <!-- ==================================================Script Section============================================== -->

      <script type="text/javascript" src="../../lib/vanilla-tilt.min.js"></script>
      <!-- ======================================================================================================== -->
      <script type="text/javascript" src="https://unpkg.com/aos@2.3.0/dist/aos.js"></script>

      <!-- <script type="text/javascript" src="https://unpkg.com/aos@2.3.0/dist/aos.js"></script> -->
      <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
      <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
      <!-- ======================================================================================================== -->
      <script src="../../js/main.js"></script>

      <script src="../../js/navmenu.js"></script>


      <script src="../../lib/blog-vendor/jquery/jquery.min.js"></script>
      <script src="../../lib/blog-vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
   </body>

</html>