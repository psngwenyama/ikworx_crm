<?php
// Database connection parameters
include("connection.php");

// SQL query to count warm, cold, and hot leads for each day in the previous week
$sql = "SELECT 
            DATE(ConversionDate) AS LeadDate,
            SUM(CASE WHEN Status = 'warm' THEN 1 ELSE 0 END) AS WarmLeads,
            SUM(CASE WHEN Status = 'cold' THEN 1 ELSE 0 END) AS ColdLeads,
            SUM(CASE WHEN Status = 'hot' THEN 1 ELSE 0 END) AS HotLeads
        FROM 
            leads
       ";

$result = $conn->query($sql);

$data = array();
while ($row = $result->fetch_assoc()) {
    $data[] = array(
        'date' => $row['LeadDate'],
        'warm' => $row['WarmLeads'],
        'cold' => $row['ColdLeads'],
        'hot' => $row['HotLeads']
    );
}


// Close connection
$conn->close();

// Return data as JSON
header('Content-Type: application/json');
echo json_encode($data);

?>
