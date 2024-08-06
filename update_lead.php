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

$lead_id = $_POST['lead_id'];
$name = $_POST['name'];
$company = $_POST['company'];
$phone = $_POST['phone'];
$status = $_POST['status'];
$source = $_POST['source'];
$created = $_POST['created'];
$assigned = $_POST['assigned'];

$sql = "UPDATE leads SET 
    name='$name', 
    company='$company', 
    phone='$phone', 
    status='$status', 
    source='$source', 
    created='$created', 
    assigned='$assigned' 
    WHERE lead_id=$lead_id";

if ($conn->query($sql) === TRUE) {
    echo "Lead updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
