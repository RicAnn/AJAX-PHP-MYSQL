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
$sql = "DROP TABLE MyGuests";

if ($conn->query($sql) === TRUE) {
  echo "Table deleted successfully";
} else {
  echo "Error deleting Table: " . $conn->error;
}

$conn->close();
?> 

