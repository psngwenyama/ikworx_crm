<?php
session_start();

if (!isset($_SESSION['id'])) {
    die("Access denied: You are not logged in.");
}

$servername = "localhost:3306";
$username = "ikwortgw_crmsystem";
$password = "IKworx@2024";
$dbname = "ikwortgw_crmsystem";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$itemsPerPage = 5;
$offset = ($page - 1) * $itemsPerPage;

$query = isset($_GET['query']) ? $conn->real_escape_string($_GET['query']) : '';
$startDate = isset($_GET['startDate']) ? $conn->real_escape_string($_GET['startDate']) : '';
$endDate = isset($_GET['endDate']) ? $conn->real_escape_string($_GET['endDate']) : '';

// Fetch the assigned_user_id from the session
$assigned_user_id = $_SESSION['id'];

$sql = "SELECT * FROM leads WHERE assigned_user_id = '$assigned_user_id'";

if ($query) {
    $sql .= " AND (name LIKE '%$query%' OR company LIKE '%$query%' OR email LIKE '%$query%' OR phone LIKE '%$query%' OR tags LIKE '%$query%' OR source LIKE '%$query%' OR course_name LIKE '%$query%')";
}

if ($startDate && $endDate) {
    $sql .= " AND created BETWEEN '$startDate' AND '$endDate'";
} elseif ($startDate) {
    $sql .= " AND created >= '$startDate'";
} elseif ($endDate) {
    $sql .= " AND created <= '$endDate'";
}

$sql .= " ORDER BY created DESC LIMIT $itemsPerPage OFFSET $offset";

$result = $conn->query($sql);

$leads = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $leads[] = $row;
    }
}

// Get the total number of leads for pagination
$totalSql = "SELECT COUNT(*) as total FROM leads WHERE assigned_user_id = '$assigned_user_id'";

if ($query) {
    $totalSql .= " AND (name LIKE '%$query%' OR company LIKE '%$query%' OR email LIKE '%$query%' OR phone LIKE '%$query%' OR tags LIKE '%$query%' OR source LIKE '%$query%' OR course_name LIKE '%$query%')";
}

if ($startDate && $endDate) {
    $totalSql .= " AND created BETWEEN '$startDate' AND '$endDate'";
} elseif ($startDate) {
    $totalSql .= " AND created >= '$startDate'";
} elseif ($endDate) {
    $totalSql .= " AND created <= '$endDate'";
}

$totalResult = $conn->query($totalSql);
$totalRow = $totalResult->fetch_assoc();
$total = $totalRow['total'];

$conn->close();

echo json_encode(['total' => $total, 'leads' => $leads]);
?>
