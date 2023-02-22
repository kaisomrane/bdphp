<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "store";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to delete a record
$sql = "DELETE FROM article WHERE id=".$_REQUEST['id'];

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
  header('Location: liste.php');
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>