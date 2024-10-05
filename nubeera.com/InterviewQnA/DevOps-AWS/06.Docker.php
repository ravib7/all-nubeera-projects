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
               <h1 class="mt-4">Docker Interview QnA</h1>

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
                              1) What is Docker?
                           </div>
                           <div class="panel-body">
                              Docker is a containerization platform which packages your application and all its dependencies together in the form of containers so as to ensure that your application works seamlessly in any environment, be it development, test or production. Docker containers, wrap a piece of software in a complete filesystem that contains everything needed to run: code, runtime, system tools, system libraries, etc. It wraps basically anything that can be installed on a server. This guarantees that the software will always run the same, regardless of its environment.
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              2) What is a Docker Container?
                           </div>
                           <div class="panel-body">
                              Docker containers include the application and all of its dependencies. It shares the kernel with other containers, running as isolated processes in user space on the host operating system. <br />
                              Docker containers are not tied to any specific infrastructure: they run on any computer, on any infrastructure, and in any cloud. Docker containers are basically runtime instances of Docker images. <br />
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              3) What is the lifecycle of a Docker Container?
                           </div>
                           <div class="panel-body">
                              This is one of the most popular questions asked in Docker interviews. Docker containers have the following lifecycle: <br />
                              a) Create a container <br />
                              b) Run the container <br />
                              c) Pause the container (Optional) <br />
                              d) Un-pause the container (Optional) <br />
                              e) Start the container <br />
                              f) Stop the container <br />
                              g) Restart the container <br />
                              h) Kill the container <br />
                              i) Destroy the container <br />
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              4) Explain containerization.
                           </div>
                           <div class="panel-body">
                              Usually, in the software development process, code developed on one machine might not work perfectly fine on any other machine because of the dependencies. This problem was solved by the containerization concept. So basically, an application that is being developed and deployed is bundled and wrapped together with all its configuration files and dependencies. This bundle is called a container. <br />
                              Now when you wish to run the application on another system, the container is deployed which will give a bug-free environment as all the dependencies and libraries are wrapped together. Docker is an example of a containerization environment. <br />
                           </div>
                        </div>
                     </a>
                  </li>



                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              5) What are Docker Images?
                           </div>
                           <div class="panel-body">
                              Docker image is the source of Docker container. In other words, Docker images are used to create containers. When a user runs a Docker image, an instance of a container is created. These docker images can be deployed to any Docker environment.
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              6) What is Docker Hub?
                           </div>
                           <div class="panel-body">
                              Docker images create docker containers. There has to be a registry where these docker images live. 
                              This registry is Docker Hub. <br />
                              Users can pick up images from Docker Hub and use them to create customized images and containers. 
                              Currently, the Docker Hub is the world’s largest public repository of image containers.<br />
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              7) What is a Dockerfile?
                           </div>
                           <div class="panel-body">
                              Docker can build images automatically by reading the instructions from a file called Dockerfile. 
                              A Dockerfile is a text document that contains all the commands a user could call on the command line to assemble an image. 
                              Using docker build, users can create an automated build that executes several command-line instructions in succession.
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              8) What is Docker Compose?
                           </div>
                           <div class="panel-body">
                              Docker Compose is a YAML file which contains details about the services, networks, and volumes for setting up the Docker application. 
                              So, you can use Docker Compose to create separate containers, host them and get them to communicate with each other. 
                              Each container will expose a port for communicating with other containers.
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              9) What is Docker Swarm?
                           </div>
                           <div class="panel-body">
                              Docker Swarm is native clustering for Docker. 
                              It turns a pool of Docker hosts into a single, virtual Docker host. 
                              Docker Swarm serves the standard Docker API, any tool that already communicates with a Docker daemon can use Swarm to transparently scale to multiple hosts.
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              10) What is a Docker Namespace?
                           </div>
                           <div class="panel-body">
                              A namespace is one of the Linux features and an important concept of containers.
                              Namespace adds a layer of isolation in containers. 
                              Docker provides various namespaces in order to stay portable and not affect the underlying host system. 
                              Few namespace types supported by Docker – PID, Mount, IPC, User, Network.
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              11) What is Docker Machine?
                           </div>
                           <div class="panel-body">
                              Docker machine is a tool that lets you install Docker Engine on virtual hosts. 
                              These hosts can now be managed using the docker-machine commands. 
                              Docker machine also lets you provision Docker Swarm Clusters.
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              12) Explain Docker Architecture.
                           </div>
                           <div class="panel-body">
                              Docker Architecture consists of a Docker Engine which is a client-server application with three major components: <br />
                              a) A server which is a type of long-running program called a daemon process (the docker command). <br />
                              b) A REST API which specifies interfaces that programs can use to talk to the daemon and instruct it what to do. <br />
                              c) A command line interface (CLI) client (the docker command). <br />
                              d) The CLI uses the Docker REST API to control or interact with the Docker daemon through scripting or direct CLI commands. Many other Docker applications use the underlying API and CLI. <br />
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              13) How to check for Docker Client and Docker Server version?
                           </div>
                           <div class="panel-body">
                              The following command gives you information about Docker Client and Server versions: <br />
                              <pre>
                                 $ docker version 
                              </pre>
                           </div>
                        </div>
                     </a>

                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              14) How do you get the number of containers running, paused and stopped?
                           </div>
                           <div class="panel-body">
                              You can use the following command to get detailed information about the docker installed on your system. <br />
                              <pre>
                                 $ docker info
                              </pre>
                              You can get the number of containers running, paused, stopped, the number of images and a lot more. <br />
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              15) If you vaguely remember the command and you’d like to confirm it, how will you get help on that particular command?
                           </div>
                           <div class="panel-body">
                              The following command is very useful as it gives you help on how to use a command, the syntax, etc. <br />
                              <pre>
                                 $ docker --help
                              </pre>
                              The above command lists all Docker commands. If you need help with one specific command, you can use the following syntax: <br />
                              <pre>
                                 $ docker &#60;command&#62; --help
                              </pre>
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              16) How to login into docker repository?
                           </div>
                           <div class="panel-body">
                              You can use the following command to login into hub.docker.com: <br />
                              <pre>
                                 $ docker login
                              </pre>
                              You’ll be prompted for your username and password, insert those and congratulations, you’re logged in. <br />
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              17) If you wish to use a base image and make modifications or personalize it, how do you do that?
                           </div>
                           <div class="panel-body">
                              You pull an image from docker hub onto your local system. <br />
                              It’s one simple command to pull an image from docker hub: <br />
                              <pre>
                                 $ docker pull &#60;image_name&#62;
                              </pre>
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              18) How do you create a docker container from an image?
                           </div>
                           <div class="panel-body">
                              Pull an image from docker repository with the above command and run it to create a container. Use the following command: <br />
                              <pre>
                                 $ docker run -it -d &#60;image_name&#62;
                              </pre>
                              -d means the container needs to start in the detached mode. <br />
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                           19) How do you list all the running containers?
                           </div>
                           <div class="panel-body">
                              The following command lists down all the running containers: <br />
                              <pre>
                                 $ docker ps
                              </pre>
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              20) Suppose you have 3 containers running and out of these, you wish to access one of them. How do you access a running container?
                           </div>
                           <div class="panel-body">
                              The following command lets us access a running container: <br />
                              <pre>
                                 $ docker exec -it &#60;container id&#62; bash
                              </pre>
                              The exec command lets you get inside a container and work with it. <br />
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              21) How to start, stop and kill a container?
                           </div>
                           <div class="panel-body">
                              The following command is used to start a docker container: <br />
                              <pre>
                                 $ docker start &#60;container_id&#62;
                              </pre>
                              and the following for stopping a running container: <br />
                              <pre>
                                 $ docker stop &#60;container_id&#62;
                              </pre>
                              kill a container with the following command: <br />
                              <pre>
                                 $ docker kill &#60;container_id&#62;
                              </pre>
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              22) Can you use a container, edit it, and update it? Also, how do you make it a new and store it on the local system?
                           </div>
                           <div class="panel-body">
                              Of course, you can use a container, edit it and update it. This sounds complicated but its actually just one command.
                              <pre>
                                 $ docker commit &#60;container id&#62; &#60;username/imagename&#62;
                              </pre>
                           </div>
                        </div>
                     </a>
                  </li>
                  
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              23) Once you’ve worked with an image, how do you push it to docker hub?
                           </div>
                           <div class="panel-body">
                              <pre>
                                 $ docker push &#60;username/image name&#62;
                              </pre>
                           </div>
                        </div>
                     </a>
                  </li>
                  
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              24) How to delete a stopped container?
                           </div>
                           <div class="panel-body">
                              Use the following command to delete a stopped container: <br />
                              <pre>
                                 $ docker rm &#60;container id&#62;
                              </pre>
                           </div>
                        </div>
                     </a>
                  </li> 
                  
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              25) How to delete an image from the local storage system?
                           </div>
                           <div class="panel-body">
                              The following command lets you delete an image from the local system: <br />
                              <pre>
                                 $ docker rmi &#60;image id&#62;
                              </pre>
                           </div>
                        </div>
                     </a>
                  </li>
                  
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              26) How to build a Dockerfile?
                           </div>
                           <div class="panel-body">
                              Once you’ve written a Dockerfile, you need to build it to create an image with those specifications. Use the following command to build a Dockerfile: <br />
                                 <pre>
                                    $ docker build &#60;path to docker file&#62;
                                 </pre>
                              Use “.dockerfile_name” when the dockerfile exits in the same file directory and you use the entire path if it lives somewhere else.
                           </div>
                        </div>
                     </a>
                  </li>
                  
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              27) Do you know why docker system prune is used? What does it do?
                           </div>
                           <div class="panel-body">
                              <pre>
                              $ docker system prune
                              </pre>
                              The above command is used to remove all the stopped containers, all the networks that are not used, all dangling images and all build caches. It’s one of the most useful docker commands.
                           </div>
                        </div>
                     </a>
                  </li>
				  
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              28) Will you lose your data, when a docker container exists?
                           </div>
                           <div class="panel-body">
                              No, you won’t lose any data when Docker container exits. 
                              Any data that your application writes to the container gets preserved on the disk until you explicitly delete the container.
                              The file system for the container persists even after the container halts.
                           </div>
                        </div>
                     </a>
                  </li>
				  
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              29) Where all do you think Docker is being used?
                           </div>
                           <div class="panel-body">
                              Docker is being used in the following areas:
                              <br />
                              <ol>
                                 <li> 
                                    <strong>Simplifying configuration:</strong>
                                    Docker lets you put your environment and configuration into code and deploy it.
                                 </li>							  
                                 <li>
                                    <strong>Code Pipeline Management:</strong>
                                    There are different systems used for development and production.
                                    As the code travels from development to testing to production, it goes through a difference in the environment. 
                                    Docker helps in maintaining the code pipeline consistency.
                                 </li>						  
                                 <li>
                                    <strong>Developer Productivity:</strong>
                                    Using Docker for development gives us two things – We’re closer to production and development environment is built faster.
                                 </li>						  
                                 <li>
                                    <strong>Application Isolation:</strong>
                                    As containers are applications wrapped together with all dependencies, your apps are isolated.
                                    They can work by themselves on any hardware that supports Docker.
                                 </li>							  
                                 <li>
                                    <strong>Debugging Capabilities:</strong>
                                    Docker supports various debugging tools that are not specific to containers but work well with containers.
                                 </li>							  
                                 <li>
                                    <strong>Multi-tenancy:</strong>
                                    Docker lets you have multi-tenant applications avoiding redundancy in your codes and deployments.
                                 </li>						  
                                 <li>
                                    <strong>Rapid Deployment:</strong>
                                    Docker eliminates the need to boost an entire OS from scratch, reducing the deployment time.
                                 </li>
                              </ol>
                           </div>
                        </div>
                     </a>
                  </li>		

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              30) How is Docker different from other containerization methods?
                           </div>
                           <div class="panel-body">
                              Docker containers are very easy to deploy in any cloud platform.
                              It can get more applications running on the same hardware 
                              when compared to other technologies, it makes it easy for developers to 
                              quickly create, ready-to-run containerized applications and it makes 
                              managing and deploying applications much easier.
                              You can even share containers with your applications.
                           </div>
                        </div>
                     </a>
                  </li>
				  
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              31) Can I use JSON instead of YAML for my compose file in Docker?
                           </div>
                           <div class="panel-body">
                              You can use JSON instead of YAML for your compose file, to use JSON file with compose, specify the JSON filename to use, for eg:
                              <pre>
                                 $ docker-compose -f docker-compose.json up
                              </pre>
                           </div>
                        </div>
                     </a>
                  </li>
				  
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              32) How far do Docker containers scale? Are there any requirements for the same?
                           </div>
                           <div class="panel-body">
                              Large web deployments like Google and Twitter and platform providers such as Heroku and 
                              dotCloud, all run on container technology.
                              Containers can be scaled to hundreds of thousands or even millions of them running in parallel.
                              Talking about requirements, containers require the memory and the OS at all the times and 
                              a way to use this memory efficiently when scaled.
                           </div>
                        </div>
                     </a>
                  </li>
				  
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              33) What platforms does docker run on?
                           </div>
                           <div class="panel-body">
                              Docker runs on various Linux administration:
                              <ul>
                                 <li>
                                    Ubuntu 12.04, 13.04 et al 
                                 </li>
                                 <li>
                                    Fedora 19/20+ 
                                 </li>
                                 <li>
                                    RHEL 6.5+ 
                                 </li>
                                 <li> 
                                    CentOS 6+ 
                                 </li>
                                 <li>
                                    Gentoo
                                 </li>
                                 <li>
                                    ArchLinux 
                                 </li>
                        
                                 <li>
                                    openSUSE 12.3+
                                 </li>
                        
                                 <li>
                                    CRUX 3.0+
                                 </li>
                              </ul>
                              <br />
                              It can also be used in production with Cloud platforms with the following services:
                              <ul>
                                 <li>
                                    Amazon EC2
                                 </li>
                                 <li>
                                    Amazon ECS
                                 </li>
                                 <li>
                                    Google Compute Engine
                                 </li>
                                 <li>
                                    Microsoft Azure
                                 </li>
                                 <li>
                                    Rackspace
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </a>
                  </li>
				  
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              34) Is there a way to identify the status of a Docker container?
                           </div>
                           <div class="panel-body">
                              There are six possible states a container can be at any given point – Created, Running, Paused, Restarting, Exited, Dead. <br />
                              Use the following command to check for docker state at any given point:
                              <pre>
                                 $ docker ps
                              </pre>
                              The above command lists down only running containers by default. To look for all containers, use the following command:
                              <pre>
                                 $ docker ps -a
                              </pre>
                           </div>
                        </div>
                     </a>
                  </li>
				  
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              35) Can you remove a paused container from Docker?
                           </div>
                           <div class="panel-body">
                              The answer is no. You cannot remove a paused container. 
                              The container has to be in the stopped state before it can be removed.
                           </div>
                        </div>
                     </a>
                  </li>
				  
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              36) Can a container restart by itself?
                           </div>
                           <div class="panel-body">
                              No, it’s not possible for a container to restart by itself. By default the flag -restart is set to false.
                           </div>
                        </div>
                     </a>
                  </li>
				  
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              37) Is it better to directly remove the container using the rm command or stop the container followed by remove container?
                           </div>
                           <div class="panel-body">
                              Its always better to stop the container and then remove it using the remove command.
                              <pre>
                                 $ docker stop &#60;container_id&#62; <br />
                                 $ docker rm -f &#60;container_id&#62;
                              </pre>
                              Stopping the container and then removing it will allow sending SIG_HUP signal to recipients.
                              This will ensure that all the containers have enough time to clean up their tasks.
                              This method is considered a good practice, avoiding unwanted errors.
                           </div>
                        </div>
                     </a>
                  </li>
				  
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              38) Will cloud overtake the use of Containerization?
                           </div>
                           <div class="panel-body">
                              Docker containers are gaining popularity but at the same time, Cloud services are giving a good fight. 
                              In my personal opinion, Docker will never be replaced by Cloud. 
                              Using cloud services with containerization will definitely hype the game. 
                              Organizations need to take their requirements and dependencies into consideration into the picture and decide what’s best for them.
                              Most of the companies have integrated Docker with the cloud.
                              This way they can make the best out of both the technologies.
                           </div>
                        </div>
                     </a>
                  </li>
				  
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              39) How many containers can run per host?
                           </div>
                           <div class="panel-body">
                              There can be as many containers as you wish per host.
                              Docker does not put any restrictions on it.
                              But you need to consider every container needs storage space, CPU and memory which the hardware needs to support.
                              You also need to consider the application size.
                              Containers are considered to be lightweight but very dependant on the host OS.
                           </div>
                        </div>
                     </a>
                  </li>
				  
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              40) Is it a good practice to run stateful applications on Docker?
                           </div>
                           <div class="panel-body">
                              The concept behind stateful applications is that they store their data onto the local file system. 
                              You need to decide to move the application to another machine, retrieving data becomes painful.
                           </div>
                        </div>
                     </a>
                  </li>
				  
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              41) Suppose you have an application that has many dependant services. Will Docker Compose wait for the current container to be ready to move to the running of the next service?
                           </div>
                           <div class="panel-body">
                              The answer is yes. Docker Compose always runs in the dependency order.
                              These dependencies are specifications like depends_on, links, volumes_from, etc.
                           </div>
                        </div>
                     </a>
                  </li>
				  
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              42) How will you monitor Docker in production?
                           </div>
                           <div class="panel-body">
                              Docker provides functionalities like docker stats and docker events to monitor docker in production. 
                              Docker stats provides CPU and memory usage of the container. 
                              Docker events provide information about the activities taking place in the docker daemon.
                           </div>
                        </div>
                     </a>
                  </li>
				  
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              43) Is it a good practice to run Docker Compose in production?
                           </div>
                           <div class="panel-body">
                              Yes, using Docker Compose in production is the best practical application of docker compose. 
                              When you define applications with compose, you can use this compose definition in various production stages like CI, staging, testing, etc.
                           </div>
                        </div>
                     </a>
                  </li>
				  
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              44) What changes are expected in your docker compose file while moving it to production?
                           </div>
                           <div class="panel-body">
                              These are the following changes you need make to your compose file before migrating your application to the production environment:
                              <ol>
                                 <li>
                                    Remove volume bindings, so the code stays inside the container and cannot be changed from outside the container.
                                 </li>
                        
                                 <li>
                                    Binding to different ports on the host.
                                 </li>
                        
                                 <li>
                                    Specify a restart policy
                                 </li>
                        
                                 <li>
                                    Add extra services like log aggregator
                                 </li>
                              </ol>
                           </div>
                        </div>
                     </a>
                  </li>
				  
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              45) How does load balancing across containers and hosts work?
                           </div>
                           <div class="panel-body">
                              While using docker service with multiple containers across different hosts, you come across the need to load balance the incoming traffic.
                              Load balancing and HAProxy is basically used to balance the incoming traffic across different available(healthy) containers.
                              If one container crashes, another container should automatically start running and the traffic should be re-routed to this new running container. 
                              Load balancing and HAProxy works around this concept.
                           </div>
                        </div>
                     </a>
                  </li>
				  
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              46) What does the volume parameter do in a <code>docker run</code> command?
                           </div>
                           <div class="panel-body">
                              The volume parameter syncs a directory in a container with a host directory. <br />
                              For example:
                              <pre>
                                 docker run -v nginx-sites:/etc/nginx/sites-available nginx
                              </pre>
                              This command mounts the <code>nginx-sites</code> directory in the host to the <code>/etc/nginx/sites-available</code> directory. 
                              In this way, you can sync nginx sites without restarting the container they’re in. 
                              Also, you can protect your data that is generated in your container using a directory in the host. 
                              Otherwise, if you delete your container, your data that was generated and stored in your container will naturally be deleted. <br />
                              When you use the <code>volume</code> parameter, you can use the same data that was generated in a previous container using the same command.
                           </div>
                        </div>
                     </a>
                  </li>
				  
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              47) What is the use of the <code>docker save</code> and <code>docker load</code> commands?
                           </div>
                           <div class="panel-body">
                              A Docker image can be exported as an archive via the <code>docker save</code> command. <br />
                              For example:
                              <pre>
                                 docker save -o &#60;container-export-path&#62;.tar &#60;container-name&#62;
                              </pre>
                              The exported Docker image can then be imported to another Docker host via the <code>docker load</code> command:
                              <pre>
                                 docker load -i <container-path>.tar
                              </pre>
                              Note that this does not export data from any containers that were based on the image, just the image itself.
                           </div>
                        </div>
                     </a>
                  </li>
				  
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              48) What is the main difference between the approaches of Docker and standard hypervisor virtualization?
                           </div>
                           <div class="panel-body">
                              With standard virtualization using a hypervisor like vSphere, an operating system is necessary for each app.
                              A host operating system is at the bottom of your infrastructure, and a hypervisor has to be installed on your host OS.
                              Then on top of the hypervisor, you install operating systems for each of your applications.<br />
                              With Docker, the Docker daemon sits between your host operating system and your Docker images, in place of a hypervisor.
                              Docker images reuse parts of the host operating system—thus a separate OS is not necessary for 
                              each app—but your apps are still isolated like they would be with a standard hypervisor.
                           </div>
                        </div>
                     </a>
                  </li>
				  
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              49) What is the default Docker network driver, and how can you change it when running a Docker image?
                           </div>
                           <div class="panel-body">
                              Docker provides different network drivers like <code>bridge</code>, <code>host</code>,
                              <code>overlay</code>, and <code>macvlan</code>. <code>bridge</code> is the default. <br />
                              Sometimes you might want to use Docker Swarm or connect your containers to your host network directly.
                              In these cases, you’ll need to change your default network driver. <br />
                              First, you have to create a new network with the new network driver by using the <code>--driver</code> or <code>-d</code> parameter with your <code>docker network create</code> command.
                              Then you’ll need to run your Docker image with the <code>--network</code> parameter to use your newly-created network.
                           </div>
                        </div>
                     </a>
                  </li>
				  
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              50) What is container orchestration and why should we use it?
                           </div>
                           <div class="panel-body">
                              When you have to manage large and dynamic environments, the <code>docker</code> command alone does not suffice. 
                              You will face many problems automating scaling and health checks for containers. 
                              In this case, software teams use container orchestration tools like Kubernetes. 
                              Such software enables another level of automation:
                              <ul>
                                 <li>
                                    Deploy or scale your containers easily, securely, and with high availability.
                                 </li>
                        
                                 <li>
                                    Provide a service (internally or externally) from a container group.
                                 </li>
                        
                                 <li>
                                    Move your containers from one host to another when there’s a host-specific problem.
                                 </li>
                        
                                 <li>
                                    Manage your configuration data—like environment variables—easily.
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </a>
                  </li>
				  
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              51) What features are provided by Docker Enterprise Edition instead of Docker Community Edition?
                           </div>
                           <div class="panel-body">
                              Docker Enterprise Edition provides certified Docker images and plugins.
                              With this certification, Docker Inc. ensures that the images in question pass security and best-practice checks. 
                              In other words, they guarantee a certain baseline of reliability. <br />
                              Docker Enterprise Edition also provides Active Directory or LDAP user integration, continuous 
                              vulnerability and security scans, and container app and image management features.
                           </div>
                        </div>
                     </a>
                  </li>
				  
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              52) Is there any problem with just using the <code>latest</code> tag in a container orchestration environment? 
                                    What is considered best practice for image tagging?
                           </div>
                           <div class="panel-body">
                              If you’re running your image via the <code>latest</code> tag with a container orchestration environment like Kubernetes, it may cause a problem. <br /> 
                              The problem is if you push a new image with just the <code>latest</code> tag, you lose your old image and your deployments will use the new image.
                              If the new image has any problem, your deployments might fail, resulting in downtime. <br />
                              When you use explicit version numbers to tag Docker images instead, you can roll back to old images easily. 
                              Also, when you push a new image to your private registry, your deployments will continue to use the old version number due to your tag until you’re ready to switch each of them over. <br />
                              The best practice of Docker image tagging is to use both types of tagging. First, tag your Docker images with <code>latest</code> and a version number, then push twice, separately for each tag. For example:
                              <pre>
                                 docker tag nginx:latest nginx:0.0.1 <br />
                                 docker push nginx:latest
                                 docker push nginx:0.0.1
                              </pre>
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