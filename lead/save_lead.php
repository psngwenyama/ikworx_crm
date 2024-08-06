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

// Function to check if lead already exists
function isLeadExists($conn, $name, $email, $phone, $value, $tags, $assigned, $status, $source, $lastContact, $courseName) {
    $name = $conn->real_escape_string($name);
    $email = $conn->real_escape_string($email);
    $phone = $conn->real_escape_string($phone);
    $value = $conn->real_escape_string($value); 
    $tags = $conn->real_escape_string($tags);
    $assigned = $conn->real_escape_string($assigned);
    $status = $conn->real_escape_string($status);
    $source = $conn->real_escape_string($source);
    $lastContact = $conn->real_escape_string($lastContact);
    $courseName = $conn->real_escape_string($courseName);

    // Prepare and execute query
    $query = "SELECT COUNT(*) as count FROM leads WHERE name = '$name' AND email = '$email' AND phone = '$phone' AND value = $value AND tags = '$tags' AND assigned = '$assigned' AND status = '$status' AND source = '$source' AND last_contact = '$lastContact' AND course_name = '$courseName'";
    $result = $conn->query($query);
    if ($result && $result->num_rows > 0) {
        $data = $result->fetch_assoc();
        return $data['count'] > 0;
    }
    return false;
}

// Fetch POST data
$leadId = isset($_POST['lead_id']) ? (int)$_POST['lead_id'] : 0;
$name = $conn->real_escape_string($_POST['name']);
$company = $conn->real_escape_string($_POST['company']);
$email = $conn->real_escape_string($_POST['email']);
$phone = $conn->real_escape_string($_POST['phone']);
$value = $conn->real_escape_string($_POST['value']);
$tags = $conn->real_escape_string($_POST['tags']);
$assigned = $conn->real_escape_string($_POST['assigned']);
$status = $conn->real_escape_string($_POST['status']);
$source = $conn->real_escape_string($_POST['source']);
$lastContact = $conn->real_escape_string($_POST['last_contact']);
$courseName = $conn->real_escape_string($_POST['course_name']);
$description = $conn->real_escape_string($_POST['description']);
$created = date('Y-m-d');

// Check if lead already exists
if ($leadId == 0 && isLeadExists($conn, $name, $email, $phone, $value, $tags, $assigned, $status, $source, $lastContact, $courseName)) {
    echo json_encode(['success' => false, 'error' => 'Lead with these details already exists']);
    exit;
}

// Prepare SQL statement using prepared statements
if ($leadId > 0) {
    // Update lead
    $sql = "UPDATE leads SET name=?, company=?, email=?, phone=?, value=?, tags=?, assigned=?, status=?, source=?, last_contact=?, course_name=?, description=? WHERE lead_id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ssssdsssssssi', $name, $company, $email, $phone, $value, $tags, $assigned, $status, $source, $lastContact, $courseName, $description, $leadId);
} else {
    // Insert new lead
    $sql = "INSERT INTO leads (name, company, email, phone, value, tags, assigned, status, source, last_contact, created, course_name, description) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ssssdssssssss', $name, $company, $email, $phone, $value, $tags, $assigned, $status, $source, $lastContact, $created, $courseName, $description);
}

// Execute prepared statement and handle result
if ($stmt->execute()) {
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false, 'error' => $conn->error]);
}

$stmt->close();
$conn->close();
?>