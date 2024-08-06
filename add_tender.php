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

$tenderReference = $_POST['tenderReference'];
$tenderName = $_POST['tenderName'];
$applicationDate = $_POST['applicationDate'];
$closingDate = $_POST['closingDate'];
$contactPerson = $_POST['contactPerson'];
$contactName = $_POST['contactName'];
$needBriefing = $_POST['needBriefing'];
$submissionType = $_POST['submissionType'];
$owner = $_POST['owner'];
$comment = $_POST['comment'];

$sql = "INSERT INTO tenders (tender_reference, tender_name, application_date, closing_date, contact_person, contact_name, need_briefing, submission_type, owner, comment)
VALUES ('$tenderReference', '$tenderName', '$applicationDate', '$closingDate', '$contactPerson', '$contactName', '$needBriefing', '$submissionType', '$owner', '$comment')";

$response = array();

if ($conn->query($sql) === TRUE) {
    $response['success'] = true;
} else {
    $response['success'] = false;
    $response['message'] = "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

echo json_encode($response);
?>
