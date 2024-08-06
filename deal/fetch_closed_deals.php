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

// Example query and fetch data
$sql = "SELECT * FROM deals WHERE stage = 'won' OR stage = 'lost'";
$result = mysqli_query($conn, $sql);

$closedDeals = array();
while ($row = mysqli_fetch_assoc($result)) {
  $closedDeals[] = $row;
}

// Output as JSON
echo json_encode($closedDeals);
?>
