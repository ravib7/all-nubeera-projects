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
               <h1 class="mt-4">NGINX Interview QnA</h1>

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
                              1) Explain what is Nginx?
                           </div>
                           <div class="panel-body">
                              Nginx is a web server and a reverse proxy server for HTTP, HTTPS, SMTP, POP3 and IMAP
                              protocols.
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              2) Mention some special features of Nginx?
                           </div>
                           <div class="panel-body">
                              Special features of the Nginx server includes <br />
                              • Reverse proxy/ L7 Load Balancer<br />
                              • Embedded Perl interpreter<br />
                              • On the fly binary upgrade<br />
                              • Useful for re-writing URLs and awesome PCRE support<br />
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              3) Mention what is the difference between Nginx and Apache?</div>
                           <div class="panel-body">
                              <table class="table" border="0">
                                 <thead class="thead-dark">
                                    <tr>
                                       <th style="width: 50%;text-align:center;">Nginx</th>
                                       <th style="width: 50%;text-align:center;">Apache</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td>• Nginx is an event based web server</td>
                                       <td>• Apache is a process based server</td>
                                    </tr>
                                    <tr>
                                       <td>• All request are handled by a single thread.</td>
                                       <td>• Single thread handles a single request.</td>
                                    </tr>
                                    <tr>
                                       <td>• Nginx avoids child processes idea.</td>
                                       <td>• Apache is based on child processes</td>
                                    </tr>
                                    <tr>
                                       <td>• Nginx resembles speed</td>
                                       <td>• Apache resemble power</td>
                                    </tr>
                                    <tr>
                                       <td>• Nginx is better when it comes to memory consumption and connection</td>
                                       <td>• Apache is not up-to the mark when it comes to memory consumption and
                                          connection</td>
                                    </tr>
                                    <tr>
                                       <td>• Nginx is better when you want load-balancing</td>
                                       <td>• Apache will refuse new connections when traffic reaches the limit of
                                          processes</td>
                                    </tr>
                                    <tr>
                                       <td>• For PHP, Nginx might be preferable as it supports PHP internally</td>
                                       <td>• Apache support’s PHP, Python, Perl and other languages using plugins. It is
                                          useful when application is based on Python or Ruby</td>
                                    </tr>
                                    <tr>
                                       <td>• Nginx do not support O.S like IBMi and OpenVMS</td>
                                       <td>• Apache support much wider range of O.S</td>
                                    </tr>
                                    <tr>
                                       <td>• Nginx comes only with core features</td>
                                       <td>• Apache provides lot more functionality than Nginx</td>
                                    </tr>
                                    <tr>
                                       <td>• Nginx performance and scalability do not depend on hardware </td>
                                       <td>• Apache is dependent on hardware components like CPU and memory</td>
                                    </tr>
                                 </tbodt>
                              </table>
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              4) Explain how Nginx can handle HTTP requests?
                           </div>
                           <div class="panel-body">
                              Nginx uses the reactor pattern. The main event loop waits for the OS to signal a readiness
                              event- such that the data is accessible to read from a socket, at which instance it is
                              read into the buffer and processed. A Single thread can serve tens of thousands of
                              simultaneous connections.
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              5) In Nginx how you can prevent processing requests with undefined server names?
                           </div>
                           <div class="panel-body">
                                 A server that just drops the requests can be defined as
                              <div class="container col pad-2">
                                 <strong>/etc/nginx/nginx.conf</strong>
                                 <pre>
                                    server {
                                       listen       80;
                                       server_name  "";
                                       return       444;
                                    }
                                 </pre>
                                 Here the server name is kept as an empty string which will match request without the “Host” header field, and a special Nginx’s non-standard code 444 is returned that terminates the connection.
                              </div>
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              6) What is the advantage of using a “reverse proxy server”?
                           </div>
                           <div class="panel-body">
                           The reverse proxy server can hide the presence and characteristics of the origin server. It acts as an intermediate between internet cloud and web server. It is good for security reason especially when you are using web hosting services.
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              7) Mention what is the best usage of Nginx server?   
                           </div>
                           <div class="panel-body">
                              The best usage of Nginx server is to deploy dynamic HTTP content on a network with using SCGI, WSGI application servers, FastCGI handlers for scripts.  It can also serve as a load balancer.                       
                           </div>
                        </div>
                     </a>
                  </li>


                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              8) Mention what is the Master and Worker Processes in Nginx Server?
                           </div>
                           <div class="panel-body">
                              Master processes: It reads as well as evaluates configuration and maintains worker processes. <br />
                              Worker processes: It actually does the processing of the requests.

                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              9) Explain how you can start Nginx through a different port other than 80?
                           </div>
                           <div class="panel-body">
                              To start Nginx through a different port, you have to go to /etc/Nginx/sites-enabled/ and if this is the default file, then you have to open file called “default.” Edit the file and put the port you want
                              Like server { listen 81; }
                           </div>
                        </div>
                     </a>
                  </li>
                  
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              10) Explain is it possible to replace Nginx errors like 502 error with 503?
                           </div>
                           <div class="panel-body">
                              •	502= Bad gateway <br />
                              •	503= Server overloaded <br />
                              Yes, it is possible but you to ensure that fastcgi_intercept_errors is set to ON, and use the error page directive.<br />
                              
                              <div class="container col pad-2">
                                 <strong>/etc/nginx/nginx.conf</strong>
                                    <pre>
                                       Location / {
                                          fastcgi_pass 127.0.01:9001;
                                          fastcgi_intercept_errors on;
                                          error_page 502 =503/error_page.html;
                                          #…
                                       }
                                    </pre>
                              </div>
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              11) In Nginx, explain how you can keep double slashes in URLs?
                           </div>
                           <div class="panel-body">
                              To keep double slashes in URLs you have to use merge_slashes_off; <br />
                              Syntax: merge_slashes [on/off] <br />
                              Default: merge_slashes on <br />
                              Context: http, server <br />
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              12) Explain what is ngx_http_upstream_module is used for?
                           </div>
                           <div class="panel-body">
                              The ngx_http_upstream_module is used to define groups of servers that can reference by the fastcgi pass, proxy pass, uwsgi pass, memcached pass and scgi pass directives.
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              13) Explain what is C10K problem?
                           </div>
                           <div class="panel-body">
                              C10K problem is referred for the network socket unable to handle a large number of client (10,000) at the same time.
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              14) Mention what is the use of stub_status and sub_filter directives?
                           </div>
                           <div class="panel-body">
                           <ul>
                              <li>
                              <b>Stub_status directive</b>: This directive is used to know the current status of Nginx like current active connection, total connection accepted and handled current number of read/write/wait connection 
                              </li>
                              <li>
                              <b>Sub_filter directive</b>: It is used to search and replace the content in response, and quick fix for stale data 
                              </li>
                           </ul>
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              15) Explain does Nginx support compress the request to the upstream?
                           </div>
                           <div class="panel-body">
                              You can compress the request to the upstream by using the Nginx module <b>gunzip</b>. The gunzip module is a filter that decompresses responses with “Content Encoding: gzip” for clients or servers that do not support “gzip” encoding method.
                           </div>
                        </div>
                     </a>
                  </li>


                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              16) Explain how you can get the current time in Nginx?
                           </div>
                           <div class="panel-body">
                              To get the current time in Nginx, you have to use variables from SSI module, $date_gmt and $date_local. 
                              <ul>
                                 <li>
                                    Proxy_set_header THE-TIME $date_gmt;
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              17) Explain what is the purpose of –s with Nginx Server?
                           </div>
                           <div class="panel-body">
                              To run the executable file of Nginx –s parameter is used.
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              18) Explain how to add modules in Nginx Server?
                           </div>
                           <div class="panel-body">
                              During the compilation process, Nginx modules must be selected as such run-time selection of modules is not supported by Nginx.
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              19) Where The Process Id Does For Nginx Server?
                           </div>
                           <div class="panel-body">
                              The process ID of the master process is written in the file /usr/local/nginx/logs/nginx.pid
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              20) What Are The Controls Used In Nginx Server?
                           </div>
                           <div class="panel-body">
                              <div class="container col pad-2">
                                       <strong>OS Terminal</strong>
                                       <pre>
                                          Nginx ­s [stop | quit | reopen | reload]
                                       </pre>
                              </div>
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