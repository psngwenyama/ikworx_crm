<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
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
        <img src="./images/profile (1).jpg" alt="" class="profile" style="border-radius: 50%;width: 35px;height: 35px;object-fit: cover;"/>
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
            <a href="Sales-Dash.php
            "     class="nav_link">
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
            <a href="#" class="nav_link">
              <span class="navlink_icon">
                <i class="bx bxs-contact"></i>
              </span>
              <span class="navlink">Contacts</span>
            </a>
          </li>
          <li class="item">
            <a href="file.php" class="nav_link">
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
        <div class="contact-this">
      <div class="container">
        <div class="row">
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
                            <span><i class="bx bx-user-circle"></i> Person</span>
                          </div>
                          <div class="filter">
                            <span data-toggle="modal" data-target="#filterModal"><i class="bx bx-filter"></i> Filter</span>
                          </div>
                          <div class="sort">
                            <span><i class='bx bx-sort-up' id="sortAscBtn"></i><i class='bx bx-sort-down' id="sortDescBtn"></i>
                              Sort</span>
                          </div>
                        </div>
                      </header>
        <div class="col-md-12">
            <div class="card">
                <div class="navba">
                    <div class="navbar-left">
                    
                    </div>
                    <!--<div class="navbar-right">
                        <button class="btn btn-info"> <i class="bx bx-plus-circle"></i> New Item</button>
                        <div class="search"><i class="bx bx-search"></i> Search</div>
                        <div class="person-icon"><i class="bx bx-user-circle"></i> Person</div>
                        <div class="filter"><i class="bx bx-filter"></i> filter</div>
                        <div class="sort"><i class="bx bx-sort-alt-2"></i></div>
                  
                    </div>-->
                </div>
            
                <table class="contacts-table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Company</th>
                            <th>Source</th>
                            <th>Status</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Course name</th>
                        </tr>
                    </thead>
                    <tbody id="contactsBody">
                         <?php
                            
                      // Include the database connection file
                      include './connect/connection.php';

                      // SQL query to fetch data from leads table
                      
                      $sql = "SELECT lead_id, Name, Company, Source, Status , Phone, Email, Course_name FROM leads order by Created desc LIMIT 5";
                      
                      $result = $conn->query($sql);

                      if ($result->num_rows > 0) {
                          // Output data of each row
                          while($row = $result->fetch_assoc()) {
                              echo "<tr>";
                              echo "<td>" . $row["Name"] . "</td>";
                              echo "<td>" . $row["Company"] . "</td>";
                              echo "<td>" . $row["Source"] . "</td>";
                              echo "<td class='priority low' >" . $row["Status"] . "</td>";
                              echo "<td>" . $row["Phone"] . "</td>";
                              echo "<td>" . $row["Email"] . "</td>";
                              echo "<td>" . $row["Course_name"] . "</td>";
                              echo "</tr>";
                          }
                      } else {
                          echo "<tr><td colspan='10'>No leads found.</td></tr>";
                      }                 


                      $conn->close();
                      ?>
                </table>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    
    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="./js/script.js"></script>
  </body>
</html>
