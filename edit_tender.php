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

$tenderId = $_POST['tenderId'];
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

$sql = "UPDATE tenders SET 
    tender_reference = '$tenderReference',
    tender_name = '$tenderName',
    application_date = '$applicationDate',
    closing_date = '$closingDate',
    contact_person = '$contactPerson',
    contact_name = '$contactName',
    need_briefing = '$needBriefing',
    submission_type = '$submissionType',
    owner = '$owner',
    comment = '$comment'
    WHERE tender_id = $tenderId";

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
