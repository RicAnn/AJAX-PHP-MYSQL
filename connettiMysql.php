 <?php

require 'conn_mysql.cfg';

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

echo 'Connesso a MYSQL ';
$conn->close();
?> 

