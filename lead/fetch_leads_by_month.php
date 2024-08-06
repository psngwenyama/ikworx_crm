<?php
// fetch_leads_by_month.php

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

// Fetch leads count per month and status
$sql = "
    SELECT 
        DATE_FORMAT(created, '%Y-%m') AS month,
        SUM(status = 'cold lead') AS cold_leads,
        SUM(status = 'warm lead') AS warm_leads,
        SUM(status = 'hot lead') AS hot_leads
    FROM leads
    GROUP BY month
    ORDER BY month
";
$result = $conn->query($sql);

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

$conn->close();

echo json_encode($leadsData);
?>
