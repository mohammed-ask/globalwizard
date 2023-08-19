<?php
include "main/session.php";
/* @var $obj db */
ob_start();

?>
 <header class="navbar navbar-expand-md d-none d-lg-flex d-print-none">
        <div class="container-xl">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu" aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="navbar-nav flex-row order-md-last">
            <div class="d-none d-md-flex">
              <a href="?theme=dark" class="nav-link px-0 hide-theme-dark" data-bs-toggle="tooltip" data-bs-placement="bottom" aria-label="Enable dark mode" data-bs-original-title="Enable dark mode">
                <!-- Download SVG icon from http://tabler-icons.io/i/moon -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z"></path></svg>
              </a>
              <a href="?theme=light" class="nav-link px-0 hide-theme-light" data-bs-toggle="tooltip" data-bs-placement="bottom" aria-label="Enable light mode" data-bs-original-title="Enable light mode">
                <!-- Download SVG icon from http://tabler-icons.io/i/sun -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0"></path><path d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7"></path></svg>
              </a>
              
            </div>
            <div class="nav-item dropdown">
              <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
                <span class="avatar avatar-sm" style="background-image: url(./static/avatars/000m.jpg)"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <a href="#" class="dropdown-item">Settings</a>
                <a href="#" class="dropdown-item">Logout</a>
              </div>
            </div>
          </div>
          <div class="collapse navbar-collapse" id="navbar-menu">
            <div>
              <!-- <form action="https://preview.tabler.io/" method="get" autocomplete="off" novalidate="">
                <div class="input-icon">
                  <span class="input-icon-addon">
                    
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0"></path><path d="M21 21l-6 -6"></path></svg>
                  </span>
                  <input type="text" value="" class="form-control" placeholder="Search…" aria-label="Search in website" fdprocessedid="0597d">
                </div>
              </form> -->
            </div>
          </div>
        
        </div>
      </header>

<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <!-- Page pre-title -->
                <div class="page-pretitle">
                    Overview
                </div>
                <!-- <h2 class="page-title">
                  Dashboard
                </h2> -->
            </div>
            <!-- Page title actions -->
            <div class="col-auto ms-auto d-print-none">
                <div class="btn-list">
                    <!-- <span class="d-none d-sm-inline">
                        <a href="#" class="btn">
                            New view
                        </a>
                    </span> -->
                    <a href="#" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal" data-bs-target="#modal-report" onclick='dynamicmodal("none", "addemployee", "", "Add Employee")'>
                        <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                        <svg style="display: inline; " xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M12 5l0 14"></path>
                            <path d="M5 12l14 0"></path>
                        </svg>
                        Create New Plan
                    </a>


                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page body -->
<div class="page-body">
    <div class="container-xl">
        <div class="row row-deck row-cards">

            <div class="col-12">
                <div class="row row-cards">
                    <div class="col-sm-6 col-lg-3">
                        <div class="card card-sm">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <span class="bg-primary text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/currency-dollar -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M16.7 8a3 3 0 0 0 -2.7 -2h-4a3 3 0 0 0 0 6h4a3 3 0 0 1 0 6h-4a3 3 0 0 1 -2.7 -2"></path>
                                                <path d="M12 3v3m0 12v3"></path>
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="col">
                                        <div class="font-weight-medium">
                                            132 Sales
                                        </div>
                                        <div class="">
                                            12 waiting payments
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="card card-sm">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <span class="bg-green text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/shopping-cart -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                                <path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                                <path d="M17 17h-11v-14h-2"></path>
                                                <path d="M6 5l14 1l-1 7h-13"></path>
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="col">
                                        <div class="font-weight-medium">
                                            78 Orders
                                        </div>
                                        <div class="">
                                            32 shipped
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="card card-sm">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <span class="bg-twitter text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/brand-twitter -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M22 4.01c-1 .49 -1.98 .689 -3 .99c-1.121 -1.265 -2.783 -1.335 -4.38 -.737s-2.643 2.06 -2.62 3.737v1c-3.245 .083 -6.135 -1.395 -8 -4c0 0 -4.182 7.433 4 11c-1.872 1.247 -3.739 2.088 -6 2c3.308 1.803 6.913 2.423 10.034 1.517c3.58 -1.04 6.522 -3.723 7.651 -7.742a13.84 13.84 0 0 0 .497 -3.753c0 -.249 1.51 -2.772 1.818 -4.013z"></path>
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="col">
                                        <div class="font-weight-medium">
                                            623 Shares
                                        </div>
                                        <div class="">
                                            16 today
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="card card-sm">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <span class="bg-facebook text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/brand-facebook -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3"></path>
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="col">
                                        <div class="font-weight-medium">
                                            132 Likes
                                        </div>
                                        <div class="">
                                            21 today
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 d-flex flex-column">

                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Membership Subscribers</h3>
                        </div>

                        <div class="table-responsive fixTableHead" style="height: 400px;">
                            <table class="table card-table table-vcenter text-nowrap datatable">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Time</th>
                                        <th>Transaction Id</th>
                                        <th>Payment Mode</th>
                                        <th>Amount</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <div>
                                    <tbody>

                                        <tr>
                                            <td>23 Jun, 2023</td>
                                            <td>16:23</td>
                                            <td>TR6377366678388</td>
                                            <td>Upi Transfer</td>
                                            <td><span>₹</span>88798</td>
                                            <td><span class="badge bg-success me-1"></span>Success</td>

                                        </tr>
                                        <tr>

                                            <td>23 Jun, 2023</td>
                                            <td>16:23</td>
                                            <td>TR6377366678388</td>
                                            <td>Upi Transfer</td>
                                            <td><span>₹</span>8889077</td>
                                            <td><span class="badge bg-warning me-1"></span>Pending</td>
                                        </tr>

                                        <tr>
                                            <td>23 Jun, 2023</td>
                                            <td>16:23</td>
                                            <td>TR6377366678388</td>
                                            <td>Upi Transfer</td>
                                            <td><span>₹</span>88798</td>
                                            <td><span class="badge bg-success me-1"></span>Success</td>

                                        </tr>
                                        <tr>

                                            <td>23 Jun, 2023</td>
                                            <td>16:23</td>
                                            <td>TR6377366678388</td>
                                            <td>Upi Transfer</td>
                                            <td><span>₹</span>8889077</td>
                                            <td><span class="badge bg-warning me-1"></span>Pending</td>
                                        </tr>

                                        <tr>
                                            <td>23 Jun, 2023</td>
                                            <td>16:23</td>
                                            <td>TR6377366678388</td>
                                            <td>Upi Transfer</td>
                                            <td><span>₹</span>88798</td>
                                            <td><span class="badge bg-success me-1"></span>Success</td>

                                        </tr>
                                        <tr>

                                            <td>23 Jun, 2023</td>
                                            <td>16:23</td>
                                            <td>TR6377366678388</td>
                                            <td>Upi Transfer</td>
                                            <td><span>₹</span>8889077</td>
                                            <td><span class="badge bg-warning me-1"></span>Pending</td>
                                        </tr>

                                        <tr>
                                            <td>23 Jun, 2023</td>
                                            <td>16:23</td>
                                            <td>TR6377366678388</td>
                                            <td>Upi Transfer</td>
                                            <td><span>₹</span>88798</td>
                                            <td><span class="badge bg-success me-1"></span>Success</td>

                                        </tr>
                                        <tr>

                                            <td>23 Jun, 2023</td>
                                            <td>16:23</td>
                                            <td>TR6377366678388</td>
                                            <td>Upi Transfer</td>
                                            <td><span>₹</span>8889077</td>
                                            <td><span class="badge bg-warning me-1"></span>Pending</td>
                                        </tr>

                                        <tr>
                                            <td>23 Jun, 2023</td>
                                            <td>16:23</td>
                                            <td>TR6377366678388</td>
                                            <td>Upi Transfer</td>
                                            <td><span>₹</span>88798</td>
                                            <td><span class="badge bg-success me-1"></span>Success</td>

                                        </tr>
                                        <tr>

                                            <td>23 Jun, 2023</td>
                                            <td>16:23</td>
                                            <td>TR6377366678388</td>
                                            <td>Upi Transfer</td>
                                            <td><span>₹</span>8889077</td>
                                            <td><span class="badge bg-warning me-1"></span>Pending</td>
                                        </tr>

                                        <tr>
                                            <td>23 Jun, 2023</td>
                                            <td>16:23</td>
                                            <td>TR6377366678388</td>
                                            <td>Upi Transfer</td>
                                            <td><span>₹</span>88798</td>
                                            <td><span class="badge bg-success me-1"></span>Success</td>

                                        </tr>
                                        <tr>

                                            <td>23 Jun, 2023</td>
                                            <td>16:23</td>
                                            <td>TR6377366678388</td>
                                            <td>Upi Transfer</td>
                                            <td><span>₹</span>8889077</td>
                                            <td><span class="badge bg-warning me-1"></span>Pending</td>
                                        </tr>

                                    </tbody>
                                </div>
                            </table>
                        </div>

                    </div>
                </div>




            </div>

        </div>
    </div>
</div>

<?php

//Assign all Page Specific variables
$pagemaincontent = ob_get_contents();
ob_end_clean();
$pagemeta = "";
$pagetitle = "Global Wizard: Admin Dashboard";
$contentheader = "";
$pageheader = "";
include "main/admin/templete.php";
?>
<script>

</script>