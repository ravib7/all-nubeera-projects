<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "mpcc";

// Create a new connection
$conn = new mysqli($servername, $username, $password, $database);


if (!$conn) {
    echo "Connection failed:";
    exit();
}
?>
