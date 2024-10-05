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
               <h1 class="mt-4">Maven Interview QnA</h1>

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
                                 1) What is Build Tool?
                              </div>
                              <div class="panel-body">
                                 A build tool takes care of everything for building a process. It does the following:
                                 <ol>
                                    <li>
                                       Generates source code (if auto-generated code is used)
                                    </li>

                                    <li>
                                       Generates documentation from source code
                                    </li>

                                    <li>
                                       Compiles source code
                                    </li>

                                    <li>
                                       Packages compiled code into JAR of ZIP file
                                    </li>

                                    <li>
                                       Installs the packaged code in local repository, server repository, or central
                                       repository
                                    </li>
                                 </ol>
                              </div>
                           </div>
                        </a>
                     </li>
                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 2) Explain what is Maven. How does it work?
                              </div>
                              <div class="panel-body">
                                 Maven is a project management tool.
                                 It provides the developer a complete build lifecycle framework.
                                 On executing Maven commands, it will look for POM file in Maven; it will run the command
                                 on the resources described in the POM.
                              </div>
                           </div>
                        </a>
                     </li>

                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 3) List out the aspects that Maven manages.
                              </div>
                              <div class="panel-body">
                                 Maven handles the following activities of a developer:
                                 <ul>
                                    <li>
                                       Build
                                    </li>

                                    <li>
                                       Documentation
                                    </li>

                                    <li>
                                       Reporting
                                    </li>

                                    <li>
                                       Dependencies
                                    </li>

                                    <li>
                                       SCMs
                                    </li>

                                    <li>
                                       Releases
                                    </li>

                                    <li>
                                       Distribution
                                    </li>

                                    <li>
                                       Mailing list
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </a>
                     </li>
                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 4) Mention the three build lifecycles of Maven.
                              </div>
                              <div class="panel-body">
                                 <ul>
                                    <li>
                                       <b>Clean:</b> Cleans up artifacts that are created by prior builds
                                    </li>

                                    <li>
                                       <b>Default (build):</b> Used to create the application
                                    </li>

                                    <li>
                                       <b>Site:</b> For the project generates site documentation
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </a>
                     </li>



                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 5) Explain POM.
                              </div>
                              <div class="panel-body">
                                 In Maven, POM (Project Object Model) is the fundamental unit of work.
                                 It is an XML file which holds the information about the project and configuration details
                                 used to build a project by Maven.
                              </div>
                           </div>
                        </a>
                     </li>

                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 6) What is Maven artifact?
                              </div>
                              <div class="panel-body">
                                 Maven Artifact consists of files like Jar file or War file that result in the expansion of
                                 the specific file in the Maven repository.
                                 The Jar file can use as an artifact in Maven.
                                 The Maven Artifact is determined by a group ID name to run the Maven Artifact in the
                                 Maven.
                                 They can contain files like Ear, Jar, and War or Zip file as well.
                                 Maven Artifact is used for specifying applications to locate a name or package.
                                 It is usually stored in your system repository.

                              </div>
                           </div>
                        </a>
                     </li>

                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 7) What is Maven Repository? What are their types?
                              </div>
                              <div class="panel-body">
                                 A Maven repository is a location where all the project jars, library jars, plugins or any
                                 other particular project related artifacts are stored and can be easily used by Maven.
                                 <br />
                                 There are three types of repository present in Maven. They are:
                                 <ol>
                                    <li>
                                       <b>Local Repository</b> <br />
                                       This local repository is located on <b>your local system</b> and it works when you
                                       run a maven command.
                                       Maven local repository command is <code>%USER_HOME%/.m2</code> directory.
                                    </li>

                                    <li>
                                       <b>Central Repository</b> <br />
                                       Installation from the repository is performed on creating a project from
                                       <b>archetype</b> or resolving the dependency.
                                    </li>

                                    <li>
                                       <b>Remote Repository</b> <br />
                                       This repository is located on the web.
                                       It is just a network accessible location that Maven downloads <b>dependencies</b>
                                       from.
                                       All the artifacts that remote repository contains are open source.
                                    </li>
                                 </ol>
                              </div>
                           </div>
                        </a>
                     </li>

                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 8) Why are Maven plugins are used?
                              </div>
                              <div class="panel-body">
                                 Maven plugins are used to:
                                 <ul>
                                    <li>
                                       Create a jar file
                                    </li>

                                    <li>
                                       Create war file
                                    </li>

                                    <li>
                                       Compile code files
                                    </li>

                                    <li>
                                       Unit testing of code
                                    </li>

                                    <li>
                                       Documenting projects
                                    </li>

                                    <li>
                                       Reporting
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </a>
                     </li>

                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 9) List out the dependency scope in Maven.
                              </div>
                              <div class="panel-body">
                                 The various dependency scopes used in Maven are:
                                 <ol>
                                    <li>
                                       <b>Compile: </b>It is the default scope, and it indicates what dependency is
                                       available in the classpath of the project.
                                    </li>

                                    <li>
                                       <b>Provided: </b>It indicates that the dependency is provided by JDK or web server
                                       or container at runtime.
                                    </li>

                                    <li>
                                       <b>Runtime: </b>This tells that the dependency is not needed for compilation but is
                                       required during execution.
                                    </li>

                                    <li>
                                       <b>Test: </b>It says dependency is available only for the test compilation and
                                       execution phases.
                                    </li>

                                    <li>
                                       <b>System: </b>It indicates you have to provide the system path.
                                    </li>

                                    <li>
                                       <b>Import: </b>This indicates that the identified or specified POM should be
                                       replaced with the dependencies in that POM’s section.
                                    </li>
                                 </ol>
                              </div>
                           </div>
                        </a>
                     </li>

                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 10) Mention how profiles are specified in Maven.
                              </div>
                              <div class="panel-body">
                                 Profiles are specified in Maven by using a subset of the elements existing in the POM
                                 itself.
                              </div>
                           </div>
                        </a>
                     </li>

                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 11) How you can exclude dependency?
                              </div>
                              <div class="panel-body">
                                 By using the exclusion element, dependency can be excluded.
                              </div>
                           </div>
                        </a>
                     </li>

                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 12) Differentiate between Apache Ant and Maven.
                              </div>
                              <div class="panel-body">
                                 The differences between the two are listed down in the table below. <br />
                                 <table>
                                    <tr>
                                       <th style="background-color:powderblue;text-align:center;">Apache Ant</th>
                                       <th style="background-color:powderblue;text-align:center;">Maven</th>
                                    </tr>

                                    <tr>
                                       <td>Ant is a toolbox.</td>
                                       <td>Maven is a framework.</td>

                                    <tr>
                                       <td>Ant does not have formal conventions like project directory structure.</td>
                                       <td>Maven has conventions.</td>
                                    </tr>

                                    <tr>
                                       <td>Ant is procedural; you have to tell to compile, copy and compress.</td>
                                       <td>Maven is declarative (information on what to make & how to build).</td>
                                    </tr>

                                    <tr>
                                       <td>Ant does not have lifecycle; you have to add sequence of tasks manually.</td>
                                       <td>Maven has a lifecycle.</td>
                                    </tr>

                                    <tr>
                                       <td>Ant is mainly a build tool.</td>
                                       <td>Maven is a project management tool.</td>
                                    </tr>
                                 </table>
                              </div>
                           </div>
                        </a>
                     </li>

                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 13) In Maven what are the two setting files called and what are their location?
                              </div>
                              <div class="panel-body">
                                 In Maven, the setting files are called settings.xml, and the two setting files are located
                                 at:
                                 <ul>
                                    <li>
                                       Maven installation directory: <code>$M2_Home/conf/settings.xml</code>
                                    </li>

                                    <li>
                                       User’s home directory: <code>${ user.home }/.m2/settings.xml</code>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </a>
                     </li>

                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 14) List out the build phases in Maven.
                              </div>
                              <div class="panel-body">
                                 <center><img src="../../img/interviews/maven/MavenBuildPhases.png" style="width:30%;height:30%;"/></center>


                                 <ol>
                                    <li>
                                       <b>Validate</b>:- <para>Validate the project is correct and all necessary information is
                                       available</para>
                                    </li>

                                    <li>
                                       <b>Compile</b>:- <para>Compile the source code of the project</para>
                                    </li>

                                    <li>
                                       <b>Test</b>:- <para>Test the compiled source code using a suitable unit testing
                                          framework. These tests should not require the code be packaged or deployed</para>
                                    </li>

                                    <li>
                                       <b>Package</b>:- <para>Take the compiled code and package it in its distributable format,
                                       such as a JAR.</para>
                                    </li>

                                    <li>
                                       <b>Verify</b>:- <para>run any checks on results of integration tests to ensure quality
                                       criteria are met.</para>
                                    </li>

                                    <li>
                                       <b>Install</b>:- <para>install the package into the local repository, for use as a
                                       dependency in other projects locally.</para>
                                    </li>

                                    <li>
                                       <b>Deploy</b>:- <para>done in the build environment, copies the final package to the
                                       remote repository for sharing with other developers and projects.</para>
                                    </li>
                                 </ol>
                              </div>
                           </div>
                        </a>
                     </li>

                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 15) Mention the build, source and test source directory for POM in Maven.
                              </div>
                              <div class="panel-body">
                                 The build directory for POM in Maven is <code>target</code> <br />
                                 The source directory is <code>src/main/java</code> <br />
                                 The test source directory is <code>src/test/java</code>
                              </div>
                           </div>
                        </a>
                     </li>

                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 16) Where do you find the class files when you compile a Maven project?
                              </div>
                              <div class="panel-body">
                                 You will find the class files in <code>${basedir}/target/classes/</code>.
                              </div>
                           </div>
                        </a>
                     </li>

                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 17) Explain what the “jar: jar” goal would do?
                              </div>
                              <div class="panel-body">
                                 jar: jar will not recompile sources; it will imply: just create a JAR from the
                                 target/classes directory considering that everything else has been done.
                              </div>
                           </div>
                        </a>
                     </li>

                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 18) What is Maven’s order of inheritance?
                              </div>
                              <div class="panel-body">
                                 Maven’s order of inheritance is
                                 <ol>
                                    <li>
                                       Parent POM
                                    </li>

                                    <li>
                                       Project POM
                                    </li>

                                    <li>
                                       Settings
                                    </li>

                                    <li>
                                       CLI parameters
                                    </li>
                                 </ol>
                              </div>
                           </div>
                        </a>
                     </li>

                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 19) What are parent POMs?
                              </div>
                              <div class="panel-body">
                                 Basically, these are parent projects without code.
                                 They are used by companies to define the set of libraries/versions, plugins they want
                                 their teams using.
                                 They can have dependencies, build plugins, variables definitions, and even their own
                                 parent POM, forming a chain. <br />
                                 A great example is Spring Boot. You can extract it to create production-grade web services
                                 crazily fast.
                              </div>
                           </div>
                        </a>
                     </li>

                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 20) For POM what are the minimum required elements?
                              </div>
                              <div class="panel-body">
                                 The minimum required elements for POM are project root, modelVersion, groupID, artifactID
                                 and version.
                              </div>
                           </div>
                        </a>
                     </li>

                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 21) Explain how you can produce execution debug output or error messages.
                              </div>
                              <div class="panel-body">
                                 To produce execution debug output you could call Maven with X parameter or e parameter.
                              </div>
                           </div>
                        </a>
                     </li>

                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 22) How are test classes run in Maven?
                              </div>
                              <div class="panel-body">
                                 To run test classes in Maven, you need surefire plugin. Check and configure your settings
                                 in setting.xml and pom.xml for a property named “test”.
                              </div>
                           </div>
                        </a>
                     </li>

                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 23) What is the command to check Maven version?
                              </div>
                              <div class="panel-body">
                                 The command to check the maven version is <code>mvn -version</code>
                              </div>
                           </div>
                        </a>
                     </li>

                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 24) What is a MOJO?
                              </div>
                              <div class="panel-body">
                                 <div class="container col pad-2">
                                    A MOJO stands for Maven plain Old Java Object.
                                    Each MOJO is an executable goal in Maven, and a plugin is a distribution of one or more
                                    related MOJOs.
                                 </div>
                              </div>
                           </div>
                        </a>
                     </li>

                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 25) How to install Maven?
                              </div>
                              <div class="panel-body">
                                 Make sure JDK is installed, and <code>JAVA_HOME</code> variable is added as Windows
                                 environment variable. <br />
                                 Add both <code>M2_HOME</code> and <code>MAVEN_HOME</code> variable in the Windows
                                 environment, and point it to your Maven folder.
                              </div>
                           </div>
                        </a>
                     </li>

                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 26) What are the archetype goals?
                              </div>
                              <div class="panel-body">
                                 Four goals associated with archetype plugin are:
                                 <ul>
                                    <li>
                                       <b>Create: </b>creates using a quick-start template.
                                    </li>

                                    <li>
                                       <b>Generate: </b>provide a menu of templates.
                                    </li>

                                    <li>
                                       <b>Create-from-project: </b>creates an archetype from an existing project.
                                    </li>

                                    <li>
                                       <b>Crawl: </b>searches the repository for archetype and updates catalog.
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </a>
                     </li>

                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 27) What is the sequence in which Maven searches for dependency libraries?
                              </div>
                              <div class="panel-body">
                                 <div class="container col pad-2">
                                    You can locate dependency in the local repository system of your software.
                                    Sometimes, it is difficult to locate or identify in the local repository.
                                    So, one can find or look in the central repository system and if it shows the
                                    dependency as missing then one can look in remote repository to find the dependency.
                                    If it still shows the same thing repeatedly then the system will show error in finding
                                    the dependencies.
                                    If the dependencies are found in the local repository then it will be automatically
                                    downloaded in the central repository for future use.
                                 </div>
                              </div>
                           </div>
                        </a>
                     </li>

                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 28) What are the things you need to define for each external dependency?
                              </div>
                              <div class="panel-body">
                                 External Dependency plays an important part in the Maven software.
                                 It is an internal part of the system without which dependency cannot be located in a
                                 system.
                                 To specify the external dependency we need:
                                 <ol>
                                    <li>
                                       It requires a group ID duplicate to the library name.
                                    </li>

                                    <li>
                                       It requires an artifact ID duplicate to the library name.
                                    </li>

                                    <li>
                                       Mentioning of dependency scope in the system.
                                    </li>

                                    <li>
                                       Have to mention the system route corresponding to the project position.
                                    </li>
                                 </ol>
                              </div>
                           </div>
                        </a>
                     </li>

                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 29) What are the steps involved in project deployment?
                              </div>
                              <div class="panel-body">
                                 There are several steps to follow during project deployment in Maven.
                                 These steps include:
                                 <ol>
                                    <li>
                                       Go through all the projects and analyze the code that is working in the background
                                       in progress in the source code repository and identifies it.
                                    </li>

                                    <li>
                                       In order to get the project development, one need to download the whole source code
                                       from the Social Venture Network.
                                    </li>

                                    <li>
                                       Construct or develop the application in the system.
                                    </li>

                                    <li>
                                       It needs to be saved as a War or Jar file system.
                                    </li>

                                    <li>
                                       Get the specified file from the location path and move that specific file to create
                                       a site.
                                    </li>

                                    <li>
                                       The application that is created in the system needs to be updated with the latest
                                       version with date and version number.
                                    </li>
                                 </ol>
                              </div>
                           </div>
                        </a>
                     </li>

                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 30) What is a goal in Maven terminology?
                              </div>
                              <div class="panel-body">
                                 The goals mentioned here in the Maven suggests the managing and building process requires
                                 creating a project.
                                 There is no limitation to follow the goals in Maven; it can build as many phases as it
                                 wants with zero boundations.
                                 You directly achieve your goal without any kind of outside intervention.
                              </div>
                           </div>
                        </a>
                     </li>

                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 31) What is a transitive dependency in Maven?
                              </div>
                              <div class="panel-body">
                                 Transitive dependency in Maven means that it is not necessary to discover and specify the
                                 libraries that our own dependencies require, Maven includes them automatically.
                              </div>
                           </div>
                        </a>
                     </li>

                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 32) What does dependency management mean in the context of transitive dependency?
                              </div>
                              <div class="panel-body">
                                 It means to directly specify the versions of artifacts to be used when they are
                                 encountered in transitive dependencies.
                                 For an example project C can include B as a dependency in its Dependency Management
                                 section and directly control which version of B is to be used when it is ever referenced.
                              </div>
                           </div>
                        </a>
                     </li>

                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 33) What is the use of optional dependency?
                              </div>
                              <div class="panel-body">
                                 Any transitive dependency can be marked as optional using "optional" element.
                                 As example, A depends upon B and B depends upon C.
                                 Now B marked C as optional. Then A will not use C.
                              </div>
                           </div>
                        </a>
                     </li>

                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 34) What is the difference between version and SNAPSHOT?
                              </div>
                              <div class="panel-body">
                                 Maven will always download the specified version. In case of SNAPSHOT Maven will download
                                 the latest SNAPSHOT.
                              </div>
                           </div>
                        </a>
                     </li>

                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 35) What would the command <code>mvn clean</code> do?
                              </div>
                              <div class="panel-body">
                                 This command removes the target directory with all the build data before starting the
                                 build process.
                              </div>
                           </div>
                        </a>
                     </li>

                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 36) What is Build Profile?
                              </div>
                              <div class="panel-body">
                                 A Build profile is a set of configuration values which can be used to set or override
                                 default values of Maven build.
                                 Using a build profile, you can customize build for different environments such as
                                 Production v/s Development environments.
                              </div>
                           </div>
                        </a>
                     </li>

                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 37) What are different types of Build Profiles?
                              </div>
                              <div class="panel-body">
                                 Build profiles are of three types.
                                 <ol>
                                    <li>
                                       <b>Per Project: </b>Defined in the project POM file, pom.xml.
                                    </li>

                                    <li>
                                       <b>Per User: </b>Defined in Maven settings xml file
                                       <code>%USER_HOME%/.m2/settings.xml</code>
                                    </li>

                                    <li>
                                       <b>Global: </b>Defined in Maven global settings xml file
                                       <code>%M2_HOME%/conf/settings.xml</code>
                                    </li>
                                 </ol>
                              </div>
                           </div>
                        </a>
                     </li>

                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 38) How can you activate profiles?
                              </div>
                              <div class="panel-body">
                                 A Maven Build Profile can be activated in various ways.
                                 <ol>
                                    <li>
                                       Explicitly using command console input.
                                    </li>

                                    <li>
                                       Through Maven settings.
                                    </li>

                                    <li>
                                       Based on environment variables (User/System variables).
                                    </li>

                                    <li>
                                       OS Settings (for example, Windows family).
                                    </li>

                                    <li>
                                       Present/missing files.
                                    </li>
                                 </ol>
                              </div>
                           </div>
                        </a>
                     </li>

                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 39) What are the types of Maven Plugins?
                              </div>
                              <div class="panel-body">
                                 Maven provides the following two types of Plugins.
                                 <ul>
                                    <li>
                                       <b>Build plugins: </b>They execute during the build and should be configured in the
                                       <code>&#60;build/&#62;</code> element of pom.xml
                                    </li>

                                    <li>
                                       <b>Reporting plugins: </b>They execute during the site generation and they should be
                                       configured in the <code>&#60;reporting/&#62;</code> element of the pom.xml
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </a>
                     </li>

                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 40) How do you reference a property defined in your pom.xml file?
                              </div>
                              <div class="panel-body">
                                 To reference a property defined in your pom.xml, the property name uses the names of the
                                 XML elements that define the value, with "pom" being allowed as an alias for the project
                                 (root) element. <br />
                                 So <code>${pom.name}</code> refers to the name of the project, <code>${pom.version}</code>
                                 refers to the version of the project, <code>${pom.build.finalName}</code> refers to the
                                 final name of the file created when the built project is packaged, etc.
                              </div>
                           </div>
                        </a>
                     </li>

                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 41) What is the use of execution element in pom file?
                              </div>
                              <div class="panel-body">
                                 The <code>&#60;execution&#62;</code> element contains information required for the
                                 execution of a plugin.
                              </div>
                           </div>
                        </a>
                     </li>

                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 42) Why are profiles used in Maven?
                              </div>
                              <div class="panel-body">
                                 They are used to give portability to projects. (e.g. Windows, Linux etc.)
                              </div>
                           </div>
                        </a>
                     </li>

                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 43) How can you build your project offline?
                              </div>
                              <div class="panel-body">
                                 <code>mvn -o package</code>
                              </div>
                           </div>
                        </a>
                     </li>

                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 44) How to stop the propagation of plugins to child POMs?
                              </div>
                              <div class="panel-body">
                                 To do this, set <code>&#60;inherited&#62;</code> to false.
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