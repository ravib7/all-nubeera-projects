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
               <h1 class="mt-4">VCS-Git Interview QnA</h1>

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
                                 1) What is GIT?
                              </div>
                              <div class="panel-body">
                                 GIT is a distributed version control system and source code management (SCM) system with
                                 an emphasis to handle small and large projects with speed and efficiency.
                              </div>
                           </div>
                        </a>
                     </li>
                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 2) What is the difference between GIT and SVN?
                              </div>
                              <div class="panel-body">
                                 The difference between GIT and SVN is <br />
                                 a) Git is less preferred for handling extremely large files or frequently changing binary
                                 files while SVN can handle multiple projects stored in the same repository.<br />
                                 b) GIT does not support ‘commits’ across multiple branches or tags. Subversion allows the
                                 creation of folders at any location in the repository layout.<br />
                                 c) Gits are unchangeable, while Subversion allows committers to treat a tag as a branch
                                 and to create multiple revisions under a tag root.<br />
                              </div>
                           </div>
                        </a>
                     </li>

                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 3) What are the advantages of using GIT?
                              </div>
                              <div class="panel-body">
                                 The Advantages of GIT is <br />
                                 a) Data redundancy and replication<br />
                                 b) High availability.<br />
                                 c) Only one.git directory per repository.<br />
                                 d) Superior disk utilization and network performance.<br />
                                 e) Collaboration friendly.<br />
                                 f) Any sort of projects can use GIT.<br />
                              </div>
                           </div>
                        </a>
                     </li>
                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 4) Why GIT better than Subversion?
                              </div>
                              <div class="panel-body">
                                 GIT is an open source version control system; it will allow you to run ‘versions’ of a
                                 project, which show the changes that were made to the code overtime also it allows you
                                 keep the backtrack if necessary and undo those changes. Multiple developers can checkout,
                                 and upload changes and each change can then be attributed to a specific developer.
                              </div>
                           </div>
                        </a>
                     </li>

                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 5) What is GIT stash?
                              </div>
                              <div class="panel-body">
                                 GIT stash takes the current state of the working directory and index and puts in on the
                                 stack for later and gives you back a clean working directory. So in case if you are in the
                                 middle of something and need to jump over to the other job, and at the same time you don’t
                                 want to lose your current edits then you can use GIT stash.
                              </div>
                           </div>
                        </a>
                     </li>

                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 6) What is the function of git clone?
                              </div>
                              <div class="panel-body">
                                 The git clone command creates a copy of an existing Git repository. To get the copy of a
                                 central repository, ‘cloning’ is the most common way used by programmers.
                              </div>
                           </div>
                        </a>
                     </li>

                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 7) What is the function of ‘git config’?
                              </div>
                              <div class="panel-body">
                                 The ‘git config’ command is a convenient way to set configuration options for your Git
                                 installation. Behaviour of a repository, user info, preferences etc. can be defined
                                 through this command.
                              </div>
                           </div>
                        </a>
                     </li>

                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 8) What is ‘head’ in git and how many heads can be created in a repository?
                              </div>
                              <div class="panel-body">
                              A ‘head’ is simply a reference to a commit object. In every repository, there is a default head referred as “Master”.  A repository can contain any number of heads.
                              </div>
                           </div>
                        </a>
                     </li>

                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 9) What is the purpose of branching in GIT?
                              </div>
                              <div class="panel-body">
                                 The purpose of branching in GIT is that you can create your own branch and jump between those branches. It will allow you to go to your previous work keeping your recent work intact.
                              </div>
                           </div>
                        </a>
                     </li>

                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 10) To delete a branch what is the command that is used?
                              </div>
                              <div class="panel-body">
                                 Once your development branch is merged into the main branch, you don’t need
                                 development branch.  To delete a branch use, the command “git branch –d [head]”.
                              </div>
                           </div>
                        </a>
                     </li>

                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 11) What is GIT version control?
                              </div>
                              <div class="panel-body">
                                 With the help of GIT version control, you can track the history of a collection of files and includes the functionality to revert the collection of files to another version.  Each version captures a snapshot of the file system at a certain point of time. A collection of files and their complete history are stored in a repository.
                              </div>
                           </div>
                        </a>
                     </li>

                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 12) What is the syntax for “Rebasing” in Git?
                              </div>
                              <div class="panel-body">
                                 The syntax used for rebase is “git rebase [new-commit] “
                              </div>
                           </div>
                        </a>
                     </li>

                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 13) What is the difference between ‘git remote’ and ‘git clone’?
                              </div>
                              <div class="panel-body">
                                 ‘git remote add’  just creates an entry in your git config that specifies a name for a particular URL.  While, ‘git clone’ creates a new git repository by copying and existing one located at the URI.
                              </div>
                           </div>
                        </a>
                     </li>

                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 14) What is the difference between the ‘git diff ’and ‘git status’?
                              </div>
                              <div class="panel-body">
                                 ‘git diff’ is similar to ‘git status’, but it shows the differences between various commits and also between the working directory and index.
                              </div>
                           </div>
                        </a>
                     </li>

                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 15) What is the function of ‘git rm’?
                              </div>
                              <div class="panel-body">
                                 To remove the file from the staging area and also off your disk ‘git rm’ is used.
                              </div>
                           </div>
                        </a>
                     </li>

                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 16) What is the use of ‘git log’?
                              </div>
                              <div class="panel-body">
                                 To find specific commits in your project history- by author, date, content or history ‘git log’ is used.
                              </div>
                           </div>
                        </a>
                     </li>

                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 17) What is the function of ‘git reset’?
                              </div>
                              <div class="panel-body">
                                 The function of ‘Git Reset’ is to reset your index as well as the working directory to the state of your last commit.
                              </div>
                           </div>
                        </a>
                     </li>

                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 18) What does ‘hooks’ consist of in git?
                              </div>
                              <div class="panel-body">
                                 This directory consists of Shell scripts which are activated after running the corresponding Git commands.  For example, git will try to execute the post-commit script after you run a commit.
                              </div>
                           </div>
                        </a>
                     </li>

                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 19) How to resolve a conflict in Git?
                              </div>
                              <div class="panel-body">
                                 The following steps will resolve conflict in Git- <br />
                                    Identify the files that have caused the conflict.<br />
                                    Make the necessary changes in the files so that conflict does not arise again.<br />
                                    Add these files by the command git add.<br />
                                    Finally to commit the changed file using the command git commit<br />
                              </div>
                           </div>
                        </a>
                     </li>

                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 20) What is SubGit?
                              </div>
                              <div class="panel-body">
                                 SubGit is a tool for SVN to Git migration. It can create a writable Git mirror of a local or remote Subversion repository and use both Subversion and Git as long as you like.<br />
                                 Now you can also include some advantages like you can do a fast one-time import from Subversion to Git or use SubGit within Atlassian Bitbucket Server. We can use SubGit to create a bi-directional Git-SVN mirror of an existing Subversion repository. You can push to Git or commit to Subversion as per your convenience. Synchronization will be done by SubGit. 
                              </div>
                           </div>
                        </a>
                     </li>

                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                              21) What is the difference between git pull and git fetch?
                              </div>
                              <div class="panel-body">
                                 Git pull command pulls new changes or commits from a particular branch from your central repository and updates your target branch in your local repository. <br />
                                 Git fetch is also used for the same purpose but it works in a slightly different way. When you perform a git fetch, it pulls all new commits from the desired branch and stores it in a new branch in your local repository. If you want to reflect these changes in your target branch, git fetch must be followed with a git merge. Your target branch will only be updated after merging the target branch and fetched branch. Just to make it easy for you, remember the equation below:<br />
                                 <b>Git pull = git fetch + git merge</b>
                              </div>
                           </div>
                        </a>
                     </li>

                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 22) What is ‘staging area’ or ‘index’ in Git?
                              </div>
                              <div class="panel-body">
                                 <center><img src="../../img/interviews/git/gitAreaPhases.png" style="width:50%;height:30%;" alt="Git Area/Phases"></center>
                              </div>
                           </div>
                        </a>
                     </li>
                  
                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 23) Describe the branching strategies you have used?<br>
                                       (or) <br>
                                 What is Github Model you used?<br>
                                       (or) <br>
                                 Can you Explain the Git Workflow/Branching Principal you used? 
                              </div>
                              <div class="panel-body">
                              To record the history of the project, Gitflow workflow employs two parallel long-running branches – master and develop:<br />
                              <b>Master</b>– this branch is always ready to be released on LIVE, with everything fully tested and approved (production-ready).<br />
                              <b>Feature branching</b>– A feature branch model keeps all of the changes for a particular feature inside of a branch. When the feature is fully tested and validated by automated tests, the branch is then merged into master.<br />
                              <b>Task branching</b>– In this model, each task is implemented on its own branch with the task key included in the branch name. It is easy to see which code implements which task, just look for the task key in the branch name. <br />
                              <b>Develop branching</b>- This is the branch to which all feature branches are merged and where all tests are performed. Only when everything’s been thoroughly checked and fixed it can be merged to the master.<br />
                              <b>Release branching</b>– Once the develop branch has acquired enough features for a release, you can clone that branch to form a Release branch. Creating this branch starts the next release cycle, so no new features can be added after this point, only bug fixes, documentation generation, and other release-oriented tasks should go in this branch. Once it is ready to ship, the release gets merged into master and tagged with a version number. In addition, it should be merged back into the develop branch, which may have progressed since the release was initiated.<br />
                              <b>Hotfix</b>– these branches are used to quickly patch production releases. These branches are a lot like release branches and feature branches except they’re based on master instead of develop.<br />
                              In the end tell them that branching strategies vary from one organization to another so I know basic branching operations like delete, merge, checking out a branch, etc.<br />
                              
                              <b>Feature</b> – each new feature should reside in its own branch, which can be pushed to the develop branch as their parent one.<br />
                              <img src="../../img/interviews/git/git-model2x.png" 
                                 width="50%"
                                 height="50%"
                              alt="Git Workflow/Branching/Model" />
                              </div>
                           </div>
                        </a>
                     </li>
                  
                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 24) How do you find a list of files that has changed in a particular commit?
                              </div>
                              <div class="panel-body">
                                 <div class="container col pad-2">
                                    <strong>Git Terminal</strong>
                                    <pre>
                                       $ git diff-tree -r {hash}
                                    </pre>
                                    Given the commit hash, this will list all the files that were changed or added in that commit. The -r flag makes the command list individual files, rather than collapsing them into root directory names only.<br />
                                    The output will also include some extra information, which can be easily suppressed by including a couple of flags:<br />
                                    <strong>Git Terminal</strong>
                                    <pre>
                                       $ git diff-tree --no-commit-id --name-only -r {hash}
                                    </pre>
                                    Here --no-commit-id will supress the commit hashes from appearing in the output, and --name-only will only print the file names, instead of their paths.
                                 </div>
                              
                              </div>
                           </div>
                        </a>
                     </li> 
                  
                     <li><a href="#">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 25) What is git cherry-pick?
                              </div>
                              <div class="panel-body">
                              The command git cherry-pick is normally used to introduce particular commits from one branch within a repository onto a different branch. Another common use is to forward- or back-port commits from a maintenance branch to a development branch. This is in contrast with other ways such as merge and rebase which normally apply many commits onto another branch.<br />
                              Consider:<br />
                              
                              <strong>Git Terminal</strong>
                                    <pre>
                                       $ git cherry-pick <commit-hash>
                                    </pre>
                              
                              </div>
                           </div>
                        </a>
                     </li>
                  <!-- <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              
                           </div>
                           <div class="panel-body">
                              
                           </div>
                        </div>
                     </a>
                  </li> -->

                 
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