<?php

include "connection.php";

// Fetch total leads for each month and status
$sql = "
    SELECT 
        DATE_FORMAT(created, '%Y-%m') as month, 
        status, 
        COUNT(*) as total_leads 
    FROM leads 
    GROUP BY month, status";
$result = $conn->query($sql);

// Prepare data for the chart
$months = [];
$cold_leads = [];
$warm_leads = [];
$hot_leads = [];
$data = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $month = $row['month'];
        $status = $row['status'];
        $total_leads = $row['total_leads'];
        
        if (!isset($data[$month])) {
            $data[$month] = ['cold lead' => 0, 'warm lead' => 0, 'hot lead' => 0];
        }
        
        $data[$month][$status] = $total_leads;
    }
}

// Populate the arrays for chart data
foreach ($data as $month => $statuses) {
    $months[] = $month;
    $cold_leads[] = $statuses['cold lead'];
    $warm_leads[] = $statuses['warm lead'];
    $hot_leads[] = $statuses['hot lead'];
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leads Bar Graph</title>
    <!-- Add your CSS here -->
    <link rel="stylesheet" href="path_to_your_css">
    <!-- Chart.js CDN -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
<div class="col-md-7">
    <div class="card">
        <div class="card-header mb-3">
            <div class="row">
                <div class="col-md-7">
                    <h6>Total Leads</h6>
                </div>
                <div class="col-md-4">
                    <i class="bx bx-layer"></i>
                    <i class="bx bx-download"></i>
                </div>
            </div>
        </div>
        <div class="chart">
            <canvas id="leadsBarGraph"></canvas>
        </div>
    </div>
</div>

<script>
    // Get the data from PHP
    const months = <?php echo json_encode($months); ?>;
    const coldLeads = <?php echo json_encode($cold_leads); ?>;
    const warmLeads = <?php echo json_encode($warm_leads); ?>;
    const hotLeads = <?php echo json_encode($hot_leads); ?>;

    // Create the bar graph
    const ctx = document.getElementById('leadsBarGraph').getContext('2d');
    const leadsBarGraph = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: months,
            datasets: [
                {
                    label: 'Cold Leads',
                    data: coldLeads,
                    backgroundColor: 'rgba(54, 162, 235, 0.6)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Warm Leads',
                    data: warmLeads,
                    backgroundColor: 'rgba(255, 206, 86, 0.6)',
                    borderColor: 'rgba(255, 206, 86, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Hot Leads',
                    data: hotLeads,
                    backgroundColor: 'rgba(255, 99, 132, 0.6)',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 1
                }
            ]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                },
                x: {
                    type: 'category',
                    labels: months
                }
            }
        }
    });
</script>
</body>
</html>
