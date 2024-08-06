<?php
session_start();

// Database connection
$servername = "localhost:3306";
$username = "ikwortgw_crmsystem";
$password = "IKworx@2024";
$dbname = "ikwortgw_crmsystem";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $deal_id = $_POST['deal_id'];

    // Prepare and execute the query
    $stmt = $conn->prepare("SELECT * FROM deals WHERE deal_id = ?");
    $stmt->bind_param("i", $deal_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $deal = $result->fetch_assoc();
        echo json_encode($deal);
    } else {
        echo json_encode(null);
    }

    $stmt->close();
}
$conn->close();
?>
