<?php
// Database connection
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
    $name = $_POST['name'];
    $company = $_POST['company'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $value = $_POST['value'];
    $tags = $_POST['tags'];
    $assigned = $_POST['assigned'];
    $status = $_POST['status'];
    $source = $_POST['source'];
    $last_contact = $_POST['last_contact'];
    $course_name = $_POST['course_name'];

    // Insert the lead details into the database
    $sql = "INSERT INTO leads (name, company, email, phone, value, tags, assigned, status, source, last_contact, course_name) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssssssss", $name, $company, $email, $phone, $value, $tags, $assigned, $status, $source, $last_contact, $course_name);

    if ($stmt->execute()) {
        echo "New lead added successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $stmt->close();
    $conn->close();
}
?>