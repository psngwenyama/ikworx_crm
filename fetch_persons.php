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

$sql = "SELECT DISTINCT owner FROM tenders";
$result = $conn->query($sql);

$owners = array();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $owners[] = $row['owner'];
    }
}

$conn->close();

echo json_encode($owners);
?>
