<?php
if (isset($_POST["export"])) {
    include("./connection.php");
    $table = "tenders";
    $filter = $_POST['filter'];
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    header('Content-Type: text/csv; charset=utf-8');
    header('Content-Disposition: attachment; filename=export.csv');
    $output = fopen('php://output', 'w');

    // Fetch the table fields
    $result = $conn->query("SHOW COLUMNS FROM $table");
    $fields = [];
    while ($row = $result->fetch_assoc()) {
        $fields[] = $row['Field'];
    }

    // Output the column headings
    fputcsv($output, $fields);

    // Prepare the query based on the selected filter
    if ($filter == 'empty') {
        // Modify this query to check for empty fields according to your table schema
        $query = "SELECT * FROM $table WHERE ";
        $conditions = [];
        foreach ($fields as $field) {
            $conditions[] = "$field IS NULL OR $field = ''";
        }
        $query .= implode(' OR ', $conditions);
    } else {
        $query = "SELECT * FROM $table";
    }

    // Log query for debugging
    error_log("SQL Query: $query");

    // Fetch the table rows
    $result = $conn->query($query);
    if ($result === false) {
        // Log error if query fails
        error_log("SQL Error: " . $conn->error);
    } else {
        // Check if any rows are returned
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                fputcsv($output, $row);
            }
        } else {
            // Log if no rows are found
            error_log("No rows found for query: $query");
        }
    }

    fclose($output);
    $conn->close();
}
?>