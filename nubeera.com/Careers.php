<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <!-- ======================================================================================== -->
  <title>NubeEra</title>
  <!-- ======================================================================================== -->
  <link rel="stylesheet" href="lib/bootstrap-grid.processed.css">
  <!-- ======================================================================================== -->
  <link rel="icon" type="image/png" href="img/logo.ico">
  <!-- ======================================================================================== -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
  <!-- ======================================================================================== -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.4.6/css/flag-icon.min.css">

  <!-- Default values-->
  <link rel="stylesheet" href="styles/style.processed.css">
  <link rel="stylesheet" href="styles/style.footer.css">
  <link rel="stylesheet" href="styles/style.nav1.css">
  <link rel="stylesheet" href="styles/style.progress.css">
  <link rel="stylesheet" href="styles/style.blogs.css">
  <link rel="stylesheet" href="styles/style.table.css">
  <!-- ======================================================================================== -->
</head>

<body class="ru home">
  <!--<div id="preloader">--> <?php //require '../../templates/preloader.php'; ?> <!--</div>-->
  <main class="site-content">

  <!-- ===============================NAVIGATION BAR=========================================== -->
  <?php require 'templates/outsidepage_navbar.php'; ?>
  <!-- ================================DISPLAY=============================================== -->


    <section>
      <br><br>

      <center><h2>Careers</h2><center>
      <br>
<br><br>
        <div class="container text-center">

            <table>

              <thead>
                <tr>
                  <th width=30%>
                    Job Title
                  </th>
                  <th width=16%>
                    <!-- Vacancy -->
                  </th>
                  <th width=12%>
                    Action
                  </th>
                </tr>
              </thead>


              <tfoot>
                <tr>
                  <th colspan='3'>
                    NubeEra
                  </th>
                </tr>
              </tfoot>


              <tbody>
                <form action="forms/applications.php" method='post'>
                <tr>
                  <td>
                  Digital Marketing
                  <input name='career' type="hidden" value="Digital Marketing"/>
                  </td>
                  <td>
                    3 <i>Vacant</i>
                  </td>
                  <td>
                  <center>  <button class="btn-Carrers" type="submit">Apply</button><center>
                  </td>
                </form>
                </tr>


                <tr>
                  <form action="forms/applications.php" method='post'>
                  <td>
                  UI & UX Designer
                  <input name='career' type="hidden" value="UI & UX Designer"/>
                  </td>
                  <td>
                      1 <i>Vacant</i>
                  </td>
                  <td>
                    <center> <button class="btn-Carrers" type="submit">Apply</button><center>
                  </td>
                </form>
                </tr>

                <tr>
                  <form action="forms/applications.php" method='post'>
                  <td>
                    Data Scientist
                  <input name='career' type="hidden" value="Data Scientist"/>
                  </td>
                  <td>
                      5 <i>Vacant</i>
                  </td>
                  <td>
                    <center> <button class="btn-Carrers" type="submit">Apply</button><center>
                  </td>
                </form>
                </tr>

                <tr>
                  <form action="forms/applications.php" method='post'>
                  <td>
                  Full Stack Developer (PHP/Python)
                  <input name='career' type="hidden" value="Full Stack Developer (PHP/Python)"/>
                  </td>
                  <td>
                      5 <i>Vacant</i>
                  </td>
                  <td>
                    <center> <button class="btn-Carrers" type="submit">Apply</button><center>
                  </td>
                </form>
                </tr>



              </tbody>
            </table>

            </div>
          </section>
         <!-- ======================================================================================== -->
  </main>

  <!-- ================================Application Form======================================== -->
  <div class="popup__wrap" id="popup">
    <div class="popup">
      <div class="close" id="popupClose"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path class="close-filled" d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"></path><path d="M0 0h24v24H0z" fill="none"></path></svg></div>
      <div
        class="popup__title">Contact Us</div>
    <div class="popup__desc">Get in touch and we'll get back to you as soon as we can. We look forward to hearing from you!</div>
      <form class="material-form" action="" method="POST">
        <div class="form_material-group"><input class="form_material-input" type="text" required><span class="highlight"></span><span class="bar"></span><label>Full Name</label></div>
        <div class="form_material-group"><input class="form_material-input" type="text" required><span class="highlight"></span><span class="bar"></span><label>Email</label></div>
        <div class="form_material-group"><textarea class="form_material-input" rows="5" cols="50" required></textarea><span class="highlight"></span><span class="bar"></span><label>Message</label></div>
        <button class="btn" type="submit">Submit</button>
      </form>
    <div class="popup__footer">
      <p>TEXT</p>
      <p><a href="mailto:balsamleti@gmail.com">balsamleti@gmail.com</a><br><a href="tel:">Mobile</a></p>
    </div>
    </div>
  </div>
  <!-- ================================END Application Form======================================== -->

  <?php require 'templates/footer.php'; ?>
  <!-- ==================================================Script Section============================================== -->

  <script type="text/javascript" src="lib/vanilla-tilt.min.js"></script>
  <!-- ======================================================================================================== -->
  <script type="text/javascript" src="https://unpkg.com/aos@2.3.0/dist/aos.js"></script>

  <!-- <script type="text/javascript" src="https://unpkg.com/aos@2.3.0/dist/aos.js"></script> -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
  <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
  <!-- ======================================================================================================== -->
  <script src="js/main.js"></script>
  <script  src="js/table.js"></script>
  <script src="js/nav1.js"></script>
  <!-- ======================================================================================================== -->
</body>
</html>
