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
    <title>Side Navigation Bar in HTML CSS JavaScript</title>
    <link rel="stylesheet" href="./css/styl.css" />
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
                    <a href="#" class="nav_link">
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
                <div class="col-md-7">

                    <div class="row">
                        <div class="col-md-4">
                            <div class="card card-1">
                                <div class="icon-living">
                                    <i class="bx bx-user"></i>
                                </div>
                                <h5 id="total-tenders"></h5>
                                <span class="tender-info">Total tenders</span>
                                <small>last week</small>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card card-2">
                                <div class="icon-living">
                                    <i class="bx bx-user"></i>
                                </div>
                                <h5 id="submitted-tenders"></h5>
                                <span class="tender-info">tender submitted</span>
                                <small> last week</small>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card card-3">
                                <div class="icon-living">
                                    <i class="bx bx-user"></i>
                                </div>
                                <h5 id="pending-tenders"></h5>
                                <span class="tender-info">pending tenders</span>
                                <small> last week</small>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="col-md-5">
                    <div class="card">
                        <div class="chart">
                            <canvas id="tenderChart"></canvas>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card">
                        <div class="leads-chart">
                            <canvas id="warm-leads"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="leads-chart">
                            <canvas id="cold-leads"></canvas>
                        </div>
                    </div>
                    <div class="card">
                        <div class="leads-chart">
                            <canvas id="cold-leads"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="leads-chart">
                            <canvas id="hot-leads"></canvas>
                        </div>
                    </div>
                    <div class="card">
                        <div class="leads-chart">
                            <canvas id="hot-leads"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card">

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
                                    <select id="personDropdown" class="form-control">
                                        <option value="all">All</option>
                                        <!-- Dynamically populate this list from your database -->
                                    </select>
                                </div>
                                <div class="filter">
                                    <span data-toggle="modal" data-target="#filterModal"><i class="bx bx-filter"></i>
                                        Filter</span>
                                </div>
                                <div class="sort">
                                    <span><i class='bx bx-sort-up' id="sortAscBtn"></i><i class='bx bx-sort-down'
                                            id="sortDescBtn"></i>
                                        Sort</span>
                                </div>
                            </div>
                        </header>
                        <main>
                            <section class="deals-section">
                                <h2>Tenders</h2>
                                <div class="table-container">
                                    <table id="active-deals" class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Tender Reference</th>
                                                <th>Tender Name</th>
                                                <th>Application Date</th>
                                                <th>Closing Date</th>
                                                <th>Contact Person</th>
                                                <th>Contact Details</th>
                                                <th>Need Briefing</th>
                                                <th>Submission Type</th>
                                                <th>Owner</th>
                                                <th>Comment</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- Tenders data will be inserted here -->
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

    <!-- Modal Form -->
    <div class="modal fade" id="addTenderModal" tabindex="-1" role="dialog" aria-labelledby="addTenderModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addTenderModalLabel">New Tender</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="addTenderForm">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="tenderReference">Tender Reference</label>
                                <input type="text" class="form-control" id="tenderReference" name="tenderReference"
                                    required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="tenderName">Tender Name</label>
                                <input type="text" class="form-control" id="tenderName" name="tenderName" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="applicationDate">Application Date</label>
                                <input type="date" class="form-control" id="applicationDate" name="applicationDate"
                                    required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="closingDate">Closing Date</label>
                                <input type="date" class="form-control" id="closingDate" name="closingDate" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="contactPerson">Contact Person</label>
                                <input type="text" class="form-control" id="contactPerson" name="contactPerson"
                                    required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="contactName">Contact Details</label>
                                <input type="text" class="form-control" id="contactName" name="contactName" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="needBriefing">Need Briefing</label>
                                <select class="form-control" id="needBriefing" name="needBriefing" required>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="submissionType">Submission Type</label>
                                <select class="form-control" id="submissionType" name="submissionType" required>
                                    <option value="Email">Email</option>
                                    <option value="Hand Delivered">Hand Delivered</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="owner">Owner</label>
                                <input type="text" class="form-control" id="owner" name="owner" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="comment">Comment</label>
                                <textarea class="form-control" id="comment" name="comment"></textarea>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Add Tender</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- Edit Tender Modal Form -->
    <div class="modal fade" id="editTenderModal" tabindex="-1" role="dialog" aria-labelledby="editTenderModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editTenderModalLabel">Edit Tender</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="editTenderForm">
                        <input type="hidden" id="editTenderId" name="tenderId">
                        <div class="form-group">
                            <label for="editTenderReference">Tender Reference</label>
                            <input type="text" class="form-control" id="editTenderReference" name="tenderReference"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="editTenderName">Tender Name</label>
                            <input type="text" class="form-control" id="editTenderName" name="tenderName" required>
                        </div>
                        <div class="form-group">
                            <label for="editApplicationDate">Application Date</label>
                            <input type="date" class="form-control" id="editApplicationDate" name="applicationDate"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="editClosingDate">Closing Date</label>
                            <input type="date" class="form-control" id="editClosingDate" name="closingDate" required>
                        </div>
                        <div class="form-group">
                            <label for="editContactPerson">Contact Person</label>
                            <input type="text" class="form-control" id="editContactPerson" name="contactPerson"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="editContactName">Contact Details</label>
                            <input type="text" class="form-control" id="editContactName" name="contactName" required>
                        </div>
                        <div class="form-group">
                            <label for="editNeedBriefing">Need Briefing</label>
                            <select class="form-control" id="editNeedBriefing" name="needBriefing" required>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="editSubmissionType">Submission Type</label>
                            <select class="form-control" id="editSubmissionType" name="submissionType" required>
                                <option value="Email">Email</option>
                                <option value="Hand Delivered">Hand Delivered</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="editOwner">Owner</label>
                            <input type="text" class="form-control" id="editOwner" name="owner" required>
                        </div>
                        <div class="form-group">
                            <label for="editComment">Comment</label>
                            <textarea class="form-control" id="editComment" name="comment"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Update Tender</button>
                    </form>
                </div>
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
    <script src="./js/leads.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            fetchTenders();
            fetchPersons();
            document.getElementById('personDropdown').addEventListener('change', fetchTenders);

            document.getElementById('addTenderForm').addEventListener('submit', function (event) {
                event.preventDefault();
                addTender();
                fetchTenders();
                fetchPersons();
            });

            document.getElementById('editTenderForm').addEventListener('submit', function (event) {
                event.preventDefault();
                editTender();
            });
           
        });

        function fetchPersons() {
            // Fetch unique persons from the database and populate the dropdown
            fetch('fetch_persons.php')
                .then(response => response.json())
                .then(data => {
                    const dropdown = document.getElementById('personDropdown');
                    data.forEach(person => {
                        const option = document.createElement('option');
                        option.value = person;
                        option.textContent = person;
                        dropdown.appendChild(option);
                    });
                })
                .catch(error => console.error('Error fetching persons:', error));
        }

        function fetchTenders() {
            const selectedPerson = document.getElementById('personDropdown').value;
            let url = 'fetch_tenders.php';
            if (selectedPerson !== 'all') {
                url += `?owner=${selectedPerson}`;
            }

            fetch(url)
                .then(response => response.json())
                .then(data => {
                    renderTenders(data);
                })
                .catch(error => console.error('Error fetching tenders:', error));
        }

        function addTender() {
            const formData = new FormData(document.getElementById('addTenderForm'));

            fetch('add_tender.php', {
                method: 'POST',
                body: formData
            })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        fetchTenders(); // Refresh the tenders list
                        $('#addTenderModal').modal('hide'); // Hide the modal
                        document.getElementById('addTenderForm').reset(); // Reset the form
                    } else {
                        console.error('Error adding tender:', data.message);
                    }
                })
                .catch(error => console.error('Error adding tender:', error));
        }

        function editTender() {
            const formData = new FormData(document.getElementById('editTenderForm'));

            fetch('edit_tender.php', {
                method: 'POST',
                body: formData
            })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        fetchTenders(); // Refresh the tenders list
                        $('#editTenderModal').modal('hide'); // Hide the modal
                        document.getElementById('editTenderForm').reset(); // Reset the form
                    } else {
                        console.error('Error editing tender:', data.message);
                    }
                })
                .catch(error => console.error('Error editing tender:', error));
        }



        // Live search functionality
        $("#searchInput").on("keyup", function () {
            var value = $(this).val().toLowerCase();
            $("#active-deals tbody tr").filter(function () {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });

        function renderTenders(tenders) {
            const tableBody = document.querySelector('#active-deals tbody');
            tableBody.innerHTML = '';

            tenders.forEach(tender => {
                const row = document.createElement('tr');

                row.innerHTML = `
                <td>${tender.tender_reference}</td>
                <td>${tender.tender_name}</td>
                <td>${tender.application_date}</td>
                <td>${tender.closing_date}</td>
                <td>${tender.contact_person}</td>
                <td>${tender.contact_name}</td>
                <td>${tender.need_briefing}</td>
                <td>${tender.submission_type}</td>
                <td>${tender.owner}</td>
                <td>${tender.comment}</td>
                 `;

                tableBody.appendChild(row);
            });
        }

        function showEditModal(tenderId) {
            fetch(`get_tender.php?tender_id=${tenderId}`)
                .then(response => response.json())
                .then(data => {
                    document.getElementById('editTenderId').value = data.tender_id;
                    document.getElementById('editTenderReference').value = data.tender_reference;
                    document.getElementById('editTenderName').value = data.tender_name;
                    document.getElementById('editApplicationDate').value = data.application_date;
                    document.getElementById('editClosingDate').value = data.closing_date;
                    document.getElementById('editContactPerson').value = data.contact_person;
                    document.getElementById('editContactName').value = data.contact_name;
                    document.getElementById('editNeedBriefing').value = data.need_briefing;
                    document.getElementById('editSubmissionType').value = data.submission_type;
                    document.getElementById('editOwner').value = data.owner;
                    document.getElementById('editComment').value = data.comment;

                    $('#editTenderModal').modal('show');
                })
                .catch(error => console.error('Error fetching tender:', error));
        }

    </script>

    <script>
        // Fetch tender data from the PHP script
        fetch('./tender/tender_data.php')
        .then(response => response.json())
        .then(data => {
            var weeks = [];
            var tenderCounts = [];

            data.forEach(function (item) {
            weeks.push('Week ' + item.week);
            tenderCounts.push(item.tender_count);
            });

            // Chart.js script
            var ctx = document.getElementById('tenderChart').getContext('2d');
            var tenderChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: weeks,
                datasets: [{
                label: 'Number of Tenders',
                data: tenderCounts,
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
                }]
            },
            options: {
                scales: {
                y: {
                    beginAtZero: true
                }
                }
            }
            });
        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
        fetch('./tender/get_tender_data.php')
            .then(response => response.json())
            .then(data => {
            document.getElementById('total-tenders').innerText = data.total_tenders;
            document.getElementById('submitted-tenders').innerText = data.submitted_tenders;
            document.getElementById('pending-tenders').innerText = data.pending_tenders;
            })
            .catch(error => console.error('Error fetching data:', error));
        });
    </script>
  

</body>

</html>