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
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/boxicons@2.0.9/css/boxicons.min.css"
    />
    <title>Side Navigation Bar in HTML CSS JavaScript</title>
    <link rel="stylesheet" href="./css/style.css" />
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
            <a href="#" class="nav_link">
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
          <div class="col-md-12">
            <div class="card">
              <div class="deals-in">
                <header>
                  <div class="header-left">
                    <div class="main-table">
                      <span>Main Table</span>
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
                      <span><i class="bx bx-plus-circle"></i> New Deal</span>
                    </button>
                    <div class="search">
                      <input type="text" id="searchInput" placeholder="Search" />
                    </div>
                    <div class="person-icon">
                      <span><i class="bx bx-user-circle"></i> Person</span>
                    </div>
                    <div class="filter">
                      <span data-toggle="modal" data-target="#filterModal"><i class="bx bx-filter"></i> Filter</span>
                    </div>
                    <div class="sort">
                      <span><i class='bx bx-sort-up' id="sortAscBtn"></i><i class='bx bx-sort-down' id="sortDescBtn"></i> Sort</span>
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
                <header>
                  <div class="header-left">
                    <div class="main-table">
                      <span>Closed deals</span>
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
                    <div class="search">
                      <input type="text" id="searchClosed" placeholder="Search" />
                    </div>
                    <div class="person-icon">
                      <span><i class="bx bx-user-circle"></i> Person</span>
                    </div>
                    <div class="filter">
                      <span><i class="bx bx-filter"></i> Filter</span>
                    </div>
                    <div class="sort">
                      <span><i class='bx bx-sort-up' id="sortAscBtn"></i><i class='bx bx-sort-down' id="sortDescBtn"></i> Sort</span>
                    </div>
                  </div>
                </header>
                <section class="deals-section">
                  
                  <div class="table-container">
                    <table id="closed-won" class="table table-striped">
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
                        <!-- Closed won deals data will be inserted here -->
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

      <!-- Bootstrap Add Deal Modal Form -->
      <div
       class="modal fade"
       id="dealModal"
       tabindex="-1"
       aria-labelledby="dealModalLabel"
       aria-hidden="true"
     >
       <div class="modal-dialog modal-dialog-centered modal-lg">
         <div class="modal-content">
           <div class="modal-header">
             <h5 class="modal-title" id="dealModalLabel">New Deal</h5>
             <button
               type="button"
               class="close"
               data-dismiss="modal"
               aria-label="Close"
             >
               <span aria-hidden="true">&times;</span>
             </button>
           </div>
           <div class="modal-body">
             <form id="dealForm" action="add_deal.php" method="POST">
               <div class="form-row">
                 <div class="form-group col-md-6">
                   <label for="owner">Owner</label>
                   <input
                     type="text"
                     class="form-control"
                     id="owner"
                     name="owner"
                     required
                   />
                 </div>
                 <div class="form-group col-md-6">
                   <label for="company">Company</label>
                   <input
                     type="text"
                     class="form-control"
                     id="company"
                     name="company"
                     required
                   />
                 </div>
               </div>
               <div class="form-row">
                 <div class="form-group col-md-6">
                   <label for="email">Email</label>
                   <input
                     type="email"
                     class="form-control"
                     id="email"
                     name="email"
                     required
                   />
                 </div>
                 <div class="form-group col-md-6">
                   <label for="phone">Phone</label>
                   <input
                     type="text"
                     class="form-control"
                     id="phone"
                     name="phone"
                     required
                   />
                 </div>
               </div>
               <div class="form-row">
                 <div class="form-group col-md-6">
                   <label for="value">Value</label>
                   <input
                     type="number"
                     class="form-control"
                     id="value"
                     name="value"
                     step="0.01"
                     required
                   />
                 </div>
                 <div class="form-group col-md-6">
                   <label for="stage">Stage</label>
                   <select class="form-control" id="stage" name="stage" required>
                     <option value="discovery">Discovery</option>
                     <option value="proposal">Proposal</option>
                     <option value="negotiation">Negotiation</option>
                     <option value="won">Won</option>
                     <option value="lost">Lost</option>
                   </select>
                 </div>
               </div>
               <div class="form-row">
                 <div class="form-group col-md-6">
                   <label for="priority">Priority</label>
                   <select
                     class="form-control"
                     id="priority"
                     name="priority"
                     required
                   >
                     <option value="low">Low</option>
                     <option value="medium">Medium</option>
                     <option value="high">High</option>
                   </select>
                 </div>
                 <div class="form-group col-md-6">
                   <label for="assigned">Assigned</label>
                   <input
                     type="text"
                     class="form-control"
                     id="assigned"
                     name="assigned"
                     required
                   />
                 </div>
               </div>
               <div class="form-row">
                 <div class="form-group col-md-6">
                   <label for="source">Source</label>
                   <input
                     type="text"
                     class="form-control"
                     id="source"
                     name="source"
                     required
                   />
                 </div>
                 <div class="form-group col-md-6">
                   <label for="deal_date">Deal Date</label>
                   <input
                     type="date"
                     class="form-control"
                     id="deal_date"
                     name="deal_date"
                     required
                   />
                 </div>
               </div>
               <div class="form-group">
                 <label for="course_name">Course Name</label>
                 <input
                   type="text"
                   class="form-control"
                   id="course_name"
                   name="course_name"
                   required
                 />
               </div>
               <button type="submit" class="btn btn-primary">Add Deal</button>
             </form>
           </div>
         </div>
       </div>
      </div>
 
     <!-- Bootstrap Edit Deal Modal Form -->
     <div
       class="modal fade"
       id="editDealModal"
       tabindex="-1"
       aria-labelledby="editDealModalLabel"
       aria-hidden="true"
     >
       <div class="modal-dialog modal-dialog-centered modal-lg">
         <div class="modal-content">
           <div class="modal-header">
             <h5 class="modal-title" id="editDealModalLabel">Edit Deal</h5>
             <button
               type="button"
               class="close"
               data-dismiss="modal"
               aria-label="Close"
             >
               <span aria-hidden="true">&times;</span>
             </button>
           </div>
           <div class="modal-body">
             <form id="editDealForm" action="edit_deal.php" method="POST">
               <input type="hidden" id="edit_deal_id" name="deal_id" />
               <div class="form-row">
                 <div class="form-group col-md-6">
                   <label for="edit_owner">Owner</label>
                   <input
                     type="text"
                     class="form-control"
                     id="edit_owner"
                     name="owner"
                     required
                   />
                 </div>
                 <div class="form-group col-md-6">
                   <label for="edit_company">Company</label>
                   <input
                     type="text"
                     class="form-control"
                     id="edit_company"
                     name="company"
                     required
                   />
                 </div>
               </div>
               <div class="form-row">
                 <div class="form-group col-md-6">
                   <label for="edit_email">Email</label>
                   <input
                     type="email"
                     class="form-control"
                     id="edit_email"
                     name="email"
                     required
                   />
                 </div>
                 <div class="form-group col-md-6">
                   <label for="edit_phone">Phone</label>
                   <input
                     type="text"
                     class="form-control"
                     id="edit_phone"
                     name="phone"
                     required
                   />
                 </div>
               </div>
               <div class="form-row">
                 <div class="form-group col-md-6">
                   <label for="edit_value">Value</label>
                   <input
                     type="number"
                     class="form-control"
                     id="edit_value"
                     name="value"
                     step="0.01"
                     required
                   />
                 </div>
                 <div class="form-group col-md-6">
                   <label for="edit_stage">Stage</label>
                   <select
                     class="form-control"
                     id="edit_stage"
                     name="stage"
                     required
                   >
                     <option value="discovery">Discovery</option>
                     <option value="proposal">Proposal</option>
                     <option value="negotiation">Negotiation</option>
                     <option value="won">Won</option>
                     <option value="lost">Lost</option>
                   </select>
                 </div>
               </div>
               <div class="form-row">
                 <div class="form-group col-md-6">
                   <label for="edit_priority">Priority</label>
                   <select
                     class="form-control"
                     id="edit_priority"
                     name="priority"
                     required
                   >
                     <option value="low">Low</option>
                     <option value="medium">Medium</option>
                     <option value="high">High</option>
                   </select>
                 </div>
                 <div class="form-group col-md-6">
                   <label for="edit_assigned">Assigned</label>
                   <input
                     type="text"
                     class="form-control"
                     id="edit_assigned"
                     name="assigned"
                     required
                   />
                 </div>
               </div>
               <div class="form-row">
                 <div class="form-group col-md-6">
                   <label for="edit_source">Source</label>
                   <input
                     type="text"
                     class="form-control"
                     id="edit_source"
                     name="source"
                     required
                   />
                 </div>
                 <div class="form-group col-md-6">
                   <label for="edit_deal_date">Deal Date</label>
                   <input
                     type="date"
                     class="form-control"
                     id="edit_deal_date"
                     name="deal_date"
                     required
                   />
                 </div>
               </div>
               <div class="form-group">
                 <label for="edit_course_name">Course Name</label>
                 <input
                   type="text"
                   class="form-control"
                   id="edit_course_name"
                   name="course_name"
                   required
                 />
               </div>
               <button type="submit" class="btn btn-primary">
                 Save Changes
               </button>
             </form>
           </div>
         </div>
       </div>
     </div>

     <!-- Filter Modal -->
    <div class="modal fade" id="filterModal" tabindex="-1" role="dialog" aria-labelledby="filterModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="filterModalLabel">Filter Deals by Date</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label for="modalStartDate">Start Date</label>
              <input type="date" class="form-control" id="modalStartDate" placeholder="Start Date">
            </div>
            <div class="form-group">
              <label for="modalEndDate">End Date</label>
              <input type="date" class="form-control" id="modalEndDate" placeholder="End Date">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" onclick="applyFilter()">Apply Filter</button>
          </div>
        </div>
      </div>
    </div>

    
    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
      $(document).ready(function () {
        fetchDeals();

        // Handle the sorting button clicks
        $("#sortAscBtn").click(function () {
          sortTableByDate("#active-deals", "asc");
        });
        
        $("#sortDescBtn").click(function () {
          sortTableByDate("#active-deals", "desc");
        });

        $("#dealForm").on("submit", function (event) {
          event.preventDefault();
          $.ajax({
            url: "add_deal.php",
            type: "POST",
            data: $(this).serialize(),
            success: function (response) {
              alert(response);
              $("#dealForm")[0].reset();
              $("#dealModal").modal("hide");
              fetchDeals();
            },
          });
        });

        // Function to sort the table by date
        function sortTableByDate(tableSelector, order) {
          var rows = $(tableSelector + " tbody tr").get();
          rows.sort(function (a, b) {
            var A = new Date($(a).children("td").eq(9).text());
            var B = new Date($(b).children("td").eq(9).text());

            if (order === "asc") {
              return A - B;
            } else {
              return B - A;
            }
          });

          $.each(rows, function (index, row) {
            $(tableSelector).children("tbody").append(row);
          });
        }

        

        $("#editDealForm").on("submit", function (event) {
            event.preventDefault();
            $.ajax({
              url: "edit_deal.php",
              type: "POST",
              data: $(this).serialize(),
              success: function (response) {
                alert(response);
                $("#editDealForm")[0].reset();
                $("#editDealModal").modal("hide");
                fetchDeals();
              },
            });
          });
       });

          // Live search functionality
        $("#searchInput").on("keyup", function () {
            var value = $(this).val().toLowerCase();
            $("#active-deals tbody tr").filter(function () {
              $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });

        
        $("#searchClosed").on("keyup", function () {
            var value = $(this).val().toLowerCase();
            $("#closed-won tbody tr").filter(function () {
              $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
        

        function fetchDeals() {
          $.ajax({
            url: "fetch_deals.php",
            type: "GET",
            dataType: "json",
            success: function (data) {
              var activeDealsTable = $("#active-deals tbody");
              var closedWonDealsTable = $("#closed-won tbody");
              activeDealsTable.empty();
              closedWonDealsTable.empty();

              data.forEach(function (deal) {
                var row = "<tr>";
                row += "<td>" + deal.owner + "</td>";
                row += "<td>" + deal.company + "</td>";
                row += "<td>" + deal.email + "</td>";
                row += "<td>" + deal.phone + "</td>";
                row += "<td>" + deal.value + "</td>";
                row += "<td class='stage proposal'>" + deal.stage + "</td>";
                row += "<td class='priority high'>" + deal.priority + "</td>";
                row += "<td>" + deal.assigned + "</td>";
                row += "<td>" + deal.source + "</td>";
                row += "<td>" + deal.deal_date + "</td>";
                row += "<td>" + deal.course_name + "</td>";
                if (
                  deal.stage.toLowerCase() !== "won" &&
                  deal.stage.toLowerCase() !== "lost"
                ) {
                  row +=
                    '<td><button class="btn btn-sm btn-primary" onclick="editDeal(' +
                    deal.deal_id +
                    ')">Edit</button></td>';
                } else {
                  row += "<td></td>";
                }
                row += "</tr>";

                if (deal.stage.toLowerCase() === "won") {
                  closedWonDealsTable.append(row);
                } else {
                  activeDealsTable.append(row);
                }
              });
            },
          });

  
      }

       

      function editDeal(dealId) {
        $.ajax({
          url: "get_deal.php",
          type: "GET",
          data: { deal_id: dealId },
          dataType: "json",
          success: function (deal) {
            $("#edit_deal_id").val(deal.deal_id);
            $("#edit_owner").val(deal.owner);
            $("#edit_company").val(deal.company);
            $("#edit_email").val(deal.email);
            $("#edit_phone").val(deal.phone);
            $("#edit_value").val(deal.value);
            $("#edit_stage").val(deal.stage);
            $("#edit_priority").val(deal.priority);
            $("#edit_assigned").val(deal.assigned);
            $("#edit_source").val(deal.source);
            $("#edit_deal_date").val(deal.deal_date);
            $("#edit_course_name").val(deal.course_name);

            $("#editDealModal").modal("show");
          },
        });
      }

          function applyFilter() {
            const startDate = document.getElementById('modalStartDate').value;
            const endDate = document.getElementById('modalEndDate').value;
          
            fetch('filter_deals.php', {
              method: 'POST',
              headers: {
                'Content-Type': 'application/json'
              },
              body: JSON.stringify({ startDate, endDate })
            })
            .then(response => response.json())
            .then(data => {
              updateTable(data);
              $('#filterModal').modal('hide'); // Hide the modal after applying the filter
            })
            .catch(error => console.error('Error:', error));
          }
    
          function updateTable(data) {
            const tbody = document.querySelector('#active-deals tbody');
            tbody.innerHTML = '';
            data.forEach(deal => {
              const row = document.createElement('tr');
              row.innerHTML = `
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
                <td><button class="btn btn-sm btn-primary" onclick="editDeal(' +deal.deal_id +')">Edit</button></td>
              `;
              tbody.appendChild(row);
            });
          }
      
    </script>

    
  </body>
</html>
