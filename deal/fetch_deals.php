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

$activeDeals = [];
$closedDeals = [];

$sql = "SELECT * FROM deals order by deal_date desc";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    if ($row['stage'] == 'won' || $row['stage'] == 'lost') {
      $closedDeals[] = $row;
    } else {
      $activeDeals[] = $row;
    }
  }
}

$conn->close();

echo json_encode(['active' => $activeDeals, 'closed' => $closedDeals]);
?>
