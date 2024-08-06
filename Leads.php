<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    header("Location: login_form.html");
    exit;
}

$username = $_SESSION['username'];
$profile_picture = $_SESSION['profile_picture'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@2.0.9/css/boxicons.min.css" />
    <title>Side Navigation Bar in HTML CSS JavaScript</title>
    <link rel="stylesheet" href="./css/style.css" />
    <style>
      .profile{
        cursor: pointer;
      }
    </style>
  </head>
  <body>

    <nav class="navbar">
      <div class="logo_item">
        <i class="bx bx-menu" id="sidebarOpen"></i>
        <img src="images/IKWORX LOGO.png" alt=""></i>
      </div>

      <div class="search_bar">
        <input type="text" placeholder="Search" />
      </div>

      <div class="navbar_content">
        <i class="bi bi-grid"></i>
        <i class='bx bx-sun' id="darkLight"></i>
        <i class='bx bx-bell' ></i>
        <img src="<?php echo htmlspecialchars($profile_picture); ?>" alt="Profile Picture"  class="profile" style="border-radius: 50%;width: 35px;height: 35px;object-fit: cover;">
      </div>
    </nav>


    <nav class="sidebar">
      <div class="menu_content">
        <ul class="menu_items">
          <div class="menu_title menu_dahsboard"></div>
          <!-- duplicate or remove this li tag if you want to add or remove navlink with submenu -->
          <!-- start -->
          <li class="item">
            <div href="#" class="nav_link submenu_item">
              <span class="navlink_icon">
                <i class="bx bx-home-alt"></i>
              </span>
              <span class="navlink">Home</span>
              <i class="bx bx-chevron-right arrow-left"></i>
            </div>

            <ul class="menu_items submenu">
              <a href="#" class="nav_link sublink">Activities</a>
              <a href="#" class="nav_link sublink">Clock in</a>
              <a href="#" class="nav_link sublink">Nav Sub Link</a>
              <a href="#" class="nav_link sublink">Nav Sub Link</a>
            </ul>
          </li>
          <!-- end -->

          <!-- duplicate this li tag if you want to add or remove  navlink with submenu -->
          <!-- start -->
          <li class="item">
            <div href="#" class="nav_link submenu_item">
              <span class="navlink_icon">
                <i class="bx bx-grid-alt"></i>
              </span>
              <span class="navlink">Overview</span>
              <i class="bx bx-chevron-right arrow-left"></i>
            </div>

            <ul class="menu_items submenu">
              <a href="#" class="nav_link sublink">Nav Sub Link</a>
              <a href="#" class="nav_link sublink">Nav Sub Link</a>
              <a href="#" class="nav_link sublink">Nav Sub Link</a>
              <a href="#" class="nav_link sublink">Nav Sub Link</a>
            </ul>
          </li>
          <!-- end -->
    
        <li class="item">
          <div href="#" class="nav_link submenu_item">
            <span class="navlink_icon">
              <i class="bx bx-line-chart"></i>
            </span>
            <span class="navlink">Accounts</span>
            <i class="bx bx-chevron-right arrow-left"></i>
          </div>

          <ul class="menu_items submenu">
            <a href="#" class="nav_link sublink">Contacts</a>
            <a href="#" class="nav_link sublink">Deals</a>
            <a href="leads.html" class="nav_link sublink">Leads</a>
            <a href="#" class="nav_link sublink">Accounts</a>
          </ul>
        </li>
        <!-- end -->
      </ul>
        

        <ul class="menu_items">
          <div class="menu_title menu_editor"></div>
          <!-- duplicate these li tag if you want to add or remove navlink only -->
          <!-- Start -->
          <li class="item">
            <a href="Sales-Dash.html" class="nav_link">
              <span class="navlink_icon">
                <i class="bx bxs-bar-chart-alt-2"></i>
              </span>
              <span class="navlink">Sales</span>
            </a>
          </li>
          <li class="item">
            <a href="leads.php" class="nav_link">
              <span class="navlink_icon">
                <i class="bx bxs-magic-wand"></i>
              </span>
              <span class="navlink">Leads</span>
            </a>
          </li>
          <!-- End -->

          <li class="item">
            <a href="deals.html" class="nav_link">
              <span class="navlink_icon">
                <i class="bx bx-receipt"></i>
              </span>
              <span class="navlink">Deals</span>
            </a>
          </li>
          <li class="item">
            <a href="tender.html" class="nav_link">
              <span class="navlink_icon">
                <i class="bx bx-receipt"></i>
              </span>
              <span class="navlink">Tenders</span>
            </a>
          </li>
          <li class="item">
            <a href="contact-dash.php" class="nav_link">
              <span class="navlink_icon">
                <i class="bx bxs-contact"></i>
              </span>
              <span class="navlink">Contacts</span>
            </a>
          </li>
          <li class="item">
            <a href="file.html" class="nav_link">
              <span class="navlink_icon">
                <i class="bx bx-cloud-upload"></i>
              </span>
              <span class="navlink">Upload new</span>
            </a>
          </li>
        </ul>
        <ul class="menu_items">
          <div class="menu_title menu_setting"></div>
          <li class="item">
            <a href="#" class="nav_link">
              <span class="navlink_icon">
                <i class="bx bx-flag"></i>
              </span>
              <span class="navlink">Notice board</span>
            </a>
          </li>
          <li class="item">
            <a href="#" class="nav_link">
              <span class="navlink_icon">
                <i class="bx bx-medal"></i>
              </span>
              <span class="navlink">Award</span>
            </a>
          </li>
          <li class="item">
            <a href="#" class="nav_link">
              <span class="navlink_icon">
                <i class="bx bx-cog"></i>
              </span>
              <span class="navlink">Setting</span>
            </a>
          </li>
          <li class="item">
            <a href="#" class="nav_link">
              <span class="navlink_icon">
                <i class="bx bx-layer"></i>
              </span>
              <span class="navlink">Features</span>
            </a>
          </li>
        </ul>

        <!-- Sidebar Open / Close -->
        <div class="bottom_content">
          <div class="bottom expand_sidebar">
            <span> Expand</span>
            <i class='bx bx-log-in' ></i>
          </div>
          <div class="bottom collapse_sidebar">
            <span> Collapse</span>
            <i class='bx bx-log-out'></i>
          </div>
        </div>
      </div>
    </nav>
    <div class="body">
      <div class="container">
            <div class="row">
                <div class="col-md-9">	
                    <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header mb-3">
                            <div class="row">
                              <div class="col-md-7">
                              
                                <h6> </i> New users</h6>
                              </div>
                              <div class="col-md-4">
                                <i class="bx bx-layer"></i>
                              <i class="bx bx-download"></i>
                              </div>
                            </div>
                          </div>
                          <h4 ><?php 
                            include ("connection.php");
                  
                              // SQL query to get lead counts by status
                              $sql = "SELECT COUNT(*) AS ColdLeadCount FROM leads WHERE Status = 'Cold Lead'";
            
                    // Execute SQL query
                    $result = $conn->query($sql);
            
                    if ($result->num_rows > 0) {
                        // Output data of each row
                        $row = $result->fetch_assoc();
                        echo $row["ColdLeadCount"];
                    } else {
                        echo "No warm leads found.";
                    }
            
                    // Close connection
                    $conn->close();
                              ?> </h4> 
                          <div class="chart" style="width: 150px">
                            <canvas id="tendering"></canvas>
                          </div>
                          <span class="tend">Cold leads</span>
                          <ul class="members-tendering">
                            <li class="member"></li>
                            <li class="member"></li>
                            <li class="member"></li>
                          </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header mb-3">
                            <div class="row">
                              <div class="col-md-7">
                              
                                <h6> </i> New users</h6>
                              </div>
                              <div class="col-md-4">
                                <i class="bx bx-layer"></i>
                              <i class="bx bx-download"></i>
                              </div>
                            </div>
                          </div>
                          <div class="radialProgressBar progress-30">
                            <div class="overlay"><?php 
                              include ("connection.php");
                    
                                // SQL query to get lead counts by status
                                $sql = "SELECT COUNT(*) AS WarmLeadCount FROM leads WHERE Status = 'Warm Lead'";
              
                      // Execute SQL query
                      $result = $conn->query($sql);
              
                      if ($result->num_rows > 0) {
                          // Output data of each row
                          $row = $result->fetch_assoc();
                          echo $row["WarmLeadCount"];
                      } else {
                          echo "No warm leads found.";
                      }
              
                      // Close connection
                      $conn->close();
                                ?> </div>
                          </div>
                          <h6 class="tender-heading" >Warm Leads</h6>
                          <ul class="members-tendering">
                            <li class="member"></li>
                            <li class="member"></li>
                            <li class="member"></li>
                          </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header mb-3">
                            <div class="row">
                              <div class="col-md-7">
                              
                                <h6> </i> New users</h6>
                              </div>
                              <div class="col-md-4">
                                <i class="bx bx-layer"></i>
                              <i class="bx bx-download"></i>
                              </div>
                            </div>
                          </div>
                          <div class="radialProgressBar progress-90">
                            <div class="overlay"><?php 
                              include ("connection.php");
                    
                                // SQL query to get lead counts by status
                                $sql = "SELECT COUNT(*) AS HotLeadCount FROM leads WHERE Status = 'Hot Lead'";
              
                      // Execute SQL query
                      $result = $conn->query($sql);
              
                      if ($result->num_rows > 0) {
                          // Output data of each row
                          $row = $result->fetch_assoc();
                          echo $row["HotLeadCount"];
                      } else {
                          echo "No warm leads found.";
                      }
              
                      // Close connection
                      $conn->close();
                                ?> </div>
                          </div>
                          <h6 class="tender-heading">Hot Leads</h6>
                          <ul class="members-tendering">
                            <li class="member"></li>
                            <li class="member"></li>
                            <li class="member"></li>
                          </ul>
                    </div>
                </div>
                <div class="col-md-7">
              <div class="card">
                <div class="card-header mb-3">
                  <div class="row">
                    <div class="col-md-7">

                      <h6> </i> Total Leads in a bar graph</h6>
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
                <div class="col-md-5">
                    <div class="card">
                        <div class="card-header mb-3">
                            <div class="row">
                              <div class="col-md-7">
                              
                                <h6> </i> Total Leads</h6>
                              </div>
                              <div class="col-md-4">
                                <i class="bx bx-layer"></i>
                              <i class="bx bx-download"></i>
                              </div>
                            </div>
                          </div>
                          <div class="chart">
                            <canvas id="leadsDoughnutGraph"></canvas>
                          </div>
                          </header>
            
       
                    </div>
                </div>
            </div>
            </div>
            <div class="col-md-3">	
                <div class="card">
                    <div class="card-header mb-3">
                        <div class="row">
                          <div class="col-md-7">
                          
                            <h6> </i> Sales personnel</h6>
                          </div>
                          <div class="col-md-4">
                            <i class="bx bx-layer"></i>
                          <i class="bx bx-download"></i>
                          </div>
                        </div>
                      </div>
                      <table class="table bg-light">
                
                          <tbody>
                            <?php foreach ($leads_data as $lead): ?>
                                <tr>
                                    <td>
                                        <div class="tender-table-icons">
                                            <i class="bx bx-briefcase"></i>
                                        </div>
                                    </td>
                                    <td>
                                        <?php echo htmlspecialchars($lead['assigned']); ?> <br>
                                        <span class="number-of-files"><?php echo htmlspecialchars($lead['total_leads']); ?> Total leads</span>
                                    </td>
                                    <!--<td><span class="storage-size">Size Placeholder</span></td>-->
                                </tr>
                                <tr>
                                    <td colspan="3">
                                        <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar bg-success" style="width: 100%"></div>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                          </tbody>
                      </table>
                     
                </div>
                
            </div>
            <!--<div class="col-md-3">
                <div class="card">
                        <div class="card-header mb-3">
                            <div class="row">
                              <div class="col-md-7">
                              
                                <h6> </i> New users</h6>
                              </div>
                              <div class="col-md-4">
                                <i class="bx bx-layer"></i>
                              <i class="bx bx-download"></i>
                              </div>
                            </div>
                        </div>
                        <div class="tender-analytics-progress">
                            <i class='bx bx-dollar-circle'></i>
                            <h6>4563</h6>
                          </div>
                          <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar bg-warning" style="width: 25%"></div>
                          </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header mb-3">
                        <div class="row">
                          <div class="col-md-7">
                          
                            <h6> </i> New users</h6>
                          </div>
                          <div class="col-md-4">
                            <i class="bx bx-layer"></i>
                          <i class="bx bx-download"></i>
                          </div>
                        </div>
                      </div>
                      <div class="tender-analytics-progress">
                        <i class='bx bx-dollar-circle'></i>
                        <h6>4563</h6>
                      </div>
                      <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar bg-warning" style="width: 25%"></div>
                      </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header mb-3">
                        <div class="row">
                          <div class="col-md-7">
                          
                            <h6> </i> New users</h6>
                          </div>
                          <div class="col-md-4">
                            <i class="bx bx-layer"></i>
                          <i class="bx bx-download"></i>
                          </div>
                        </div>
                      </div>
                      <div class="tender-analytics-progress">
                        <i class='bx bx-dollar-circle'></i>
                        <h6>4563</h6>
                      </div>
                      <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar bg-warning" style="width: 25%"></div>
                      </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header mb-3">
                        <div class="row">
                          <div class="col-md-7">
                          
                            <h6> </i> New users</h6>
                          </div>
                          <div class="col-md-4">
                            <i class="bx bx-layer"></i>
                          <i class="bx bx-download"></i>
                          </div>
                        </div>
                      </div>
                      <div class="tender-analytics-progress">
                        <i class='bx bx-dollar-circle'></i>
                        <h6>4563</h6>
                      </div>
                      <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar bg-warning" style="width: 25%"></div>
                      </div>

                </div>
            </div>-->
            <div class="col-md">
                <div class="card">
                <header>
                    <div class="header-left">
                      <div class="main-table">
                        <span>Leads Table</span>
                        <span class="dropdown-arrow"
                          ><i class="bx bx-chevron-down"></i
                        ></span>
                        <ul class="dropdown-menu">
                          <li><a href="#">Main Table</a></li>
                          <li><a href="#">Another Table</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="navbar-right">
                      <button
                        class="btn btn-primary"
                        id="newDealBtn"
                        data-toggle="modal"
                        data-target="#dealModal"
                      >
                        <span><i class="bx bx-plus-circle"></i> New Lead</span>
                      </button>
                      <div class="search">
                        <span><i class="bx bx-search"></i> Search</span>
                      </div>
                      <div class="person-icon">
                        <span><i class="bx bx-user-circle"></i> Person</span>
                      </div>
                      <div class="filter">
                        <span><i class="bx bx-filter"></i> Filter</span>
                      </div>
                      <div class="sort">
                        <span><i class="bx bx-sort-alt-2"></i> Sort</span>
                      </div>
                    </div>
                </header>
                    <table class="contacts-table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Company</th>
                                <th>Phone</th>
                                <th>Status</th>
                                <th>Source</th>
                                <th>Created</th>
                                <th>Assigned</th>
                                <th>Action</th>
                          
                            </tr>
                        </thead>
                        <tbody id="contactsBody">
                            <!-- Existing table rows -->
                            <?php
                            
                                // Include the database connection file
                                include 'connection.php';
          
                                // SQL query to fetch data from leads table

                                $sql = "SELECT lead_id, Name, Company, Email, Phone, Value, Tags, Assigned, Status, Source, Last_contact, Created, Course_name FROM leads order by Created desc LIMIT 5";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    // Output data of each row
                                    while($row = $result->fetch_assoc()) {
                                        echo "<tr>";
                                      
                                        echo "<td>" . $row["Name"] . "</td>";
                                        echo "<td>" . $row["Company"] . "</td>";
                                        echo "<td>" . $row["Phone"] . "</td>";
                                        echo "<td class='priority low' >" . $row["Status"] . "</td>";
                                        echo "<td>" . $row["Source"] . "</td>";
                                        echo "<td>" . $row["Created"] . "</td>";
                                        echo "<td>" . $row["Assigned"] . "</td>";
                                        echo "<td><button class='btn btn-primary btn-sm editBtn' data-toggle='modal' data-target='#editModal' data-id='" . $row['lead_id'] . "'>Edit</button></td>";
                                        echo "</tr>";
                                    }
                                } else {
                                    echo "<tr><td colspan='10'>No leads found.</td></tr>";
                                }
                                $conn->close();
                                ?>
                        </tbody>
                    </table>
                </div>
            </div>
           <!--<div class="col-md-3">
                <div class="card">
                    <ul class="time-line">
                        <li class="time-line-link" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" aria-expanded="false" aria-controls="collapseWidthExample">
                            Website Order <small>added to services sales</small> add by<span>#Zelda </span>
                            <span class="time">12:20</span>
                    
                            <ul class="time-content collapse" id="collapseWidthExample">
                              <div class="card">
                                <h6>kitso sejake </h6>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, id vel quibusdam doloribus optio culpa qui laborum minus! Voluptatem quo porro et nisi.</p>
                              </div>
                            </ul>
                        </li>
                        <li class="time-line-link" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample1" aria-expanded="false" aria-controls="collapseWidthExample1">
                            Marketing Adaptit <small>added to services sales</small> add by <span>#Zelda </span>
                            <span class="time">13:00</span>
                  
                            <ul class="time-content collapse" id="collapseWidthExample1">
                                <div class="card">
                                  <h6>kitso sejake </h6>
                                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, id vel quibusdam doloribus optio culpa qui laborum minus! Voluptatem quo porro et nisi.</p>
                                </div>
                            </ul>
                        </li>
                        <li class="time-line-link" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample2" aria-expanded="false" aria-controls="collapseWidthExample2">
                            Website Order <small>added to services sales</small> add by <span>#Zelda </span>
                            <span class="time">14:30</span>
                            
                            <ul class="time-content collapse" id="collapseWidthExample2">
                              <div class="card">
                                <h6>kitso sejake </h6>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, id vel quibusdam doloribus optio culpa qui laborum minus! Voluptatem quo porro et nisi.</p>
                              </div>
                            </ul>
                        </li>
                        <li class="time-line-link" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample2" aria-expanded="false" aria-controls="collapseWidthExample2">
                            Website Order <small>added to services sales</small> add by <span>#Zelda </span>
                            <span class="time">14:30</span>
                            
                            <ul class="time-content collapse" id="collapseWidthExample2">
                              <div class="card">
                                <h6>kitso sejake </h6>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, id vel quibusdam doloribus optio culpa qui laborum minus! Voluptatem quo porro et nisi.</p>
                              </div>
                            </ul>
                        </li>
                        
                    </ul>
                </div>
            </div>-->
            <!--
            <div class="col-md-3">
                <div class="card">
                    <table class="contacts-table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Company</th>
                                <th>Title</th>
                               
                            </tr>
                        </thead>
                        <tbody id="contactsBody">
                            
                            <tr>
                                <td>Phoenix Levy</td>
                                <td>Apple</td>
                                <td>COO</td>
                             
                             
                            </tr>
                            <tr>
                                <td>Madison Doyle</td>
                                <td>Google</td>
                                <td>CEO</td>
                             
                              
                            <tr>
                                <td>Leilani Krause</td>
                                <td>Spotify</td>
                                <td>CIO</td>
                              
                               
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>-->
            </div>
        </div>
    </div>
    
    <!-- Modal -->
    <div class="modal fade" id="dealModal" tabindex="-1" role="dialog" aria-labelledby="dealModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="dealModalLabel">New Lead</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="insert_lead.php" method="POST">
            <div class="modal-body">
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
              </div>
              <div class="form-group">
                <label for="company">Company</label>
                <input type="text" class="form-control" id="company" name="company">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
              </div>
              <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" class="form-control" id="phone" name="phone">
              </div>
              <div class="form-group">
                <label for="value">Value</label>
                <input type="number" step="0.01" class="form-control" id="value" name="value">
              </div>
              <div class="form-group">
                <label for="tags">Tags</label>
                <input type="text" class="form-control" id="tags" name="tags">
              </div>
              <div class="form-group">
                <label for="assigned">Assigned To</label>
                <input type="text" class="form-control" id="assigned" name="assigned">
              </div>
              <div class="form-group">
                <label for="status">Status</label>
                <select class="form-control" id="status" name="status">
                  <option value="Cold Lead">Cold Lead</option>
                  <option value="Warm Lead">Warm Lead</option>
                  <option value="Hot Lead">Hot Lead</option>
                </select>
              </div>
              <div class="form-group">
                <label for="source">Source</label>
                <input type="text" class="form-control" id="source" name="source">
              </div>
              <div class="form-group">
                <label for="last_contact">Last Contact</label>
                <input type="date" class="form-control" id="last_contact" name="last_contact">
              </div>
              <div class="form-group">
                <label for="course_name">Course Name</label>
                <input type="text" class="form-control" id="course_name" name="course_name">
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save Lead</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Modal for Edit Lead -->
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="editModalLabel">Edit Lead</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="update_lead.php" method="POST">
            <div class="modal-body">
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
              </div>
              <div class="form-group">
                <label for="company">Company</label>
                <input type="text" class="form-control" id="company" name="company">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
              </div>
              <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" class="form-control" id="phone" name="phone">
              </div>
              <div class="form-group">
                <label for="value">Value</label>
                <input type="number" step="0.01" class="form-control" id="value" name="value">
              </div>
              <div class="form-group">
                <label for="tags">Tags</label>
                <input type="text" class="form-control" id="tags" name="tags">
              </div>
              <div class="form-group">
                <label for="assigned">Assigned To</label>
                <input type="text" class="form-control" id="assigned" name="assigned">
              </div>
              <div class="form-group">
                <label for="status">Status</label>
                <select class="form-control" id="status" name="status">
                  <option value="Cold Lead">Cold Lead</option>
                  <option value="Warm Lead">Warm Lead</option>
                  <option value="Hot Lead">Hot Lead</option>
                </select>
              </div>
              <div class="form-group">
                <label for="source">Source</label>
                <input type="text" class="form-control" id="source" name="source">
              </div>
              <div class="form-group">
                <label for="last_contact">Last Contact</label>
                <input type="date" class="form-control" id="last_contact" name="last_contact">
              </div>
              <div class="form-group">
                <label for="course_name">Course Name</label>
                <input type="text" class="form-control" id="course_name" name="course_name">
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary editbtn" name="savelead">Save Lead</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="./js/script.js"></script>
    <script src="./js/sales_charts.js"></script>
    <script src="./js/tender.js"></script>
    <script src="./js/leads.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
       $(docoment).ready(function(){
          $('.editbtn').on('click', function(){
            $('#editModal').modal('show');
          });
       });
    </script>
    <script>
      $(document).ready(function () {
        $.ajax({
          url: 'fetch_leads_by_month.php',
          type: 'GET',
          dataType: 'json',
          success: function (data) {
            const months = data.map(item => item.month);
            const coldLeads = data.map(item => item.cold_leads);
            const warmLeads = data.map(item => item.warm_leads);
            const hotLeads = data.map(item => item.hot_leads);

            const ctx = document.getElementById('leadsBarGraph').getContext('2d');
            const leadsBarGraph = new Chart(ctx, {
              type: 'bar',
              data: {
                labels: months,
                datasets: [
                  {
                    label: 'Cold Leads',
                    data: coldLeads,
                    backgroundColor: '#007bff',
                  },
                  {
                    label: 'Warm Leads',
                    data: warmLeads,
                    backgroundColor: '#ffc107',
                  },
                  {
                    label: 'Hot Leads',
                    data: hotLeads,
                    backgroundColor: '#dc3545',
                  }
                ]
              },
              options: {
                responsive: true,
                scales: {
                  x: {
                    title: {
                      display: true,
                      text: 'Month'
                    }
                  },
                  y: {
                    beginAtZero: true,
                    title: {
                      display: true,
                      text: 'Number of Leads'
                    }
                  }
                },
                plugins: {
                  legend: {
                    position: 'top',
                  },
                }
              }
            });

            // Creating doughnut chart
            const ctxDoughnut = document.getElementById('leadsDoughnutGraph').getContext('2d');
            const leadsDoughnutGraph = new Chart(ctxDoughnut, {
              type: 'doughnut',
              data: {
                labels: ['Cold Leads', 'Warm Leads', 'Hot Leads'],
                datasets: [{
                  label: 'Leads Distribution',
                  data: [sumArray(coldLeads), sumArray(warmLeads), sumArray(hotLeads)],
                  backgroundColor: ['#007bff', '#ffc107', '#dc3545'],
                }]
              },
              options: {
                responsive: true,
                plugins: {
                  legend: {
                    position: 'top',
                  },
                }
              }
            });
          }
        });
      });
      // Function to calculate sum of an array
      function sumArray(arr) {
        return arr.reduce((a, b) => a + b, 0);
      }
    </script>

    <script>
    
              document.addEventListener("DOMContentLoaded", function () {
                // AJAX request to fetch data from PHP script
                  var xhr = new XMLHttpRequest();
                  xhr.onreadystatechange = function() {
                      if (xhr.readyState === XMLHttpRequest.DONE) {
                          if (xhr.status === 200) {
                              var data = JSON.parse(xhr.responseText);
                              renderChart(data);
                          } else {
                              console.error('Error:', xhr.status, xhr.statusText);
                          }
                      }
                  };

                  xhr.open('GET', 'get_leads.php');
                  xhr.send();
              });

                function renderChart(data) {
                    // Extracting data for Chart.js
                    var labels = data.map(function(item) {
                        return item.date;
                    });

                    var warmData = data.map(function(item) {
                        return item.warm;
                    });

                    var coldData = data.map(function(item) {
                        return item.cold;
                    });

                    var hotData = data.map(function(item) {
                        return item.hot;
                    });

          
                  const pdata = {
                    labels: ["Hot", "Cold", "Warm"],
                    datasets: [
                      {
                        label: "My First Dataset",
                        data: [warmData, coldData, warmData],
                        backgroundColor: [
                          "rgb(255, 99, 132)",
                          "rgb(54, 162, 235)",
                          "rgb(255, 205, 86)",
                        ],
                        hoverOffset: 4,
                      },
                    ],
                  };
                  const pconfig = {
                    type: "doughnut",
                    data: pdata,
                    options: {
                      plugins: {
                        legend: {
                        
                        },
                      },
                    },
                  };
                  const p= new Chart(document.getElementById("p-chart"), pconfig);
                  }
    </script>
    
      
      </body>
</html>
