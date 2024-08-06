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
            <a href="#" class="nav_link">
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
        
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                      <div class="card-header mb-3">
                        <div class="row">
                          <div class="col-md-7">
                          
                            <h6> </i> Active Deals</h6>
                          </div>
                          <div class="col-md-4">
                            <i class="bx bx-layer"></i>
                          <i class="bx bx-download"></i>
                          </div>
                        </div>
                      </div>
                  
                    
                        <h4>R<span id="active-deals-revenue"></span></h4>
                        <small>+23.65% <i class="bx bx-trending-down"></i></small>
                        <span><i class="bx bx-dollar-circle"></i></span>

                       
                       
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                      <div class="card-header mb-3">
                        <div class="row">
                          <div class="col-md-7">
                          
                            <h6> </i> Average won deals</h6>
                          </div>
                          <div class="col-md-4">
                            <i class="bx bx-layer"></i>
                          <i class="bx bx-download"></i>
                          </div>
                        </div>
                      </div>
                    
                   
                        <h4>R<span id="won-deals-avg-revenue"></h4>
                        <small>+23.65% <i class="bx bx-trending-down"></i></small>
                        <span><i class="bx bx-wallet"></i></span>

                     
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                      <div class="card-header mb-3">
                        <div class="row">
                          <div class="col-md-7">
                          
                            <h6> </i> Won deals</h6>
                          </div>
                          <div class="col-md-4">
                            <i class="bx bx-layer"></i>
                          <i class="bx bx-download"></i>
                          </div>
                        </div>
                      </div>
                    
                
                        <h4>R<span id="won-deals-total-revenue"></h4>
                        <small>+23.65% <i class="bx bx-trending-up"></i></small>
                        <span><i class="bx bx-money-withdraw"></i></span>
                        
                       
                     </div>
            </div>
            </div>
          <div class="card">
            <div class="card-header mb-3">
              <div class="row">
                <div class="col-md-7">
                
                  <h6>Total sales </h6>
                </div>
                <div class="col-md-4">
                  <i class="bx bx-layer"></i>
                <i class="bx bx-download"></i>
                </div>
              </div>
            </div>
      
            <div class="sales-overview">
              <canvas id="sales-chart"></canvas>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header mb-3">
                  <div class="row">
                    <div class="col-md-7">
                    
                      <h6>Latest transactions</h6>
                    </div>
                    <div class="col-md-4">
                      <i class="bx bx-layer"></i>
                    <i class="bx bx-download"></i>
                    </div>
                  </div>
                </div>
                <table class="table">
                  <thead style="border-bottom: transparent;">
                    <tr class="bg-light">
                      
                      <th scope="col" colspan="2" class="text-dark align-text-baseline" style="text-align: left;">Customer<i class="bx bx-chevron-down"></i></th>
                      <th scope="col" class="text-dark">info </th>
                      <th scope="col" class="text-dark">Price</th>

                    </tr>
                  </thead>
                    <tbody>
                      <tr>
                        <td><div class="pic"></div></td>
                        <td><div class="customer">Web design <br> <h6>12:00 12 january 2023</h6>
                        </div></td>
                        <td><span class="id">67455</span> <br> <span class="n">2 items</span></td>
                        <td> <div class="amount">R2,000</div>  </td>
             
                        
                      </tr>
                      <tr>
                        <td><div class="pic"></div></td>
                        <td ><div class="customer">Inventory management <br> <h6>12:00 12 january 2023</h6></div> </td>
                        <td><span class="id">67455</span> <br> <span class="n">2 items</span></td>
                        <td> <div class="amount">R2,000</div>  </td>
                
                      </tr>
                  
                      <tr>
                        <td><div class="pic"></div></td>
                        <td> <div class="customer">Advance excel <br> <h6>12:00 12 january 2023</h6></div> </td>
                        <td><span class="id">67455</span> <br> <span class="n">2 items</span></td>
                        <td> <div class="amount">R2,000</div>  </td>
                
                      </tr>
                    </tbody>
                  </table>
                  <div class="row">
              
                    <div class="col-md-6"></div>
                    <div class="col-md-6">
                      <nav aria-label="Page navigation example">
                        <ul class="pagination">
                          <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                              <span aria-hidden="true">&laquo;</span>
                            </a>
                          </li>
                          <li class="page-item"><a class="page-link" href="#">1</a></li>
                          <li class="page-item"><a class="page-link" href="#">2</a></li>
                          <li class="page-item"><a class="page-link" href="#">3</a></li>
                          <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                              <span aria-hidden="true">&raquo;</span>
                            </a>
                          </li>
                        </ul>
                      </nav>

                    </div>
                  </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="card">
                <div class="card-header mb-3">
                  <div class="row">
                    <div class="col-md-7">
                    
                      <h6>Recent Activities</h6>
                    </div>
                    <div class="col-md-4">
                      <i class="bx bx-layer"></i>
                    <i class="bx bx-download"></i>
                    </div>
                  </div>
                </div>
                <h6>today</h6>
                <ul class="time-line">
                  <li class="time-line-link" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" aria-expanded="false" aria-controls="collapseWidthExample">
                      Website Order <small>added to services sales</small> add by<span>#Zelda </span>
                      <span class="time">12:20</span>
                      <div class="line"></div>
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
                      <div class="line"></div>
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
              
              </ul>
              </div>
            </div>
          </div>
      </div>
      <div class="col-md-6">
        <div class="card">
          <div class="card-header mb-3">
            <div class="row">
              <div class="col-md-7">
              
                <h6> </i>Most Sold</h6>
              </div>
              <div class="col-md-4">
                <i class="bx bx-layer"></i>
              <i class="bx bx-download"></i>
              </div>
            </div>
          </div>
          <table class="table bg-light">
            <thead>
              <tr class="bg-light">
                <th scope="col">
                 
                </th>
                <th scope="col">No</th>
                <th scope="col">Customer id</th>
              
                <th scope="col">Product</th>
                <th scope="col">Number sold</th>
                <th scope="col">Date</th>
                <th scope="col">Price</th>
             
                

              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">
                  <input type="checkbox">
                </th>
                <td>1</td>
                <td>#83484</td>
          
                <td><div class="picture"></div> Web Hosting</td>
                <td>245</td>
                <td><div class="stock">limited stock <br> </div></td>
                <td>R234</td>
               
             
                
              </tr>
              <tr>
                <th scope="row">
                  <input type="checkbox">
                </th>
                <td>2</td>
                <td >#3474</td>
                <td><div class="picture"></div> Project management</td>
                <td>12</td>
                <td><div class="stock">in stock <br> </div></td>
                <td>R4300</td>
               
                
              </tr>
              <tr>
                <th scope="row">
                  <input type="checkbox">
                </th>
                <td>3</td>
                <td>#27</td>
             
                <td><div class="picture"></div> Brand Design</td>
                <td>423</td>
                <td><div class="stock">in stock <br> </div></td>
                <td>R315</td>
              
                
              </tr>
              <tr>
                <th scope="row">
                  <input type="checkbox">
                </th>
                <td>4</td>
                <td>#5884</td>
               
                <td><div class="picture"></div>Website </td>
                <td>120</td>
                <td><div class="stock">out of stock <br> </div></td>
                <td>R1900</td>
             
                
              </tr>
            </tbody>
          </table>
      </div>
      
    </div>
    <div class="col-md-6">
      <div class="card">
        <div class="card-header mb-3">
          <div class="row">
            <div class="col-md-7">
            
              <h6> Top sellers</h6>
            </div>
            <div class="col-md-4">
              <i class="bx bx-layer"></i>
            <i class="bx bx-download"></i>
            </div>
          </div>
        </div>
        <table class="table bg-light">
          <thead>
            <tr class="bg-light">
              <th scope="col">
               
              </th>
              <th scope="col">No</th>
              <th scope="col">Customer id</th>
            
              <th scope="col">Product</th>
              <th scope="col">Number sold</th>
              <th scope="col">Date</th>
              <th scope="col">Price</th>
              
              

            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">
                <input type="checkbox">
              </th>
              <td>1</td>
              <td>#83484</td>
        
              <td><div class="picture"></div> Web Hosting</td>
              <td>245</td>
              <td><div class="stock">in stock <br> </div></td>
              <td>R234</td>
             
           
              
            </tr>
            <tr>
              <th scope="row">
                <input type="checkbox">
              </th>
              <td>2</td>
              <td >#3474</td>
              <td><div class="picture"></div> Project management</td>
              <td>12</td>
              <td><div class="stocks">out of stock<br> </div></td>
              <td>R4300</td>
             
              
            </tr>
            <tr>
              <th scope="row">
                <input type="checkbox">
              </th>
              <td>3</td>
              <td>#27</td>
           
              <td><div class="picture"></div> Brand Design</td>
              <td>423</td>
              <td><div class="stock">limited stock <br> </div></td>
              <td>R315</td>
             
              
            </tr>
            
            <tr>
              <th scope="row">
                <input type="checkbox">
              </th>
              <td>4</td>
              <td>#58</td>
             
              <td><div class="picture"></div>Website </td>
              <td>120</td>
              <td><div class="stock">in stock<br> </div></td>
              <td>R1900</td>
              
              
            </tr>
          </tbody>
        </table>
    </div>
    </div>
      <div class="col-md-4">
        <div class="card">
          <div class="card-header mb-3">
            <div class="row">
              <div class="col-md-7">
              
                <h6> sale by Products</h6>
              </div>
              <div class="col-md-4">
                <i class="bx bx-layer"></i>
              <i class="bx bx-download"></i>
              </div>
            </div>
          </div>
          <div class="chart">
            <canvas id="product"></canvas>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <div class="card-header mb-3">
            <div class="row">
              <div class="col-md-7">
              
                <h6>Sales by city </h6>
              </div>
              <div class="col-md-4">
                <i class="bx bx-layer"></i>
              <i class="bx bx-download"></i>
              </div>
            </div>
          </div>
          <div class="chart">
            <canvas id="product-by-city"></canvas>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <div class="card-header mb-3">
            <div class="row">
              <div class="col-md-7">
              
                <h6> sale by Region </h6>
              </div>
              <div class="col-md-4">
                <i class="bx bx-layer"></i>
              <i class="bx bx-download"></i>
              </div>
            </div>
          </div>
          <div class="chart">
            <canvas id="product-by-region"></canvas>
          </div>
        </div>
      </div>
      <div class="col-md-12">
        <div class="card">  
       
          <div class="header border-bottom mb-2 bg-light">
            <div class="row">
            <div class="col-md-6">
              <nav class="nav">
                <a class="nav-link active" aria-current="page" href="#">All Products </a>
                <a class="nav-link text-secondary" href="#">Online Products</a>
                <a class="nav-link text-secondary" href="#">Course products </a>
              
              </nav>
            </div>
            <div class="col-md-2">
             
            </div>
            <div class="col-md-2">

            </div>
        
          </div>
          </div>
          <div class="search border-bottom"> <input type="text" name="" id="" placeholder="Search" ></div>
          <table class="table bg-light">
            <thead>
              <tr class="bg-light">
                <th scope="col">
                 
                </th>
                <th scope="col">No</th>
                <th scope="col">Customer id</th>
              
                <th scope="col">Product</th>
                <th scope="col">Number sold</th>
                <th scope="col">Date</th>
                <th scope="col">Price</th>
                <th scope="col">Status</th>
                

              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">
                  <input type="checkbox">
                </th>
                <td>1</td>
                <td>#83484</td>
          
                <td><div class="picture"></div> Web Hosting</td>
                <td>245</td>
                <td>28/02/2023</td>
                <td>R234</td>
                <td><div class="status">Completed</div></td>
             
                
              </tr>
              <tr>
                <th scope="row">
                  <input type="checkbox">
                </th>
                <td>2</td>
                <td >#3474</td>
                <td><div class="picture"></div> Project management</td>
                <td>12</td>
                <td>27/03/2023</td>
                <td>R4300</td>
                <td><div class="status">Completed</div></td>
                
              </tr>
              <tr>
                <th scope="row">
                  <input type="checkbox">
                </th>
                <td>3</td>
                <td>#27</td>
             
                <td><div class="picture"></div> Brand Design</td>
                <td>423</td>
                <td>12/06/2023</td>
                <td>R315</td>
                <td><div class="status">Completed</div></td>
                
              </tr>
              <tr>
                <th scope="row">
                  <input type="checkbox">
                </th>
                <td>4</td>
                <td>#5884</td>
               
                <td><div class="picture"></div>Website </td>
                <td>120</td>
                <td>05/07/2024</td>
                <td>R1900</td>
                <td><div class="status">Completed <br> </div></td>
                
              </tr>
            </tbody>
          </table>
    </div>
    </div>
    </div>
    </div>
    </div>
    
    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="./js/script.js"></script>
    <script src="./js/sales_charts.js"></script>
    <script>
      function fetchDealsData() {
          fetch('get_deals_data.php')
              .then(response => response.json())
              .then(data => {
                    document.getElementById('active-deals-revenue').innerText = parseFloat(data.active_deals_revenue).toFixed(2);
                    document.getElementById('won-deals-avg-revenue').innerText = parseFloat(data.won_deals_avg_revenue).toFixed(2);
                    document.getElementById('won-deals-total-revenue').innerText = parseFloat(data.won_deals_total_revenue).toFixed(2);
              })
              .catch(error => console.error('Error fetching data:', error));
      }

      window.onload = fetchDealsData;
  </script>
  </body>
</html>
