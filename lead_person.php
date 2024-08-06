<?php

include "connection.php";

// Fetch leads count per assigned person and status
$sql = "SELECT assigned, 
               SUM(status = 'cold lead') AS cold_leads,
               SUM(status = 'warm lead') AS warm_leads,
               SUM(status = 'hot lead') AS hot_leads,
               COUNT(*) as total_leads 
        FROM leads 
        GROUP BY assigned";
$result = $conn->query($sql);

$leadsPerPerson = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $leadsPerPerson[] = [
            'assigned' => $row['assigned'],
            'cold_leads' => $row['cold_leads'],
            'warm_leads' => $row['warm_leads'],
            'hot_leads' => $row['hot_leads'],
            'total_leads' => $row['total_leads']
        ];
    }
}

$conn->close();

echo json_encode($leadsPerPerson);
?>
