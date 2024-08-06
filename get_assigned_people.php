<?php
$servername = "localhost:3306";
$username = "ikwortgw_crmsystem";
$password = "IKworx@2024";
$dbname = "ikwortgw_crmsystem";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch assigned people
$sql = "SELECT DISTINCT assigned FROM deals";
$result = $conn->query($sql);

$assignedPeople = [];

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $assignedPeople[] = $row['assigned'];
    }
}

$conn->close();

echo json_encode($assignedPeople);
?>
