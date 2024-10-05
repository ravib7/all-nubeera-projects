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
      font-size: 20px;
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
               <h1 class="mt-4">All AWS Interview QnA</h1>

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

               <input type="text" id="myInput" onkeyup="searchTopicsInQuestionNAnswers()"
                placeholder="Enter Topic...">
               <!--Start of UL Contents -->
               <ul id="myUL"> 
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              1) Define and explain the three basic types of cloud services and the AWS products that are built based on them?
                           </div>
                           <div class="panel-body">
                              The three basic types of cloud services are:
                              <ul>

                                 <li>
                                    Computing
                                 </li>

                                 <li>
                                    Storage
                                 </li>

                                 <li>
                                    Networking
                                 </li>

                              </ul>
                              Here are some of the AWS products that are built based on the three cloud service types:<br>

                              <b>Computing</b> - These include EC2, Elastic Beanstalk, Lambda, Auto-Scaling, and Lightsat.<br>

                              <b>Storage</b> - These include S3, Glacier, Elastic Block Storage, Elastic File System.<br>

                              <b>Networking</b> - These include VPC, Amazon CloudFront, Route53
                           </div>
                        </div>
                     </a>
                  </li>
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              2) What is the relation between the Availability Zone and Region?
                           </div>
                           <div class="panel-body">
                              AWS regions are separate geographical areas, like the US-West 1 (North California) and Asia South (Mumbai). 
                              On the other hand, availability zones are the areas that are present inside the regions. 
                              These are generally isolated zones that can replicate themselves whenever required.
                              <center><img src="../../img/AWS/fig_1.jpg" alt="fig1" style="width:75%;height:75%;"></center>
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              3) What is auto-scaling?
                           </div>
                           <div class="panel-body">                          
                              Auto-scaling is a function that allows you to provision and launch new instances whenever there is a demand. 
                              It allows you to automatically increase or decrease resource capacity in relation to the demand.
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              4) What is geo-targeting in CloudFront?
                           </div>
                           <div class="panel-body">
                              Geo-Targeting is a concept where businesses can show personalized content to their audience based on their geographic location without changing the URL. 
                              This helps you create customized content for the audience of a specific geographical area, 
                              keeping their needs in the forefront.                             
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              5) What are the steps involved in a CloudFormation Solution?
                           </div>
                           <div class="panel-body">
                              Here are the steps involved in a CloudFormation solution:
                              <center><img src="../../img/AWS/fig_2.jpg"  alt="fig2" style="width:75%;height:75%;"></center>
                              <ol>

                                 <li>
                                    Create or use an existing CloudFormation template using JSON or YAML format.

                                 </li>

                                 <li>
                                    Save the code in an S3 bucket, which serves as a repository for the code.
                                 </li>

                                 <li>
                                    Use AWS CloudFormation to call the bucket and create a stack on your template.
                                 </li>

                                 <li>
                                    CloudFormation reads the file and understands the services that are called, their order, 
                                    the relationship between the services, and provisions the services one after the other.
                                 </li>
                              
                              </ol>
                              

                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              6)How do you upgrade or downgrade a system with near-zero downtime?
                           </div>
                           <div class="panel-body">
                              You can upgrade or downgrade a system with near-zero downtime using the following steps of migration:
                              <ul>
                                 <li>
                                    Open EC2 console
                                 </li>
                                 <li>
                                    Choose Operating System AMI
                                 </li>
                                 <li>
                                    Launch an instance with the new instance type
                                 </li>
                                 <li>
                                    Install all the updates  
                                 </li>
                                 <li>
                                    Install applications
                                 </li>
                                 <li>
                                    Test the instance to see if it’s working
                                 </li>
                                 <li>
                                    If working, deploy the new instance and replace the older instance
                                 </li>
                                 <li>
                                    Once it’s deployed, you can upgrade or downgrade the system with near-zero downtime.
                                 </li>
                              </ul>
                              Take home this interview Q&As and get much more. Download the complete AWS Interview Guide here:
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              7) What are the tools and techniques that you can use in AWS to identify if you are paying more than you should be, and how to correct it?
                           </div>
                           <div class="panel-body">
                              You can know that you are paying the correct amount for the resources that you are using by employing the following resources:
                                 <ul>
                                    <li><b>Check the Top Services Table</b></li>
                                       It is a dashboard in the cost management console that shows you the top five most used services. 
                                       This will let you know how much money you are spending on the resources in question.
                                    <li><b>Cost Explorer</b></li>
                                       There are cost explorer services available which will help you to view and analyze your usage costs for the last 13 months. 
                                       You can also get a cost forecast for the upcoming three months.

                                    <li><b>AWS Budgets</b></li>
                                       This allows you to plan a budget for the services. 
                                       Also, it will enable you to check if the current plan meets your budget and the details of how you use the services.

                                    <li><b>Cost Allocation Tags</b></li>
                                       This helps in identifying the resource that has cost more in a particular month.
                                       It lets you organize your resources and cost allocation tags to keep track of your AWS costs.
                                 </ul>
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              8) Is there any other alternative tool to log into the cloud environment other than console?
                           </div>
                           <div class="panel-body">
                              The that can help you log into the AWS resources are:
                              <ul>

                                 <li>
                                    Putty
                                 </li>
                                 <li>
                                    AWS CLI for Linux
                                 </li>
                                 <li>
                                    AWS CLI for Windows
                                 </li>
                                 <li>
                                    AWS CLI for Windows CMD
                                 </li>
                                 <li>
                                    AWS SDK
                                 </li>
                                 <li>
                                    Eclipse
                                 </li>

                              </ul>
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              9) What services can be used to create a centralized logging solution?
                           </div>
                           <div class="panel-body">                          
                              The essential services that you can use are Amazon CloudWatch Logs, store them in Amazon S3, and then use Amazon Elastic Search to visualize them. 
                              You can use Amazon Kinesis Firehose to move the data from Amazon S3 to Amazon ElasticSearch.
                              <center><img src="../../img/AWS/fig_3.jpg"  alt="fig3" style="width:75%;height:75%;"></center>
                              
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">

                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              10) What are the native AWS Security logging capabilities?
                           </div>
                           <div class="panel-body">
                              Most of the AWS services have their logging options. 
                              Also, some of them have an account level logging, like in AWS CloudTrail, AWS Config, and others. 
                              Let’s take a look at two services in specific:
                              <ul>

                                 <li>
                                    <strong> AWS CloudTrail</strong> <br />
                                    This is a service that provides a history of the AWS API calls for every account. 
                                    It lets you perform security analysis, resource change tracking, and compliance auditing of your AWS environment as well. 
                                    The best part about this service is that it enables you to configure it to send notifications via AWS SNS when new logs are delivered. 
                                 </li> <br />

                                 <li>
                                    <strong>AWS Config</strong> <br /> 
                                    This helps you understand the configuration changes that happen in your environment. 
                                    This service provides an AWS inventory that includes configuration history, 
                                    configuration change notification, and relationships between AWS resources. 
                                    It can also be configured to send information via AWS SNS when new logs are delivered.
                                 </li> <br />
                              
                              </ul>
                           </div>
                        </div>
                     <a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              11) What is a DDoS attack, and what services can minimize them?
                           </div>
                           <div class="panel-body">                          
                              DDoS is a cyber-attack in which the perpetrator accesses a website and creates multiple sessions so that the other legitimate users cannot access the service. 
                              The native tools that can help you deny the DDoS attacks on your AWS services are:
                              <ul>
                                 <li>
                                    AWS Shield
                                 </li>
                                 <li>
                                    AWS WAF
                                 </li>
                                 <li>
                                    Amazon Route53
                                 </li>
                                 <li>
                                    Amazon CloudFront
                                 </li>
                                 <li>
                                    ELB
                                 </li>
                                 <li>
                                    VPC
                                 </li>
                              </ul>
                              <center><img src="../../img/AWS/fig_4.jpg"  alt="fig4" style="width:75%;height:75%;"></center>
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              12)  You are trying to provide a service in a particular region, but you do not see the service in that region. 
                              Why is this happening, and how do you fix it?
                           </div>
                           <div class="panel-body">                          
                              Not all Amazon AWS services are available in all regions. When Amazon initially launches a new service, it doesn’t get immediately published in all the regions. 
                              They start small and then slowly expand to other regions. 
                              So, if you don’t see a specific service in your region, chances are the service hasn’t been published in your region yet. 
                              However, if you want to get the service that is not available, you can switch to the nearest region that provides the services.
                              
                              
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              13)  How do you set up a system to monitor website metrics in real-time in AWS?
                           </div>
                           <div class="panel-body">                                            
                              Amazon CloudWatch helps you to monitor the application status of various AWS services and custom events. It helps you to monitor:
                              <ul>
                                 <li>
                                    State changes in Amazon EC2
                                 </li>
                                 <li>       
                                    Auto-scaling lifecycle events
                                 </li>
                                 <li>
                                    Scheduled events
                                 </li>
                                 <li>
                                    AWS API calls
                                 </li>
                                 <li>
                                    Console sign-in events
                                 </li>
                              </ul>
                              <center><img src="../../img/AWS/fig_5.jpg"  alt="fig5" style="width:75%;height:75%;"></center>
                              
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              14) What are the different types of virtualization in AWS, and what are the differences between them?

                           </div>
                           <div class="panel-body">                          
                              The three major types of virtualization in AWS are
                              <ul>
                                 <li><b>Hardware Virtual Machine (HVM)</b>
                                 It is a fully virtualized hardware, where all the virtual machines act separate from each other. 
                                 These virtual machines boot by executing a master boot record in the root block device of your image.
                                 </li>
                                 <li><b>Paravirtualization (PV)</b>
                                 Paravirtualization-GRUB is the bootloader that boots the PV AMIs. The PV-GRUB chain loads the kernel specified in the menu.
                                 </li>
                                 <li><b>Paravirtualization on HVM</b>
                                 PV on HVM helps operating systems take advantage of storage and network I/O available through the host.
                                 </li>
                              </ul>
                              
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              15)  Name some of the AWS services that are not region-specific
                           </div>
                           <div class="panel-body">                          
                           AWS services that are not region-specific are:
                           <ul>
                                 <li>
                                    IAM
                                 </li>
                                 <li>
                                    Route 53
                                 
                                 </li>
                                 <li>
                                    Web Application Firewall 
                                 </li>
                                 <li>
                                    CloudFront
                                 </li>

                              </ul>
                              
                           </div>
                        </div>
                     </a>
                  
                  </li>
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              16) What are the differences between NAT Gateways and NAT Instances?
                           </div>
                           <div class="panel-body">                          
                              While both NAT Gateways and NAT Instances serve the same function, they still have some key differences.
                              <center><img src="../../img/AWS/fig_6.jpg"  alt="fig6" style="width:75%;height:75%;"></center>
                              
                           </div>
                        </div>
                     </a>
                  
                  </li>
                  <h2>AWS Interview Questions for Amazon EC2</h2>
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              17) What is the difference between stopping and terminating an EC2 instance? 
                           </div>
                           <div class="panel-body">                                   
                              While you may think that both stopping and terminating are the same, there is a difference. 
                              When you stop an EC2 instance, it performs a normal shutdown on the instance and moves to a stopped state. 
                              However, when you terminate the instance, it is transferred to a stopped state, 
                              and the EBS volumes attached to it are deleted and can never be recovered. 
                           </div>
                        </div>
                     </a>
                  
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              18)  What are the different types of EC2 instances based on their costs?
                           </div>
                           <div class="panel-body">                          
                              The three types of EC2 instances are:
                              <ul>
                                 <li><b>On-demand Instance</b>                       
                                    It is cheap for a short time but not when taken for the long term
                                 </li>
                                 <li><b>Spot Instance</b>
                                    It is less expensive than the on-demand instance and can be bought through bidding. 
                                 </li>
                                 <li><b>Reserved Instance</b>
                                    If you are planning to use an instance for a year or more, then this is the right one for you.
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </a>
                  
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              19)  How do you set up SSH agent forwarding so that you do not have to copy the key every time you log in?
                           </div>
                           <div class="panel-body">  
                              Here’s how you accomplish this: 
                              <ol>
                                 <li>
                                    Go to your PuTTY Configuration
                                 </li>
                                 <li>
                                    Go to the category SSH -> Auth
                                 </li>
                                 <li>
                                    Enable SSH agent forwarding to your instance
                                 </li>
                              </ol> 
                              <center><img src="../../img/AWS/fig_7.jpg"  alt="fig7" style="width:50%;height:50%;"></center>
                           </div>
                        </div>
                     </a>
                  
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              20) What are Solaris and AIX operating systems? Are they available with AWS?
                           </div>
                           <div class="panel-body">                          
                              Solaris is an operating system that uses SPARC processor architecture, which is not supported by the public cloud currently. 
                              <br>
                              AIX is an operating system that runs only on Power CPU and not on Intel, which means that you cannot create AIX instances in EC2.
                              <br>
                              Since both the operating systems have their limitations, they are not currently available with AWS.    
                           </div>
                        </div>
                     </a>
                  
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              21)  How do you configure CloudWatch to recover an EC2 instance?
                           </div>
                           <div class="panel-body">  
                              Here’s how you can configure them:
                              <ul>
                                 <li>
                                    Create an Alarm using Amazon CloudWatch
                                 </li>
                                 <li>
                                    In the Alarm, go to Define Alarm -> Actions tab
                                 </li>
                                 <li>
                                    Choose Recover this instance option
                                 </li>
                              </ul>
                              <center><img src="../../img/AWS/fig_8.jpg"  alt="fig8" style="width:75%;height:75%;"></center>
                              
                           </div>
                        </div>
                     </a>
                  
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              22) What are the common types of AMI designs?
                           </div>
                           <div class="panel-body">                          
                              There are many types of AMIs, but some of the common AMIs are:
                              <ul>
                                 <li>
                                    Fully Baked AMI
                                 </li>
                                 <li>
                                    Just Enough Baked AMI (JeOS AMI)
                                 </li>
                                 <li>
                                    Hybrid AMI
                                 </li>
                              </ul> 
                           </div>
                        </div>
                     </a>
                  
                  </li>

                  <h2>AWS Interview Questions for S3</h2>
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              23) How can you recover/login to an EC2 instance for which you have lost the key?
                           </div>
                           <div class="panel-body">                          
                              Follow the steps provided below to recover an EC2 instance if you have lost the key:
                              <ol>
                                 <li>
                                    Verify that the EC2Config service is running
                                 </li>
                                 <li>
                                    Detach the root volume for the instance
                                 </li>
                                 <li>
                                    Attach the volume to a temporary instance
                                 </li>
                                 <li>
                                    Modify the configuration file
                                 </li>
                                 <li>
                                    Restart the original instance
                                 </li>
                              </ol>
                              
                              
                           </div>
                        </div>
                     </a>
                  
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              24) What are some critical differences between AWS S3 and EBS?
                           </div>
                           <div class="panel-body">                          
                              Here are some differences between AWS S3 and EBS
                              <center><img src="../../img/AWS/fig_9.jpg"  alt="fig9" style="width:75%;height:75%;"></center>
                              
                           </div>
                        </div>
                     </a>
                  
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              25)  How do you allow a user to gain access to a specific bucket?
                           </div>
                           <div class="panel-body">                          
                              You need to follow the four steps provided below to allow access. They are:                             
                              <ol>
                                 <li>
                                    Categorize your instances
                                 </li>
                                 <li>
                                    Define how authorized users can manage specific servers.
                                 </li>
                                 <li>
                                    Lockdown your tags
                                 </li>
                                 <li>
                                    Attach your policies to IAM users
                                 </li>
                                 
                              </ol>
                              
                           </div>
                        </div>
                     </a>
                  
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              26)  How can you monitor S3 cross-region replication to ensure consistency without actually checking the bucket?
                           </div>
                           <div class="panel-body">                          
                              Follow the flow diagram provided below to monitor S3 cross-region replication:
                              <center><img src="../../img/AWS/fig_10.jpg"  alt="fig10" style="width:75%;height:75%;"></center>
                              
                           </div>
                        </div>
                     </a>
                                 
                  </li>
                     <h2>AWS Interview Questions for VPC</h2>
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              27)  VPC is not resolving the server through DNS. What might be the issue, and how can you fix it?
                           </div>
                           <div class="panel-body">                          
                              To fix this problem, you need to enable the DNS hostname resolution, so that the problem resolves itself.
                           </div>
                        </div>
                     </a>
                  
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                           28) How do you connect multiple sites to a VPC?
                           </div>
                           <div class="panel-body">                          
                              If you have multiple VPN connections, you can provide secure communication between sites using the AWS VPN CloudHub. 
                              Here’s a diagram that will show you how to connect various sites to a VPC:
                              <center><img src="../../img/AWS/fig_11.jpg"  alt="fig11" style="width:75%;height:75%;"></center>
                              
                           </div>
                        </div>
                     </a>
                  
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              29) Name and explain some security products and features available in VPC?
                           </div>
                           <div class="panel-body">                          
                              Here is a selection of security products and features:
                              <ul>
                                 <li><b>Security groups</b>-This acts as a firewall for the EC2 instances, 
                                 controlling inbound and outbound traffic at the instance level.
                                 
                                 </li>
                                 <li><b>Network access control lists</b>-It acts as a firewall for the subnets, 
                                 controlling inbound and outbound traffic at the subnet level.
                                 
                                 </li>
                                 <li><b>Flow logs </b>- These capture the inbound and outbound traffic from the network interfaces in your VPC.
                                 
                                 </li>
                              
                              </ul>
                              
                           </div>
                        </div>
                     </a>
                  
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              30)  How do you monitor Amazon VPC?
                           </div>
                           <div class="panel-body">                          
                              You can monitor VPC by using:
                              <ul>
                                 <li>
                                    CloudWatch and CloudWatch logs
                                 </li>
                                 <li>
                                    VPC Flow Logs
                                 </li>
                              </ul>
                              
                              
                           </div>
                        </div>
                     </a>
                  
                  </li>
                  <h2>General AWS Interview Questions</h2>
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              31) How can you add an existing instance to a new Auto Scaling group?
                           </div>
                           <div class="panel-body">                          
                              Here’s how you can add an existing instance to a new Auto Scaling group:
                              <ul>
                                 <li>
                                    Open EC2 console
                                 </li>
                                 <li>
                                    Select your instance under Instances
                                 </li>
                                 <li>
                                    Choose Actions -> Instance Settings -> Attach to Auto Scaling Group
                                 </li>
                                 <li>
                                    Select a new Auto Scaling group
                                 </li>
                                 <li>
                                    Attach this group to the Instance
                                 </li>
                                 <li>
                                    Edit the Instance if needed
                                 </li>
                                 <li>
                                    Once done, you can successfully add the instance to a new Auto Scaling group
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </a>
                     
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              32) What are the factors to consider while migrating to Amazon Web Services?
                           </div>
                           <div class="panel-body">                          
                              Here are the factors to consider during AWS migration:
                              <ul>
                                 <li>
                                    <b>Operational Costs</b> - These include the cost of infrastructure, ability to match demand and supply, transparency, and others.
                                 </li>
                                 <li>
                                    Workforce Productivity 
                                 </li>
                                 <li>
                                    Cost avoidance
                                 </li>
                                 <li>
                                    Operational resilience
                                 </li>
                                 <li>
                                    Business agility
                                 </li>
                              </ul>
                              
                           </div>
                        </div>
                     </a>
                  
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              33) What is RTO and RPO in AWS?
                           </div>
                           <div class="panel-body">                          
                              RTO or Recovery Time Objective is the maximum time your business or organization is willing to wait for a recovery to complete in the wake of an outage. 
                              On the other hand, RPO or Recovery Point Objective is the maximum amount of data loss your company is willing to accept as measured in time.
                              
                              
                           </div>
                        </div>
                     </a>
                  
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              34) If you would like to transfer vast amounts of data, 
                              which is the best option among Snowball, Snowball Edge, and Snowmobile?
                           </div>
                           <div class="panel-body">                          
                              AWS Snowball is basically a data transport solution for moving high volumes of data into and out of a specified AWS region. 
                              On the other hand, AWS Snowball Edge adds additional computing functions apart from providing a data transport solution. 
                              The snowmobile is an exabyte-scale migration service that allows you to transfer data up to 100 PB.
                              
                           </div>
                        </div>
                     </a>
                  
                  </li>
                  <h2>AWS Interview Questions for CloudFormation</h2>
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              35) How is AWS CloudFormation different from AWS Elastic Beanstalk?
                           </div>
                           <div class="panel-body">                          
                              Here are some differences between AWS CloudFormation and AWS Elastic Beanstalk:
                              <ul>
                                 <li>
                                    AWS CloudFormation helps you provision and describe all of the infrastructure resources that are present in your cloud environment. 
                                    On the other hand, AWS Elastic Beanstalk provides an environment that makes it easy to deploy and run applications in the cloud.
                                 </li>
                                 <li>
                                    AWS CloudFormation supports the infrastructure needs of various types of applications, 
                                    like legacy applications and existing enterprise applications. On the other hand, 
                                    AWS Elastic Beanstalk is combined with the developer tools to help you manage the lifecycle of your applications
                                 </li>                               
                              </ul>
                              
                           </div>
                        </div>
                     </a>
                  
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              36) What are the elements of an AWS CloudFormation template
                           </div>
                           <div class="panel-body">                          
                              AWS CloudFormation templates are YAML or JSON formatted text files that are comprised of five essential elements, 
                              they are:
                              <ul>
                                 <li>
                                 Template parameters
                                 </li>
                                 <li>
                                 Output values
                                 </li>
                                 <li>
                                 Data tables
                                 </li>
                                 <li>
                                 Resources
                                 </li>
                                 <li>
                                 File format version
                                 </li>
                              </ul>
                              
                           </div>
                        </div>
                     </a>
                  
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              37)  What happens when one of the resources in a stack cannot be created successfully?
                           </div>
                           <div class="panel-body">                          
                              If the resource in the stack cannot be created, then the CloudFormation automatically rolls back and terminates all the resources that were created in the CloudFormation template. 
                              This is a handy feature when you accidentally exceed your limit of Elastic IP addresses or don’t have access to an EC2 AMI.
                              <center><img src="../../img/AWS/fig_12.jpg"  alt="fig12" style="width:75%;height:75%;"></center>
                              
                           </div>
                        </div>
                     </a>
                  
                  </li>
                  <h2>AWS Interview Questions for Elastic Block Storage</h2>
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              38) How can you automate EC2 backup using EBS?
                           </div>
                           <div class="panel-body">                          
                              Use the following steps in order to automate EC2 backup using EBS:
                              <ol>
                                 <li>
                                    Get the list of instances and connect to AWS through API to list the Amazon EBS volumes that are attached locally to the instance.
                                 </li>
                                 <li>
                                    List the snapshots of each volume, and assign a retention period of the snapshot. 
                                    Later on, create a snapshot of each volume.
                                 </li>
                                 <li>
                                    Make sure to remove the snapshot if it is older than the retention period.
                                 </li>
                              </ol>
                           </div>
                        </div>
                     </a>
                  
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              39) What is the difference between EBS and Instance Store?
                           </div>
                           <div class="panel-body">                          
                              EBS is a kind of permanent storage in which the data can be restored at a later point. 
                              When you save data in the EBS, it stays even after the lifetime of the EC2 instance. On the other hand, 
                              Instance Store is temporary storage that is physically attached to a host machine. 
                              With an Instance Store, you cannot detach one instance and attach it to another. 
                              Unlike in EBS, data in an Instance Store is lost if any instance is stopped or terminated.                              
                           </div>
                        </div>
                     </a>
                  
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              40) Can you take a backup of EFS like EBS, and if yes, how?
                           </div>
                           <div class="panel-body">                          
                              Yes, you can use the EFS-to-EFS backup solution to recover from unintended changes or deletion in Amazon EFS. 
                              Follow these steps:
                              <ol>
                                 <li>
                                 Sign in to the AWS Management Console
                                 </li>
                                 <li>
                                 Click the launch EFS-to-EFS-restore button
                                 </li>
                                 <li>
                                 Use the region selector in the console navigation bar to select region
                                 </li>
                                 <li>
                                 Verify if you have chosen the right template on the Select Template page
                                 </li>
                                 <li>
                                 Assign a name to your solution stack
                                 </li>
                                 <li>
                                 Review the parameters for the template and modify them if necessary
                                 </li>
                              </ol>
                              
                           </div>
                        </div>
                     </a>
                  
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              41) How do you auto-delete old snapshots?
                           </div>
                           <div class="panel-body">                          
                              Here’s the procedure for auto-deleting old snapshots:
                              <ul>
                                 <li>
                                    As per procedure and best practices, take snapshots of the EBS volumes on Amazon S3.
                                 </li>
                                 <li>
                                    Use AWS Ops Automator to handle all the snapshots automatically.
                                 </li>
                                 <li>
                                    This allows you to create, copy, and delete Amazon EBS snapshots.
                                 </li>
                              </ul>
                              <center><img src="../../img/AWS/fig_13.jpg"  alt="fig13" style="width:75%;height:75%;"></center>
                              
                           </div>
                        </div>
                     </a>
                  
                  </li>
                  <h2>AWS Interview Questions for Elastic Load Balancing</h2>
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              42) What are the different types of load balancers in AWS?
                           </div>
                           <div class="panel-body">                          
                              There are three types of load balancers that are supported by Elastic Load Balancing:
                              <ol>
                                 <li>
                                    Application Load Balancer
                                 </li>
                                 <li>
                                    Network Load Balancer
                                 </li>
                                 <li>
                                    Classic Load Balancer
                                 </li>
                              </ol>   
                           </div>
                        </div>
                     </a>
                  
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              43) What are the different uses of the various load balancers in AWS Elastic Load Balancing?
                           </div>
                           <div class="panel-body">  

                              <ol>
                                 <li>
                                    <b>Application Load Balancer</b>
                                 </li>
                                 Used if you need flexible application management and TLS termination
                                 <li>
                                    <b>Network Load Balancer</b>
                                 </li>
                                 Used if you require extreme performance and static IPs for your applications.
                                 <li>
                                    <b>Classic Load Balancer</b>
                                 </li>
                                 Used if your application is built within the EC2 Classic network
                              </ol>                              
                           </div>
                        </div>
                     </a>
                  
                  </li>
                  <h2>AWS Interview Questions for Security</h2>
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              44)  How can you use AWS WAF in monitoring your AWS applications?
                           </div>
                           <div class="panel-body">                          
                              AWS WAF or AWS Web Application Firewall protects your web applications from web exploitations. 
                              It helps you control the traffic flow to your applications. With WAF, you can also create custom rules that block common attack patterns. 
                              It can be used for three cases: allow all requests, prevent all requests, and count all requests for a new policy.
                              
                           </div>
                        </div>
                     </a>
                     
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              45) What are the different AWS IAM categories that you can control?
                           </div>
                           <div class="panel-body">                          
                              Using AWS IAM, you can do the following:
                              <ul>
                                 <li>
                                    Create and manage IAM users
                                 </li>
                                 <li>
                                    Create and manage IAM groups
                                 </li>
                                 <li>
                                    Manage the security credentials of the users
                                 </li>
                                 <li>
                                    Create and manage policies to grant access to AWS services and resources
                                 </li>
                              </ul>
                              
                           </div>
                        </div>
                     </a>
                  
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              46) What are the policies that you can set for your users’ passwords?
                           </div>
                           <div class="panel-body">                          
                              Here are some of the policies that you can set:
                              <ul>
                                 <li>
                                    You can set a minimum length of the password, 
                                    or you can ask the users to add at least one number or special characters in it.
                                 </li>
                                 <li>
                                    You can assign requirements of particular character types, 
                                    including uppercase letters, lowercase letters, numbers, and non-alphanumeric characters.
                                 </li>
                                 <li>
                                    You can enforce automatic password expiration, 
                                    prevent reuse of old passwords, and request for a password reset upon their next AWS sign in.
                                 </li>
                                 <li>
                                    You can have the AWS users contact an account administrator when the user has allowed the password to expire. 
                                 </li>
                              </ul>
                              
                           </div>
                        </div>
                     </a>
                  
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              47)  What is the difference between an IAM role and an IAM user?
                           </div>
                           <div class="panel-body"> 
                              The two key differences between the IAM role and IAM user are:                         
                              <ul>
                                 <li>
                                    An IAM role is an IAM entity that defines a set of permissions for making AWS service requests, 
                                    while an IAM user has permanent long-term credentials and is used to interact with the AWS services directly. 
                                 </li>
                                 <li>
                                    In the IAM role, trusted entities, like IAM users, applications, or an AWS service, 
                                    assume roles whereas the IAM user has full access to all the AWS IAM functionalities.
                                 </li>
                              </ul>
                           
                           </div>
                        </div>
                     </a>
                  
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              48)  What are the managed policies in AWS IAM?
                           </div>
                           <div class="panel-body">                          
                              There are two types of managed policies; one that is managed by you and one that is managed by AWS. 
                              They are IAM resources that express permissions using IAM policy language. You can create, edit, 
                              and manage them separately from the IAM users, groups, and roles to which they are attached.
                           </div>
                        </div>
                     </a>
                  
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              49) Can you give an example of an IAM policy and a policy summary?
                           </div>
                           <div class="panel-body">                          
                              Here’s an example of an IAM policy to grant access to add, update, and delete objects from a specific folder.
                              <center><img src="../../img/AWS/fig_14_1.jpg"  alt="fig14_1" style="width:75%;height:75%;"></center>
                              Here’s an example of a policy summary:
                              <center><img src="../../img/AWS/fig_14_2.jpg"  alt="fig14_2" style="width:75%;height:75%;"></center>
                           </div>
                        </div>
                     </a>
                  
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              50)  How does AWS IAM help your business?
                           </div>
                           <div class="panel-body">                          
                              IAM enables to:
                              <ul>
                                 <li>
                                    <b>Manage IAM users and their access</b> - AWS IAM provides secure resource access to multiple users
                                 </li>
                                 <li>
                                    <b> Manage access for federated users</b> – AWS allows you to provide secure access to resources in your AWS account to your employees and applications without creating IAM roles.
                                 </li>
                              </ul>                  
                           </div>
                        </div>
                     </a>
                  
                  </li>
                  <h2>AWS Interview Questions for Route 53</h2>
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              51) What is the difference between Latency Based Routing and Geo DNS?
                           </div>
                           <div class="panel-body">                          
                              The Geo Based DNS routing takes decisions based on the geographic location of the request. 
                              Whereas, the Latency Based Routing utilizes latency measurements between networks and AWS data centers. 
                              Latency Based Routing is used when you want to give your customers the lowest latency possible. 
                              On the other hand, Geo Based routing is used when you want to direct the customer to different websites based on the country or region they are browsing from.      
                           </div>
                        </div>
                     </a>
                  
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              52) What is the difference between a Domain and a Hosted Zone?
                           </div>
                           <div class="panel-body">                          
                              <ul>
                                 <li>
                                    <b>Domain</b>
                                    A domain is a collection of data describing a self-contained administrative and technical unit. 
                                 </li>
                                 <li>
                                 <b> Hosted zone</b>
                                    A hosted zone is a container that holds information about how you want to route traffic on the internet for a specific domain.                                    
                                 </li>                                 
                              </ul>
                           </div>
                        </div>
                     </a>
                  
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              53) How does Amazon Route 53 provide high availability and low latency?
                           </div>
                           <div class="panel-body">   
                              Here’s how Amazon Route 53 provides the resources in question:                       
                              <ul>
                                 <li>
                                    <b>Globally Distributed Servers</b>
                                    Amazon is a global service and consequently has DNS services globally. 
                                    Any customer creating a query from any part of the world gets to reach a DNS server local to them that provides low latency. 
                                 </li>
                                 <li>
                                    <b>Dependency</b>
                                    Route 53 provides a high level of dependability required by critical applications
                                 </li>    
                                 <li>
                                    <b>Optimal Locations</b>
                                    Route 53 uses a global anycast network to answer queries from the optimal position automatically. 
                                 </li>                              
                              </ul>                             
                           </div>
                        </div>
                     </a>
                  
                  </li>
                  <h2>AWS Interview Questions for Config</h2>
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              54) How does AWS config work with AWS CloudTrail?
                           </div>
                           <div class="panel-body">                          
                              AWS CloudTrail records user API activity on your account and allows you to access information about the activity. 
                              Using CloudTrail, you can get full details about API actions such as the identity of the caller, time of the call, request parameters, and response elements. 
                              On the other hand, AWS Config records point-in-time configuration details for your AWS resources as Configuration Items (CIs). 
                              <br>
                              You can use a CI to ascertain what your AWS resource looks like at any given point in time.
                              Whereas, by using CloudTrail, you can quickly answer who made an API call to modify the resource. 
                              You can also use Cloud Trail to detect if a security group was incorrectly configured.                              
                           </div>
                        </div>
                     </a>
                     
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              55)  Can AWS Config aggregate data across different AWS accounts?
                           </div>
                           <div class="panel-body">                          
                              Yes, you can set up AWS Config to deliver configuration updates from different accounts to one S3 bucket, 
                              once the appropriate IAM policies are applied to the S3 bucket.
                           </div>
                        </div>
                     </a>
                  
                  </li>
                  <h2>AWS Interview Questions for Database</h2>
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              56) How are reserved instances different from on-demand DB instances?
                           </div>
                           <div class="panel-body">                          
                              Reserved instances and on-demand instances are the same when it comes to function. 
                              They only differ in how they are billed.
                              <br>
                              Reserved instances are purchased as one-year or three-year reservations, and in return, 
                              you get very low hourly based pricing when compared to the on-demand cases that are billed on an hourly basis.
                           </div>
                        </div>
                     </a>
                  
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              57) Which type of scaling would you recommend for RDS and why?
                           </div>
                           <div class="panel-body">                          
                              There are two types of scaling - vertical scaling and horizontal scaling. 
                              Vertical scaling lets you vertically scale up your master database with the press of a button. 
                              A database can only be scaled vertically, and there are 18 different instances in which you can resize the RDS. 
                              On the other hand, horizontal scaling is good for replicas. 
                              These are read-only replicas that can only be done through Amazon Aurora.
                           </div>
                        </div>
                     </a>
                  
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              58) What is a maintenance window in Amazon RDS? Will your DB instance be available during maintenance events?
                           </div>
                           <div class="panel-body">                          
                              RDS maintenance window lets you decide when DB instance modifications, database engine version upgrades, and software patching have to occur. 
                              The automatic scheduling is done only for patches that are related to security and durability. 
                              By default, there is a 30-minute value assigned as the maintenance window and 
                              the DB instance will still be available during these events though you might observe a minimal effect on performance.
                           </div>
                        </div>
                     </a>
                  
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              59) What are the consistency models in DynamoDB?
                           </div>
                           <div class="panel-body">                          
                              There are two consistency models In DynamoDB. First, there is the Eventual Consistency Model, which maximizes your read throughput. 
                              However, it might not reflect the results of a recently completed write. 
                              Fortunately, all the copies of data usually reach consistency within a second. 
                              The second model is called the Strong Consistency Model. This model has a delay in writing the data, 
                              but it guarantees that you will always see the updated data every time you read it.
                           </div>
                        </div>
                     </a>
                  
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              60) What type of query functionality does DynamoDB support?
                           </div>
                           <div class="panel-body">                          
                              DynamoDB supports GET/PUT operations by using a user-defined primary key. 
                              It provides flexible querying by letting you query on non-primary vital attributes using global secondary indexes and local secondary indexes.
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