<!DOCTYPE HTML>
<html>  
<body>

<form action="save.php" method="post">


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

$sql = "SELECT * FROM article where id = ".$_REQUEST['id'];
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  $row = $result->fetch_assoc() ;
    echo "ID: <input type='number' name='id' value=" . $row["id"]. "><br>";
    echo "Name: <input type='text' name='nom' value='" . $row["nom"]. "'><br>";
    echo "Prix: <input type='number' name='prix' value=" . $row["prix"]. "><br>";
    echo "Qte: <input type='number' name='qte' value=" . $row["qte"]. "><br>";

} else {
  echo "0 results";
}
$conn->close();
?>

<input type="submit">
</form>

</body>
</html>