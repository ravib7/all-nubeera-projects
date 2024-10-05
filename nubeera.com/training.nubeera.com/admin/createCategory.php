<?php 
session_start();
if(!isset($_SESSION['emailValid']) and !isset($_SESSION['isAdmin'])){
  header('Location:../index.php');
  die();
}
?>
<!-- Create Category Modal -->
<div class="modal fade" id="createCategoryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Enter New Catergory Name</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
          
       
          <div class="form-group">
            <input type="text" class="form-control" id="" placeholder="Enter Here">
          </div>
      
      </div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <a class="btn btn-primary" href="login.html">Create</a>
      </div>
    </div>
  </div>
</div>
