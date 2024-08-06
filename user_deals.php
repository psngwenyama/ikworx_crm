<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    header("Location: login.html");
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.0.7/css/boxicons.min.css">
   <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <title>Deals Management</title>
    <link rel="stylesheet" href="./css/style.css" />
  </head>
  <body>
    <nav class="navbar">
      <div class="logo_item">
        <i class="bx bx-menu" id="sidebarOpen"></i>
        <img src="images/IKWORX LOGO.png" alt="" />
      </div>
      <div class="search_bar">
        <input type="text" placeholder="Search" id="globalSearch" />
      </div>
      <div class="navbar_content">
        <i class="bi bi-grid"></i>
        <i class="bx bx-sun" id="darkLight"></i>
        <i class="bx bx-bell"></i>
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
            <a href="#" class="nav_link sublink">Leads</a>
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
            <a href="user_sales_dash.php" class="nav_link">
              <span class="navlink_icon">
                <i class="bx bxs-bar-chart-alt-2"></i>
              </span>
              <span class="navlink">Sales</span>
            </a>
          </li>
          <li class="item">
            <a href="user_lead.php" class="nav_link">
              <span class="navlink_icon">
                <i class="bx bxs-magic-wand"></i>
              </span>
              <span class="navlink">Leads</span>
            </a>
          </li>
          <!-- End -->

          <li class="item">
            <a href="#" class="nav_link">
              <span class="navlink_icon">
                <i class="bx bx-receipt"></i>
              </span>
              <span class="navlink">Deals</span>
            </a>
          </li>
          <li class="item">
            <a href="user_tenders.php" class="nav_link">
              <span class="navlink_icon">
                <i class="bx bx-receipt"></i>
              </span>
              <span class="navlink">Tenders</span>
            </a>
          </li>
          <li class="item">
            <a href="user_contacts.php" class="nav_link">
              <span class="navlink_icon">
                <i class="bx bxs-contact"></i>
              </span>
              <span class="navlink">Contacts</span>
            </a>
          </li>
          <li class="item">
            <a href="user_file.php" class="nav_link">
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
                <div class="col-md-12">
                    <div class="card">
                        <div class="deals-in">
                            <header>
                                <div class="header-left">
                                    <div class="main-table">
                                        <span>Main Table</span>
                                        <span class="dropdown-arrow"><i class="bx bx-chevron-down"></i></span>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Main Table</a></li>
                                            <li><a href="#">Another Table</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="navbar-right">
                                    <button class="btn btn-primary" id="newDealBtn" data-bs-toggle="modal" data-bs-target="#dealModal">
                                        <span><i class="bx bx-plus-circle"></i> New Deal</span>
                                    </button>
                                    <div class="search">
                                        <input type="text" id="searchInput" placeholder="Search" />
                                    </div>
                                    <div class="filter">
                                        <span data-bs-toggle="modal" data-bs-target="#filterModal"><i class="bx bx-filter"></i> Filter</span>
                                    </div>
                                    <div class="sort">
                                        <span><i class="bx bx-sort-up" id="sortAscBtn"></i><i class="bx bx-sort-down" id="sortDescBtn"></i> Sort</span>
                                    </div>
                                </div>
                            </header>
                            <main>
                                <section class="deals-section">
                                    <h2>Active Deals</h2>
                                    <div class="table-container">
                                        <table id="active-deals" class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Owner</th>
                                                    <th>Company</th>
                                                    <th>Email</th>
                                                    <th>Phone</th>
                                                    <th>Value</th>
                                                    <th>Stage</th>
                                                    <th>Priority</th>
                                                    <th>Assigned</th>
                                                    <th>Source</th>
                                                    <th>Deal Date</th>
                                                    <th>Course Name</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <!-- Active deals data will be inserted here -->
                                            </tbody>
                                        </table>
                                    </div>
                                </section>
                                <section class="deals-section">
                                    <h2>Closed Deals</h2>
                                    <div class="table-container">
                                        <table id="closed-deals" class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Owner</th>
                                                    <th>Company</th>
                                                    <th>Email</th>
                                                    <th>Phone</th>
                                                    <th>Value</th>
                                                    <th>Stage</th>
                                                    <th>Priority</th>
                                                    <th>Assigned</th>
                                                    <th>Source</th>
                                                    <th>Close Date</th>
                                                    <th>Course Name</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <!-- Closed deals data will be inserted here -->
                                            </tbody>
                                        </table>
                                    </div>
                                </section>
                            </main>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


     <!-- Modal for adding new deal -->
     <div class="modal fade" id="dealModal" tabindex="-1" aria-labelledby="dealModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="dealModalLabel">Add New Deal</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="dealForm">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="owner" class="form-label">Owner</label>
                                <input type="text" class="form-control" id="owner" name="owner" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="company" class="form-label">Company</label>
                                <input type="text" class="form-control" id="company" name="company" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="text" class="form-control" id="phone" name="phone">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="value" class="form-label">Value</label>
                                <input type="number" step="0.01" class="form-control" id="value" name="value" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="stage" class="form-label">Stage</label>
                                <select class="form-select" id="stage" name="stage" required>
                                    <option value="discovery">Discovery</option>
                                    <option value="proposal">Proposal</option>
                                    <option value="negotiation">Negotiation</option>
                                    <option value="won">Won</option>
                                    <option value="lost">Lost</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="priority" class="form-label">Priority</label>
                                <select class="form-select" id="priority" name="priority" required>
                                    <option value="low">Low</option>
                                    <option value="medium">Medium</option>
                                    <option value="high">High</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="assigned" class="form-label">Assigned</label>
                                <input type="text" class="form-control" id="assigned" name="assigned" required>
                            </div>
                        </div>
                       <div class="row">
                        <div class="form-group col-md-6">
                                <label for="source" class="form-label">Source</label>
                                <input type="text" class="form-control" id="source" name="source">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="deal_date" class="form-label">Deal Date</label>
                                <input type="date" class="form-control" id="deal_date" name="deal_date" required>
                            </div>
                       </div>
                        
                        <div class="mb-3">
                            <label for="course_name" class="form-label">Course Name</label>
                            <input type="text" class="form-control" id="course_name" name="course_name">
                        </div>
                        <button type="submit" class="btn btn-primary">Save Deal</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for editing deal -->
    <div class="modal fade" id="editDealModal" tabindex="-1" aria-labelledby="editDealModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editDealModalLabel">Edit Deal</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="editDealForm">
                        <input type="hidden" id="editDealId" name="deal_id">
                            <div class="row">
                            <div class="form-group col-md-6">
                                <label for="editOwner" class="form-label">Owner</label>
                                <input type="text" class="form-control" id="editOwner" name="owner" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="editCompany" class="form-label">Company</label>
                                <input type="text" class="form-control" id="editCompany" name="company" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="editEmail" class="form-label">Email</label>
                                <input type="email" class="form-control" id="editEmail" name="email" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="editPhone" class="form-label">Phone</label>
                                <input type="text" class="form-control" id="editPhone" name="phone">
                            </div>
                        </div>
                       <div class="row">
                        <div class="form-group col-md-6">
                                <label for="editValue" class="form-label">Value</label>
                                <input type="number" step="0.01" class="form-control" id="editValue" name="value" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="editStage" class="form-label">Stage</label>
                                <select class="form-select" id="editStage" name="stage" required>
                                    <option value="discovery">Discovery</option>
                                    <option value="proposal">Proposal</option>
                                    <option value="negotiation">Negotiation</option>
                                    <option value="won">Won</option>
                                    <option value="lost">Lost</option>
                                </select>
                            </div>
                       </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="editPriority" class="form-label">Priority</label>
                                <select class="form-select" id="editPriority" name="priority" required>
                                    <option value="low">Low</option>
                                    <option value="medium">Medium</option>
                                    <option value="high">High</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="editAssigned" class="form-label">Assigned</label>
                                <input type="text" class="form-control" id="editAssigned" name="assigned" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="editSource" class="form-label">Source</label>
                                <input type="text" class="form-control" id="editSource" name="source">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="editDealDate" class="form-label">Deal Date</label>
                                <input type="date" class="form-control" id="editDealDate" name="deal_date" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="editCourseName" class="form-label">Course Name</label>
                            <input type="text" class="form-control" id="editCourseName" name="course_name">
                        </div>
                        <button type="submit" class="btn btn-primary">Update Deal</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
 

    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <script>
        $(document).ready(function() {
            function fetchDeals() {
                $.ajax({
                    url: './deal/user_fetch_deals.php',
                    method: 'GET',
                    dataType: 'json',
                    success: function(data) {
                        const activeDealsTable = $('#active-deals tbody');
                        activeDealsTable.empty();
                        data.active.forEach(deal => {
                            activeDealsTable.append(`
                                <tr data-id="${deal.deal_id}">
                                    <td>${deal.owner}</td>
                                    <td>${deal.company}</td>
                                    <td>${deal.email}</td>
                                    <td>${deal.phone}</td>
                                    <td>${deal.value}</td>
                                    <td class='stage proposal'>${deal.stage}</td>
                                    <td class='priority high'>${deal.priority}</td>
                                    <td>${deal.assigned}</td>
                                    <td>${deal.source}</td>
                                    <td>${deal.deal_date}</td>
                                    <td>${deal.course_name}</td>
                                    <td><button class="btn btn-warning edit-btn" data-id="${deal.deal_id}">Edit</button></td>
                                </tr>
                            `);
                        });

                        const closedDealsTable = $('#closed-deals tbody');
                        closedDealsTable.empty();
                        data.closed.forEach(deal => {
                            closedDealsTable.append(`
                                <tr>
                                    <td>${deal.owner}</td>
                                    <td>${deal.company}</td>
                                    <td>${deal.email}</td>
                                    <td>${deal.phone}</td>
                                    <td>${deal.value}</td>
                                    <td class='stage proposal'>${deal.stage}</td>
                                    <td class='priority high'>${deal.priority}</td>
                                    <td>${deal.assigned}</td>
                                    <td>${deal.source}</td>
                                    <td>${deal.deal_date}</td>
                                    <td>${deal.course_name}</td>
                                </tr>
                            `);
                        });

                        // Handle edit button click
                        $('.edit-btn').on('click', function() {
                            const dealId = $(this).data('id');
                            
                            // Fetch deal data for the selected row
                            $.ajax({
                                url: './deal/get_deal.php',
                                method: 'POST',
                                data: { deal_id: dealId },
                                dataType: 'json',
                                success: function(deal) {
                                    if (deal) {
                                        // Populate edit form with deal data
                                        $('#editDealId').val(deal.deal_id);
                                        $('#editOwner').val(deal.owner);
                                        $('#editCompany').val(deal.company);
                                        $('#editEmail').val(deal.email);
                                        $('#editPhone').val(deal.phone);
                                        $('#editValue').val(deal.value);
                                        $('#editStage').val(deal.stage);
                                        $('#editPriority').val(deal.priority);
                                        $('#editAssigned').val(deal.assigned);
                                        $('#editSource').val(deal.source);
                                        $('#editDealDate').val(deal.deal_date);
                                        $('#editCourseName').val(deal.course_name);

                                        // Show the edit modal
                                        $('#editDealModal').modal('show');
                                    } else {
                                        alert('Deal not found.');
                                    }
                                },
                                error: function() {
                                    alert('Error fetching deal data.');
                                }
                            });
                        });
                    },
                    error: function() {
                        alert('Error fetching deals.');
                    }
                });
            }

            // Fetch deals on page load
            fetchDeals();

            // Handle add deal form submission
            $('#dealForm').on('submit', function(e) {
                e.preventDefault();
                $.ajax({
                    url: './deal/add_deal.php',
                    method: 'POST',
                    data: $(this).serialize(),
                    dataType: 'json',
                    success: function(response) {
                        if (response.success) {
                            alert(response.message);
                            $('#dealModal').modal('hide');
                            fetchDeals(); // Refresh deals list
                        } else {
                            alert(response.message);
                        }
                    },
                    error: function() {
                        alert('Error adding deal.');
                    }
                });
            });

            // Handle edit deal form submission
            $('#editDealForm').on('submit', function(e) {
                e.preventDefault();
                $.ajax({
                    url: './deal/update_deal.php',
                    method: 'POST',
                    data: $(this).serialize(),
                    dataType: 'json',
                    success: function(response) {
                        if (response.success) {
                            alert(response.message);
                            $('#editDealModal').modal('hide');
                            fetchDeals(); // Refresh deals list
                        } else {
                            alert(response.message);
                        }
                    },
                    error: function() {
                        alert('Error updating deal.');
                    }
                });
            });

            // Live search functionality
              $("#searchInput").on("keyup", function () {
                  var value = $(this).val().toLowerCase();
                  $("#active-deals tbody tr").filter(function () {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                  });
                  $("#closed-deals tbody tr").filter(function () {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                  });
              });
        });

    </script>

  </body>
</html>
