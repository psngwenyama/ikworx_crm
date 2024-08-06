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

// Fetch total counts of cold, warm, and hot leads
$sql = "SELECT status, COUNT(*) as total FROM leads GROUP BY status";
$result = $conn->query($sql);

$statusData = array(
    'Cold Lead' => 0,
    'Warm Lead' => 0,
    'Hot Lead' => 0
);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $statusData[$row['status']] = $row['total'];
    }
} else {
    echo json_encode($statusData);
    exit;
}

$conn->close();
echo json_encode($statusData);
?>
