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

    $sql_total = "SELECT COUNT(*) as total FROM tenders";
    $sql_submitted = "SELECT COUNT(*) as submitted FROM tenders WHERE comment = 'Submitted'";
    $sql_pending = "SELECT COUNT(*) as pending FROM tenders WHERE comment != 'Submitted'";

    $result_total = $conn->query($sql_total);
    $result_submitted = $conn->query($sql_submitted);
    $result_pending = $conn->query($sql_pending);

    $total_tenders = 0;
    $submitted_tenders = 0;
    $pending_tenders = 0;

    if ($result_total->num_rows > 0) {
        $row = $result_total->fetch_assoc();
        $total_tenders = $row['total'];
    }

    if ($result_submitted->num_rows > 0) {
        $row = $result_submitted->fetch_assoc();
        $submitted_tenders = $row['submitted'];
    }

    if ($result_pending->num_rows > 0) {
        $row = $result_pending->fetch_assoc();
        $pending_tenders = $row['pending'];
    }

    $data = array(
        'total_tenders' => $total_tenders,
        'submitted_tenders' => $submitted_tenders,
        'pending_tenders' => $pending_tenders
    );

    echo json_encode($data);

    $conn->close();
?>
