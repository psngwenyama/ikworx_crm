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
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Leads</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.0.7/css/boxicons.min.css">
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@2.0.9/css/boxicons.min.css" />
  <link rel="stylesheet" href="./css/style.css">
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
      <i class='bx bx-bell'></i>
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
          <a href="admin_sales_dash.php" class="nav_link">
            <span class="navlink_icon">
              <i class="bx bxs-bar-chart-alt-2"></i>
            </span>
            <span class="navlink">Sales</span>
          </a>
        </li>
        <li class="item">
          <a href="lead.html" class="nav_link">
            <span class="navlink_icon">
              <i class="bx bxs-magic-wand"></i>
            </span>
            <span class="navlink">Leads</span>
          </a>
        </li>
        <!-- End -->

        <li class="item">
          <a href="admin_deals.php" class="nav_link">
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
          <i class='bx bx-log-in'></i>
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

                      <h6> </i> Cold</h6>
                    </div>
                    <div class="col-md-4">
                      <i class="bx bx-layer"></i>
                      <i class="bx bx-download"></i>
                    </div>
                  </div>
                </div>
                <div class="radialProgressBar progress-30">
                  <div class="overlay">
                    <p id="cold-leads"></p>
                  </div>
                </div>
                <h6 class="tender-heading">cold Leads</h6>
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

                      <h6> </i> Warm</h6>
                    </div>
                    <div class="col-md-4">
                      <i class="bx bx-layer"></i>
                      <i class="bx bx-download"></i>
                    </div>
                  </div>
                </div>
                <div class="radialProgressBar progress-30">
                  <div class="overlay">
                    <p id="warm-leads"></p>
                  </div>
                </div>
                <h6 class="tender-heading">Warm Leads</h6>
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

                      <h6> </i> Hot</h6>
                    </div>
                    <div class="col-md-4">
                      <i class="bx bx-layer"></i>
                      <i class="bx bx-download"></i>
                    </div>
                  </div>
                </div>
                <div class="radialProgressBar progress-90">
                  <div class="overlay">
                    <p id="hot-leads"></p>
                  </div>
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
          <div class="container">
            <div class="row" id="cards-container">
              <!-- Dynamic cards will be inserted here -->
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>


  <div class="body">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="leads-in">
              <header>
                <div class="header-left">
                  <div class="main-table">
                      <span>Main Table</span>
                      <span class="dropdown-arrow"><i class="bx bx-chevron-down"></i></span>
                      <ul class="dropdown-menu">
                          <li><a href="#">Main Table</a></li>
                          <li><a href="#">Another Table</a></li>
                      </ul>
                      <form action="export_leads.php" method="post" class="d-flex me-auto">
                          <select name="filter" id="filter" class="form-control">
                              <option value="all">All Records</option>
                              <option value="empty">Empty Records</option>
                          </select>
                          <input type="submit"  class="btn btn-sm btn-success" name="export" value="Export">
                      </form>
                      
                  </div>
              </div>
                <div class="navbar-right">
                  <div class="search">
                    <input type="text" id="searchInput" placeholder="Search" />
                  </div>
                  <div class="sort">
                    <select id="assignedPersonDropdown" class="form-control">
                      <option value="">Sort by Assigned Person</option>
                    </select>
                  </div>
                  <div class="filter">
                    <span data-toggle="modal" data-target="#filterModal"><i class="bx bx-filter"></i> Filter</span>
                  </div>
                  <div class="sort">
                    <span><i class='bx bx-sort-up' id="sortAscBtn"></i><i class='bx bx-sort-down'
                            id="sortDescBtn"></i>
                        Sort</span>
                </div>
                </div>
              </header>
              <main>
                <section class="leads-section">
                  <h2>Active Leads</h2>
                  <div class="table-container">
                    <table id="active-leads" class="table table-striped">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Company</th>
                          <th>Email</th>
                          <th>Phone</th>
                          <th>Value</th>
                          <th>Tags</th>
                          <th>Assigned</th>
                          <th>Status</th>
                          <th>Source</th>
                          <th>Last Contact</th>
                          <th>Course Name</th>
                          <th>Description</th>
                        </tr>
                      </thead>
                      <tbody>
                        <!-- Active leads data will be inserted here -->
                      </tbody>
                    </table>
                    <nav aria-label="Page navigation">
                      <ul class="pagination">
                        <li class="page-item">
                          <button class="page-link" id="prevPageBtn">Previous</button>
                        </li>
                        <li class="page-item disabled">
                          <span class="page-link" id="currentPage">1</span>
                        </li>
                        <li class="page-item">
                          <button class="page-link" id="nextPageBtn">Next</button>
                        </li>
                      </ul>
                    </nav>
                  </div>
                </section>
              </main>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- New Lead Modal -->
  <div class="modal fade" id="leadModal" tabindex="-1" role="dialog" aria-labelledby="leadModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <form id="leadForm">
          <div class="modal-header">
            <h5 class="modal-title" id="leadModalLabel">New Lead</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <input type="hidden" id="lead_id" name="lead_id">
            <div class="row">
              <div class="form-group col-md-6">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
              </div>
              <div class="form-group col-md-6">
                <label for="company">Company</label>
                <input type="text" class="form-control" id="company" name="company">
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-6">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
              </div>
              <div class="form-group col-md-6">
                <label for="phone">Phone</label>
                <input type="text" class="form-control" id="phone" name="phone">
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-6">
                <label for="value">Value</label>
                <input type="text" class="form-control" id="value" name="value">
              </div>
              <div class="form-group col-md-6">
                <label for="tags">Tags</label>
                <input type="text" class="form-control" id="tags" name="tags">
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-6">
                <label for="assigned">Assigned</label>
                <select class="form-control" id="assigned" name="assigned" required>
                  <option value="Lesego Mlambo">Select your name</option>
                  <option value="Lesego Mlambo">Lesego Mlambo</option>
                  <option value="Vincentia Seane">Vincentia Seane</option>
                  <option value="sinenhlanhla Keepeng">Sinenhlanhla	Keepeng </option>
                  <option value="Mogau Ramatla">Mogau	Ramatla </option>
                  <option value="Kgothatso Mothoa">Kgothatso	Mothoa </option>
                </select>
              </div>
              <div class="form-group col-md-6">
                <label for="status">Status</label>
                <select class="form-control" id="status" name="status">
                  <option value="Cold Lead">Cold Lead</option>
                  <option value="Warm Lead">Warm Lead</option>
                  <option value="Hot Lead">Hot Lead</option>
                </select>
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-6">
                <label for="source">Source</label>
                <input type="text" class="form-control" id="source" name="source">
              </div>
              <div class="form-group col-md-6">
                <label for="last_contact">Last Contact</label>
                <input type="date" class="form-control" id="last_contact" name="last_contact">
              </div>
            </div>

            <div class="form-group">
              <label for="course_name">Course Name</label>
              <input type="text" class="form-control" id="course_name" name="course_name">
            </div>
            <div class="form-group">
              <label for="description">Description</label>
              <textarea class="form-control" id="description" name="description"></textarea>
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

  <!-- Filter Modal -->
  <div class="modal fade" id="filterModal" tabindex="-1" role="dialog" aria-labelledby="filterModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="filterModalLabel">Filter Leads by Date</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="filterForm">
            <div class="form-group">
              <label for="startDate">Start Date</label>
              <input type="date" id="startDate" class="form-control">
            </div>
            <div class="form-group">
              <label for="endDate">End Date</label>
              <input type="date" id="endDate" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Apply Filter</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Include jQuery and Bootstrap JS for modal -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@2.0.9/css/boxicons.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <!-- Include your custom JavaScript file -->
  <script src="./leads.js"></script>

  <script>
    document.addEventListener("DOMContentLoaded", function () {
      axios.get('./lead/collect_leads.php')
        .then(response => {
          const statusData = response.data;
          document.getElementById("cold-leads").innerText = `${statusData['Cold Lead']}`;
          document.getElementById("warm-leads").innerText = `${statusData['Warm Lead']}`;
          document.getElementById("hot-leads").innerText = `${statusData['Hot Lead']}`;
        })
        .catch(error => {
          console.error("There was an error fetching the leads data:", error);
        });
    });
  </script>

<script>
  document.addEventListener('DOMContentLoaded', function () {
      const assignedPersonDropdown = document.getElementById('assignedPersonDropdown');
      const searchInput = document.getElementById('searchInput');
      const activeLeadsTableBody = document.querySelector('#active-leads tbody');
      const leadForm = document.getElementById('leadForm');
      const prevPageBtn = document.getElementById('prevPageBtn');
      const nextPageBtn = document.getElementById('nextPageBtn');
      const currentPageSpan = document.getElementById('currentPage');
      const filterForm = document.getElementById('filterForm');
      let currentPage = 1;
      const itemsPerPage = 10;
      let totalLeads = 0;
      let currentAssignedPerson = '';
      let searchQuery = '';
      let startDate = '';
      let endDate = '';
  
      // Fetch assigned people and populate the dropdown
      fetch('./lead/get_assigned_people.php')
          .then(response => response.json())
          .then(data => {
              data.forEach(person => {
                  const option = document.createElement('option');
                  option.value = person;
                  option.textContent = person;
                  assignedPersonDropdown.appendChild(option);
              });
          });
  
      // Fetch leads data and populate the table
      function fetchLeads(page = 1) {
          currentPage = page;
          const assignedPerson = currentAssignedPerson;
          const query = searchInput.value;
          const startDate = document.getElementById('startDate').value;
          const endDate = document.getElementById('endDate').value;
  
          fetch(`./lead/get_leads.php?page=${page}&assignedPerson=${encodeURIComponent(assignedPerson)}&query=${encodeURIComponent(query)}&startDate=${encodeURIComponent(startDate)}&endDate=${encodeURIComponent(endDate)}`)
              .then(response => response.json())
              .then(data => {
                  activeLeadsTableBody.innerHTML = '';
                  totalLeads = data.total;
                  data.leads.forEach(lead => {
                      const row = document.createElement('tr');
                      row.innerHTML = `
                          <td>${lead.Name}</td>
                          <td>${lead.Company}</td>
                          <td>${lead.Email}</td>
                          <td>${lead.Phone}</td>
                          <td>${lead.Value}</td>
                          <td>${lead.Tags}</td>
                          <td>${lead.Assigned}</td>
                          <td class='priority low'>${lead.Status}</td>
                          <td>${lead.Source}</td>
                          <td>${lead.last_contact}</td>
                          <td>${lead.Course_name}</td>
                          <td>${lead.description}</td>
                      `;
                      activeLeadsTableBody.appendChild(row);
                  });
  
                  updatePaginationButtons();
              });
      }
  
      function updatePaginationButtons() {
          prevPageBtn.disabled = (currentPage === 1);
          nextPageBtn.disabled = (currentPage >= Math.ceil(totalLeads / itemsPerPage));
      }
  
      prevPageBtn.addEventListener('click', function () {
          if (currentPage > 1) {
              fetchLeads(currentPage - 1);
          }
      });
  
      nextPageBtn.addEventListener('click', function () {
          if (currentPage < Math.ceil(totalLeads / itemsPerPage)) {
              fetchLeads(currentPage + 1);
          }
      });
  
      // Update leads table when assigned person is selected from the dropdown
      assignedPersonDropdown.addEventListener('change', function () {
          currentAssignedPerson = assignedPersonDropdown.value;
          fetchLeads();
      });
  
      // Live search input event
      searchInput.addEventListener('keyup', function () {
          fetchLeads();
      });
  
      // Handle filter form submission
      filterForm.addEventListener('submit', function (event) {
          event.preventDefault();
          startDate = document.getElementById('startDate').value;
          endDate = document.getElementById('endDate').value;
          fetchLeads();
      });
  
      // Initial fetch
      fetchLeads();
  
      // Handle form submission for new and edited leads
      leadForm.addEventListener('submit', function (event) {
          event.preventDefault();
          const formData = new FormData(leadForm);
          fetch('./lead/save_lead.php', {
              method: 'POST',
              body: formData
          })
          .then(response => response.json())
          .then(data => {
              if (data.success) {
                  $('#leadModal').modal('hide');
                  alert("Lead saved");
                  fetchLeads();
              } else {
                  alert(data.error ? data.error : 'Error saving lead');
              }
          })
          .catch(error => {
              console.error('Error:', error);
              alert('Error saving lead');
          });
      });
  
      // Handle edit button click
      document.addEventListener('click', function (event) {
          if (event.target.classList.contains('btn-edit')) {
              const leadId = event.target.getAttribute('data-lead-id');
              fetch(`./lead/get_lead.php?lead_id=${leadId}`)
                  .then(response => response.json())
                  .then(data => {
                      document.getElementById('lead_id').value = data.lead_id;
                      document.getElementById('name').value = data.Name;
                      document.getElementById('company').value = data.Company;
                      document.getElementById('email').value = data.Email;
                      document.getElementById('phone').value = data.Phone;
                      document.getElementById('value').value = data.Value;
                      document.getElementById('tags').value = data.Tags;
                      document.getElementById('assigned').value = data.Assigned;
                      document.getElementById('status').value = data.Status;
                      document.getElementById('source').value = data.Source;
                      document.getElementById('last_contact').value = data.last_contact;
                      document.getElementById('course_name').value = data.Course_name;
                      document.getElementById('description').value = data.description;
                      $('#leadModal').modal('show');
                  });
          }
      });
  
      // Reset form when modal is hidden
      $('#leadModal').on('hidden.bs.modal', function () {
          leadForm.reset();
          document.getElementById('lead_id').value = '';
      });
  });
  </script>

  <script>
    $(document).ready(function () {
      $.ajax({
        url: './lead/fetch_leads_by_month.php',
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



</body>

</html>