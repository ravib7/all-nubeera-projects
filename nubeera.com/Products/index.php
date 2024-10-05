<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>NubeEra</title>
  <link rel="stylesheet" href="lib/bootstrap-grid.processed.css">
  <link rel="icon" type="image/png" href="img/logo.ico">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.4.6/css/flag-icon.min.css">
  <!-- Default values-->
  <link rel="stylesheet" href="styles/style.processed.css">
  <link rel="stylesheet" href="styles/style.team.css">
  <link rel="stylesheet" href="styles/style.footer.css">
  <link rel="stylesheet" href="styles/style.nav1.css">
  <link rel="stylesheet" href="styles/style.progress.css">
  <!-- ======================================================================================== -->
</head>

<body class="ru home">
  <!--<div id="preloader">--> <?php //require '../../templates/preloader.php'; ?> <!--</div>-->
    <main class="site-content">

  <!-- ===============================NAVIGATION BAR=========================================== -->
  <?php require 'templates/outsidepage_navbar.php'; ?>
  <!-- ================================DISPLAY=============================================== -->


    <section id="works">
      <div class="container text-center">
        <br><br>
        <h2>PRODUCTS</h2>
        <br>
        <div class="row projectsGrid">

          <p style="text-align:justify;">We have variety of products mainly focused on AI and ML. Number of our products are related to web development, mobile applications, digital strategy, e-commerce website, customer communication products, video analytics, SaaS et cetera.</p>

          <p style="text-align:justify;">Following is an example of our Chat de Intello which can be plugged into all the latest digital platforms. In the current era, if one is having an online business it's must to have a chat application. Chat de Intello, not being a replacement of manpower, but to enhance the productivity.</p>

          <p style="text-align:justify;">Trend of using messaging as opposed to calling is growing rapidly. What Chat de Intello does is asks the user intelligent questions and as it gets answer it keeps eliminating the unnecessary fields and finally makes a time slot for appointment. At the end of the day human agent has the exact requirement of user and details about him.
             All the agent has to do is just call in user and finalize the business, no more burden of asking too many questions.</p>

        </div>
        <div class="row projectsGrid">

          <article class="col-sm-4">
            <a href="#">
              <div class="browser-mockup with-url" data-tilt data-tilt-scale="1.1"><img src="./img/vdo_analysis.jpg"></div>
              <h3 class="entry-title">Video Analysis</h3>
            </a>
            <div class="entry-content">
              <p style="text-align:justify;">Our video analytics tool analyses whole video in seconds. Just upload video and it will show results like;
                Number of people in full length video.
                Number of male and female.
                Number of appearance of a particular person in video.
                Total time duration of Mr. X being present in video.
                Was he/she happy or sad, excited or depressed in entire video or in specific part of video.
                Was the person paying attention or was distracted.
                and many more features..</p>
            </div>
          </article>
          <article class="col-sm-4">
            <a href="#">
              <div class="browser-mockup with-url" data-tilt data-tilt-scale="1.1"><img src="./img/architecture.png"></div>
              <h3 class="entry-title">Software Architecture</h3>
            </a>
            <div class="entry-content">
              <p style="text-align:justify;">Software architecture is all about software characteristics.
                Security of a software, flexibility in making editions and scale of software are some of the main characteristics.
                Such characteristics are scaled on operational level.

                Market environment is changing constantly which puts a lot of burden on softwares and that is where architecture comes handy.
                 The everchanging requirements need everchanging software; a software designed with architecture is like built with foreseeable
                 future where it’s easy to alter and reliable and tolerable to add or remove any features as per recent requirements.</p>
            </div>
          </article>
          <article class="col-sm-4">
            <a href="#">
              <div class="browser-mockup with-url" data-tilt data-tilt-scale="1.1"><img src="./img/sentiment_analysis.jpg"></div>
              <h3 class="entry-title">Sentimental Analysis</h3>
            </a>
            <div class="entry-content">
              <p style="text-align:justify;">Big fishes spend millions on categorizing feedback they receive online from their end users to improve services.
                 Even medium cap companies spend thousands of dollars monthly on sentimental analysis. Websites like Facebook, Yellow Pages
                  and Indeed earn a big chunk of their revenue from feedbacks that consumers or employees provide about their service provider and/or employer.

                  Our sentimental analysis softwares are going to make this much easier. It will segregate thousands of comments in matter of seconds
                  with 99% accuracy. It's EASY, TIME SAVING at the same time COST EFFECTIVE.</p>
            </div>
          </article>
        </div>

      </div>
    </section>
   <!-- ======================================================================================== -->
  </main>

  <?php require 'templates/footer.php'; ?>
  <!-- ==================================================Script Section============================================== -->

  <script type="text/javascript" src="lib/vanilla-tilt.min.js"></script>
  <script type="text/javascript" src="https://unpkg.com/aos@2.3.0/dist/aos.js"></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
  <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>

  <script src="js/main.js"></script>
  <script src="js/navmenu.js"></script>

</body>
</html>
