<?php
$servername = "localhost:3306";
$username = "ikwortgw_crmsystem";
$password = "IKworx@2024";
$dbname = "ikwortgw_crmsystem";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);;

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$data = json_decode(file_get_contents('php://input'), true);
$startDate = $data['startDate'];
$endDate = $data['endDate'];

$sql = "SELECT * FROM deals WHERE deal_date BETWEEN ? AND ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $startDate, $endDate);
$stmt->execute();
$result = $stmt->get_result();

$deals = [];
while ($row = $result->fetch_assoc()) {
  $deals[] = $row;
}

$stmt->close();
$conn->close();

header('Content-Type: application/json');
echo json_encode($deals);
?>
