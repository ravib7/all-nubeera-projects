<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "admin";

// Create a new connection
$conn = new mysqli($servername, $username, $password, $database);


if (!$conn) {
    echo "Connection failed:";
    exit();
}
?>