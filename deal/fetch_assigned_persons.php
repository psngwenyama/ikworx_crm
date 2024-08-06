<?php
$servername = "localhost:3306";
$username = "ikwortgw_crmsystem";
$password = "IKworx@2024";
$dbname = "ikwortgw_crmsystem";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$assignedPersons = [];

$sql = "SELECT DISTINCT assigned FROM deals";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $assignedPersons[] = ['name' => $row['assigned']];
  }
}

$conn->close();

echo json_encode($assignedPersons);
?>
