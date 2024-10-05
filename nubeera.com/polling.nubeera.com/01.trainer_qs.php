<html>

<head>
   <title>NubeEra Polling Trainer Questions</title>
   <!-- <meta http-equiv="refresh" content="5"> -->

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" /> <!-- fontawesome -->

   <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.min.js" integrity="sha512-OvBgP9A2JBgiRad/mM36mkzXSXaJE9BEIENnVEmeZdITvwT09xnxLtT4twkCa8m/loMbPHsvPl0T8lRGVBwjlQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> <!-- bootstrap javascript -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css" integrity="sha512-GQGU0fMMi238uA+a/bdWJfpUGKUkBdgfFdgBm72SUQ6BeyWjoY/ton0tEjH+OSH9iP4Dfh+7HM0I9f5eR0L/4w==" crossorigin="anonymous" referrerpolicy="no-referrer" /> <!-- bootstrap CSS -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> <!-- jquery -->

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/jquery.dataTables.min.css" integrity="sha512-1k7mWiTNoyx2XtmI96o+hdjP8nn0f3Z2N4oF/9ZZRgijyV4omsKOXEnqL1gKQNPy2MTSP9rIEWGcH/CInulptA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> <!-- data table CSS  -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js" integrity="sha512-BkpSL20WETFylMrcirBahHfSnY++H2O1W+UnEEO4yNIl+jI2+zowyoGJpbtk6bx97fBXf++WJHSSK2MV4ghPcg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> <!-- data table javascript  -->
</head>

<div class="container mt-5">
   <div id="message"> </div>
   <center>
      <h1 class="mt-5"> Post Your Question </h1>
   </center>
   <span id="refreshBtn" onclick="" style="float: right;
    display: inline-block; cursor: pointer; padding:5px;" class="mx-5"><i class="fas fa-sync"></i></span>
   <span style="float: right; display: inline-block;"> Auto-refresh <input type="checkbox" id="yourBox" /> after <input type='text' style="width: 40px;" id="yourText" disabled>secs
   </span>
</div>

<div class="container mt-5">
   <form action="" method="post">
      <label for="quest">Your Question : </label>
      <input type="text" placeholder="question..." name="quest" id="quest" required>
      Response type: <select id="slctResponseType" name="respType" required>
         <option value="none">SELECT</option><br><br>
         <option value="objective">Objective</option>
         <option value="tickbox">Tick Box</option>
         <option value="shortAnswer">Short Answer</option>
         <option value="ranking">Ranking</option>
      </select>
      <button type="submit">Post</button>
   </form>
</div>

<div class="container my-5" id="tableContent">
   <table class="table" id="qsTable">
      <thead>
         <tr>
            <th colspan="2" style="width: 80%; text-align: center;">Question</th>
            <th rowspan="2">Operation</th>
         </tr>
         <tr>
            <th style="width: 10%;">ID</th>
            <th style="width: 90%;">Body</th>
         </tr>
      </thead>
      <tbody id="tData">
         <?php
         include "A.Connect_Db.php";
         $questslctquery = "SELECT * FROM questions ";
         $questslctresult = mysqli_query($conn, $questslctquery);
         if ($questslctresult) {
            while ($questslctrow = mysqli_fetch_array($questslctresult)) {
               echo "<tr>
                                    <td> " . $questslctrow['Question_Id'] . " </td>
                                    <td> " . $questslctrow['Question'] . " </td>
                                    <td> <span class='glyphicon glyphicon-zoom-in' title='see responses'></span> </td>
                              </tr>";
            }
         } else {
            die("could not get fetch responses from database");
         }
         ?>
      </tbody>
   </table>
</div>

</body>

<script type="text/javascript">
   $(document).ready(function() {
      $('#qsTable').DataTable();
   });

   document.getElementById('yourBox').onchange = function() {
      document.getElementById('yourText').disabled = !this.checked;
   };

   if (window.history.replaceState) {
      window.history.replaceState(null, null, window.location.href);
   }
   // setTimeout(function(){
   //    $( "#qsTable" ).load( "01.trainer_qs.php #qsTable" );
   // }, 5000);
</script>

</html>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   // include("A.Connect_Db.php");
   $date = date('jS F Y');
   $sqlquery = "INSERT INTO questions (`Question`) VALUES('" . $_POST['quest'] . "')";
   if (mysqli_query($conn, $sqlquery)) {

      echo "<script> $('#message').html('question posted successfully');
                     $('#message').attr('class','alert alert-success');
                     $('#message').css('display', 'flex');
                     
                     $( '#qsTable' ).load(window.location.href + ' #qsTable' );
            </script>";
   } else {
      echo "<script> alert('Failed to post question!'); </script>";
   }
   mysqli_close($conn);
}

?>








































































<!-- <div class="container my-5">
  <table class="table" id="respTable">
    <thead class="table-dark">
      <tr>
        <th>Participant Names</th>
        <th>Response</th>
        <th>Time Taken</th>
      </tr>
    </thead>
    <tbody id="t2Data">
      <?php
      // include("A.Connect_Db.php");
      // $questslctquery = "SELECT reg.Full_Name, r.Response FROM registration AS reg LEFT JOIN Responses AS r ON reg.Email_Id = r.Student_Id AND r.Question_Id = '77' ORDER BY reg.Email_Id";

      // $questslctresult = mysqli_query($conn, $questslctquery);
      // if ($questslctresult)
      // {
      //     while($questslctrow = mysqli_fetch_array($questslctresult))
      //     {
      //       echo "<tr>
      //                 <td> ".$questslctrow['Full_Name']." </td>
      //                 <td> ".$questslctrow['Response']." </td>
      //                 <td> 1 min</td>
      //             </tr>";
      //     }
      // }
      // else { die("could not get fetch responses from database"); }
      ?>
    </tbody>
  </table>
</div>       -->