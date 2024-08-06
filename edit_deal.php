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

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $deal_id = $_POST["deal_id"];
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

        $sql = "UPDATE deals SET owner='$owner', company='$company', email='$email', phone='$phone', value='$value', stage='$stage', priority='$priority', assigned='$assigned', source='$source', deal_date='$deal_date', course_name='$course_name' WHERE deal_id='$deal_id'";

        if ($conn->query($sql) === TRUE) {
            echo "Deal updated successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }
?>
