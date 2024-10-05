<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">

   <title>NubeEra.Training(Interview QnA):AWS</title>
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
      width:50%;
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

               <input type="text" id="myInput" onkeyup="searchTopicsInQuestionNAnswers()" placeholder="Enter Topic...">
               <!--Start of UL Contents -->
               <ul id="myUL">

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              1) What type of performance can you expect from Elastic Block Storage? How do you back it up and enhance the performance ?
                           </div>
                           <div class="panel-body">
                           Performance of an elastic block storage varies i.e. it can go above the SLA performance level and after that drop below it. SLA provides an average disk I/O rate  which can at times frustrate performance experts who yearn for reliable and consistent disk throughput on a server. Virtual AWS instances do not behave this way. One can backup EBS volumes through a graphical user interface like elasticfox or use the snapshot facility through an API call. Also, the performance can be improved by using Linux software raid and striping across four volumes.
                           </div>
                        </div>
                     </a>
                  </li>
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              2) How will you configure an instance with the application and its dependencies , and make it ready to serve traffic?
                           </div>
                           <div class="panel-body">
                              You can acheive this with the use of lifecycle hooks. They are powerful as they let you pause the creation or termination of an instance so that you can sneak peak in and perform custom actions like configuring the instance, downloading the required files, and any other steps that are required to make the instance ready.Every auto scaling group can have multiple lifecycle hooks.
                           </div>
                        </div>
                     </a>
                  </li>
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              3) Imagine that you have an AWS application that requires 24x7 availability and can be down only for a maximum of 15 minutes. How will you ensure that the database hosted on your EBS volume is backed up?
                           </div>
                           <div class="panel-body">
                              Automated backup are the key processes here as they work in the background without requiring any manual intervention. Whenever there is a need to back up the data, AWS API and AWS CLI play a vital role in automating the process through scripts. The best way is to prepare for a timely backup of EBS of the EC2 instance. The EBS snapshot should be stored on Amazon S3 and can be used for recovery of the database instance in case of any failure or downtime.
                           </div>
                        </div>
                     </a>
                  </li>
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              4) You create a Route 53 latency record set from your domain to a system in Singapore and a similar record to a machine in Oregon. When a user located in India visits your domain, to which location will he be routed to?
                           </div>
                           <div class="panel-body">
                              Assuming that the application is hosted on Amazon EC2 instance and multiple instances of the applications are deployed on different EC2 regions. The request is most likely to go to Singapore because Amazon Route 53 is based on latency and it routes the requests based on the location that is likely to give the fastest response possible.
                           </div>
                        </div>
                     </a>
                  </li>
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              5) How will you access the data on EBS in AWS ?
                           </div>
                           <div class="panel-body">
                              Elastic block storage as the name indicates provides persistent, highly avaialble and high performance block level storage that can be attached to a running EC2 instance. The storage can formatted and mounted as a file system or the raw storage can be accessed directly.
                           </div>
                        </div>
                     </a>
                  </li>
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              6) What is the boot time for an instance store backed instance ?
                           </div>
                           <div class="panel-body">
                              The boot time for an Amazon Instance Store -Backed AMI is usually less than 5 minutes.
                           </div>
                        </div>
                     </a>
                  </li>
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              7) What is the total number of buckets that can be created in AWS by default ?
                           </div>
                           <div class="panel-body">
                              100 buckets can be created in each of the AWS accounts. If additional buckets are required, increase the bucket limit by submitting a service limit increase.
                           </div>
                        </div>
                     </a>
                  </li>
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              8) Is it possible to vertically scale on an Amazon Instance?  If yes, how ?
                           </div>
                           <div class="panel-body">
                              Following are the steps to scale an Amazon Instance vertically –
                              <ul>

                                 <li>
                                    Spin up a larger Amazon instance than the existing one.
                                 </li>

                                 <li>
                                    Pause the exisiting instance to remove the root ebs volume from the server  and discard.
                                 </li>

                                 <li>
                                    Stop the live running instance and detach its root volume.
                                 </li>

                                 <li>
                                    Make a note of the unique device ID and attach that root volume to the new server.
                                 </li>

                                 <li>
                                    Start the instance again.
                                 </li>


                              </ul>

                           </div>
                        </div>
                     </a>
                  </li>
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              9) An organization wants to deploy a two-tier web applications on AWS.  The application requires complex query processing and table joins. However, the company has limited resources and requires high availability. Which is the best configuration that company can opt for based on the requirements ?
                           </div>
                           <div class="panel-body">
                              DynamoDB deals with core problems of database scalability, management, reliability, and performance but does not have the functionalities of a RDBMS. DynamoDB does not render support for complex joins or query processing or complex transactions.  You can run a relational engine on Amazon RDS or EC2 for this kind of a functionality.
                           </div>
                        </div>
                     </a>
                  </li>
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              10) Differentiate between Amazon RDS, Redshift and Dynamo DB.
                           </div>
                           <div class="panel-body">
                              The main differences between Amazon RDS, RedShift and Dynamo DB are stated under.
                              <table>
                                 <!--<caption style="text-align:center;"><strong>EC2 vs S3</strong></caption>-->
                                 <tr>
                                    <th style="background-color:powderblue; width:25%; text-align:Center;">Features</th>
                                    <th style="background-color:powderblue; width:25%; text-align:Center;">Amazon RDS</th>
                                    <th style="background-color:powderblue; width:25%; text-align:Center;">Redshift</th>
                                    <th style="background-color:powderblue; width:25%; text-align:Center;">Dynamo DB</th>

                                 </tr>

                                 <tr>
                                    <td style="width:25%;">Computing Resources</td>
                                    <td style="width:25%;">Instances with 64 vCPU and 244 GB RAM</td>
                                    <td style="width:25%;">Nodes with vCPU and 244 GB RAM</td>
                                    <td style="width:25%;">Not specified, SaaS-Software as a Service</td>
                                 </tr>

                                 <tr>
                                    <td style="width:25%;">Database Engine</td>
                                    <td style="width:25%;">MySQL, Oracle DB, SQL Server,Amazon Aurora, Postgre SQL</td>
                                    <td style="width:25%;">Redshift</td>
                                    <td style="width:25%;">NoSQL</td>
                                 </tr>

                                 <tr>
                                    <td style="width:25%;">Maintenance Window</td>
                                    <td style="width:25%;">30 minutes every week</td>
                                    <td style="width:25%;">30 minutes every week</td>
                                    <td style="width:25%;">No impact</td>
                                 </tr>

                                 <tr>
                                    <td style="width:25%;">Primary Usage Feature</td>
                                    <td style="width:25%;">Conventional Databases</td>
                                    <td style="width:25%;">Datawarehouse</td>
                                    <td style="width:25%;">Database for dynamically modified data</td>
                                 </tr>

                                 <tr>
                                    <td style="width:25%;">Multi A-Z Replication</td>
                                    <td style="width:25%;">Additional Service</td>
                                    <td style="width:25%;">Manual</td>
                                    <td style="width:25%;">In-built</td>
                                 </tr>


                              </table>
                           </div>
                        </div>
                     </a>
                  </li>
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              11) If you have half of the workload on public cloud while the other half is on local storage, what kind of architecture will you use for this ?
                           </div>
                           <div class="panel-body">
                              Hybrid Cloud Architecture
                           </div>
                        </div>
                     </a>
                  </li>
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              12) Is it possible to cast-off S3 with EC2 instances ? If yes, how ?
                           </div>
                           <div class="panel-body">
                              It is possible to cast-off S3 with EC2 instances using root approaches backed by native occurrence storage.
                           </div>
                        </div>
                     </a>
                  </li>
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              13) What are some of the key best practices for security in Amazon EC2?
                           </div>
                           <div class="panel-body">
                              <ol>

                                 <li>
                                    Create individual IAM (Identity and Access Management) users to control access to your AWS recourses. Creating separate IAM user provides separate credentials for every user making it possible to assign different permissions to each user based on the access requirements.
                                 </li>

                                 <li>
                                    Secure the AWS Root account and its access keys.
                                 </li>

                                 <li>
                                    Harden EC2  instances by disabling unnecessary services and applications by installing only necessary software and tools on EC2 instances.
                                 </li>

                                 <li>
                                    Grant least privileges by opening up permissions that are required to perform a specific task and not more than that. Additional permissions can be granted as required.
                                 </li>

                                 <li>
                                    Define and review the security group rules on a regular basis.
                                 </li>

                                 <li>
                                    Have a well-defined strong password policy for all the users.
                                 </li>

                                 <li>
                                    Deploy anti-virus software on the AWS network to protect it from Trojans, Viruses, etc.
                                 </li>


                              </ol>

                           </div>
                        </div>
                     </a>
                  </li>
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              14) What should be the instance’s tenancy attribute for running it on a single tenant hardware ?
                           </div>
                           <div class="panel-body">
                              The instance tenancy attribute must be set to a dedicated instance and other values might not be appropriate for this operation.
                           </div>
                        </div>
                     </a>
                  </li>
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              15) There is a distributed application that processes huge amounts of data across various EC2 instances.  Application is designed in such a way that it can recover gracefully from EC2 instance failures. How will you accomplish this in a cost effective manner ?
                           </div>
                           <div class="panel-body">
                              On-demand or reserved instance will not be ideal in this case as the task here is not continuous. Moreover. It does not make sense to launch an on-demand instance whenever work comes up because on-demand instances are expensive.In this case, the ideal choice would be to opt for a spot instance owing to its cost effectiveness and no long term commitments.
                           </div>
                        </div>
                     </a>
                  </li>
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              16) What parameters will you take into consideration when choosing the availability zone ?
                           </div>
                           <div class="panel-body">
                              Performance, pricing, latency, and response time are some of the factors to consider when selecting the availability zone.
                           </div>
                        </div>
                     </a>
                  </li>
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              17) Which instance will you use for deploying a 4-node Hadoop cluster in AWS ?
                           </div>
                           <div class="panel-body">
                              We can use a c4.8x large instance or i2.large for this, but using a c4.8x will require a better configuration on PC.
                           </div>
                        </div>
                     </a>
                  </li>
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              18) Will you use encryption for S3 ?
                           </div>
                           <div class="panel-body">
                              It is better to consider encryption for sensitive data on S3 as it is a proprietary technology.
                           </div>
                        </div>
                     </a>
                  </li>
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              19) How can you send request to Amazon S3 ?
                           </div>
                           <div class="panel-body">
                              Using the REST API or the AWS SDK wrapper libraries which wrap the underlying Amazon S3 REST API.
                           </div>
                        </div>
                     </a>
                  </li>
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              20) How will you bind the user session with a specific instance in ELB (Elastic Load Balancer) ?
                           </div>
                           <div class="panel-body">
                              This can be achieved by enabling Sticky Session.
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              21) Can you run multiple websites on an EC2 server using a single IP address?
                           </div>
                           <div class="panel-body">
                              More than one elastic IP is required to run multiple websites on EC2.
                           </div>
                        </div>
                     </a>
                  </li>
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              22) What happens when you reboot an EC2 instance?
                           </div>
                           <div class="panel-body">
                              Rebooting an instance is just similar to rebooting a PC. You do not return to image’s original state, however, the contents of the hard disk are same as before the reboot.
                           </div>
                        </div>
                     </a>
                  </li>
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              23) A content management system running on EC2 instance is approaching 100% CPU utilization. How will you reduce the load on EC2 instance ?
                           </div>
                           <div class="panel-body">
                              This can be done by attaching a load balancer to an autoscaling group to efficiently distribute load among all instances.
                           </div>
                        </div>
                     </a>
                  </li>
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              24) What happens when you launch instances in Amazon VPC ?
                           </div>
                           <div class="panel-body">
                              Each instance has a default IP address when the instance is launched in Amazon VPC. This approach is considered ideal when you need to connect cloud resources with the data centers.
                           </div>
                        </div>
                     </a>
                  </li>
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              25) Can you modify the private IP address of an EC2 instance while it is running in a VPC ?
                           </div>
                           <div class="panel-body">
                              It is not possible to change the primary private IP addresses. However, secondary IP addresses can be assigned, unassigned or moved between instances at any given point.
                           </div>
                        </div>
                     </a>
                  </li>
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              26) You are launching an instance under the free usage tier from AMI having a snapshot size of 50GB. How will you launch the instance under the free usage tier ?
                           </div>
                           <div class="panel-body">
                              It is not possible to launch this instance under the free usage tier.
                           </div>
                        </div>
                     </a>
                  </li>
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              27) Which load balancer will you use to make routing decisions at the application layer or transport layer that  supports either VPC or EC2?
                           </div>
                           <div class="panel-body">
                              Classic Load Balancer
                           </div>
                        </div>
                     </a>
                  </li>
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              28) What are the possible connection issues you encounter when connecting to an EC2 instance ?
                           </div>
                           <div class="panel-body">
                              <ul>
                                 <li>
                                    Unprotected private key file.
                                 </li>

                                 <li>
                                    Server refused key.
                                 </li>

                                 <li>
                                    Connection timed out.
                                 </li>

                                 <li>
                                    No supported authentication method available.
                                 </li>

                                 <li>
                                    Host key not found,permission denied.
                                 </li>

                                 <li>
                                    User key not recognized by the server, permission denied.
                                 </li>
                              </ul>

                           </div>
                        </div>   
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              29)  Differentiate between vertical and horizontal scaling in AWS.
                           </div>
                           <div class="panel-body">
                              The main difference between vertical and horizontal scaling is the way in which you add compute resources to your infrastructure. In vertical scaling, more power is added to the existing machine while in horizontal scaling additional resources are added into the system with the addition of more machines into the network so that the workload and processing is shared among multiple devices. The best way to understand the difference is imagine that you are retiring your Toyota and buying a Ferrari because you need more horsepower. This is vertical scaling. Another way to get that added horsepower is not to ditch the Toyota for the Ferrari but buy another car. This can be related to horizontal scaling where you drive several cars all at once.<br>

                              The main difference between vertical and horizontal scaling is the way in which you add compute resources to your infrastructure. In vertical scaling, more power is added to the existing machine while in horizontal scaling additional resources are added into the system with the addition of more machines into the network so that the workload and processing is shared among multiple devices. The best way to understand the difference is imagine that you are retiring your Toyota and buying a Ferrari because you need more horsepower. This is vertical scaling. Another way to get that added horsepower is not to ditch the Toyota for the Ferrari but buy another car. This can be related to horizontal scaling where you drive several cars all at once.<br>

                              When the users for your application grow up to 1000 or more, vertical cannot handle requests and there is need for horizontal scaling which is achieved through distributed file system, clustering, and load balancing.
                           </div>
                        </div>
                     </a>
                  </li>
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              30)  Can you differentiate between a Spot instance and an On-Demand instance?
                           </div>
                           <div class="panel-body">
                              Both spot instances and on-demand instances are pricing models. A spot instance allows customers to purchase compute capacity with no upfront commitment. Moreover, the hourly rates for a spot instance are usually lower than what has been set for on-demand instances.<br>

                              The bidding price for a spot instance is known as the spot price. It fluctuates based on the supply and demand for spot instances. In case the spot price gets higher than a customer’s maximum specified price, the EC2 instance will shut down automatically.
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              31) Compare AWS with OpenStack
                           </div>
                           <div class="panel-body">
                              <table>
                                 <!--<caption style="text-align:center;"><strong>EC2 vs S3</strong></caption>-->
                                 <tr>
                                    <th style="background-color:powderblue; width:33.3%; text-align:center;">Services</th>
                                    <th style="background-color:powderblue; width:33.3%; text-align:center;">AWS</th>
                                    <th style="background-color:powderblue; width:33.3%; text-align:center;">OpenStack</th>

                                 </tr>

                                 <tr>
                                    <td style="width:33.3%;">User Interface</td>
                                    <td style="width:33.3%;">GUI-Console<br>
                                        API-EC2 API<br>
                                        CLI -Available</td>
                                    <td style="width:33.3%;">GUI-Console<br>
                                        API-EC2 API<br>
                                        CLI -Available</td>
                                 </tr>

                                 <tr>
                                    <td style="width:33.3%;">Computation</td>
                                    <td style="width:33.3%;">EC2</td>
                                    <td style="width:33.3%;">Nova</td>
                                 </tr>

                                 <tr>
                                    <td style="width:33.3%;">File Storage</td>
                                    <td style="width:33.3%;">S3</td>
                                    <td style="width:33.3%;">Swift</td>
                                 </tr>

                                 <tr>
                                    <td style="width:33.3%;">Block Storage</td>
                                    <td style="width:33.3%;">EBS</td>
                                    <td style="width:33.3%;">Cinder</td>
                                 </tr>

                                 <tr>
                                    <td style="width:33.3%;">Networking</td>
                                    <td style="width:33.3%;">IP addressing Egress, Load Balancing Firewall (DNS) , VPC</td>
                                    <td style="width:33.3%;">IP addressing load balancing firewall (DNS)</td>
                                 </tr>


                              </table>
                           </div>
                        </div>
                     </a>
                  </li>
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              32) What are the important features of a classic load balancer in EC2 ?
                           </div>
                           <div class="panel-body">

                              <ul>
                                 <li>
                                    The high availability feature ensures that the traffic is distributed among EC2 instances in single or multiple availability zones.This ensures high scale of availability for incoming traffic.
                                 </li>

                                 <li>
                                    Classic load balancer can decide whether to route the traffic or not based on the results of health check.
                                 </li>

                                 <li>
                                    You can implement secure load balancing within a network  by creating security groups in a VPC.
                                 </li>

                                 <li>
                                    Classic load balancer supports sticky sessions which ensure that the traffic from a user is always routed to the same instance for a seamless experience.
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              33) What is the difference between Amazon S3 and EBS ?
                           </div>
                           <div class="panel-body">
                              <table style="width:100%;">
                                 <!--<caption style="text-align:center;"><strong>EC2 vs S3</strong></caption>-->
                                 <tr>
                                    <th style="background-color:powderblue;  width:33.3%; text-align:center;"></th>
                                    <th style="background-color:powderblue;  width:33.3%; text-align:center;">Amazon S3</th>
                                    <th style="background-color:powderblue;  width:33.3%; text-align:center;">EBS</th>

                                 </tr>

                                 <tr>
                                    <td style="width:33.3%;">Paradigm</td>
                                    <td style="width:33.3%;">Object Store</td>
                                    <td style="width:33.3%;">Filesystem</td>
                                 </tr>

                                 <tr>
                                    <td style="width:33.3%;">Security</td>
                                    <td style="width:33.3%;">Private Key or Public Key</td>
                                    <td style="width:33.3%;">Visible only to your EC2</td>
                                 </tr>

                                 <tr>
                                    <td style="width:33.3%;">Redundancy</td>
                                    <td style="width:33.3%;">Across data centers</td>
                                    <td style="width:33.3%;">Within the data center</td>
                                 </tr>

                                 <tr>
                                    <td style="width:33.3%;">Performance</td>
                                    <td style="width:33.3%;">Fast</td>
                                    <td style="width:33.3%;">Superfast</td>
                                 </tr>

                              </table>
                           </div>
                        </div>
                     </a>
                  </li>


                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              34) Differentiate between on-demand instance and spot instance.
                           </div>
                           <div class="panel-body">
                              Spot Instances  are spare unused EC2 instances which one can bid for. Once the bid exceeds the existing spot price (which changes in real-time based on demand and supply) the spot instance will be launched. If the spot price becomes more than the bid price then the instance can go away anytime and terminated within 2 minutes of notice. The best way to decide on the optimal bid price for a spot instance is to check the price history of last 90 days that is available on AWS console. The advantage of spot instances is that they are cost-effective and the drawback is that they can be terminated anytime. Spot instances are ideal to use when –
                              <ul>

                                 <li>
                                    There are optional nice to have tasks.
                                 </li>

                                 <li>
                                    You have flexible workloads which can be run when there is enough compute capacity.
                                 </li>

                                 <li>
                                    Tasks that require extra computing capacity to improve performance.
                                 </li>

                              </ul>

                              On-demand instances are made available whenever you require them and you need to pay for the time you use them on an hourly basis. These instances can be released when they are no longer required and do not require any upfront commitment. The availability fo these instances is guaranteed by AWS unlike spot instances.<br>

                              The best practice is to launch couple of on-demand instances which can maintain minimum level of guaranteed compute resources for the application and add-on few spot instances whenever there is an opportunity.

                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              33) What are the various AWS products built for offering cloud services?
                           </div>
                           <div class="panel-body">
                              There are mainly three kinds of cloud service types for which AWS products are made. These are stated as under. <br />

                              <ul>
                                 <li>
                                    <strong>Computing: </strong>The AWS products for computing are Auto-Scaling, EC2, Lightsat, Elastic Beanstalk, and Lambda.
                                 </li>

                                 <li>
                                    <strong>Storage: </strong>The AWS products for storage include S3, Elastic File System, Elastic Block Storage, and Glacier.
                                 </li>

                                 <li>
                                    <strong>Networking: </strong>The AWS products for networking include VPC, Route53 and Amazon CloudFront.
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              34) Please enumerate some of the best practices to enhance security in Amazon EC2.
                           </div>
                           <div class="panel-body">
                              <ol>

                                 <li>
                                    Allow only trusted hosts or networks to access ports on your instance
                                 </li>

                                 <li>
                                    Control access to the AWS resources with AWS Identity and Access Management (IAM)
                                 </li>

                                 <li>
                                    Disable password-based logins for instances launched from the AMI
                                 </li>

                                 <li>
                                    Frequently review rules in the security groups
                                 </li>

                              </ol>

                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              35)  How can you safeguard EC2 instances running on a VPC ?
                           </div>
                           <div class="panel-body">
                              AWS Security groups associated with EC2 instances can help you safeguard EC2 instances running in a VPC by providing security at the protocol and port access level. You can configure both INBOUND and OUTBOUND traffic to enables secured access for the EC2 instance.AWS security groups are much similar to a firewall-they contain set of rules which filter the traffic coming into and out of an EC2 instance and deny any kind of unauthorized access to EC2 instances
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