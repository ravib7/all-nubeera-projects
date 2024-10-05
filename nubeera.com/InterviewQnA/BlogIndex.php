<!DOCTYPE html>
<html lang="en">
<head>
    <title>NubeEra</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="NubeEra">

    <link rel="icon" type="image/png" href="../img/logo.ico">
    <!-- Google Font -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.4.6/css/flag-icon.min.css">

    <!-- FontAwesome JS-->
    <script defer src="../documentation/assets/fontawesome/js/all.min.js"></script>

    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="../documentation/assets/css/theme.css">


	<link rel="stylesheet" href="../styles/style.processed.css">
	<link rel="stylesheet" href="../styles/style.team.css">
	<link rel="stylesheet" href="../styles/style.footer.css">
    <link rel="stylesheet" href="../styles/style.nav1.css">
    <link rel="stylesheet" href="../styles/style.blogs.css">
    <link rel="stylesheet" href="../styles/style.seraching.css">
    <style>
        .height{
            height:80px;
        }
    </style>
</head>

<body>

        <!-- Navigation Bar -->
    <?php require '../templates/outsidepage_navbar.php'; ?>

    <div class="page-header theme-bg-dark py-5 text-center position-relative">
	    <div class="theme-bg-shapes-right"></div>
	    <div class="theme-bg-shapes-left"></div>
	    <div class="container">
		    <h1 class="page-heading single-col-max mx-auto">Notes Blog</h1>
		    <div class="page-intro single-col-max mx-auto">NubeEra Training Notes</div>
		    <div class="main-search-box pt-3 d-block mx-auto">
                 <form class="search-form w-100">
		            <input type="text" placeholder="Search the notes..." name="search" id="myInput" onkeyup="myFunction()" class="form-control search-input">
		            <button type="submit" class="btn search-btn" value="Search"><i class="fas fa-search"></i></button>
		        </form>
             </div>
	    </div>
    </div><!--//page-header-->
    <div class="page-content">
	    <div class="container">
		    <div class="docs-overview py-5">
               
            <ul id="myUL">
                <li><a href="./DevOps-AWS/03.Git.php">
                    <div class="height blog-card alt">
                        <div class="meta">
                        <div class="photo" style="background-image: url(data:image/jpeg;base64,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)"></div>
                        </div>
                        <div class="description">
                        <i class="fas fa-git">&nbsp</i> Git Interview Questions
                        </div>
                    </div>
                    </a>
                </li>

                <li><a href="./DevOps-AWS/05.Jenkins.php">
                    <div class="height blog-card alt">
                        <div class="meta">
                        <div class="photo" style="background-image: url(https://testinggenez.com/wp-content/uploads/2019/03/Jenkins.png)"></div>
                        </div>
                        <div class="description">
                        <i class="fas fa-git">&nbsp</i> Jekins Interview Questions
                        </div>
                    </div>
                    </a>
                </li>
                <li><a href="./DevOps-AWS/07.nginx.php">
                    <div class="height blog-card alt">
                        <div class="meta">
                        <div class="photo" style="background-image: url(data:image/png;base64,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)"></div>
                        </div>
                        <div class="description">
                        <i class="fas fa-git">&nbsp</i> NGINX Interview Questions
                        </div>
                    </div>
                    </a>
                </li>
                <li><a href="">   <!--Link Goes Here-->
                    <div class="height blog-card alt">
                        <div class="meta">
                        <div class="photo" style="background-image: url(../img/MainPage/logo.png)"></div>
                        </div>
                        <div class="description">
                        <i class="fas fa-git">&nbsp</i> Title Goes here
                        </div>
                    </div>
                    </a>
                </li>
                <li><a href="">   <!--Link Goes Here-->
                    <div class="height blog-card alt">
                        <div class="meta">
                        <div class="photo" style="background-image: url(../img/MainPage/logo.png)"></div>
                        </div>
                        <div class="description">
                        <i class="fas fa-git">&nbsp</i> Title Goes here
                        </div>
                    </div>
                    </a>
                </li>

                
            </ul>


		    </div><!--//container-->
		</div><!--//container-->
    </div><!--//page-content-->



   
    <?php require '../templates/footer.php'; ?>


    <!-- Javascript -->

	  <script type="text/javascript" src="../lib/vanilla-tilt.min.js"></script>
  <script type="text/javascript" src="https://unpkg.com/aos@2.3.0/dist/aos.js"></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
  <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
  <script src="../js/searching.js"></script>
</body>
</html>
