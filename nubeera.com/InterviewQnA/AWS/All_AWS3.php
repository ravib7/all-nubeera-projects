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
                              1) Define AWS?
                           </div>
                           <div class="panel-body">
                              AWS is the initials of Amazon Web Services. It is a platform that offers safe cloud services, data storage facilities, computing platforms, content delivery, and various other associated services to the users.
                           </div>
                        </div>
                     </a>
                  </li>
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              2) Define Auto-Scaling?
                           </div>
                           <div class="panel-body">
                              Auto-Scaling is a function that supports the provision and launch of new instances after recognizing the demand. This way it offers the users the ability to increase or decrease the resource capacity as per the changing demand levels.
                           </div>
                        </div>
                     </a>
                  </li>
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              3) Is there any difference between region and availability zone?
                           </div>
                           <div class="panel-body">
                              Yes, there is a difference between region and availability zone. The regions are the different geographical locations like United States-West 1 i.e. North California and Asia South i.e. Mumbai. An availability zone is the part of the regions which are mostly the isolated zones that can replicate itself when the need arises.
                           </div>
                        </div>
                     </a>
                  </li>
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              4) What do you understand by geo-targeting in CloudFront?
                           </div>
                           <div class="panel-body">
                              Geo-Targeting in the CloudFront supports the creation of customized content for the target audience as per the demand and needs of a specific geographical area. This helps the businesses to showcase their personalized content to the target audience in different geographic locations without changing its URL.
                           </div>
                        </div>
                     </a>
                  </li>
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              5) What is S3 in AWS?
                           </div>
                           <div class="panel-body">
                              S3 is referred to as Simple Storage Service. It is used to store and retrieve data of any amount at any time from anywhere in the world using the web. To use this service the payment model developed is “Pay As You Go”.
                           </div>
                        </div>
                     </a>
                  </li>
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              6) What is AMI?
                           </div>
                           <div class="panel-body">
                              AMI is the short form of Amazon Machine Image. It is a template that offers the information required to launch an instance that acts as a copy of AMI running as a virtual server in the cloud. The information provided is about the operating system, applications and the application server itself. Many instances can be launched at one time from different AMIs as per your instructions.
                           </div>
                        </div>
                     </a>
                  </li>
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              7) What is the relation between AMI and Instance?
                           </div>
                           <div class="panel-body">
                              Instances can be launched by AMIs. One AMI can launch as many instances as required. An instance type defines the hardware of the host computer for Instance including information about computers and its memory abilities. After launching an instance, it works as a traditional host and could be interacted with as with any other computer.
                           </div>
                        </div>
                     </a>
                  </li>
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              8) What are the inclusions in AMI?
                           </div>
                           <div class="panel-body">
                              There are three inclusions in Ami which include the following.
                              <ol>

                                 <li>
                                    Template for the root volume for the instance.
                                 </li>

                                 <li>
                                    Block device mapping that helps in determining the volumes after attaching to the instance after launch.
                                 </li>

                                 <li>
                                    Launch permissions that helps in deciding which AWS account can take the AMI for launching Instances.
                                 </li>


                              </ol>

                           </div>
                        </div>
                     </a>
                  </li>
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              9) Can we send a request to Amazon S3?
                           </div>
                           <div class="panel-body">
                              Yes, we can send a request to Amazon S3 by using the REST API or the AWS SDK wrapper libraries which wrap the underlying Amazon S3 REST API.
                           </div>
                        </div>
                     </a>
                  </li>
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              10) What are the main differences between EC2 and S3?
                           </div>
                           <div class="panel-body">
                              The main differences between EC2 and S3 are stated under.
                              <table style="width:100%;">
                                 <tr>
                                    <th style="background-color:powderblue; width:50%; text-align:center;">EC2</th>
                                    <th style="background-color:powderblue; width:50%; text-align:center;">S3</th>
                                 </tr>

                                 <tr>
                                    <td style="width:25%;">It is a cloud web service</td>
                                    <td style="width:25%;">It is a data storage system</td>

                                 <tr>
                                    <td style="width:25%;">It is used for hosting the web application</td>
                                    <td style="width:25%;">It is used for storing any amount of data</td>
                                 </tr>

                                 <tr>
                                    <td style="width:25%;">It works as a huge computer machine</td>
                                    <td style="width:25%;">It is a REST interface.</td>
                                 </tr>

                                 <tr>
                                    <td style="width:25%;">It can either run LINUX or Windows and could also handle PHP, Python, Apache and various other kinds of databases</td>
                                    <td style="width:25%;">It applies secure authentication keys such as HMAC-SHA1</td>
                                 </tr>
                              </table>
                           </div>
                        </div>
                     </a>
                  </li>
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              11) Can buckets be created in AWS accounts?
                           </div>
                           <div class="panel-body">
                              Yes, buckets can be created in AWS accounts. By default up to 100 buckets can be created in the AWS account.
                           </div>
                        </div>
                     </a>
                  </li>
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              12) Define T2 Instance?
                           </div>
                           <div class="panel-body">
                              T2 Instance is specifically designed to offer moderate baseline performance and the ability to burst into higher performance as per the requirements of the workload.
                           </div>
                        </div>
                     </a>
                  </li>
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              13) Identify different kinds of Instances?
                           </div>
                           <div class="panel-body">
                              The different kinds of Instances include the following.
                              <ol>

                                 <li>
                                    Accelerated Computing Instance.
                                 </li>

                                 <li>
                                    Memory-Optimized Instance.
                                 </li>

                                 <li>
                                    Storage Optimized Instance.
                                 </li>

                                 <li>
                                    Computer Optimized Instance.
                                 </li>

                                 <li>
                                    General Purpose Instance.
                                 </li>


                              </ol>

                           </div>
                        </div>
                     </a>
                  </li>
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              14) Can we create Elastic IPs in AWS?
                           </div>
                           <div class="panel-body">
                              Yes, we can create Elastic IPs in AWS. About 5 VPC Elastic IP addresses are allowed under each AWS account.
                           </div>
                        </div>
                     </a>
                  </li>
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              15) Does Amazon VPC support the property of broadcast or multicast?
                           </div>
                           <div class="panel-body">
                              Amazon VPC does not support the property of broadcast or multicast.
                           </div>
                        </div>
                     </a>
                  </li>
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              16) What is a default storage class in S3?
                           </div>
                           <div class="panel-body">
                              The default storage class in S3 is referred to as the Standard frequently accessed.
                           </div>
                        </div>
                     </a>
                  </li>
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              17) What are the roles in AWS?
                           </div>
                           <div class="panel-body">
                              Roles in AWS are used to provide permission to the entities that can be trusted within the AWS account. They are similar to the users and do not require the creation of any user name and password to work along with various other resources in AWS.
                           </div>
                        </div>
                     </a>
                  </li>
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              18) What are the edge locations in AWS?
                           </div>
                           <div class="panel-body">
                              Edge locations in AWS are referred to as the area where the contents will be cached. When a user tries to access any content than in such case the content automatically searches for the edge location.
                           </div>
                        </div>
                     </a>
                  </li>
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              19) What is the full form of VPC? Explain VPC?
                           </div>
                           <div class="panel-body">
                              The full form of VPC is Virtual Private Cloud. VPC helps in customizing the network configuration process. It acts as a network that is logically isolated from various other networks in the cloud. VPC allows the users to have their IP address range, security groups, subnet and internet gateways.
                           </div>
                        </div>
                     </a>
                  </li>
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              20) What is a Snowball in AWS?
                           </div>
                           <div class="panel-body">
                              A Snowball in AWS is a data transport option. It uses the source appliances to a large amount of data for getting into and out of AWS. Snowball can be used for the transfer of massive data from one place to another. It also helps in reducing networking costs.
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              21) What is Redshift in AWS?
                           </div>
                           <div class="panel-body">
                              Redshift in AWS is a big data warehouse product that is fast and powerful enough to manage data warehouse service in the cloud.
                           </div>
                        </div>
                     </a>
                  </li>
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              22) Define Subnet in AWS?
                           </div>
                           <div class="panel-body">
                              Subnet in AWS is referred to as the large section of IP Address which is divided into chunks. We can have 200 subnets per VPC.
                           </div>
                        </div>
                     </a>
                  </li>
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              23) What is SQL in AWS?
                           </div>
                           <div class="panel-body">
                              SQL stands for Simple Queues Services that offers a distributed queuing service that acts as a mediator for two controllers.
                           </div>
                        </div>
                     </a>
                  </li>
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              24) What is SimpleDB in AWS?
                           </div>
                           <div class="panel-body">
                              SimpleDB is a name given to the data repository structure record which supports data doubts and index S3 and EC2.
                           </div>
                        </div>
                     </a>
                  </li>
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              25) What is Amazon ElasticCache?
                           </div>
                           <div class="panel-body">
                              Amazon ElasticCache is a web service that helps in easy deployment, scaling, and storing of data in the cloud.
                           </div>
                        </div>
                     </a>
                  </li>
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              26) What is AWS Lambda?
                           </div>
                           <div class="panel-body">
                              AWS Lambda is a computing service offered by Amazon to run code in the AWS cloud without managing the servers.
                           </div>
                        </div>
                     </a>
                  </li>
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              27)  What is Amazon EMR?
                           </div>
                           <div class="panel-body">
                              Amazon EMR is a survived cluster stage that helps in interpreting the working of the different data structures before the intimation. The various components of Amazon EMR are Apache Hadoop, Apache Spark, Apache Hive and various others. They help in investigating a large amount of data, prepare data analytic goals and market intellect workloads using open-source designs.
                           </div>
                        </div>
                     </a>
                  </li>
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              28) How will you use the processor state control feature available on the c4.8xlarge instance?
                           </div>
                           <div class="panel-body">
                              The processor state control has 2 states, namely:
                              <ul>
                                 <li>
                                    The C State – Represents sleep state. Varies from c0 to c6, where c6 is the deepest sleep state for a processor.
                                 </li>

                                 <li>
                                    The P State – Represents performance state. Varies from p0 to p15, where p15 is the lowest possible frequency.
                                 </li>
                              </ul>

                              A processor has multiple cores, and each of them requires thermal headroom for gaining a boost in performance. Hence, the temperature needs to be kept at an optimal level so that the cores can perform at their highest.<br><br>

                              When a core is put into the sleep state then it results in a reduction of the overall temperature of the processor. This gives an opportunity to other cores for giving out a better performance. Hence, a strategy can be devised by properly putting some cores to sleep and others in a performance state to get an overall performance boost from the processor.<br><br>

                              Instances like the c4.8xlarge allow customizing the C and P states for customizing the processor performance according to the workload.
                           </div>
                        </div>   
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              29)  Which instance type can be used for deploying a 4 node cluster of Hadoop in AWS?
                           </div>
                           <div class="panel-body">
                              While the c4.8xlarge instance will be preferred for the master machine, the i2.large instance seems fit for the slave machine. Another way is to launch the Amazon EMR instance that automatically configures the servers.<br><br>

                              Hence, you need not deal with manually configuring the instance and installing Hadoop cluster while using Amazon EMR instance. Simply dump the data to be processed in S3. EMR picks it up from there, processes the same, and then dumps it back into S3.
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
                              Both spot instances and on-demand instances are pricing models. A spot instance allows customers to purchase compute capacity with no upfront commitment. Moreover, the hourly rates for a spot instance are usually lower than what has been set for on-demand instances.<br><br>

                              The bidding price for a spot instance is known as the spot price. It fluctuates based on the supply and demand for spot instances. In case the spot price gets higher than a customer’s maximum specified price, the EC2 instance will shut down automatically.
                           </div>
                        </div>
                     </a>
                  </li>
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              31) What are the steps involved in CloudFront?
                           </div>
                           <div class="panel-body">
                           There are four steps involved in CloudFront. These include the following. <br />

                              <ul>
                                 <li>
                                    <strong>Step 1: </strong>Creating a CloudFormation template in YAML or JSON format.
                                 </li>

                                 <li>
                                    <strong>Step 2:</strong>Saving the code in an S3 bucket so that it serves the repository for the code.
                                 </li>

                                 <li>
                                    <strong>Step 3: </strong>Using the AWS CloudFormation to call the bucket and thereby creating a new stack on the template.
                                 </li>

                                 <li>
                                    <strong>Step 4: </strong>CloudFormation reads the file and thus understands the services required that are called along with their order details, relationships with services and associated provisions.
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              32) Which are tools available in AWS that could help you recognize that you are paying more than required for AWS?
                           </div>
                           <div class="panel-body">
                           There are four tools available in AWS that could help in recognizing that you are paying more than required for AWS. These are stated as under.
                              <ol>

                                 <li>
                                    Checking the top service table.
                                 </li>

                                 <li>
                                    AWS budgets.
                                 </li>

                                 <li>
                                    Cost allocation tags.
                                 </li>

                                 <li>
                                    Cost explorer.
                                 </li>

                              </ol>

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
                              There are mainly three kinds of cloud service types for which AWS products are made. These are stated as under. <br>

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
                              35)  Is it possible to use Amazon S3 with EC2 instances? Please elaborate.
                           </div>
                           <div class="panel-body">
                              Yes, it is possible to use Amazon S3 with EC2 instances. It can be used for instances with root devices backed by the local instance storage. Amazon provides an array of tools to load the AMIs into Amazon S3 and to move them amongst Amazon S3 and Amazon EC2 instances.<br><br>

                              With Amazon S3, AWS developers enjoy accessing the same highly fast, reliable, inexpensive, and scalable data storage infrastructure used by Amazon to operate its very own global network of websites and services.
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              36) How will you speed up data transfer in Amazon Snowball?
                           </div>
                           <div class="panel-body">
                              Data transfer in Amazon Snowball can be enhanced by:
                              <ol>

                                 <li>
                                    Copying from different workstations to the same snowball
                                 </li>

                                 <li>
                                    Creating a batch of small files or transferring large files for reducing the encryption overhead
                                 </li>

                                 <li>
                                    Eliminating needless hops
                                 </li>

                                 <li>
                                    Performing multiple copy operations simultaneously
                                 </li>

                              </ol>

                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              37)  Can you explain the difference between Amazon RDS and Amazon DynamoDB?
                           </div>
                           <div class="panel-body">
                              Amazon RDS is a database management service for relational databases. It allows automating several relational database-related operations like backup, patching, and upgrading. The service deals with structured data only.<br><br>

                              Amazon DynamoDB, on the other hand, is a NoSQL database service. Contrary to the Amazon RDS, it deals with unstructured data only. Check out this detailed explanation on NoSQL vs SQL to know more about the important differences between SQL and NoSQL databases.
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              38)  Could you tell us what happens to the backups and DB Snapshots if a DB instance is deleted?
                           </div>
                           <div class="panel-body">
                              While deleting a DB instance, there is an option for creating a final DB snapshot. It can be used later for restoring the database.<br><br>

                              The Amazon RDS retains the user-created DB snapshot alongside other manually-created DB snapshots once the instance is deleted. All automated backups are deleted along with the instance.
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              39) What AWS services will you choose to collect and process eCommerce data for real-time analysis?
                           </div>
                           <div class="panel-body">
                              DynamoDB will be appropriate for collecting eCommerce data as it will be an unstructured form of data. Real-Time analysis of the collected eCommerce data can be carried out using Amazon Redshift.
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              40) How will you load data to Amazon Redshift from different data sources such as Amazon EC2, DynamoDB, and Amazon RDS?
                           </div>
                           <div class="panel-body">
                              There are two ways of loading data to Amazon Redshift from different data sources, namely:
                              <ol>

                                 <li>
                                    Using the AWS Data Pipeline – Offers high performance, fault-tolerant, and reliable way of loading data from a range of AWS data sources. It allows specifying the data source, required data transformations, and then execute a pre-written import script for loading data.
                                 </li>

                                 <li>
                                    Using the COPY command – Load data in parallel directly from Amazon DynamoDB, Amazon EMR, or any other SSH-enabled host.
                                 </li>

                              </ol>

                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              41) Can you explain how elasticity differs from scalability?
                           </div>
                           <div class="panel-body">
                              The ability of a system to handle an increase in the workload by simply adding hardware resources when the demand rises and also rolling back the scaled resources when there is no longer a need for the same is known as elasticity.<br><br>

                              Scalability, on the other hand, is the ability of a system to increase the hardware resources for handling an increase in demand. It can be achieved by either increasing the hardware specs or increasing the processing nodes.
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              42)  Suppose a user has set up an Auto Scaling group but due to some reason the group fails to launch a single instance for over 24 hours. In this condition, what will happen to Auto Scaling?
                           </div>
                           <div class="panel-body">
                              In such a case, the Auto Scaling will suspend the scaling process. The Auto Scaling feature allows suspending and resuming one or many Auto Scaling processes belonging to the Auto Scaling group.<br><br>

                              The Auto Scaling feature is immensely useful when a web application needs to be investigated for a configuration or some other issue.
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              43)  What do you understand by Connection draining?
                           </div>
                           <div class="panel-body">
                           Connection draining is responsible for re-routing the traffic from instances that are either to be updated or fails during a health check to other, available instances. It is an ELB service that continuously monitors the health of instances.
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              44) How will you transfer an existing domain name registration to Amazon Route 53 without disrupting the extant web traffic?
                           </div>
                           <div class="panel-body">
                              <ol>

                                 <li>
                                    Get a list of DNS record data for the domain name. It is typically available in the form of a zone file that can be gained from the extant DNS provider.
                                 </li>

                                 <li>
                                    After receiving the DNS record data, use the Route 53 Management Console or the simple web-services interface for creating a hosted zone for storing the DNS records for the domain name and continue the transfer process. Here, you can also include other non-essential steps such as updating nameservers for the domain name to the ones associated with the hosted zone.
                                 </li>

                                 <li>
                                 Contact the registrar with whom you have registered the domain name and then follow the transfer process. The DNS queries will start getting answered as soon as the registrar propagates the new name server delegations.
                                 </li>

                              </ol>

                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              45)  What are the ideal cases for using the Classic Load Balancer and the Application Load Balancer?
                           </div>
                           <div class="panel-body">
                              The Classic Load Balancer is the befitting option for simple load balancing of traffic across several EC2 instances.<br><br>

                              On the contrary, the Application Load Balancer is suitable for container-based or microservices architecture where there is either a requirement for routing traffic to different services or carrying out load balancing across multiple ports on the same EC2 instance.
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              46)  Can you explain how does the AWS Elastic Beanstalk apply updates?
                           </div>
                           <div class="panel-body">
                              Before updating the original instance, AWS Elastic Beanstalk readies a duplicate copy of the instance. Thereafter, it routes the traffic to the duplicate instance so as to avoid a scenario where the update application fails.<br><br>

                              In case there is a failure in the update process, the AWS Elastic Beanstalk will switch back to the original instance using the very same duplicate copy it created before beginning the update process.
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              47) Please explain what happens if an application stops responding to requests in AWS Elastic Beanstalk.
                           </div>
                           <div class="panel-body">
                              Even though the underlying infrastructure appears healthy, Beanstalk is able to detect if the application isn’t responding on the custom link. It then logs the situation as an environmental event, which can then be checked in detail and thus, acted upon.<br><br>

                              AWS Elastic Beanstalk apps have a built-in system for avoiding underlying infrastructure failures. The Beanstalk uses the Auto Scaling feature to automatically launch a new instance in case an Amazon EC2 instance fails.
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              48) How is the AWS CloudFormation different from AWS OpsWorks?
                           </div>
                           <div class="panel-body">
                              Although both AWS CloudFormation and AWS OpsWorks provide support for application modeling, deployment, configuration, and management activities, the two differ in terms of the abstraction level and the areas of focus.<br><br>

                              AWS CloudFormation is a building block service that allows managing almost any AWS resource via JSON-based domain-specific language. Even without prescribing a distinct model for development and operations, CloudFormation offers foundational capabilities for the AWS.<br><br>

                              With AWS CloudFormation, customers can define templates and then use the same to the provision as well as manage AWS application code, resources, and operating systems.<br><br>

                              AWS OpsWorks, on the other hand, is a high-level service focusing on providing a highly reliable and productive DevOps experience for IT admins and ops-oriented developers.<br><br>

                              OpsWorks features a configuration management model and offers integrated experiences for activities like auto-scaling, automation, deployment, and monitoring.<br><br>

                              Compared to CloudFormation, OpsWorks provides support for less number of application-oriented AWS resource types, including Amazon CloudWatch metrics, EBS volumes, EC2 instances, and Elastic IPs.
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              49) Can you tell us what happens when one of the resources in a stack can’t be created successfully in AWS OpsWorks?
                           </div>
                           <div class="panel-body">
                              The automatic rollback on error feature is enabled when one of the resources in a stack can’t be created successfully in AWS OpsWorks. The feature results in the deletion of all the successfully created AWS resources until the point of the occurrence of the error.<br><br>

                              Doing so ensures that no error-causing data is left behind as well as abiding by the principle that the stacks are either created completely or not created at all.<br><br>

                              The automatic rollback on error feature is useful especially in cases where one might unknowingly exceed the limit of the total number of Elastic IP addresses or does not have access to the EC2 AMI.
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              50) Please explain the difference between stopping and terminating an instance.
                           </div>
                           <div class="panel-body">
                              Both stopping and terminating are states in an EC2 instance: <br>

                              <ul>
                                 <li>
                                    <strong>Stopping: </strong> As soon as an instance is stopped, it performs a normal shutdown and transitions to a stopped state. You can start the instance at a later time and all of its Amazon EBS volumes remain attached. While the instance is in a stopped state, no additional instance hours are incurred.
                                 </li>

                                 <li>
                                    <strong>Terminating </strong>As soon as an instance is terminated, it performs a normal shutdown and transitions to the terminated state. The attached Amazon EBS volumes are deleted, save for the case when the volume’s deleteOnTermination attribute is set to false. As the instance itself is deleted, it is not possible to start the instance again at some later time.
                                 </li>

                              </ul>
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