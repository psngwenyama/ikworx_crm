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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <link rel="stylesheet" type="text/css" href="css/elfinder.min.css">
    <link rel="stylesheet" type="text/css" href="css/theme.css">
    <script src="js/elfinder.min.js"></script>
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
            <a href="user_deals.php" class="nav_link">
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
            <a href="#" class="nav_link">
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
            <h4> <span><i class="bx bxl-wordpress"></i></span>word documents  </h4>
            <i class="bx bxs-file-pdf page-icon"></i>
            <div class="col-md-8">
              <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar w-75"></div>
              </div>
            </div>
            <div class="col-md-4"></div>
           </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <h4><span><i class="bx bxl-wordpress"></i></span>word documents  </h4>
              <i class='bx bxs-file-pdf page-icon'></i>
              <div class="col-md-8">
                <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                  <div class="progress-bar w-75"></div>
                </div>
              </div>
              <div class="col-md-4"></div>
            </div>
           </div>
          <div class="col-md-4">
            <div class="card">
              <h4><span><i class="bx bxl-wordpress"></i></span>word documents  </h4>
              <i class='bx bxs-file-pdf page-icon'></i>
              <div class="col-md-8">
                <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                  <div class="progress-bar w-75"></div>
                </div>
              </div>
              <div class="col-md-4"></div>
             
            </div>
            
          </div>
        
          <div class="col-md-12">
            <div class="card">
              <div id="elfinder"></div>

              <script>
                  document.addEventListener('DOMContentLoaded', function() {
                      // Ensure elFinder is defined
                      if (typeof elFinder !== 'undefined') {
                          var elFinderInstance = new elFinder({
                              url: 'php/connector.php', // connector URL
                              lang: 'en', // optional, defaults to 'en'
                          });
                          
                          // Render elFinder UI in the target div
                          elFinderInstance.render(document.getElementById('elfinder'));
                      } else {
                          console.error('elFinder is not defined.');
                      }
                  });
              </script>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card"></div>
          </div>
          <div class="col-md-6">
            <div class="card"></div>
          </div>
        </div>
        </div>
        <div class="col-md-3">
          <div class="card">
            <div class="box-create">
              <div class="d-grid gap-2">
                <button class="btn btn-primary" type="button">Create new file</button>
              </div>
              <div class="progres">
                <div class="barOverflow">
                  <div class="bar"></div>
                </div>
                <span class="pro-span">10</span>%
              </div>
              <div class="files">
                <table class="table bg-light">
                
                  <tbody>
                    <tr>
                      <td><div class="table-icons"> <i class="bx bx-briefcase"></i></div></td>
                      <td>Word <br> <span class="number-of-files">465 files</span></td>
                      <td><span class="storage-size">15GB</span></td>
                    </tr>
                    <tr>
                      <td><div class="table-icons"><i class="bx bx-briefcase"></i></div></td>
                      <td>PDF <br> <span class="number-of-files">465 files</span></td>
                      <td><span class="storage-size">15GB</span></td>
                    </tr>
                    <tr>
                      <td><div class="table-icons"><i class="bx bx-briefcase"></i></div></td>
                      <td>PPTX <br> <span class="number-of-files">465 files</span></td>
                      <td><span class="storage-size">15GB</span></td>
                    </tr>
                    <tr>
                      <td><div class="table-icons"><i class="bx bx-briefcase"></i></div></td>
                      <td>PPTX <br> <span class="number-of-files">465 files</span></td>
                      <td><span class="storage-size">15GB</span></td>
                    </tr>
                  </tbody>
                </table>
               
              </div>

            </div>
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
