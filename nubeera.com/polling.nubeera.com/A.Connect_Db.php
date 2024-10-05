<?php

$servername = "107.180.0.10";
// $servername = "localhost";
$username = "dbuser";
$password = "an6ddN1rNn-X";
$dbname = "nubeera_db";
  
// Create connection
$conn = new mysqli($servername, 
    $username, $password, $dbname);
  
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " 
        .$conn->connect_error);
}

?>