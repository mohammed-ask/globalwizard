<?php
include "main/session.php";
?>
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <h2 class="page-title">
                    Account Settings
                </h2>
            </div>
        </div>
    </div>
</div>
<!-- Page body -->
<div class="page-body">
    <div class="container-xl">
        <div class="card">
            <div class="row g-0">
                <div class="col-12 col-md-3 border-end">
                    <div class="card-body">
                        <h4 class="subheader">Account settings</h4>
                        <div class="list-group list-group-transparent">
                            <a href="accountl" class="list-group-item list-group-item-action d-flex align-items-center active">My
                                Account</a>

                            <a href="plan" class="list-group-item list-group-item-action d-flex align-items-center">Active Plan</a>
                            <a href="transaction" class="list-group-item list-group-item-action d-flex align-items-center">Recent Transactions</a>
                        </div>
                        
                    </div>
                </div>
                <div class="col-12 col-md-9 d-flex flex-column">
                    <div class="card-body">
                        <h2 class="mb-4">My Account</h2>
                        <h3 class="card-title">Profile Details</h3>

                        <div>
                            <h3 class="card-title mt-4">Sharma Ji Ka Ladka</h3>

                            <div class="form-label" style="margin-top: -15px;"><span style="font-weight: 600;margin-right: 5px;">City:</span>Chennai</div>
                            <div class="form-label" style="margin-top: -5px;"><span style="font-weight: 600;margin-right: 5px;">Email:</span>sharmajikaladka@gmail.com
                            </div>
                        </div>


                        <div class="row align-items-center">
                            <div class="col-auto"><span class="avatar avatar-xl" style="background-image: url(./static/avatars/000m.jpg)"></span>
                            </div>
                            <div class="col-auto"><a href="#" class="btn">
                                    Change avatar
                                </a></div>
                            <div class="col-auto"><a href="#" class="btn btn-ghost-danger">
                                    Delete avatar
                                </a></div>
                        </div>

                        <h3 class="card-title mt-4">Mobile No</h3>
                        <p class="card-subtitle">To Change Currect mobile no, Enter New number & Click on
                            Change button.</p>
                        <div>
                            <div class="row g-2">
                                <div class="col-auto">
                                    <input type="number" class="form-control w-auto" value="8989898989" fdprocessedid="dj6rjv">
                                </div>
                                <div class="col-auto"><a href="#" class="btn">
                                        Change
                                    </a></div>
                            </div>
                        </div>
                        <h3 class="card-title mt-4">Password</h3>
                        <p class="card-subtitle">To Change Currect Password, Enter New Password & Click on
                            Change.</p>
                        <div class="row g-2">
                            <div class="col-auto">
                                <input type="password" class="form-control w-auto" value="8989898989" fdprocessedid="dj6rjv">
                            </div>
                            <div class="col-auto"><a href="#" class="btn">
                                    Change
                                </a></div>
                        </div>
                        <p class="card-subtitle mt-3"><span style="color: rgba(233, 3, 3, 0.92);">Important*</span> - For verification
                            purpose, OTP will send to your registered email to change Mobile no or Password.
                        </p>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<?php
$pagemaincontent = ob_get_contents();
ob_end_clean();

$pagemeta = "";
$pagetitle = "Your Dashboard-";
$contentheader = "";
$pageheader = "";
include "main/templete.php"; ?>