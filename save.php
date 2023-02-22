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

$sql = "UPDATE article SET nom= '".$_POST["nom"]."', prix=".$_POST["prix"].", qte=".$_POST["qte"]." where id=".$_POST["id"];

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
  header('Location: liste.php');
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>