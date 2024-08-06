<?php
$servername = "localhost:3306";
$username = "ikwortgw_crmsystem";
$password = "IKworx@2024";
$dbname = "ikwortgw_crmsystem";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);;

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$leadId = isset($_GET['lead_id']) ? (int)$_GET['lead_id'] : 0;

$sql = "SELECT * FROM leads WHERE lead_id = $leadId";
$result = $conn->query($sql);

$lead = null;
if ($result->num_rows > 0) {
    $lead = $result->fetch_assoc();
}

$conn->close();

echo json_encode($lead);
?>
