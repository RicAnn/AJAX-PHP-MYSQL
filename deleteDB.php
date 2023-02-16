 <?php
require 'conn_mysql.cfg';
$dbname = "from_php";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to delete a record
$sql = "DROP DATABASE from_php";

if ($conn->query($sql) === TRUE) {
  echo "Database deleted successfully";
} else {
  echo "Error deleting Database: " . $conn->error;
}

$conn->close();
?> 
