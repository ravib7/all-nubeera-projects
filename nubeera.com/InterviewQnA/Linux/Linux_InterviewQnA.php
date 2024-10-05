<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">

   <title>NubeEra.Training(Interview QnA): VCS-Git</title>
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
               <h1 class="mt-4">Linux Interview QnA</h1>

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
                              1) What is Linux?
                           </div>
                           <div class="panel-body">
                              Linux is an operating system based on UNIX and was first introduced by Linus Torvalds. 
							  It is based on the Linux Kernel and can run on different hardware platforms manufactured by Intel, MIPS, HP, IBM, SPARC, and Motorola. 
							  Another popular element in Linux is its mascot, a penguin figure named Tux.
                           </div>
                        </div>
                     </a>
                  </li>
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              2) What is the difference between UNIX and LINUX?
                           </div>
                           <div class="panel-body">
                              Unix originally began as a propriety operating system from Bell Laboratories, which later on spawned into different commercial versions. 
							  On the other hand, Linux is free, open source and intended as a non-propriety operating system for the masses.
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              3) What is BASH?
                           </div>
                           <div class="panel-body">
                              BASH is short for Bourne Again SHell. 
							  It was written by Steve Bourne as a replacement to the original Bourne Shell (represented by /bin/sh). 
							  It combines all the features from the original version of Bourne Shell, plus additional functions to make it easier and more convenient to use. 
							  It has since been adapted as the default shell for most systems running Linux.
                           </div>
                        </div>
                     </a>
                  </li>
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              4) What is Linux Kernel?
                           </div>
                           <div class="panel-body">
                              The Linux Kernel is a low-level systems software whose main role is to manage hardware resources for the user. 
							  It is also used to provide an interface for user-level interaction.
                           </div>
                        </div>
                     </a>
                  </li>



                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              5) What is LILO?
                           </div>
                           <div class="panel-body">
                              LILO is a boot loader for Linux. 
							  It is used mainly to load the Linux operating system into main memory so that it can begin its operations.
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              6) What is a swap space?
                           </div>
                           <div class="panel-body">
                              Swap space is a certain amount of space used by Linux to temporarily hold some programs that are running concurrently. 
							  This happens when RAM does not have enough memory to hold all programs that are executing.
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              7) What is the advantage of open source?
                           </div>
                           <div class="panel-body">
                              Open source allows you to distribute your software, including source codes freely to anyone who is interested.
							  People would then be able to add features and even debug and correct errors that are in the source code.
							  They can even make it run better and then redistribute these enhanced source code freely again.
							  This eventually benefits everyone in the community.
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              8) What are the basic components of Linux?
                           </div>
                           <div class="panel-body">
							  Just like any other typical operating system, Linux has all of these components: kernel, shells and GUIs, system utilities, and an application program. 
							  What makes Linux advantageous over other operating system is that every aspect comes with additional features and all codes for these are downloadable for free.
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              9) Does it help for a Linux system to have multiple desktop environments installed?
                           </div>
                           <div class="panel-body">
                              In general, one desktop environment, like KDE or Gnome, is good enough to operate without issues. 
							  It's all a matter of preference for the user, although the system allows switching from one environment to another. 
							  Some programs will work in one environment and not work on the other, so it could also be considered a factor in selecting which environment to use.
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              10) What is the basic difference between BASH and DOS?
                           </div>
                           <div class="panel-body">
                              The differences between the two are listed down in the table below.
							  <table>
							  <caption style="text-align:center;"><strong>BASH vs DOS</strong></caption>
							    <tr>
								  <th style="background-color:powderblue;">BASH</th>
								  <th style="background-color:powderblue;">DOS</th>
								</tr>
								
								<tr>
								  <td>BASH commands are case sensitive.</td>
								  <td>DOS commands are not case sensitive.</td>
								</tr>
								
								<tr>
								  <td>Under BASH, / character is a directory separator and \ acts as an escape character.</td>
								  <td>Under DOS, / serves as a command argument delimiter and \ is the directory separator.</td>
								</tr>
								
								<tr>
								  <td>BASH does not follow any convention in naming of files.</td>
								  <td>DOS follows a convention in naming files, which is 8 character file name followed by a dot and 3 characters for the extension.</td>
								</tr>
							  </table>
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              11) What is the importance of the GNU project?
                           </div>
                           <div class="panel-body">
                              This so-called Free software movement allows several advantages, such as the freedom to run programs for any purpose and freedom to study and modify a program to your needs. 
							  It also allows you to redistribute copies of software to other people, as well as the freedom to improve software and have it released for the public.
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              12) Describe the root account.
                           </div>
                           <div class="panel-body">
                              The root account is like a systems administrator account and allows you full control of the system. 
							  Here you can create and maintain user accounts, assigning different permissions for each account. 
							  It is the default account every time you install Linux.
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              13) What is CLI?
                           </div>
                           <div class="panel-body">
                              CLI is short for Command Line Interface. 
							  This interface allows the user to type declarative commands to instruct the computer to perform operations. 
							  CLI offers greater flexibility. 
							  However, other users who are already accustomed to using GUI find it difficult to remember commands including attributes that come with it.
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              14) What is GUI?
                           </div>
                           <div class="panel-body">
                              GUI, or Graphical User Interface, make use of images and icons that users click and manipulate as a way of communicating with the computer. 
							  Instead of having to remember and type commands, the use of graphical elements makes it easier to interact with the system, as well as adding more attraction through images, icons, and colors.
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              15) How do you open a command prompt when issuing a command?
                           </div>
                           <div class="panel-body">
                              To open the default shell (which is where the command prompt can be found), press Ctrl-Alt-F1. 
							  This will provide a command line interface (CLI) from which you can run commands as needed.
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              16) How can you find out how much memory Linux is using?
                           </div>
                           <div class="panel-body">
                              From a command shell, use the "concatenate" command: <code>cat/proc/meminfo</code> for memory usage information. 
							  You should see a line starting something like Mem: 64655360, etc. This is the total memory Linux thinks it has available to use.
							  You can also use the commands
							  <pre>
free - m

vmstat

top

htop
							  </pre>
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              17) What is a typical size for a swap partition under a Linux system?
                           </div>
                           <div class="panel-body">
                              The preferred size for a swap partition is twice the amount of physical memory available on the system.
							  If this is not possible, then the minimum size should be the same as the amount of memory installed.
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              18) What are symbolic links?
                           </div>
                           <div class="panel-body">
                              Symbolic links act similarly to shortcuts in Windows. 
							  Such links point to programs, files or directories. 
							  It also allows you instant access to it without having to go directly to the entire pathname.
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                           19) Does the Ctrl+Alt+Del key combination work on Linux?
                           </div>
                           <div class="panel-body">
                           Yes, it does. Just like Windows, you can use this key combination to perform a system restart. 
						   One difference is that you won't be getting any confirmation message and therefore, a reboot is immediate.
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              20) How do you refer to the parallel port where devices such as printers are connected?
                           </div>
                           <div class="panel-body">
							  Whereas under Windows you refer to the parallel port as the LPT port, under Linux you refer to it as /dev/lp.
							  LPT1, LPT2 and LPT3 would therefore be referred to as /dev/lp0, /dev/lp1, or /dev/lp2 under Linux.
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                           21) Are drives such as hard drive and floppy drives represented with drive letters?
                           </div>
                           <div class="panel-body">
                              No. In Linux, each drive and device have different designations. 
							  For example, floppy drives are referred to as /dev/fd0 and /dev/fd1. 
							  IDE/EIDE hard drives are referred to as /dev/hda, /dev/hdb, /dev/hdc, and so forth.
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              22) How do you change permissions under Linux?
                           </div>
						   <div class="panel-body">
							  Assuming you are the system administrator or the owner of a file or directory, you can grant permission using the <code>chmod</code> command. 
							  Use + symbol to add permission or – symbol to deny permission, along with any of the following letters: u (user), g (group), o (others), a (all), r (read), w (write) and x (execute). 
							  For example, the command <code>chmod go+rw FILE1.TXT</code> grants read and write access to the file FILE1.TXT, which is assigned to groups and others.
							</div>
                        </div>
                     </a>
                  </li>
                  
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              23) In Linux, what names are assigned to the different serial ports?
                           </div>
                           <div class="panel-body">
                           Serial ports are identified as /dev/ttyS0 to /dev/ttyS7. These are the equivalent names of COM1 to COM8 in Windows.
                           </div>
                        </div>
                     </a>
                  </li>
                  
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              24) How do you access partitions under Linux?
                           </div>
                           <div class="panel-body">
                           <div class="container col pad-2">
							Linux assigns numbers at the end of the drive identifier. 
							For example, if the first IDE hard drive had three primary partitions, they would be named/numbered, /dev/hda1, /dev/hda2 and /dev/hda3.
                           </div>
                           </div>
                        </div>
                     </a>
                  </li> 
                  
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              25) What are hard links?
                           </div>
                           <div class="panel-body">
                           Hard links point directly to the physical file on disk, and not on the pathname. 
						   This means that if you rename or move the original file, the link will not break since the link is for the file itself, not the path where the file is located.
                           </div>
                        </div>
                     </a>
                  </li>
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              26) What is the maximum length for a filename under Linux?
                           </div>
                           <div class="panel-body">
                              Any filename can have a maximum of 255 characters. 
							  This limit does not include the path name, so therefore the entire pathname and filename could well exceed 255 characters.
                           </div>
                        </div>
                     </a>
                  </li>
				  
				  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              27) What are filenames that are preceded by a dot?
                           </div>
                           <div class="panel-body">
                              In general, filenames that are preceded by a dot are hidden files.
							  These files can be configuration files that hold important data or setup info. 
							  Setting these files as hidden makes it less likely to be accidentally deleted.
                           </div>
                        </div>
                     </a>
                  </li>
				  
				  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              28) Explain virtual desktop.
                           </div>
                           <div class="panel-body">
                              This serves as an alternative to minimizing and maximizing different windows on the current desktop. 
							  Using virtual desktops can clear the desktop when you can open one or more programs. 
							  Rather than minimizing/restoring all those programs as needed, you can simply shuffle between virtual desktops with programs intact in each one.
                           </div>
                        </div>
                     </a>
                  </li>
				  
				  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              29) How do you share a program across different virtual desktops under Linux?
                           </div>
                           <div class="panel-body">
                              To share a program across different virtual desktops, in the upper left-hand corner of a program window look for an icon that looks like a pushpin. 
							  Pressing this button will "pin" that application in place, making it appear in all virtual desktops, in the same position onscreen.
                           </div>
                        </div>
                     </a>
                  </li>
				  
				  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              30) What does a nameless (empty) directory represent?
                           </div>
                           <div class="panel-body">
                              This empty directory name serves as the nameless base of the Linux file system. 
							  This serves as an attachment for all other directories, files, drives, and devices.
                           </div>
                        </div>
                     </a>
                  </li>
				  
				  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              31) What is the <code>pwd</code> command?
                           </div>
                           <div class="panel-body">
                              The pwd command is short for print working directory command. For example, entering the <code>pwd</code> command will give the output as
							  <pre>
/home/NubeEra/myDir
							  </pre>
                           </div>
                        </div>
                     </a>
                  </li>
				  
				  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              32) What are daemons?
                           </div>
                           <div class="panel-body">
                              Daemons are services that provide several functions that may not be available under the base operating system. 
							  Its main task is to listen for service request and at the same time to act on these requests. 
							  After the service is done, it is then disconnected and waits for further requests.
                           </div>
                        </div>
                     </a>
                  </li>
				  
				  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              33) How do you switch from one desktop environment to another, such as switching from KDE to Gnome?
                           </div>
                           <div class="panel-body">
                              Assuming you have these two environments installed, just log out from the graphical interface. 
							  Then at the login screen, type your login ID and password and choose which session type you wish to load. 
							  This choice will remain your default until you change it to something else.
                           </div>
                        </div>
                     </a>
                  </li>
				  
				  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              34) What are the kinds of permissions under Linux?
                           </div>
                           <div class="panel-body">
                              There are three kinds of permissions in Linux.
							  <ol>
							  <li>
							  <strong>Read:</strong> users may read the files or list the directory 
							  </li>
							  
							  <li>
							  <strong>Write:</strong> users may write to the file of new files to the directory
							  </li>
							  
							  <li>
							  <strong>Execute:</strong> users may run the file or lookup a specific file within a directory
							  </li>
							  </ol>
                           </div>
                        </div>
                     </a>
                  </li>
				  
				  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              35) How does case sensitivity affect the way you use commands?
                           </div>
                           <div class="panel-body">
                              When we talk about case sensitivity, commands are considered identical only if every character is encoded as is, including lowercase and uppercase letters. 
							  This means that CD, cd, and Cd are three different commands. 
							  Entering a command using uppercase letters, where it should be in lowercase, will produce different outputs.
                           </div>
                        </div>
                     </a>
                  </li>
				  
				  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              36) What are environmental variables?
                           </div>
                           <div class="panel-body">
                              Environmental variables are global settings that control the shell's function as well as that of other Linux programs. 
							  Another common term for environmental variables is global shell variables.
                           </div>
                        </div>
                     </a>
                  </li>
				  
				  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              37) What are the different modes when using vi editor?
                           </div>
                           <div class="panel-body">
                              There are 3 modes under vi.
							  <ol>
							  <li>
							  <b>Command mode:</b> This is the mode where you start in.
							  </li>
							  
							  <li>
							  <b>Edit mode:</b> This is the mode that allows you to do text editing.
							  </li>
							  
							  <li>
							  <b>Ex mode:</b> This is the mode wherein you interact with vi with instructions to process a file.
							  </li>
							  </ol>
                           </div>
                        </div>
                     </a>
                  </li>
				  
				  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              38) Is it possible to use shortcuts for a long pathname?
                           </div>
                           <div class="panel-body">
                              Yes, there is.
							  A feature known as filename expansion allows you do this using the TAB key.
							  For example, if you have a path named <code>/home/iceman/assignments</code> directory, you would type as follows: 
							  <pre>
/ho[tab]/ice[tab]/assi[tab]
							  </pre>
							  This, however, assumes that the path is unique and that the shell you're using supports this feature.
                           </div>
                        </div>
                     </a>
                  </li>
				  
				  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              39) What is redirection?
                           </div>
                           <div class="panel-body">
							  Redirection is the process of directing data from one output to another.
							  It can also be used to direct an output as an input to another process.
                           </div>
                        </div>
                     </a>
                  </li>
				  
				  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              40) What is <code>grep</code> command?
                           </div>
                           <div class="panel-body">
							  <code>grep</code> is a search command that makes use of pattern-based searching.
							  It makes use of options and parameters that are specified along with the command line and applies this pattern in searching the required file output.
                           </div>
                        </div>
                     </a>
                  </li>
				  
				  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              41) What could be the problem when a command that was issued gave a different result from the last time it was used?
                           </div>
                           <div class="panel-body">
							  One highly possible reason for getting different results from what seems to be the same command has something to do with case sensitivity issues. 
							  Since Linux is case sensitive, a command that was previously used might have been entered in a different format from the present one. 
							  For example, to lists all files in the directory, you should type the command ls, and not LS. 
							  Typing LS will either result in an error message if there is no program by that exact name exist or may produce a different output if there is a program named LS that performs another function.
                           </div>
                        </div>
                     </a>
                  </li>
				  
				  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              42) What are the contents of <code>/usr/local</code>?
                           </div>
                           <div class="panel-body">
							  It contains locally installed files. 
							  This directory matters in environments where files are stored on the network. 
							  Specifically, locally-installed files go to /usr/local/bin, /usr/local/lib, etc.). 
							  Another application of this directory is that it is used for software packages installed from source, or software not officially shipped with the distribution.
                           </div>
                        </div>
                     </a>
                  </li>
				  
				  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              43) How do you terminate an ongoing process?
                           </div>
                           <div class="panel-body">
							  Every process in the system is identified by a unique process id or pid.
							  Use the <code>kill</code> command followed by the pid to terminate that process. 
							  To terminate all process at once, use <code>kill 0</code>.
                           </div>
                        </div>
                     </a>
                  </li>
				  
				  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              44) How do you insert comments in the command line prompt?
                           </div>
                           <div class="panel-body">
							  Comments are created by typing the # symbol before the actual comment text. 
							  This tells the shell to completely ignore what follows. 
							  For example,
							  <pre>
# This is just a comment that the shell will ignore.
							  </pre>
                           </div>
                        </div>
                     </a>
                  </li>
				  
				  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              45) What is command grouping and how does it work?
                           </div>
                           <div class="panel-body">
							  You can use parentheses to group commands. 
							  For example, if you want to send the current date and time along with the contents of a file named OUTPUT to a second file named MYDATES, you can apply command grouping as follows: <code>(date cat OUTPUT) > MYDATES</code>.
                           </div>
                        </div>
                     </a>
                  </li>
				  
				  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              46) How do you execute more than one command or program from a single command line entry?
                           </div>
                           <div class="panel-body">
							  You can combine several commands by separating each command or program using a semicolon symbol.
                           </div>
                        </div>
                     </a>
                  </li>
				  
				  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              47) Write a command that will look for files with an extension "c", and has the occurrence of the string "apple" in it.
                           </div>
                           <div class="panel-body">
							  <pre>
Find ./ -name "*.c" | xargs grep –i "apple"
							  </pre>
                           </div>
                        </div>
                     </a>
                  </li>
				  
				  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              48) Write a command that will display all .txt files, including its individual permission.
                           </div>
                           <div class="panel-body">
							  <pre>
ls -al *.txt
							  </pre>
                           </div>
                        </div>
                     </a>
                  </li>
				  
				  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              49) Write a command that will do the following: </br>
							  <ul>
							  <li>
							  look for all files in the current and subsequent directories with an extension c,v
							  </li>
							  <li>
							  strip the,v from the result (you can use sed command)
							  </li>
							  <li>
							  use the result and use a grep command to search for all occurrences of the word ORANGE in the files.
							  </li>
							  </ul>
                           </div>
                           <div class="panel-body">
							  <pre>
Find ./ -name "*.c,v" | sed 's/,v//g' | xargs grep "ORANGE"
							  </pre>
                           </div>
                        </div>
                     </a>
                  </li>
				  
				  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              50) What, if anything, is wrong with each of the following commands?
							  <ol>
							  <li>
							  <code>ls -l-s</code>
							  </li>
							  <li>
							  <code>cat file1, file2</code>
							  </li>
							  <li>
							  <code>ls - s Factdir</code>
							  </li>
							  </ol>
                           </div>
                           <div class="panel-body">
							  <ol>
							  <li>
							  There should be space between the 2 options: <code>ls -l -s</code>
							  </li>
							  
							  <li>
							  Do not use commas to separate arguments: <code>cat file1 file2</code>
							  </li>
							  
							  <li>
							  There should be no space between hyphen and option label: <code>ls –s Factdir</code>
							  </li>
							  </ol>
                           </div>
                        </div>
                     </a>
                  </li>
				  
				  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              51) What is the command to calculate the size of a folder?
                           </div>
                           <div class="panel-body">
							  To calculate the size of a folder uses the command <code>du –sh folder1</code>.
                           </div>
                        </div>
                     </a>
                  </li>
				  
				  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              52) How can you find the status of a process?
                           </div>
                           <div class="panel-body">
							  Use the command <code>ps ux</code>.
                           </div>
                        </div>
                     </a>
                  </li>
				  
				  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              53) How can you check the memory status?
                           </div>
                           <div class="panel-body">
							  You can use the command <code>free -m</code> to display output in MB and <code>free -g</code> to display output in GB.
                           </div>
                        </div>
                     </a>
                  </li>
				  
				  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              54) Explain how to color the Git console?
                           </div>
                           <div class="panel-body">
							  To color the Git console, you can use the command <code>git config—global color.ui auto</code>. 
							  In the command, the <code>color.ui</code> variable sets the default value for a variable such as <code>color.diff</code> and <code>color.grep</code>.
                           </div>
                        </div>
                     </a>
                  </li>
				  
				  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              55) How can you append one file to another in Linux?
                           </div>
                           <div class="panel-body">
							  To append one file to another in Linux you can use command <code>cat file2 >> file 1</code>. The operator >> appends the output of the named file or creates the file if it is not created. 
							  While another command <code>cat file 1 file 2 > file 3</code> appends two or more files to one.
                           </div>
                        </div>
                     </a>
                  </li>
				  
				  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              56) Explain how you can find a file using Terminal?
                           </div>
                           <div class="panel-body">
							  To find a file you have to use a command, <code>find . –name "process.txt"</code>. 
							  It will look for the current directory for a file called process.txt.
                           </div>
                        </div>
                     </a>
                  </li>
				  
				  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              57) Explain how you can create a folder using Terminal?
                           </div>
                           <div class="panel-body">
							  To create a folder, you have to use command <code>mkdir</code>. 
							  It will be something like this:<code>~$ mkdir NubeEra</code>.
                           </div>
                        </div>
                     </a>
                  </li>
				  
				  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              58) Explain how you can view the text file using Terminal?
                           </div>
                           <div class="panel-body">
							  To view the text file, go to the specific folder where the text files are located by using the command <code>cd</code> and then type <code>less filename.txt</code>.
                           </div>
                        </div>
                     </a>
                  </li>
				  
				  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              59) Explain how to enable curl on Ubuntu LAMP stack?
                           </div>
                           <div class="panel-body">
							  To enable curl on Ubuntu, first install libcurl.
							  Once done use following command <code>sudo/etc/init .d /apache2 restart</code> or <code>sudo service apache2 restart</code>.
                           </div>
                        </div>
                     </a>
                  </li>
				  
				  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              60) Explain how to enable root logging in Ubuntu?
                           </div>
                           <div class="panel-body">
							  The command which enables root logging is
							  <pre>
#sudo sh-c 'echo "greater-show-manual-login=true" >>/etc/lightdm/lightdm.conf'
							  </pre>
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