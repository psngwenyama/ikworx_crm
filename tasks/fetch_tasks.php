<?php
session_start();
include 'db_connection.php'; // Include your database connection file

if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
    $sql = "SELECT * FROM tasks WHERE user_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $result = $stmt->get_result();

    while ($row = $result->fetch_assoc()) {
        echo '<div class="task card mb-3">';
        echo '<div class="card-body">';
        echo '<h5 class="card-title">' . htmlspecialchars($row['title']) . '</h5>';
        echo '<p class="card-text">' . htmlspecialchars($row['description']) . '</p>';
        echo '<p class="card-text"><small class="text-muted">Duration: ' . htmlspecialchars($row['duration']) . ' hours</small></p>';
        echo '<p class="card-text"><small class="text-muted">Priority: ' . htmlspecialchars($row['priority']) . '</small></p>';
        echo '<p class="card-text"><small class="text-muted">Due Date: ' . htmlspecialchars($row['due_date']) . '</small></p>';
        echo '<p class="card-text"><small class="text-muted">Status: ' . htmlspecialchars($row['status']) . '</small></p>';
        echo '<select class="form-control task-status" data-task-id="' . $row['task_id'] . '">';
        echo '<option value="Not Started"' . ($row['status'] == 'Not Started' ? ' selected' : '') . '>Not Started</option>';
        echo '<option value="In Progress"' . ($row['status'] == 'In Progress' ? ' selected' : '') . '>In Progress</option>';
        echo '<option value="Completed"' . ($row['status'] == 'Completed' ? ' selected' : '') . '>Completed</option>';
        echo '</select>';
        echo '</div>';
        echo '</div>';
    }
}
?>
