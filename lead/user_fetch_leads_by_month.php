<?php
// Start the session
session_start();

// Check if the user is logged in
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

// Fetch leads count per month and status for the logged-in user
$sql = "
    SELECT 
        DATE_FORMAT(created, '%Y-%m') AS month,
        SUM(status = 'Cold Lead') AS cold_leads,
        SUM(status = 'Warm Lead') AS warm_leads,
        SUM(status = 'Hot Lead') AS hot_leads
    FROM leads
    WHERE assigned_user_id = ?
    GROUP BY month
    ORDER BY month
";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $assigned_user_id);
$stmt->execute();
$result = $stmt->get_result();

$leadsData = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $leadsData[] = [
            'month' => $row['month'],
            'cold_leads' => $row['cold_leads'],
            'warm_leads' => $row['warm_leads'],
            'hot_leads' => $row['hot_leads']
        ];
    }
}

$stmt->close();
$conn->close();

echo json_encode($leadsData);
?>
