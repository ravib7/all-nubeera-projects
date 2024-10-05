<?php
require_once "database.php";
?>

<?php
if (isset($_POST['district_id'])) {
  $districtId = $_POST['district_id'];
  
  // Fetch cities based on the selected district from the database
  $result = $conn->query("SELECT id, name FROM `cities` WHERE district_id = '$districtId'");
  
  $options = '<option value="">Select City</option>';
  while ($row = $result->fetch_assoc()) {
    $options .= "<option value='{$row['id']}'>{$row['name']}</option>";
  }
  
  echo $options;
}
?>
