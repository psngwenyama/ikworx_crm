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

$owner = isset($_GET['owner']) ? $_GET['owner'] : 'all';

$sql = "SELECT * FROM tenders";
if ($owner != 'all') {
    $sql .= " WHERE owner = ?";
}
$sql .= " ORDER BY closing_date DESC limit 5";

$stmt = $conn->prepare($sql);
if ($owner != 'all') {
    $stmt->bind_param("s", $owner);
}
$stmt->execute();
$result = $stmt->get_result();

$tenders = array();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $tenders[] = $row;
    }
}

$conn->close();

echo json_encode($tenders);
?>
