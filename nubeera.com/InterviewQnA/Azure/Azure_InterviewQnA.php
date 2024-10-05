<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">

   <title>NubeEra.Training(Interview QnA): Azure</title>
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
   table, th, td  {
	   border: 1px solid black;
	   border-collapse: collapse;
   }
   
   th,td  {
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
               <h1 class="mt-4">Azure Interview QnA</h1>

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
               <!-- <img class="img-fluid rounded size1" style="max-width:60%;" src="../img/interviews/NGINX_1.jpg" alt=""> -->

               <input type="text" id="myInput" onkeyup="searchTopicsInQuestionNAnswers()" placeholder="Enter Topic...">
               <ul id="myUL">
                  <!-- 
                     <li><a href="#">
                        <div class="panel panel-default">
                           <div class="panel-heading">
                              QUESTION HERE
                           </div>
                           <div class="panel-body">
                              ANSWER HERE
                           </div>
                        </div>
                        </a>
                     </li> 
                  -->

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              1) What are the three main components of Windows Azure Platform?
                           </div>
                           <div class="panel-body">
                              The three main components are
							  <ul>
							  <li>
							  Compute
							  </li>
							  <li>
							  Storage
							  </li>
							  <li>
							  AppFabric
							  </li>
							  </ul>
                           </div>
                        </div>
                     </a>
                  </li>
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              2) What is meant by cloud computing?
                           </div>
                           <div class="panel-body">
                              Cloud Computing is the high-level abstraction procedure that focuses on the business logic. 
							  This is a service delivered via the internet that aids you with the computing services without laying much importance on the infrastructural needs just like the electric supply.
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              3) What is the scalability of cloud computing?
                           </div>
                           <div class="panel-body">
                              Scaling in cloud computing is of two types.
							  <ol>
							  <li>
							  <b>Vertical Scaling</b>, where the configuration yields to increase the existing capacity of the machine. 
							  Just like expanding the size of the RAM from 4GB to 32GB.
							  </li>
							  <li>
							  <b>Horizontal Scaling</b>, an aspect where the physical aspect is increased like putting multiple machines at work instead of replacing the existing machine.
							  </li>
							  </ol>                           
						   </div>
                        </div>
                     </a>
                  </li>
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              4) What are the advantages of cloud computing?
                           </div>
                           <div class="panel-body">
                              There are several advantages of cloud computing which are as follows.
							  <ul>
							  <li>
							  The versatility of the system can be altered if the business requires certain modification.
							  </li>
							  <li>
							  They are highly available which increases its end users to get benefited by every inch.
							  </li>
							  <li>
							  The system is capable of tolerating fault of a single part and overcomes it by remaining completely functional. 
							  </li>
							  <li>
							  The service allows you to pay only when the system is in use. You can easily reallocate the system when you use them and get saved from the charge.
							  </li>
							  <li>
							  The system has brought into light the payment for the operation rather than the investment in the machines.
							  </li>
							  </ul>
                           </div>
                        </div>
                     </a>
                  </li>



                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              5) What are service models in cloud computing?
                           </div>
                           <div class="panel-body">
                              Cloud computing providers offer their services according to three fundamental models:
							  Infrastructure as a service (IaaS), platform as a service (PaaS), and software as a service (SaaS) where IaaS is the most basic and each higher model abstracts from the details of the lower models. </br>
							  <b>Examples of IaaS:</b> Amazon CloudFormation (and underlying services such as Amazon EC2), Rackspace Cloud, Terremark, Windows Azure Virtual Machines, Google Compute Engine. and Joyent. </br>
							  <b>Examples of PaaS:</b> Amazon Elastic Beanstalk, Cloud Foundry, Heroku, Force.com, EngineYard, Mendix, Google App Engine, Windows Azure Compute and OrangeScape. </br>
							  <b>Examples of SaaS:</b> Google Apps, Microsoft Office 365, and Onlive.
							  <img src="../../img/interviews/azure/CloudComputeServices.png" 
                              width="70%"
                              height="70%"
							  alt="Git Workflow/Branching/Model" />
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              6) How many types of deployment models are used in cloud?
                           </div>
                           <div class="panel-body">
                              There are 4 types of deployment models used in cloud:
							  <ol>
							  <li>
							  Public Cloud
							  </li>
							  <li>
							  Private Cloud
							  </li>
							  <li>
							  Hybrid Cloud
							  </li>
							  <li>
							  Community Cloud
							  </li>
							  </ol>
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              7) What is Windows Azure Platform?
                           </div>
                           <div class="panel-body">
                              Windows Azure Platform is a collective name of Microsoft’s Platform as a Service (PaaS) offering which provides a programming platform, a deployment vehicle, and a runtime environment of cloud computing hosted in Microsoft datacenters.
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              8) What are the roles available in Windows Azure?
                           </div>
                           <div class="panel-body">
							  All three roles (web, worker, VM) are essentially Windows Server 2008. Web and Worker roles are nearly identical: With Web and Worker roles, the OS and related patches are taken care for you; you build your app’s components without having to manage a VM.
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              9) What is the difference between Windows Azure Platform and Windows Azure?
                           </div>
                           <div class="panel-body">
                              The former is Microsoft’s PaaS offering including Windows Azure, SQL Azure, and Appfabric; while the latter is part of the offering and the Microsoft’s cloud OS.
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              10) What are the three types of roles in Compute component in Windows Azure?
                           </div>
                           <div class="panel-body">
                              The three types of roles are:
							  <ul>
							  <li>
							  Web
							  </li>
							  <li>
							  Worker
							  </li>
							  <li>
							  VM
							  </li>
							  </ul>
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              11) What is Windows Azure Compute Emulator?
                           </div>
                           <div class="panel-body">
                              The compute emulator is a local emulator of Windows Azure that you can use to build and test your application before deploying it to Windows Azure.
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              12) What is cloud fabric?
                           </div>
                           <div class="panel-body">
                              In Windows Azure cloud fabric is nothing but a combination of many virtualized instances which run client application.
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              13) What Is CSRun?
                           </div>
                           <div class="panel-body">
                              It is a command-line tool that deploys a packaged application to the Windows Azure compute emulator and manages the running service.
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              14) What is Guest OS?
                           </div>
                           <div class="panel-body">
                              It is the operating system that runs on the virtual machine that hosts an instance of a role.
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              15) How to programmatically scale out Azure Worker role instances?
                           </div>
                           <div class="panel-body">
                              It can be done by using AutoScaling Application Block.
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              16) What is Web role in Windows Azure?
                           </div>
                           <div class="panel-body">
                              Web roles in Windows Azure are special purpose, and provide a dedicated Internet Information Services (IIS) web-server used for hosting front-end web applications. 
							  You can quickly and easily deploy web applications to Web Roles and then scale your Compute capabilities up or down to meet demand.
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              17) What is the difference between public cloud and private cloud?
                           </div>
                           <div class="panel-body">
                              Public cloud is used as a service via Internet by the users, whereas a private cloud, 
							  as the name conveys is deployed within certain boundaries like firewall settings and is completely 
							  managed and monitored by the users working on it in an organization.
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              18) What is Windows Azure Diagnostics?
                           </div>
                           <div class="panel-body">
                              Windows Azure Diagnostics enables you to collect diagnostic data from an application running in Windows Azure. 
							  You can use diagnostic data for debugging and troubleshooting, measuring performance, monitoring resource usage, traffic analysis and capacity planning, and auditing.
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                           19) What is BLOB?
                           </div>
                           <div class="panel-body">
                           BLOB stands for Binary Large Object. 
						   BLOB is a file of any type and size. 
						   Azure Blob Storage offers two types of blobs:
						   <ol>
						   <li>
						   Block Blob
						   </li>
						   <li>
						   Page Blob
						   </li>
						   </ol>
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              20) What is the difference between Block Blob and Page Blob?
                           </div>
                           <div class="panel-body">
							  <table>
							  <caption style="text-align:center;"><strong>Block Blob vs Page Blob</strong></caption>
							    <tr>
								  <th style="background-color:powderblue;text-align:center;">Block Blob</th>
								  <th style="background-color:powderblue;text-align:center;">Page Blob</th>
								</tr>
								
								<tr>
								<td>
								Block blobs are comprised of blocks, each of which is identified by a block ID.
								</td>
								<td>
								Page blobs are a collection of pages. A page is a range of data that is identified by its offset from the start of the blob.
								</td>
								</tr>
								
								<tr>
								<td>
								You create or modify a block blob by uploading a set of blocks and committing them by their block IDs.
								If you are uploading a block blob that is no more than 64 MB in size, you can also upload it in its entirety with a single Put Blob operation.
								</td>
								<td>
								To create a page blob, you initialize the page blob by calling Put Blob and specifying its maximum size.
								</td>
								</tr>
								
								<tr>
								<td>
								Each block can be a maximum of 4 MB in size. The maximum size for a block blob in version 2009-09-19 is 200 GB, or up to 50,000 blocks.
								</td>
								<td>
								The maximum size for a page blob is 1 TB. A page written to a page blob may be up to 1 TB in size.
								</td>
								</tr>
							  </table>
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                           21) What is the difference between Windows Azure Queues and Windows Azure Service Bus Queues?
                           </div>
                           <div class="panel-body">
                              Windows Azure supports two types of queue mechanisms: Windows Azure Queues and Service Bus Queues.</br>
							  <b>Windows Azure Queues:</b> They are part of the Windows Azure storage infrastructure and feature a simple REST-based Get/Put/Peek interface, providing reliable, persistent messaging within and between services. </br>
							  <b>Service Bus Queues:</b> They are part of a broader Windows Azure messaging infrastructure that supports queuing as well as publish/subscribe, Web service remoting, and integration patterns.
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              22) What is Deadletter Queue?
                           </div>
						   <div class="panel-body">
							  Messages are placed on the deadletter sub-queue by the messaging system in the following scenarios.
							  <ul>
							  <li>
							  When a message expires and deadlettering for expired messages is set to true in a queue or subscription.
							  </li>
							  <li>
							  When the max delivery count for a message is exceeded on a queue or subscription.
							  </li>
							  <li>
							  When a filter evaluation exception occurs in a subscription and deadlettering is enabled on filter evaluation exceptions.
							  </li>
							  </ul>
							</div>
                        </div>
                     </a>
                  </li>
                  
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              23) What are instance sizes of Azure?
                           </div>
                           <div class="panel-body">
                           Windows Azure will handle the load balancing for all of the instances that are created. The VM sizes are as follows:
						   <table>
							    <tr>
								  <th style="background-color:powderblue;text-align:center;">Instance Size</th>
								  <th style="background-color:powderblue;text-align:center;">CPU</th>
								  <th style="background-color:powderblue;text-align:center;">Memory Instance</th>
								  <th style="background-color:powderblue;text-align:center;">Storage</th>
								  <th style="background-color:powderblue;text-align:center;">I/O Performance</th>
								</tr>
								
								<tr>
								<td>
								<b>Extra Small</b>
								</td>
								<td>
								1.0 GHz
								</td>
								<td>
								768 MB
								</td>
								<td>
								20 GB
								</td>
								<td>
								Low
								</td>
								</tr>
								
								<tr>
								<td>
								<b>Small</b>
								</td>
								<td>
								1.6 GHz
								</td>
								<td>
								1.75 GB
								</td>
								<td>
								225 GB
								</td>
								<td>
								Moderate
								</td>
								</tr>
								
								<tr>
								<td>
								<b>Medium</b>
								</td>
								<td>
								2 x 1.6 GHz
								</td>
								<td>
								3.5 GB
								</td>
								<td>
								490 GB
								</td>
								<td>
								High
								</td>
								</tr>
								
								<tr>
								<td>
								<b>Large</b>
								</td>
								<td>
								4 x 1.6 GHz
								</td>
								<td>
								7 GB
								</td>
								<td>
								1000 GB
								</td>
								<td>
								High
								</td>
								</tr>
								
								<tr>
								<td>
								<b>Extra Large</b>
								</td>
								<td>
								8 x 1.6 GHz
								</td>
								<td>
								14 GB
								</td>
								<td>
								2040 GB
								</td>
								<td>
								High
								</td>
								</tr>
							  </table>
                           </div>
                        </div>
                     </a>
                  </li>
                  
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              24) What is Table Storage in Windows Azure?
                           </div>
                           <div class="panel-body">
                           <div class="container col pad-2">
							The Windows Azure Table storage service stores large amounts of structured data. 
							The service is a NoSQL datastore which accepts authenticated calls from inside and outside the Windows Azure cloud. 
							Windows Azure tables are ideal for storing structured, non-relational data.
							<ul>
							<li>
							<b>Table:</b> A table is a collection of entities. 
							Tables don’t enforce a schema on entities, which means a single table can contain entities that have different sets of properties. 
							An account can contain many tables.
							</li>
							
							<li>
							<b>Entity:</b> An entity is a set of properties, similar to a database row. 
							An entity can be up to 1MB in size.
							</li>
							
							<li>
							<b>Properties:</b> A property is a name-value pair. Each entity can include up to 252 properties to store data. 
							Each entity also has 3 system properties that specify a partition key, a row key, and a timestamp.
							</li>
							</ul>
							Entities with the same partition key can be queried more quickly, and inserted/updated in atomic operations. 
							An entity’s row key is its unique identifier within a partition.
                           </div>
                           </div>
                        </div>
                     </a>
                  </li> 
                  
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              25) What is the difference between Web and Worker roles in Windows Azure?
                           </div>
                           <div class="panel-body">
                           The main difference between the two is that an instance of a web role runs IIS, while an instance of a worker role does not. 
						   Both are managed in the same way, however, and it’s common for an application to use both.
						   For example, a web role instance might accept requests from users, then pass them to a worker role instance for processing.
                           </div>
                        </div>
                     </a>
                  </li>
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              26) What is Azure Fabric Controller?
                           </div>
                           <div class="panel-body">
                              The Windows Azure Fabric Controller is a resource provisioning and management layer that manages the hardware, and provides resource allocation, deployment/upgrade, and management for cloud services on the Windows Azure platform.
                           </div>
                        </div>
                     </a>
                  </li>
				  
				  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              27) What is Autoscaling?
                           </div>
                           <div class="panel-body">
                              Scaling by adding additional instances is often referred to as scaling out. 
							  Windows Azure also supports scaling up by using larger role instances instead of more role instances. 
							  By adding and removing role instances to your Windows Azure application while it is running, you can balance the performance of the application against its running costs. 
							  An autoscaling solution reduces the amount of manual work involved in dynamically scaling an application.
                           </div>
                        </div>
                     </a>
                  </li>
				  
				  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              28) What Is VM role In Windows Azure?
                           </div>
                           <div class="panel-body">
                              Virtual Machine (VM) roles, now in Beta, enable you to deploy a custom Windows Server 2008 R2 (Enterprise or Standard) image to Windows Azure. 
							  You can use the VM role when your application requires a large number of server OS customizations and cannot be automated. 
							  The VM Role gives you full control over your application environment and lets you migrate existing applications to the cloud.
                           </div>
                        </div>
                     </a>
                  </li>
				  
				  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              29) Apart from .net framework, name three other language/framework that can be used to develop Windows Azure applications?
                           </div>
                           <div class="panel-body">
                              php, node.js, java
                           </div>
                        </div>
                     </a>
                  </li>
				  
				  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              30) How would you categorize Windows Azure?
                           </div>
                           <div class="panel-body">
                              PaaS (Platform as a Service)
                           </div>
                        </div>
                     </a>
                  </li>
				  
				  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              31) What is Azure Cloud Service?
                           </div>
                           <div class="panel-body">
                              By creating a cloud service, you can deploy a multi-tier web application in Azure, defining multiple roles to distribute processing and allow flexible scaling of your application. 
							  A cloud service consists of one or more web roles and/or worker roles, each with its own application files and configuration. 
							  Azure Websites and Virtual Machines also enable web applications on Azure. 
							  The main advantage of cloud services is the ability to support more complex multi-tier Architectures.
                           </div>
                        </div>
                     </a>
                  </li>
				  
				  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              32) What is a cloud service role?
                           </div>
                           <div class="panel-body">
                              A cloud service role is comprised of application files and a configuration. A cloud service can have two types of role.
                           </div>
                        </div>
                     </a>
                  </li>
				  
				  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              33) What is Link A Resource?
                           </div>
                           <div class="panel-body">
                              To show your cloud service’s dependencies on other resources, such as an Azure SQL Database instance, you can “link” the resource to the cloud service. 
							  In the Preview Management Portal, you can view linked resources on the Linked Resources page, view their status on the dashboard, and scale a linked SQL Database instance along with the service roles on the Scale page. 
							  Linking a resource in this sense does not connect the resource to the application; you must configure the connections in the application code.
                           </div>
                        </div>
                     </a>
                  </li>
				  
				  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              34) What is scale a cloud service ?
                           </div>
                           <div class="panel-body">
                              A cloud service is scaled out by increasing the number of role instances (virtual machines) deployed for a role. 
							  A cloud service is scaled in by decreasing role instances. 
							  In the Preview Management Portal, you can also scale a linked SQL Database instance, by changing the SQL Database edition and the maximum database size, when you scale your service roles.
                           </div>
                        </div>
                     </a>
                  </li>
				  
				  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              35) What is a Web Role?
                           </div>
                           <div class="panel-body">
                              A web role provides a dedicated Internet Information Services (IIS) web-server used for hosting front-end web applications.
                           </div>
                        </div>
                     </a>
                  </li>
				  
				  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              36) What is a Worker Role?
                           </div>
                           <div class="panel-body">
                              Applications hosted within worker roles can run asynchronous, long-running or perpetual tasks independent of user interaction or input.
                           </div>
                        </div>
                     </a>
                  </li>
				  
				  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              37) What is a role instance?
                           </div>
                           <div class="panel-body">
                              A role instance is a virtual machine on which the application code and role configuration run. 
							  A role can have multiple instances, defined in the service configuration file.
                           </div>
                        </div>
                     </a>
                  </li>
				  
				  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              38) What is a Guest Operating System ?
                           </div>
                           <div class="panel-body">
                              The guest operating system for a cloud service is the operating system installed on the role instances (virtual machines) on which your application code runs.
                           </div>
                        </div>
                     </a>
                  </li>
				  
				  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              39) What are deployment environments?
                           </div>
                           <div class="panel-body">
							  Azure offers two deployment environments for cloud services: a staging environment in which you can test your deployment before you promote it to the production environment. </br>
							  The two environments are distinguished only by the virtual IP addresses (VIPs) by which the cloud service is accessed. 
							  In the staging environment, the cloud service’s globally unique identifier (GUID) identifies it in URLs (GUID.cloudapp.net).
							  In the production environment, the URL is based on the friendlier DNS prefix assigned to the cloud service (for example, myservice.cloudapp.net).
                           </div>
                        </div>
                     </a>
                  </li>
				  
				  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              40) What are swap deployments?
                           </div>
                           <div class="panel-body">
							  To promote a deployment in the Azure staging environment to the production environment, you can “swap” the deployments by switching the VIPs by which the two deployments are accessed. 
							  After the deployment, the DNS name for the cloud service points to the deployment that had been in the staging environment.
                           </div>
                        </div>
                     </a>
                  </li>
				  
				  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              41) What is minimal and verbose monitoring?
                           </div>
                           <div class="panel-body">
							  Minimal monitoring, which is configured by default for a cloud service, uses performance counters gathered from the host operating systems for role instances (virtual machines). </br>
							  Verbose monitoring gathers additional metrics based on performance data within the role instances to enable closer analysis of issues that occur during application processing.
                           </div>
                        </div>
                     </a>
                  </li>
				  
				  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              42) What is a Service Definition File?
                           </div>
                           <div class="panel-body">
							  The cloud service definition file (.csdef) defines the service model, including the number of roles.
                           </div>
                        </div>
                     </a>
                  </li>
				  
				  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              43) What is a Service Configuration File?
                           </div>
                           <div class="panel-body">
							  The cloud service configuration file (.cscfg) provides configuration settings for the cloud service and individual roles, including the number of role instances.
                           </div>
                        </div>
                     </a>
                  </li>
				  
				  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              44) What is a service package?
                           </div>
                           <div class="panel-body">
							  The service package (.cspkg) contains the application code and the service definition file.
                           </div>
                        </div>
                     </a>
                  </li>
				  
				  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              45) What is a cloud service deployment?
                           </div>
                           <div class="panel-body">
							  A cloud service deployment is an instance of a cloud service deployed to the Azure staging or production environment. You can maintain deployments in both staging and production.
                           </div>
                        </div>
                     </a>
                  </li>
				  
				  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              46) What Is Azure Diagnostics?
                           </div>
                           <div class="panel-body">
							  Azure Diagnostics is the API that enables you to collect diagnostic data from applications running in Azure. 
							  Azure Diagnostics must be enabled for cloud service roles in order for verbose monitoring to be turned on.
                           </div>
                        </div>
                     </a>
                  </li>
				  
				  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              47) What is Azure Service Level Agreement(SLA)?
                           </div>
                           <div class="panel-body">
							  The Azure Compute SLA guarantees that, when you deploy two or more role instances for every role, access to your cloud service will be maintained at least 99.95 percent of the time. 
							  Also, detection and corrective action will be initiated 99.9 percent of the time when a role instance’s process is not running.
                           </div>
                        </div>
                     </a>
                  </li>
				  
               </ul>

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
                  <img class="d-flex mr-3 size rounded-circle" src="../img/sample.png" alt="">
                  <div class="media-body">
                     <h6 class="mt-0">Commenter Name</h6>
                     Text
                  </div>
               </div>

               <div class="media mb-4">
                  <img class="d-flex mr-3 size rounded-circle" src="../img/sample.png" alt="">
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