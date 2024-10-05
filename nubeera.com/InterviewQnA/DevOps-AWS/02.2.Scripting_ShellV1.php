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
                                 1) What are the fundamental differences between DevOps & Agile?
                              </div>
                              <div class="panel-body">
                                 The differences between the two are listed down in the table below.
                                 <table>
                                    <tr>
                                       <th style="background-color:powderblue;text-align:center;">Features</th>
                                       <th style="background-color:powderblue;text-align:center;">DevOps</th>
                                       <th style="background-color:powderblue;text-align:center;">Agile</th>
                                    </tr>

                                    <tr>
                                       <td><strong>Agility</strong></td>
                                       <td>Agility in both Development & Operations</td>
                                       <td>Agility in only Development</td>

                                    <tr>
                                       <td><strong>Processes/ Practices</strong></td>
                                       <td>Involves processes such as CI, CD, CT, etc.</td>
                                       <td>Involves practices such as Agile Scrum, Agile Kanban, etc.</td>
                                    </tr>

                                    <tr>
                                       <td><strong>Key Focus Area</strong></td>
                                       <td>Timeliness & quality have equal priority</td>
                                       <td>Timeliness is the main priority</td>
                                    </tr>

                                    <tr>
                                       <td><strong>Release Cycles/ Development Sprints</strong></td>
                                       <td>Smaller release cycles with immediate feedback</td>
                                       <td>Smaller release cycles</td>
                                    </tr>

                                    <tr>
                                       <td><strong>Source of Feedback</strong></td>
                                       <td>Feedback is from self (Monitoring tools)</td>
                                       <td>Feedback is from customers</td>
                                    </tr>

                                    <tr>
                                       <td><strong>Scope of Work</strong></td>
                                       <td>Agility & need for Automation</td>
                                       <td>Agility only</td>
                                    </tr>
                                 </table>
                              </div>
                           </div>
                        </a>
                     
                     </li>
                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 2) What is the need for DevOps?
                              </div>
                              <div class="panel-body">
                                 Instead of releasing big sets of features, companies are trying to see if small features
                                 can be transported to their customers through a series of release trains.
                                 This has many advantages like quick feedback from customers, better quality of software
                                 etc. which in turn leads to high customer satisfaction.
                                 To achieve this, companies are required to increase deployment frequency. This ensures:
                                 <ul>

                                    <li>
                                       Lower failure rate of new releases
                                    </li>

                                    <li>
                                       Shortened lead time between fixes
                                    </li>

                                    <li>
                                       Faster mean time to recovery in the event of new release crashing
                                    </li>

                                 </ul>
                                 <br />
                                 DevOps fulfills all these requirements and helps in achieving seamless software delivery.
                                 You can give examples of companies like Etsy, Google and Amazon which have adopted DevOps
                                 to achieve levels of performance that were unthinkable even five years ago.
                                 They are doing tens, hundreds or even thousands of code deployments per day while
                                 delivering world class stability, reliability and security.
                              </div>
                           </div>
                        </a>
                     
                     </li>

                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 3) How is DevOps different from Agile / SDLC?
                              </div>
                              <div class="panel-body">
                                 Agile is a set of values and principles about how to produce i.e. develop software.
                                 Example: if you have some ideas and you want to turn those ideas into working software,
                                 you can use the Agile values and principles as a way to do that.
                                 But, that software might only be working on a developer’s laptop or in a test environment.
                                 You want a way to quickly, easily and repeatably move that software into production
                                 infrastructure, in a safe and simple way.
                                 To do that you need DevOps tools and techniques.<br />
                                 <br />
                                 You can summarize by saying Agile software development methodology focuses on the
                                 development of software but DevOps on the other hand is responsible for development as
                                 well as deployment of the software in the safest and most reliable way possible.
                              </div>
                           </div>
                        </a>
                     </li>

                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 4) Which are the top DevOps tools?
                              </div>
                              <div class="panel-body">
                                 The most popular DevOps tools are mentioned below:<br />
                                 <ul>
                                    <li>
                                       Git : Version Control System tool
                                    </li>

                                    <li>
                                       Maven : Build tool
                                    </li>

                                    <li>
                                       Jenkins : Continuous Integration tool
                                    </li>

                                    <li>
                                       Selenium : Continuous Testing tool
                                    </li>

                                    <li>
                                       Puppet, Chef, Ansible : Configuration Management and Deployment tools
                                    </li>

                                    <li>
                                       Nagios : Continuous Monitoring tool
                                    </li>

                                    <li>
                                       Docker : Containerization tool
                                    </li>

                                    <li>
                                       Kubernetes : Orchestration tool
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </a>
                     </li>

                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 5) How do all these tools work together?
                              </div>
                              <div class="panel-body">
                                 Given below is a generic logical flow where everything gets automated for seamless
                                 delivery.
                                 However, this flow may vary from organization to organization as per the requirement.
                                 <ol>

                                    <li>
                                       Developers develop the code and this source code is managed by Version Control
                                       System tools like Git etc.
                                    </li>

                                    <li>
                                       Developers send this code to the Git repository and any changes made in the code is
                                       committed to this Repository.
                                    </li>

                                    <li>
                                       Jenkins pulls this code from the repository using the Git plugin and build it using
                                       tools like Ant or Maven.
                                    </li>

                                    <li>
                                       Configuration management tools like puppet deploys & provisions testing environment
                                       and then Jenkins releases this code on the test environment on which testing is done
                                       using tools like selenium.
                                    </li>

                                    <li>
                                       Once the code is tested, Jenkins send it for deployment on the production server
                                       (even production server is provisioned & maintained by tools like puppet).
                                    </li>

                                    <li>
                                       After deployment It is continuously monitored by tools like Nagios.
                                    </li>

                                    <li>
                                       Docker containers provides testing environment to test the build features.
                                    </li>

                                 </ol>
                                 <img src="../img/interviews/devops/devops.png" width="70%" height="70%" alt="DevOps">

                              </div>
                           </div>
                        </a>                    
                     </li>

                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 6) What are the advantages of DevOps?
                              </div>
                              <div class="panel-body">
                                 The technical benefits are:
                                 <ul>
                                    <li>
                                       Continuous software delivery
                                    </li>

                                    <li>
                                       Less complex problems to fix
                                    </li>
                                    <li>
                                       Faster resolution of problems
                                    </li>
                                 </ul>
                                 <br />
                                 Business benefits:
                                 <ul>
                                    <li>
                                       Faster delivery of features
                                    </li>
                                    <li>
                                       More stable operating environments
                                    </li>
                                    <li>
                                       More time available to add value (rather than fix/maintain)
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        <a>
                     </li>

                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 7) What is the most important thing DevOps helps us achieve?
                              </div>
                              <div class="panel-body">
                                 The most important thing that DevOps helps us achieve is to get the changes into
                                 production as quickly as possible while minimizing risks in software quality assurance and
                                 compliance.
                                 This is the primary objective of DevOps.
                                 However, you can add many other positive effects of DevOps.
                                 For example, clearer communication and better working relationships between teams i.e.
                                 both the Ops team and Dev team collaborate together to deliver good quality software which
                                 in turn leads to higher customer satisfaction.
                              </div>
                           </div>
                        </a>
                     </li>

                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 8) Explain with a use case where DevOps can be used in industry/ real-life.
                              </div>
                              <div class="panel-body">
                                 There are many industries that are using DevOps so you can mention any of those use cases,
                                 you can also refer to the below example: <br />
                                 Etsy is a peer-to-peer e-commerce website focused on handmade or vintage items and
                                 supplies, as well as unique factory-manufactured items.
                                 Etsy struggled with slow, painful site updates that frequently caused the site to go down.
                                 It affected sales for millions of Etsy’s users who sold goods through online market place
                                 and risked driving them to the competitor. <br />
                                 With the help of a new technical management team, Etsy transitioned from its waterfall
                                 model, which produced four-hour full-site deployments twice weekly, to a more agile
                                 approach.
                                 Today, it has a fully automated deployment pipeline, and its continuous delivery practices
                                 have reportedly resulted in more than 50 deployments a day with fewer disruptions.
                              </div>
                           </div>
                        </a>
                     </li>

                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 9) What are the benefits of using AWS for DevOps?
                              </div>
                              <div class="panel-body">
                                 AWS for DevOps ushers a whole gamut of advantages. Some of them are: <br />

                                 <ul>
                                    <li>
                                       <strong>Easy to start and easy to use: </strong>Unlike the traditional software
                                       development processes where the first step would be to install a particular
                                       software, AWS does not have any additional installation requisites. All you need is
                                       to open an AWS account online to access the treasure trove of Amazon Web Services.
                                    </li>

                                    <li>
                                       <strong>Comprehensive services: </strong>AWS offers fully managed operations, so the
                                       customers need not spend any additional time and resource on infrastructural
                                       requirements such as setting up and installation. As soon as you set up your AWS
                                       account, the infrastructural requirements are automatically taken care of by DevOps.
                                       This enables the customers to direct their attention straight to building their core
                                       product.
                                    </li>

                                    <li>
                                       <strong>Enhanced Scaling: </strong>In today’s world of e-commerce, scaling is
                                       winning. Speedy delivery of applications is the key to securing your client base. In
                                       that regard, AWS’s simplified provisioning, configuration, and scaling features make
                                       it feasible to scale up from a single instance to multiples of thousands without any
                                       additional software interventions.
                                    </li>

                                    <li>
                                       <strong>Flexible programming: </strong>AWS is highly programmable and may be adapted
                                       to suit the needs of the vendors individually. While customers may avail of all the
                                       services provided by AWS through the AWS Command Line Interface, there is also an
                                       option for customizing your service requirements with the help of the declarative
                                       AWS Cloud Formation templates, which allows you to provision the AWS resources and
                                       infrastructure according to your specific needs.
                                    </li>

                                    <li>
                                       <strong>Automation: </strong>An vital aspect of the enhanced speed of deployment and
                                       delivery in AWS is ascertained by the increased automation in AWS. AWS lets you
                                       focus on building the core product efficiency by eliminating the need for manual
                                       interventions in tasks such as deployment, development, and testing of workflows,
                                       configuration management, and container management.
                                    </li>

                                    <li>
                                       <strong>Reliable and Secure: </strong>AWS includes a watertight security system to
                                       ensure your data is immune to any security breaches. The AWS Identity and Access
                                       Management mechanism grants the customer complete control over the access and use of
                                       their resources. Customers can set permissions about access to different levels of
                                       information as per their own policies.
                                    </li>

                                    <li>
                                       <strong>A large community of customers and partners: </strong>AWS have significantly
                                       transformed the e-commerce ecosystem by directly integrating a considerable cohort
                                       of customers and service partners. Members of this dynamic community can forge a
                                       granular connection with the other party using AWS tools and deliver or access end
                                       to end solutions. The availability of an enormous variety of services is also a
                                       unique feature of AWS.
                                    </li>

                                    <li>
                                       <strong>Pay-As-You-Go: </strong>This feature is what really sets AWS apart. Unlike
                                       traditional platforms, AWS does not levy any upfront fees or paid package to avail
                                       of their services. You may opt for specific services and pay only for those and for
                                       the period of time that suits your needs. AWS does not impose any contractual
                                       obligations.
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </a>
                     </li>

                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 10) What are AWS DevOps related tools/Services?
                              </div>
                              <div class="panel-body">

                                 <ol>
                                    <li>
                                       <strong>AWS CodePipeline</strong> <br />
                                       AWS CodePipeline automatically builds, tests, and deploys the application to the
                                       target on-premise
                                       whenever the programmer makes any change in the code.
                                       This feature is mostly responsible for continuous integration and continuous
                                       delivery.
                                       This makes it possible to maintain consistently fast delivery and manage all
                                       infrastructural updates
                                       of the application without any operational hassles.
                                    </li> <br />

                                    <li>
                                       <strong>AWS CodeBuild</strong> <br />
                                       AWS CodeBuild is a granular code building tool that is fully managed
                                       in order to build source codes, run tests, and make ready to deploy software
                                       packages.
                                       By virtue of the AWS CodeBuild, developers need to wait for their codes to be scaled
                                       since it continuously and simultaneously scales multiple builds.
                                    </li> <br />

                                    <li>
                                       <strong>AWS CodeDeploy</strong> <br />
                                       This is an automated code deployment mechanism that makes AWS deploy your
                                       applications to an on-premise at any instance.
                                       This is strategic in releasing new features in a time and cost-efficient manner,
                                       avoiding any downtime or software challenges during such updates.
                                    </li> <br />

                                    <li>
                                       <strong>AWS CodeStar</strong> <br />
                                       AWS CodeStar provides a unified user interface that enables you to develop and
                                       deploy applications fast on AWS.
                                       With this feature, you can build the entire delivery toolchain at once since
                                       CodeStar lets you manage all aspects of software management in one place.
                                    </li> <br />

                                    <li>
                                       <strong>AWS CodeCommit</strong> <br />
                                       This feature enables organizations to host and securely store private Git
                                       repositories.
                                       This makes AWS DevOps work seamlessly with GIT tools without the intervention
                                       of the developer to manage their source control systems.
                                    </li><br />

                                    <li>
                                       <strong>AWS Elastic Compute Cloud(EC2) </strong> <br />
                                       Amazon EC2 is a web service that facilitates safe and resizable compute capacity in
                                       the given cloud platform.
                                       This makes web-scale cloud computing a lot smoother and faster for developers.
                                    </li><br />

                                    <li>
                                       <strong>AWS Simple Storage Service(S3) </strong> <br />
                                       Amazon S3 is integral to the Amazon Elastic Container Services.
                                       This object storage entails a simple web service interface to not only store but
                                       also retrieve any
                                       information from anywhere on the web.
                                    </li><br />

                                    <li>
                                       <strong>AWS Relational Database Service(RDS) </strong> <br />
                                       Amazon RDS helps to create, manage, and scale any relational database in the cloud.
                                    </li><br />

                                    <li>
                                       <strong>AWS Virtual Private Cloud (VPC) </strong> <br />
                                       <para>A virtual private cloud or VPC is a cloud network associated with your AWS
                                          account.<br /></para>
                                       <para>It is the foremost networking layer for your own AWS infrastructure.
                                          It lets you create regions or subnets, configure route tables, security groups,
                                          or internet gateways to AWS accounts.
                                          This, in turn, grants you easy access to AWS resources such as Amazon EC2 or
                                          Amazon RDS. You can also connect two VPCs using private IP addresses.
                                          This is known as VPC Peering.</para>
                                    </li><br />

                                    <li>
                                       <strong>AWS Elastic Block Storage (EBS) </strong> <br />
                                       <para>Elastic Block Storage or EBS refers to a virtual storage area network.
                                          The Amazon EBS enables persistent block-level volumes of storage, which can be
                                          used with the Amazon EC2 instances.
                                          They are very reliable and compatible with any available instances that are
                                          running in the given storage area. </para>
                                    </li><br />

                                    <li>
                                       <strong>AWS Quick Sight (Visualization in AWS) </strong> <br />
                                       <para>Amazon Quick Sight is essentially a cloud-powered business analytics service
                                          that assists
                                          in building visualizations, performing ad-hoc analysis, and getting quick and
                                          reliable business
                                          insights from the data available.</para>
                                    </li><br />

                                    <li>
                                       <strong>AWS Amazon Machine Image(AMI)</strong> <br />
                                       <para>AMI denotes Amazon Machine Image, which is essentially a snapshot of the root
                                          file system.
                                          AMI accords the information required to launch a virtual server in the cloud.
                                          It includes a template for the root volume, launch permissions that control AWS
                                          accounts as well as block device mapping tools.</para>
                                    </li><br />

                                    <li>
                                       <strong>AWS CloudFormation(CFT)</strong> <br />
                                       <para> AWS Cloud Formation provides infrastructural backups to the needs of
                                          different types of applications.
                                          It enables developers to conveniently provision the various AWS resources.
                                       </para>
                                    </li><br />
                                 </ol>
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