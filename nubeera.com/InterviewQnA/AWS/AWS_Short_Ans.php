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
               <h1 class="mt-4">AWS Short Answer Interview QnA</h1>

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
                              1) Suppose you are a game designer and want to develop a game with single-digit millisecond latency, 
                              which of the following database services would you use?
                           </div>
                           <div class="panel-body">                          
                              Amazon DynamoDB
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              2) If you need to perform real-time monitoring of AWS services and get actionable insights, 
                              which services would you use?
                           </div>
                           <div class="panel-body">                          
                              Amazon CloudWatch
                           </div>
                        </div>
                     </a>
                  
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              3) As a web developer, you are developing an app, targeted primarily for the mobile platform. 
                              Which of the following lets you add user sign-up, sign-in, 
                              and access control to your web and mobile apps quickly and easily?
                           </div>
                           <div class="panel-body">                          
                              Amazon Cognito
                           </div>
                        </div>
                     </a>
                  
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              4) You are a Machine Learning Engineer who is on the lookout for a solution that will discover sensitive 
                                 information that your enterprise stores in AWS and then use NLP to classify the data and 
                                 provide business-related insights. Which among the services would you choose?
                           </div>
                           <div class="panel-body">                          
                              AWS Macie
                           </div>
                        </div>
                     </a>
                  
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              5) You are the system administrator in your company, which is running most of its infrastructure on AWS. 
                                 You are required to track your users and keep tabs on how they are being authenticated. 
                                 You wish to create and manage AWS users and use permissions to allow and deny their access to AWS resources. 
                                 Which of the following services suits you best?
                           </div>
                           <div class="panel-body">                          
                              AWS IAM
                           </div>
                        </div>
                     </a>
                  
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              6)  Which service do you use if you want to allocate various private and 
                              public IP addresses to make them communicate with the internet and other instances?
                           </div>
                           <div class="panel-body">                          
                              Amazon VPC
                           </div>
                        </div>
                     </a>
                  
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              7) This service provides you with cost-efficient and 
                              resizable capacity while automating time-consuming administration tasks
                           </div>
                           <div class="panel-body">                          
                              Amazon Relational Database Service
                           </div>
                        </div>
                     </a>
                  
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              8) Which of the following is a means for accessing human researchers or 
                                 consultants to help solve problems on a contractual or temporary basis?
                           </div>
                           <div class="panel-body">                          
                              Amazon Mechanical Turk
                           </div>
                        </div>
                     </a>
                  
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              9) This service is used to make it easy to deploy, manage, and 
                                 scale containerized applications using Kubernetes on AWS. Which of the following is this AWS service?
                           </div>
                           <div class="panel-body">                          
                              Amazon Elastic Container Service
                           </div>
                        </div>
                     </a>
                  
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              10) This service lets you run code without provisioning or managing servers. 
                                 Select the correct service from the below options
                           </div>
                           <div class="panel-body">                          
                              AWS Lambda
                           </div>
                        </div>
                     </a>
                  
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              11) As an AWS Developer, using this pay-per-use service, you can send, store, and 
                                 receive messages between software components. Which of the following is it?
                           </div>
                           <div class="panel-body">                          
                              Amazon Simple Queue Service
                           </div>
                        </div>
                     </a>
                  
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              12) Which service do you use if you would like to host a real-time audio and video conferencing application on AWS, 
                              this service provides you with a secure and easy-to-use application?
                           </div>
                           <div class="panel-body">                          
                              Amazon Chime
                           </div>
                        </div>
                     </a>
                  
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              13) As your company's AWS Solutions Architect, you are in charge of designing thousands of similar individual jobs. 
                                 Which of the following services best meets your requirements?
                           </div>
                           <div class="panel-body">                          
                              AWS Batch
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