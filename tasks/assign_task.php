<?php
session_start();
if (isset($_SESSION['user_id']) && $_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_POST['user_id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $duration = $_POST['duration'];
    $priority = $_POST['priority'];
    $due_date = $_POST['due_date'];

    $sql = "INSERT INTO tasks (user_id, title, description, duration, priority, due_date) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ississ", $user_id, $title, $description, $duration, $priority, $due_date);

    if ($stmt->execute()) {
        echo "Task assigned successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
