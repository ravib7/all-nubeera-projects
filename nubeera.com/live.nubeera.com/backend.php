
<?php
if($_GET['data'] = "fetchplylist")
{
   include "Connect_Db.php";
   $query = "SELECT * FROM material Where Batch_Name = '".$_POST['batchNamevalue']."'";
   $result = mysqli_query($conn_2, $query);

   if (mysqli_num_rows($result) > 0) {
      // output data of each row
      $row = mysqli_fetch_assoc($result);
      ?>
      <h3 class="pt-3 px-3" style="color: white;"><?php echo $row["Batch_Name"]; ?> <h3>
      <li>
         <a href="#vid-cont" onClick="document.getElementById('vid_frame').src='<?php echo $row["MaterialURL"]; ?>?rel=0&showinfo=0&autohide=1'">
            <span class="vid-thumb"><img width=100 src="../img/logo.ico" /></span>
            <div class="desc"><?php echo $row["MaterialName"]; ?></div>
         </a>
      </li>
      <?php while ($row = mysqli_fetch_assoc($result)) {?>
      
                        <li>
                           <a href="#vid-cont"
                              onClick="document.getElementById('vid_frame').src='<?php echo $row["MaterialURL"]; ?>?rel=0&showinfo=0&autohide=1'">
                              <span class="vid-thumb"><img width=100 src="../img/logo.ico" /></span>
                              <div class="desc"><?php echo $row["MaterialName"]; ?></div>
                           </a>
                        </li>
                        <?php }
   } else {
      echo " Playlist Fetch Failed".$_POST['batchNamevalue'];
   }
   mysqli_close($conn);
}

 ?>
 