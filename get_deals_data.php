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

    // Query for active deals revenue
    $activeDealsSql = "SELECT SUM(value) as active_deals_revenue FROM deals WHERE stage IN ('discovery', 'proposal', 'negotiation')";
    $activeDealsResult = $conn->query($activeDealsSql);
    $activeDealsRevenue = $activeDealsResult->fetch_assoc()['active_deals_revenue'];

    // Query for won deals average revenue
    $wonDealsAvgSql = "SELECT AVG(value) as won_deals_avg_revenue FROM deals WHERE stage = 'won' " ;
    $wonDealsAvgResult = $conn->query($wonDealsAvgSql);
    $wonDealsAvgRevenue = $wonDealsAvgResult->fetch_assoc()['won_deals_avg_revenue'];

    // Query for won deals total revenue
    $wonDealsTotalSql = "SELECT SUM(value) as won_deals_total_revenue FROM deals WHERE stage = 'won'";
    $wonDealsTotalResult = $conn->query($wonDealsTotalSql);
    $wonDealsTotalRevenue = $wonDealsTotalResult->fetch_assoc()['won_deals_total_revenue'];

    // Return data as JSON
    echo json_encode([
        'active_deals_revenue' => $activeDealsRevenue,
        'won_deals_avg_revenue' => $wonDealsAvgRevenue,
        'won_deals_total_revenue' => $wonDealsTotalRevenue
    ]);

    $conn->close();
?>
