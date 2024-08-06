<?php
$servername = "ikwortgw_crmsystem";
$username = "ikwortgw_crmsystem";
$password = "IKworx@2024";
$dbname = "ikwortgw_crmsystem";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $owner = $_POST["owner"];
        $company = $_POST["company"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $value = $_POST["value"];
        $stage = $_POST["stage"];
        $priority = $_POST["priority"];
        $assigned = $_POST["assigned"];
        $source = $_POST["source"];
        $deal_date = $_POST["deal_date"];
        $course_name = $_POST["course_name"];

        $sql = "INSERT INTO deals (owner, company, email, phone, value, stage, priority, assigned, source, deal_date, course_name)
                VALUES ('$owner', '$company', '$email', '$phone', '$value', '$stage', '$priority', '$assigned', '$source', '$deal_date', '$course_name')";

        if ($conn->query($sql) === TRUE) {
            echo "New deal created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }
?>
