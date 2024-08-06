<?php
$servername = "localhost:3306";
$username = "ikwortgw_crmsystem";
$password = "IKworx@2024";
$dbname = "ikwortgw_crmsystem";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tender_reference = $_POST['tender_reference'];
    $tender_name = $_POST['tender_name'];
    $application_date = $_POST['application_date'];
    $closing_date = $_POST['closing_date'];
    $contact_person = $_POST['contact_person'];
    $contact_name = $_POST['contact_name'];
    $need_briefing = $_POST['need_briefing'];
    $submission_type = $_POST['submission_type'];
    $owner = $_POST['owner'];
    $comment = $_POST['comment'];

    $sql = "INSERT INTO tenders (tender_reference, tender_name, application_date, closing_date, contact_person, contact_name, need_briefing, submission_type, owner, comment) 
        VALUES ('$tender_reference', '$tender_name', '$application_date', '$closing_date', '$contact_person', '$contact_name', '$need_briefing', '$submission_type', '$owner', '$comment')";

    if ($conn->query($sql) === TRUE) {
        echo "New tender created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

}

?>
