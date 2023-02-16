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
$sql = "DELETE FROM MyGuests WHERE 1";

if ($conn->query($sql) === TRUE) {
  echo "Records deleted successfully";
} else {
  echo "Error deleting records: " . $conn->error;
}

$conn->close();
?> 

