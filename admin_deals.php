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
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@2.0.9/css/boxicons.min.css" />
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
            <a href="admin_sales_dash.php" class="nav_link">
              <span class="navlink_icon">
                <i class="bx bxs-bar-chart-alt-2"></i>
              </span>
              <span class="navlink">Sales</span>
            </a>
          </li>
          <li class="item">
            <a href="admin_lead.php" class="nav_link">
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
            <a href="admin_tenders.php" class="nav_link">
              <span class="navlink_icon">
                <i class="bx bx-receipt"></i>
              </span>
              <span class="navlink">Tenders</span>
            </a>
          </li>
          <li class="item">
            <a href="admin_contacts.php" class="nav_link">
              <span class="navlink_icon">
                <i class="bx bxs-contact"></i>
              </span>
              <span class="navlink">Contacts</span>
            </a>
          </li>
          <li class="item">
            <a href="admin_file.php" class="nav_link">
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
                    <div class="search">
                      <input type="text" id="searchInput" placeholder="Search" />
                    </div>
                    <div class="person-icon">
                      <select id="assignedPerson" class="form-control">
                        <option value="">Select Person</option>
                        <!-- Options will be populated via JavaScript -->
                      </select>
                    </div>
                    <div class="filter">
                      <span data-toggle="modal" data-target="#filterModal"><i class="bx bx-filter"></i> Filter</span>
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

     

    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
      $(document).ready(function() {
        fetchDeals();
        fetchAssignedPersons();

        $('#dealForm').on('submit', function(e) {
          e.preventDefault();
          const newDeal = {
            owner: $('#dealOwner').val(),
            company: $('#dealCompany').val(),
            email: $('#dealEmail').val(),
            phone: $('#dealPhone').val(),
            value: $('#dealValue').val(),
            stage: $('#dealStage').val(),
            priority: $('#dealPriority').val(),
            assigned: $('#dealAssigned').val(),
            source: $('#dealSource').val(),
            deal_date: $('#dealDate').val(),
            course_name: $('#dealCourseName').val()
          };

          $.ajax({
            url: './deal/add_deal.php',
            method: 'POST',
            data: newDeal,
            success: function(response) {
              $('#dealModal').modal('hide');
              fetchDeals();
            },
            error: function(error) {
              console.error('Error adding deal:', error);
            }
          });
        });

        $('#editDealForm').on('submit', function(e) {
                e.preventDefault();
                const updatedDeal = {
                    id: $('#editDealId').val(),
                    owner: $('#editDealOwner').val(),
                    company: $('#editDealCompany').val(),
                    email: $('#editDealEmail').val(),
                    phone: $('#editDealPhone').val(),
                    value: $('#editDealValue').val(),
                    stage: $('#editDealStage').val(),
                    priority: $('#editDealPriority').val(),
                    assigned: $('#editDealAssigned').val(),
                    source: $('#editDealSource').val(),
                    deal_date: $('#editDealDate').val(),
                    course_name: $('#editDealCourseName').val()
                };

                $.ajax({
                    url: './deal/update_deal.php',
                    method: 'POST',
                    data: updatedDeal,
                    success: function(response) {
                        $('#editDealModal').modal('hide');
                        fetchDeals();
                    },
                    error: function(error) {
                        console.error('Error updating deal:', error);
                    }
                });
            });


        function fetchDeals() {
          $.ajax({
            url: './deal/fetch_deals.php',
            method: 'GET',
            dataType: 'json',
            success: function(data) {
              renderDeals(data.active, '#active-deals tbody', true);
              renderDeals(data.closed, '#closed-deals tbody', false);
            },
            error: function(error) {
              console.error('Error fetching deals:', error);
            }
          });
        }

        function fetchAssignedPersons() {
          $.ajax({
            url: './deal/fetch_assigned_persons.php',
            method: 'GET',
            dataType: 'json',
            success: function(data) {
              const assignedPersonSelect = $('#assignedPerson');
              data.forEach(person => {
                assignedPersonSelect.append(new Option(person.name, person.name));
              });
              assignedPersonSelect.change(function() {
                const selectedPerson = $(this).val();
                filterDealsByPerson(selectedPerson);
              });
            },
            error: function(error) {
              console.error('Error fetching assigned persons:', error);
            }
          });
        }

        function renderDeals(deals, selector, includeEditButton) {
                const dealsTable = $(selector);
                dealsTable.empty();
                deals.forEach(deal => {
                    dealsTable.append(`
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
        }

        function filterDealsByPerson(person) {
          $.ajax({
            url: './deal/fetch_deals.php',
            method: 'GET',
            dataType: 'json',
            success: function(data) {
              const filteredActiveDeals = data.active.filter(deal => deal.assigned === person || person === '');
              const filteredClosedDeals = data.closed.filter(deal => deal.assigned === person || person === '');
              renderDeals(filteredActiveDeals, '#active-deals tbody', true);
              renderDeals(filteredClosedDeals, '#closed-deals tbody', false);
            },
            error: function(error) {
              console.error('Error fetching deals:', error);
            }
          });
        }

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
