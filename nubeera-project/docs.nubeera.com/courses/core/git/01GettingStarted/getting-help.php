<!DOCTYPE html>
<html lang="en">

<head>
	<title>NubeEra Git Docs</title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="NubeEra Git Docs">

	<link rel="icon" type="image/png" href="https://nubeera.com/img/logo.ico">

	<!-- FontAwesome JS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css" integrity="sha512-GQGU0fMMi238uA+a/bdWJfpUGKUkBdgfFdgBm72SUQ6BeyWjoY/ton0tEjH+OSH9iP4Dfh+7HM0I9f5eR0L/4w==" crossorigin="anonymous" referrerpolicy="no-referrer" /> <!-- bootstrap CSS -->

	<!-- Theme CSS -->
	<link id="theme-style" rel="stylesheet" href="../../../../assets/css/theme.css">

	<link rel="stylesheet" href="https://www.nubeera.com/styles/style.processed.css">
	<link rel="stylesheet" href="https://www.nubeera.com/styles/style.footer.css">
	<link rel="stylesheet" href="https://www.nubeera.com/styles/style.nav1.css">
    <link rel="stylesheet" href="../../../../boto_topics.css">

	<style>
		ul.breadcrumb {
			padding: 10px 16px;
			list-style: none;
			background-color: #eee;
		}

		ul.breadcrumb li {
			display: inline;
			font-size: 18px;
		}

		ul.breadcrumb li+li:before {
			padding: 8px;
			color: black;
			content: "/\00a0";
		}

		ul.breadcrumb li a {
			color: #0275d8;
			text-decoration: none;
		}

		ul.breadcrumb li a:hover {

			text-decoration: underline;
		}

		ul#lists {
			width: 100%;
			position: absolute;
			background: white;
			box-shadow: 1px 1px 10px gray;
			height: auto;
			z-index: 1;
		}

		ul#lists li {
			display: none;
			width: 107%;
			z-index: 1;
			position: relative;
			left: -7%;
			cursor: pointer;

			font-size: 0.85rem;
			padding: 0.5rem 3rem 0.5rem 1.5rem;
			height: 2.4rem;
			line-height: 1.5;
			color: #919aaa;
		}

		ul#lists li:hover {
			background: gainsboro;
			padding-left: 1.6rem;
		}

		ul#lists li a {
			text-decoration: none;
			color: #919aaa;
		}

		.mic-btn {
			color: black;
			background: none;
			border: none;
			position: absolute;
			right: 3.5rem;
			top: 0.90rem;
			margin-right: 0;
			font-size: 1.1rem;
			cursor: pointer;
		}

		.clear-btn {
			color: #828d9f;
			background: none;
			border: none;
			position: absolute;
			right: 6.8rem;
			top: 0.70rem;
			margin-right: 0;
		}

		button#clearBtn {
			display: none;
		}
	</style>

</head>

<body>

	<!-- Navigation Bar -->
	<?php require '../../../../templates/navbar.php';?>

    <div id="modal-sidepanel">

        <div class="row side-panel-box" id="side-panel-box" style="left: 0px;">
            <button onclick="openNav()" id="side-panel-toggle"><i class='fa fa-chevron-left' aria-hidden='true'></i></button>
            <div class="col-md-12 side-panel">
                <strong class="px-2" style="font-size: 1.125rem;">Getting Started</strong><br><br>
                     <ul>
                     <li><a href="index.php">About version control</a></li>
                     <li><a href="short-history-of-git.php">Short history of git</a></li>
                     <li><a href="what-is-git.php">What is Git?</a></li>
                     <li><a href="the-command-line.php">The Command Line</a></li>   
                     <li><a href="installing-git.php">Installing Git</a></li>
                     <li><a href="first-time-git-setup.php">First-Time Git setup</a></li>
                     <li><a href="getting-help.php">Getting Help</a></li>
                  </ul>
            </div>
        </div>

    </div>
    <span class="p-3" id="top-nav"><button id="sm-side-panel-toggle" data-toggle="modal" data-target="" data-backdrop="false"><i class="fas fa-ellipsis-h"></i></button></span>

    <div class="content-box" id="content-box">
        <div class="body-content">
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">Getting Started with Git</h1>
            <ol class="breadcrumb mx-5 mt-3 px-0">
                <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                <li class="breadcrumb-item"><a href="../../">Core</a></li>
                <li class="breadcrumb-item"><a href="../">Git</a></li>
                <li class="breadcrumb-item active">Getting started</li>
            </ol>
            <div class="px-5 pb-5 pt-0 body-text">
                  <div id="main" class="book edition2">
    <h2>Getting Started - Getting Help</h2>
  <div>
<h3 id="_git_help">Getting Help</h3>
<div class="paragraph">
If you ever need help while using Git, there are three equivalent ways to get the comprehensive manual page (manpage) help for any of the Git commands:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git help &lt;verb&gt;
$ git &lt;verb&gt; --help
$ man git-&lt;verb&gt;</blockquote></pre>
</div>
</div>
<div class="paragraph">
For example, you can get the manpage help for the <code>git config</code> command by running this:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git help config</blockquote></pre>
</div>
</div>
<div class="paragraph">
These commands are nice because you can access them anywhere, even offline.
If the manpages and this book aren’t enough and you need in-person help, you can try the <code>#git</code>, <code>#github</code>, or <code>#gitlab</code> channels on the Libera Chat IRC server, which can be found at <a href="https://libera.chat/" class="bare">https://libera.chat/</a>.
These channels are regularly filled with hundreds of people who are all very knowledgeable about Git and are often willing to help.
</div><br>
<div class="paragraph">
In addition, if you don’t need the full-blown manpage help, but just need a quick refresher on the available options for a Git command, you can ask for the more concise “help” output with the <code>-h</code> option, as in:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git add -h
usage: git add [&lt;options&gt;] [--] &lt;pathspec&gt;...

    -n, --dry-run               dry run
    -v, --verbose               be verbose

    -i, --interactive           interactive picking
    -p, --patch                 select hunks interactively
    -e, --edit                  edit current diff and apply
    -f, --force                 allow adding otherwise ignored files
    -u, --update                update tracked files
    --renormalize               renormalize EOL of tracked files (implies -u)
    -N, --intent-to-add         record only the fact that the path will be added later
    -A, --all                   add changes from all tracked and untracked files
    --ignore-removal            ignore paths removed in the working tree (same as --no-all)
    --refresh                   don't add, only refresh the index
    --ignore-errors             just skip files which cannot be added because of errors
    --ignore-missing            check if - even missing - files are ignored in dry run
    --chmod (+|-)x              override the executable bit of the listed files
    --pathspec-from-file &lt;file&gt; read pathspec from file
    --pathspec-file-nul         with --pathspec-from-file, pathspec elements are separated with NUL character</blockquote></pre>
</div>
</div>
</div>
</div>
            </div>
       </div>
	<?php require "../../../../templates/footer_outer.php"?>
</div>
	<!-- Javascript -->

	<script type="text/javascript" src="lib/vanilla-tilt.min.js"></script>
	<script type="text/javascript" src="https://unpkg.com/aos@2.3.0/dist/aos.js"></script>
   	<script defer src="../../../../assets/fontawesome/js/all.min.js"></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
	<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
	<script src="https://www.nubeera.com/js/navmenu.js"></script>
   <script>
            function openNav() {
                var x = document.getElementById("side-panel-box");
                if (x.style.left == "0px") {
                    x.style.left = "-25%";
                    $('#side-panel-toggle').css("left", "101%");
                    $('#content-box').css("marginRight", "12%");
                    $('#content-box').css('marginLeft', '12%');
                    $('#side-panel-toggle').html("<i class='fa fa-chevron-right' aria-hidden='true'></i>");
                } else {
                    x.style.left = "0px";
                    $('#side-panel-toggle').css("left", "80%");
                    $('#content-box').css("marginRight", "");
                    $('#content-box').css('marginLeft', '24%');
                    $('#side-panel-toggle').html("<i class='fa fa-chevron-left' aria-hidden='true'></i>");
                }
            }
            var x = window.matchMedia("(max-width: 750px)");
            myFunction(x); // Call listener function at run time
            x.addListener(myFunction);

            function myFunction(x) {
                if (x.matches) { // If media query matches
                    $('#modal-sidepanel').attr('class', 'modal');
                } else {
                    $('#modal-sidepanel').attr('class', '');
                }
            }
        </script>
</body>

</html>