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

// Query to retrieve tenders
$sql = "SELECT WEEK(application_date) as week, COUNT(*) as tender_count FROM tenders GROUP BY WEEK(application_date)";
$result = $conn->query($sql);

$weeklyTenders = array();
while($row = $result->fetch_assoc()) {
    $weeklyTenders[] = $row;
}

$conn->close();

// Output the JSON data
header('Content-Type: application/json');
echo json_encode($weeklyTenders);
?>
