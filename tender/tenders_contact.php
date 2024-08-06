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

    // Fetch data from the "tenders" table
    $sql = "SELECT tender_name, contact_person, submission_type, need_briefing, owner, comment, contact_number FROM tenders";
    $result = $conn->query($sql);

    // Prepare an array to hold the data
    $tenders = [];

    if ($result->num_rows > 0) {
        // Fetch each row of data
        while($row = $result->fetch_assoc()) {
            $tenders[] = $row;
        }
    }

    // Close connection
    $conn->close();

    // Output data as JSON
    header('Content-Type: application/json');
    echo json_encode($tenders);
?>
