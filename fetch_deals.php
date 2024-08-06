<?php
    
    $servername = "localhost:3306";
    $username = "ikwortgw_crmsystem";
    $password = "IKworx@2024";
    $dbname = "ikwortgw_crmsystem";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);;

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $assignedPerson = isset($_GET['assignedPerson']) ? $_GET['assignedPerson'] : '';

    $sql = "SELECT * FROM deals ORDER BY deal_date desc LIMIT 5";
    $result = $conn->query($sql);

    if ($assignedPerson) {
        $sql .= " WHERE assigned = '" . $conn->real_escape_string($assignedPerson) . "'";
    }

    $deals = array();
    while ($row = $result->fetch_assoc()) {
        $deals[] = $row;
    }

    $conn->close();

    echo json_encode($deals);
    
?>
