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

// List of assigned persons to exclude
$excludedPersons = ["name", "Teddy Mapoko","Kholeka Mabombo","Lesego","Sinenhlanhla Keepeng","Vincentia Seane"]; // Replace with the names you want to exclude

// Prepare the SQL query to fetch total leads per assigned person excluding certain persons
$sql = "SELECT assigned, COUNT(*) as total_leads FROM leads WHERE assigned NOT IN ('" . implode("','", $excludedPersons) . "') GROUP BY assigned";
$result = $conn->query($sql);

$leadsData = array();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $leadsData[] = $row;
    }
} else {
    echo json_encode([]);
    exit;
}

$conn->close();
echo json_encode($leadsData);
?>
