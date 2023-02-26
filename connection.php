<?php

$servername = $_POST["H"];
$username = $_POST["U"];
$password = $_POST["P"];

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

echo 'Connected to MYSQL ';
$conn->close();
?> 
