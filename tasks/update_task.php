<?php
session_start();
include 'connection.php'; // Include your database connection file

if (isset($_SESSION['id']) && $_SERVER["REQUEST_METHOD"] == "POST") {
    $task_id = $_POST['task_id'];
    $status = $_POST['status'];

    $sql = "UPDATE tasks SET status = ? WHERE task_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("si", $status, $task_id);

    if ($stmt->execute()) {
        echo "Task status updated.";
    } else {
        echo "Error updating task: " . $stmt->error;
    }
}
?>
