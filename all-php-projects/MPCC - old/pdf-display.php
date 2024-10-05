<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Components/CSS/pdf-display.css"> 
    <title>PDF-Display</title>
</head>
<body>
    
<?php
include "Components/core/connection.php";

$sql = "SELECT file_path FROM pdf_files ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $pdfPath = $row["file_path"];
    echo "<iframe src='$pdfPath'></iframe>";
} else {
    echo "No PDF found.";
}

$conn->close();
?>

</body>
</html>
