<?php
session_start();

$servername = "localhost:3306";
$username = "ikwortgw_crmsystem";
$password = "IKworx@2024";
$dbname = "ikwortgw_crmsystem";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    error_log("Connection failed: " . $conn->connect_error);
    die("Connection failed. Please try again later.");
}

// Get assigned_user_id from session
$assigned_user_id = isset($_SESSION['id']) ? $_SESSION['id'] : 0;

$activeDeals = [];
$closedDeals = [];

// Prepare the query with the user filter
$sql = "SELECT * FROM deals WHERE assigned_user_id = ? ORDER BY deal_date DESC";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $assigned_user_id);
$stmt->execute();
$result = $stmt->get_result();

// Check if query was successful
if ($result === FALSE) {
    error_log("SQL error: " . $conn->error);
    die("Error retrieving deals. Please try again later.");
}

// Process each row
while ($row = $result->fetch_assoc()) {
    if ($row['stage'] == 'won' || $row['stage'] == 'lost') {
        $closedDeals[] = $row;
    } else {
        $activeDeals[] = $row;
    }
}

// Close the database connection
$stmt->close();
$conn->close();

// Return data as JSON
echo json_encode(['active' => $activeDeals, 'closed' => $closedDeals]);
?>
