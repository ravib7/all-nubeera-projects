<?php 
require_once('../includes/config.php');

	if(isset($_GET['id']) && $_GET['id'] != ""){
				  $id = $_GET['id'];
                  $sql="delete from courses where CId_PK='$id'";
				  $query = mysqli_query($conn, $sql);
                  if($query){
                    header('location:courses.php');
                  }

	}
?>