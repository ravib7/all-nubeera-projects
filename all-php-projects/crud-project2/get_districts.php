<?php
require_once "database.php";
?>

<?php
if (isset($_POST['state_id'])) {
  $stateId = $_POST['state_id'];
  
  // Fetch districts based on the selected state from the database
  $result = $conn->query("SELECT id, name FROM `districts` WHERE state_id = '$stateId'");
  
  $options = '<option value="">Select District</option>';
  while ($row = $result->fetch_assoc()) {
    $options .= "<option value='{$row['id']}'>{$row['name']}</option>";
  }
  
  echo $options;
}
?>
