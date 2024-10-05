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
               <h1 class="mt-4">Jenkins-CI/CD Interview QnA</h1>

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
                              1) What is Continues Integration( CI )?
                           </div>
                           <div class="panel-body">
                              In software development, when multiple developers or teams are working on different
                              segments of same web application, we need to perform integration test by integrating all
                              modules. <br />
                              In order to do that an automated process for each piece of code is performed on daily
                              bases so that all your code get tested.
                           </div>
                        </div>
                     </a>
                  </li>
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              2) What is Jenkins?
                           </div>
                           <div class="panel-body">
                              Jenkins is an open source tool with plugin built for continuous integration purpose. The
                              principle functionality of Jenkins is to keep a track of version control system and to
                              initiate and monitor a build system if changes occur. It monitors the whole process and
                              provides reports and notifications to alert.
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              3) what are the advantages of Jenkins?
                           </div>
                           <div class="panel-body">
                              Advantage of Jenkins include<br />
                              • At integration stage, build failures are cached<br />
                              • For each code commit changes an automatic build report notification generates<br />
                              • To notify developers about build report success or failure, it is integrated with LDAP
                              mail server<br />
                              • Achieves continuous integration agile development and test driven development<br />
                              • With simple steps, maven release project is automated<br />
                              • Easy tracking of bugs at early stage in development environment than production<br />
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              4) what are some of the useful plugins in Jenkin?
                           </div>
                           <div class="panel-body">
                              Some of the important plugins in Jenkin includes<br />
                              • Maven 2 project<br />
                              • Github integration<br />
                              • Amazon EC2/ s3 for static Website deployment in bucket<br />
                              • HTML publisher<br />
                              • Copy artifact<br />
                              <br />
                              <img src="../../img/interviews/jenkins/jenkins_phasesV2.jpg" 
                              width="40%"
                              height="40%"
                              alt="Jenkins Phases and Tools" >
                           </div>
                        </div>
                     </a>

                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              5) What are the two components Jenkins is mainly integrated with?
                           </div>
                           <div class="panel-body">
                              Jenkin is mainly integrated with two components<br />
                              • Version Control system like GIT, SVN.<br />
                              • And build tools like Apache Maven.<br />
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              6) Define the process of Jenkins?
                           </div>
                           <div class="panel-body">
                              • First, a developer commits the code to the source code repository. Meanwhile, the
                              Jenkins server checks the repository at regular intervals for changes.<br />
                              • Soon after a commit occurs, the Jenkins server detects the changes that have occurred in
                              the source code repository. Jenkins will pull those changes and will start preparing a new
                              build.<br />
                              • If the build fails, then the concerned team will be notified.<br />
                              • If the build is successful, then Jenkins deploys the build in the test server.<br />
                              • After testing, Jenkins generates feedback and then notifies the developers about the
                              build and test results.<br />
                              • It will continue to check the source code repository for changes made in the source code
                              and the whole process keeps on repeating.<br />
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              7) How do you install Jenkins?
                           </div>
                           <div class="panel-body">
                              To install Jenkins, you just need to follow these five steps:<br />
                              1. Install Java Version 8 – Jenkins is a Java based application, hence Java is a
                              must.<br />
                              2. Install Apache Tomcat Version 9 – Tomcat is essential to deploy Jenkins war file.<br />
                              3. Download Jenkins war File – This war is must to install Jenkins.<br />
                              4. Deploy Jenkins war File – You deploy Jenkins war file using Tomcat to run
                              Jenkins.<br />
                              5. Install Suggested Plugins – Install a list of plugins suggested by Jenkins.<br />
                              Once the installation is complete, you will be able to see the Jenkins dashboard.<br />
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              8) What is Groovy?
                           </div>
                           <div class="panel-body">
                              Groovy from Apache is a language designed for the Java platform. It is the native
                              scripting language for Jenkins. Groovy-based plugins enhance Jenkins with great interfaces
                              and build reports that are of dynamic and consistent nature.
                           </div>
                        </div>
                     </a>
                  </li>
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              8) Explain how you can set up/Create Jenkins job?
                           </div>
                           <div class="panel-body">
                              Go to Jenkins top page, select “New Job”, then choose “Build a free-style software
                              project”.<br />
                              Now you can tell the elements of this freestyle job:<br />
                              • Optional SCM, such as CVS or Subversion where your source code resides.<br />
                              • Optional triggers to control when Jenkins will perform builds.<br />
                              • Some sort of build script that performs the build (ant, maven, shell script, batch file,
                              etc.) where the real work happens.<br />
                              • Optional steps to collect information out of the build, such as archiving the artifacts
                              and/or recording javadoc and test results.<br />
                              • Optional steps to notify other people/systems with the build result, such as sending
                              e-mails, IMs, updating issue tracker, etc..<br />
                           </div>
                        </div>
                     </a>
                  </li>
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              9) How will you secure Jenkins?
                           </div>
                           <div class="panel-body">
                              The way I secure Jenkins is mentioned below if you have any other way to do it than
                              mention that:<br />
                              • Make sure that the global security is on.<br />
                              • Check if Jenkins is integrated with my company’s user directory with an appropriate
                              plugin.<br />
                              • Ensure that the matrix/Project matrix is enabled to fine-tune access.<br />
                              • Automate the process of setting rights/privileges in Jenkins with custom version
                              controlled script.<br />
                              • Limit physical access to Jenkins data/folders.<br />
                              • Periodically run security audits on the same.<br />
                              or<br />
                              <b>Two aspects of securing Jenkins:</b><br />
                              <p style="text-align:left">
                                 <b>(i) Access Control:</b> <br />
                                 which includes authenticating users and giving them an appropriate set of permissions, which can be done in 2 ways.
                                 <br />
                                 <b>Security Realm</b> determines a user or a group of users with their passwords.
                                 <br />
                                 <b>Authorization Strategy</b> defines what should be accessible to which user. In this case, there might be different types of security based on the permissions granted to the user such as Quick and simple security with easy setup, Standard security setup, Apache front-end security, etc.
                              </p>
                              <b>(ii) Protecting Jenkins users from outside threats.</b>
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              10) What is the use of Pipelines in Jenkins?
                           </div>
                           <div class="panel-body">
                              Pipeline plugin is used in Jenkins for making the Jenkins Pipeline, which gives us the
                              view of stages or tasks to perform one after the other in the pipeline form. It models a
                              series of related tasks. Pipelines help the teams to review, edit and iterate upon the
                              tasks. Pipelines are durable and it can optionally stop and wait for human approval as
                              well to start the next task. A pipeline is extensible and can perform work in parallel. It
                              supports complex CD requirements.
                           </div>
                        </div>
                     </a>
                  </li>

                  <!-- <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              23) Describe the branching strategies you have used?
                              or <br />
                              What is Github Model you used?
                              or <br />
                              Can you Explain the Git Workflow/Branching Principal you used? 
                           </div>
                           <div class="panel-body">
                           To record the history of the project, Gitflow workflow employs two parallel long-running branches – master and develop:<br />
                           <b>Master</b>– this branch is always ready to be released on LIVE, with everything fully tested and approved (production-ready).<br />
                           <b>Feature branching</b>– A feature branch model keeps all of the changes for a particular feature inside of a branch. When the feature is fully tested and validated by automated tests, the branch is then merged into master.<br />
                           <b>Task branching</b>– In this model, each task is implemented on its own branch with the task key included in the branch name. It is easy to see which code implements which task, just look for the task key in the branch name. <br />
                           <b>Develop branching</b>- This is the branch to which all feature branches are merged and where all tests are performed. Only when everything’s been thoroughly checked and fixed it can be merged to the master.<br />
                           <b>Release branching</b>– Once the develop branch has acquired enough features for a release, you can clone that branch to form a Release branch. Creating this branch starts the next release cycle, so no new features can be added after this point, only bug fixes, documentation generation, and other release-oriented tasks should go in this branch. Once it is ready to ship, the release gets merged into master and tagged with a version number. In addition, it should be merged back into the develop branch, which may have progressed since the release was initiated.<br />
                           <b>Hotfix</b>– these branches are used to quickly patch production releases. These branches are a lot like release branches and feature branches except they’re based on master instead of develop.<br />
                           In the end tell them that branching strategies vary from one organization to another so I know basic branching operations like delete, merge, checking out a branch, etc.<br />
                           
                           <b>Feature</b> – each new feature should reside in its own branch, which can be pushed to the develop branch as their parent one.<br />
                           <img src="../InterviewQnA/img/jenkins_phases.jpg" 
                              width="70%"
                              height="70%"
                            alt="Git Workflow/Branching/Model" />
                           </div>
                        </div>
                     </a>
                  </li> -->
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