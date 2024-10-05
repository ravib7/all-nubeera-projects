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
      width: 50%;
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
                              1) Explain what AWS is?
                           </div>
                           <div class="panel-body">  
                              AWS stands for Amazon Web Service; it is a collection of remote computing services also known as a cloud computing platform.  
                              This new realm of cloud computing is also known as IaaS or Infrastructure as a Service.                        
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              2) Mention what the key components of AWS are?
                           </div>
                           <div class="panel-body"> 
                              The key components of AWS are                         
                              <ul>
                                 <li>
                                    <b>Route 53:</b>A DNS web service
                                 </li>
                                 <li>
                                    <b>Simple E-mail Service:</b>It allows sending e-mail using RESTFUL API call or via regular SMTP
                                 </li>
                                 <li>
                                    <b>Identity and Access Management:</b>It provides enhanced security and identity management for your AWS account
                                 </li>
                                 <li>
                                    <b>Simple Storage Device or (S3):</b>It is a storage device and the most widely used AWS service
                                 </li>
                                 <li>
                                    <b>Elastic Compute Cloud (EC2):</b>It provides on-demand computing resources for hosting applications. 
                                    It is handy in case of unpredictable workloads
                                 </li>
                                 <li>
                                    <b>Elastic Block Store (EBS):</b>It offers persistent storage volumes that attach to EC2 to allow you to persist data past the lifespan of a single Amazon EC2 instance
                                 </li>
                                 <li>
                                    <b>CloudWatch:</b>To monitor AWS resources, It allows administrators to view and collect key Also, one can set a notification alarm in case of trouble.
                                 </li>
                                 
                              </ul> 
                           </div>
                        </div>
                     </a>
                  
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              3)  Explain what S3 is?
                           </div>
                           <div class="panel-body"> 
                              S3 stands for Simple Storage Service. You can use S3 interface to store and retrieve any amount of data, 
                              at any time and from anywhere on the web.  For S3, the payment model is “pay as you go.”               
                           </div>
                        </div>
                     </a>
                  
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              4) What is AMI?
                           </div>
                           <div class="panel-body">   
                              AMI stands for Amazon Machine Image.  It’s a template that provides the information (an operating system, an application server, and applications) required to launch an instance, 
                              which is a copy of the AMI running as a virtual server in the cloud. You can launch instances from as many different AMIs as you need               
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              5) Mention what the relationship between an instance and AMI is?
                           </div>
                           <div class="panel-body"> 
                              From a single AMI, you can launch multiple types of instances.  
                              An instance type defines the hardware of the host computer used for your instance. 
                              Each instance type provides different computer and memory capabilities.  
                              Once you launch an instance, it looks like a traditional host, and we can interact with it as we would with any computer.                        
                           </div>
                        </div>
                     </a>
                  
                  </li>

                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 6) What does an AMI include?
                              </div>
                              <div class="panel-body"> 
                                 An AMI includes the following things                         
                                 <ul>
                                    <li>
                                       A template for the root volume for the instance
                                    </li>
                                    <li>
                                       Launch permissions decide which AWS accounts can avail the AMI to launch instances
                                    </li>
                                    <li>
                                       A block device mapping that determines the volumes to attach to the instance when it is launched
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </a>
                     
                     </li>

                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 7)  How can you send a request to Amazon S3?
                              </div>
                              <div class="panel-body"> 
                                 Amazon S3 is a REST service, and you can send a request by using the REST API or the AWS SDK wrapper
                                 libraries that wrap the underlying Amazon S3 REST API.                         
                              
                              </div>
                           </div>
                        </a>
                     
                     </li>

                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 8) Mention what the difference between Amazon S3 and EC2 is?
                              </div>
                              <div class="panel-body"> 
                                 The difference between EC2 and Amazon S3 is that    
                              <table style="width:100%">
                     
                                    <tr>
                                       <th style="background-color:powderblue;text-align:center;">EC2</th>
                                       <th style="background-color:powderblue;text-align:center;">S3</th>
                                    </tr>

                                    <tr>                                  
                                       <td>It is a cloud web service used for hosting your application</td>
                                       <td>It is a data storage system where any amount of data can be stored</td>

                                    <tr>
                                       
                                       <td>It is like a huge computer machine which can run either Linux or Windows and 
                                             can handle application like PHP, Python, Apache or any databases</td>
                                       <td>It has a REST interface and uses secure HMAC-SHA1 authentication keys</td>
                                    </tr>

                                 
                                 </table>
                              </div>
                           </div>
                        </a>
                     
                     </li>

                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 9) How many buckets can you create in AWS by default?
                              </div>
                              <div class="panel-body">                          
                                 By default, you can create up to 100 buckets in each of your AWS accounts.
                              </div>
                           </div>
                        </a>
                     
                     </li>

                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 10) Explain can you vertically scale an Amazon instance? How?
                              </div>
                              <div class="panel-body">    
                                 Yes, you can vertically scale on Amazon instance. For that                      
                                 <ul>
                                    <li>
                                       Spin up a new larger instance than the one you are currently running
                                    </li>
                                    <li>
                                       Pause that instance and detach the root webs volume from the server and discard
                                    </li>
                                    <li>
                                       Then stop your live instance and detach its root volume
                                    </li>
                                    <li>
                                       Note the unique device ID and attach that root volume to your new server
                                    </li>
                                    <li>
                                       And start it again
                                    </li>
                                    
                                 </ul>
                              </div>
                           </div>
                        </a>
                     
                     </li>

                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 11)  Explain what T2 instances is?
                              </div>
                              <div class="panel-body">                          
                                 T2 instances are designed to provide moderate baseline performance and the capability to burst to higher performance as required by the workload
                              </div>
                           </div>
                        </a>
                     
                     </li>

                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 12)  In VPC with private and public subnets, database servers should ideally be launched into which subnet?
                              </div>
                              <div class="panel-body">                          
                                 With private and public subnets in VPC, database servers should ideally launch into private subnets.
                              </div>
                           </div>
                        </a>
                        
                     </li>

                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 13) Mention what the security best practices for Amazon EC2 are?
                              </div>
                              <div class="panel-body">    
                                 For secure Amazon EC2 best practices, follow the following steps                      
                              <ul>
                                    <li>
                                       Use AWS identity and access management to control access to your AWS resources
                                    </li>
                                    <li>
                                       Restrict access by allowing only trusted hosts or networks to access ports on your instance
                                    </li>
                                    <li>
                                       Review the rules in your security groups regularly
                                    </li>
                                    <li>
                                       Only open up permissions that you require
                                    </li>
                                    <li>
                                       Disable password-based login, for example, launched from your AMI
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </a>
                     
                     </li>

                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 14)  Explain how the buffer is used in Amazon web services?
                              </div>
                              <div class="panel-body">                          
                                 The buffer is used to make the system more robust to manage traffic or load by synchronizing different component.  
                                 Usually, components receive and process the requests in an unbalanced way. With the help of buffer, the components will be balanced and will work at the same speed to provide faster services.
                              </div>
                           </div>
                        </a>
                     
                     </li>

                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 15)  While connecting to your instance what are the possible connection issues one might face?
                              </div>
                              <div class="panel-body">  
                                 The possible connection errors one might encounter while connecting instances are                        
                                 <ul>
                                    <li>
                                       Connection timed out
                                    </li>
                                    <li>
                                       User key not recognized by the server  
                                    </li>
                                    <li>
                                       Host key not found, permission denied
                                    </li>
                                    <li>
                                       An unprotected private key file
                                    </li>
                                    <li>
                                       Server refused our key or No supported authentication method available
                                    </li>
                                    <li>
                                       Error using MindTerm on Safari Browser
                                    </li>
                                    <li>
                                       Error using Mac OS X RDP Client
                                    </li>
                                    
                                 </ul>
                              </div>
                           </div>
                        </a>
                     
                     </li>

                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 16) What are key-pairs in AWS?
                              </div>
                              <div class="panel-body"> 
                                 Key-pairs are secure login information for your virtual machines. 
                                 To connect to the instances, you can use key-pairs which contain a public-key and private-key.                         
                              
                              </div>
                           </div>
                        </a>
                        
                     </li>

                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 17) What are the different types of instances?
                              </div>
                              <div class="panel-body">  
                                 Following are the types of instances:           
                                 <ul>
                                    <li>
                                       General purpose
                                    </li>
                                    <li>
                                       Computer Optimized
                                    </li>
                                    <li>
                                       Memory Optimized
                                    </li>
                                    <li>
                                       Storage Optimized
                                    </li>
                                    <li>
                                       Accelerated Computing
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </a>
                     
                     </li>

                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 18)  Is the property of broadcast or multicast supported by Amazon VPC?
                              </div>
                              <div class="panel-body"> 
                                 No, currently Amazon VPI not provide support for broadcast or multicast.                                        
                              </div>
                           </div>
                        </a>
                     
                     </li>

                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 19)  How many Elastic IPs is allows you to create by AWS?
                              </div>
                              <div class="panel-body">  
                                 5 VPC Elastic IP addresses are allowed for each AWS account.                                                 
                              </div>
                           </div>
                        </a>
                     
                     </li>

                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 20) Explain default storage class in S3
                              </div>
                              <div class="panel-body">                          
                                 The default storage class is a Standard frequently accessed.
                              </div>
                           </div>
                        </a>
                     
                     </li>

                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 21)  What are the Roles?
                              </div>
                              <div class="panel-body">                          
                                 Roles are used to provide permissions to entities which you can trust within your AWS account. Roles are very similar to users. 
                                 However,  with roles, you do not require to create any username and password to work with the resources.
                              </div>
                           </div>
                        </a>
                     
                     </li>

                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                              22)  What are the edge locations?
                              </div>
                              <div class="panel-body">                          
                                 Edge location is the area where the contents will be cached. 
                                 So, when a user is trying to accessing any content, the content will automatically be searched in the edge location.
                              </div>
                           </div>
                        </a>
                        
                     </li>

                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 23) What is VPC?
                              </div>
                              <div class="panel-body">                          
                                 VPC stands for Virtual Private Cloud. It allows you to customize your networking configuration. 
                                 It is a network which is logically isolated from another network in the cloud. 
                                 It allows you to have your IP address range,  internet gateways, subnet and security groups.
                              </div>
                           </div>
                        </a>
                        
                     </li>

                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 24) Explain snowball
                              </div>
                              <div class="panel-body">                          
                                 Snowball is a data transport option. It used source appliances to a large amount of data into and out of AWS. 
                                 With the help of snowball, you can transfer a massive amount of data from one place to another. It helps you to reduce networking costs.
                              </div>
                           </div>
                        </a>
                     
                     </li>

                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 25) What is a redshift?
                              </div>
                              <div class="panel-body">                          
                                 Redshift is a big data warehouse product. It is fast and powerful, 
                                 fully managed data warehouse service in the cloud.
                              </div>
                           </div>
                        </a>
                     
                     </li>

                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 26) What are the advantages of auto-scaling?
                              </div>
                              <div class="panel-body">  
                                 Following are the advantages of autoscaling                        
                              <ul>
                                    <li>
                                       Offers fault tolerance
                                    </li>
                                    <li>
                                       Better availability
                                    </li>
                                    <li>
                                       Better cost management
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </a>
                     
                     </li>

                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 27) What is meant by subnet?
                              </div>
                              <div class="panel-body">                          
                                 A large section of IP Address divided into chunks is known as subnets.
                              </div>
                           </div>
                        </a>
                     
                     </li>

                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 28) Can you establish a Peering connection to a VPC in a different region?
                              </div>
                              <div class="panel-body">                          
                                 Yes, we can establish a peering connection to a VPC in a different region. 
                                 It is called inter-region VPC peering connection.
                              </div>
                           </div>
                        </a>
                     
                     </li>

                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 29) What is SQS?
                              </div>
                              <div class="panel-body">                          
                                 Simple Queue Service also known as SQS. It is distributed queuing service which acts as a mediator for two controllers.
                              </div>
                           </div>
                        </a>
                     
                     </li>

                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 30) How many subnets can you have per VPC?
                              </div>
                              <div class="panel-body">                          
                                 You can have 200 subnets per VPC.
                              </div>
                           </div>
                        </a>
                     
                     </li>

                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 31) DNS  and Load Balancer service comes under which type of cloud service?
                              </div>
                              <div class="panel-body">                          
                                 DNS and Load Balancer and DNS services come under IAAS-storage cloud service.
                              </div>
                           </div>
                        </a>
                     </li>

                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 32) What is the role of AWS CloudTrail?
                              </div>
                              <div class="panel-body">                          
                                 CloudTrail is a specially designed tool for logging and tracking API calls. 
                                 It helps to audit all S3 bucket accesses.
                              </div>
                           </div>
                        </a>
                     
                     </li>

                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                              33) When EC2 officially launched?
                              </div>
                              <div class="panel-body">                          
                                 EC2 officially launched in the year 2006.
                              </div>
                           </div>
                        </a>
                     
                     </li>

                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 34) What is SimpleDB?
                              </div>
                              <div class="panel-body">                          
                                 SimpleDB is a data repository of structure record which encourages data doubts and indexing both S3 and EC2are called SimpleDB.
                              </div>
                           </div>
                        </a>
                     
                     </li>

                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 35) Explain Amazon ElasticCache
                              </div>
                              <div class="panel-body">                          
                                 Amazon Elasticcache is a web service which makes it easy to deploy, scale and store data in the cloud.
                              </div>
                           </div>
                        </a>
                     
                     </li>

                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 36) What is AWS Lambda?
                              </div>
                              <div class="panel-body">                          
                                 Lambda is an Amazon compute service which allows you to run code in the  AWS Cloud without managing servers.
                              </div>
                           </div>
                        </a>
                     
                     </li>

                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 37) Name the types of AMI provided by AWS
                              </div>
                              <div class="panel-body"> 
                                 The types of AMI provided by AWS are:                         
                                 <ol>
                                    <li>
                                       Instance store backed
                                    </li>
                                    <li>
                                       EBS backed
                                    </li>                              
                                 </ol>
                              </div>
                           </div>
                        </a>   
                     
                     </li>

                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 38) Name the AWS service exists only to redundantly cache data and images?
                              </div>
                              <div class="panel-body">                          
                                 AWS Edge locations are service which redundantly cache data and images.
                              </div>
                           </div>
                        </a>
                     
                     </li>

                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 39) Explain Geo Restriction in CloudFront
                              </div>
                              <div class="panel-body">                          
                                 A Geo-restriction feature helps you to prevent users of specific geographic locations from accessing content which you’re distributing through a CloudFront web distribution.
                              </div>
                           </div>
                        </a>
                     
                     </li>

                     <li><a href="#"><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 40) What is Amazon EMR?
                              </div>
                              <div class="panel-body">                          
                                 EMR is a survived cluster stage which helps you to interpret the working of data structures before the intimation.  
                                 Apache Hadoop and Apache Spark on the Amazon Web Services helps you to investigate a large amount of data. 
                                 You can prepare data for the analytics goals and marketing intellect workloads using Apache Hive and using other relevant open source designs.
                              </div>
                           </div>
                        </a>
                     
                     </li>

                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 41)  What is boot time taken for the instance stored backed AMI?
                              </div>
                              <div class="panel-body">                          
                                 The boot time for an Amazon instance store-backend AMI is less than 5 minutes.
                              </div>
                           </div>
                        </a>
                     
                     </li>

                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 42) Do you need an internet gateway to use peering connections?
                              </div>
                              <div class="panel-body">                          
                                 Yes, the Internet gateway is needed to use VPC (virtual private cloud peering) connections.
                              </div>
                           </div>
                        </a>
                     
                     </li>

                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 43) How to connect EBS volume to multiple instances?
                              </div>
                              <div class="panel-body">                          
                                 We can’t be able to connect EBS volume to multiple instances.  
                                 Although, you can connect various EBS Volumes to a single instance.
                              </div>
                           </div>
                        </a>
                     
                     </li>

                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 44) List different types of cloud services
                              </div>
                              <div class="panel-body"> 
                                 Various types of cloud services are:                         
                              <ul>
                                    <li>
                                       Software as a Service (SaaS),
                                    </li>
                                    <li>
                                       Data as a Service (DaaS)
                                    </li>
                                    <li>
                                       Platform as a Service (PaaS)
                                    </li>
                                    <li>
                                       Infrastructure as a Service (IaaS).
                                    </li>
                                    
                                 </ul>
                              </div>
                           </div>
                        </a>
                     
                     </li>

                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 45) State the difference between An Instance  and AMI
                              </div>
                              <div class="panel-body">                          
                                 AMI is a template consisting software configuration part. For example Operating systems, applications, 
                                 application server if you start an instance, a duplicate of the AMI in a row as an attendant in the cloud.
                              </div>
                           </div>
                        </a>
                     
                     </li>

                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 46)  What are the different types of Load Balancer in AWS services?
                              </div>
                              <div class="panel-body"> 
                                 Two types of Load balancer are:                         
                                 <ol>
                                    <li>
                                       Application Load Balancer
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
                                 47)  In which situation you will select provisioned IOPS over standard RDS storage?
                              </div>
                              <div class="panel-body">                          
                                 You should select provisioned IOPS storage over standard RDS storage if you want to perform batch-related workloads.
                              </div>
                           </div>
                        </a>
                     
                     </li>

                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 48) What are the important features of Amazon cloud search?
                              </div>
                              <div class="panel-body">  
                                 Important features of the Amazon cloud are:                 
                              <ul>
                                    <li>
                                       Boolean searches
                                    </li>
                                    <li>
                                       Prefix Searches
                                    </li>
                                    <li>
                                       Range searches
                                    </li>
                                    <li>
                                       Entire text search
                                    </li>
                                    <li>
                                       AutoComplete advice
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </a>
                     
                     </li>

                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 49) Can vertically scaling is allows in  Amazon Instance?
                              </div>
                              <div class="panel-body">                          
                                 Yes, you can vertically estimate one Amazon instance.
                              </div>
                           </div>
                        </a>
                     
                     </li>

                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 50) What is the use of lifecycle hooks in Autoscaling?
                              </div>
                              <div class="panel-body">                          
                                 Lifecycle hooks are used for autoscaling to put an additional wait time to a scale in or scale out event.
                              </div>
                           </div>
                        </a>
                     
                     </li>

                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 51)  What are various layers of Cloud Architecture explained in AWS training?
                              </div>
                              <div class="panel-body">  
                              Different layers of cloud architecture are:
                                 <ul>
                                    <li>
                                       Cloud controller
                                    </li>
                                    <li>
                                       Cluster controller
                                    </li>
                                    <li>
                                       Storage Controller
                                    </li>
                                    <li>
                                       Node Controller
                                    </li>
                                    
                                 </ul>
                              </div>
                           </div>
                        </a>
                     
                     </li>

                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 52) What are the storage class available in Amazon s3?
                              </div>
                              <div class="panel-body">   
                                 Storage classes available with Amazon s3 are: 
                                 <ul>
                                    <li>
                                       Amazon S3 standard
                                    </li>
                                    <li>
                                       Amazon S3 standard-infrequent Access
                                    </li>
                                    <li>
                                       Amazon S3 Reduced Redundancy Storage
                                    </li>
                                    <li>
                                       Amazon Glacier
                                    </li>
                                    
                                 </ul>
                              </div>
                           </div>
                        </a>
                     
                     </li>

                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 53) Name some of the DB engines which can be used in AWS RDS
                              </div>
                              <div class="panel-body">                          
                                 <ol>
                                    <li>
                                       MS-SQL DB
                                    </li>
                                    <li>
                                       MariaDB
                                    </li>
                                    <li>
                                       MYSQL DB
                                    </li>
                                    <li>
                                       OracleDB
                                    </li>
                                    <li>
                                       PostgreDB
                                    </li>
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