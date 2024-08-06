<?php
session_start();

$servername = "localhost:3306";
$username = "ikwortgw_crmsystem";
$password = "IKworx@2024";
$dbname = "ikwortgw_crmsystem";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    error_log("Connection failed: " . $conn->connect_error);
    die("Connection failed. Please try again later.");
}

// Get assigned_user_id from session
$assigned_user_id = isset($_SESSION['id']) ? $_SESSION['id'] : 0;

// Get POST data
$owner = $_POST['owner'];
$company = $_POST['company'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$value = $_POST['value'];
$stage = $_POST['stage'];
$priority = $_POST['priority'];
$assigned = $_POST['assigned'];
$source = $_POST['source'];
$deal_date = $_POST['deal_date'];
$course_name = $_POST['course_name'];

// Prepare and execute the SQL statement
$sql = "INSERT INTO deals (owner, company, email, phone, value, stage, priority, assigned, source, deal_date, course_name, assigned_user_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssdssssssi", $owner, $company, $email, $phone, $value, $stage, $priority, $assigned, $source, $deal_date, $course_name, $assigned_user_id);

if ($stmt->execute()) {
    echo json_encode(['success' => true, 'message' => 'Deal added successfully']);
} else {
    error_log("SQL error: " . $stmt->error);
    echo json_encode(['success' => false, 'message' => 'Failed to add deal']);
}

$stmt->close();
$conn->close();
?>
