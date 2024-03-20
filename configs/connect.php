<?php
$servername = "localhost:3306";
$username = "root";
$password = "123456";
$databasename = "social";
// Create connection
$conn = new mysqli($servername, $username, $password, $databasename);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>