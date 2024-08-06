<?php
session_start();

if (!isset($_SESSION['id'])) {
    die("Access denied: You are not logged in.");
}

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

$assigned_user_id = $_SESSION['id'];

// Fetch total counts of cold, warm, and hot leads for the logged-in user
$sql = "SELECT status, COUNT(*) as total FROM leads WHERE assigned_user_id = ? GROUP BY status";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $assigned_user_id);
$stmt->execute();
$result = $stmt->get_result();

$statusData = array(
    'Cold Lead' => 0,
    'Warm Lead' => 0,
    'Hot Lead' => 0
);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $statusData[$row['status']] = $row['total'];
    }
}

$stmt->close();
$conn->close();

echo json_encode($statusData);
?>
