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
                    <form class="row gy-2 gx-3 align-items-end" id="addtax" enctype="multipart/form-data">
                        <div class="card-body">
                            <h2 class="mb-4">My Account</h2>
                            <h3 class="card-title">Profile Details</h3>

                            <div>
                                <h3 class="card-title mt-4"><?= $username ?></h3>
                                <div class="form-label" style="margin-top: -5px;"><span style="font-weight: 600;margin-right: 5px;">Email:</span><?= $useremail ?>
                                </div>
                            </div>


                            <div class="row align-items-center">
                                <div class="col-auto"> <img style="width: 50px;height:50px" src="<?= empty($avatarpath) ? 'main/images/user.jpeg' : $avatarpath ?>" alt="" class="thumb-lg rounded-circle">
                                </div>
                                <div class="col-auto"><input class="form-control" type="file" id="myFile" name="avatar"></div>
                                <!-- <div class="col-auto"><a href="#" class="btn btn-ghost-danger">
                                        Delete avatar
                                    </a></div> -->
                            </div>

                            <h3 class="card-title mt-4">Mobile No</h3>
                            <p class="card-subtitle">To Change Currect mobile no, Enter New number & Click on
                                Change button.</p>
                            <div>
                                <div class="row g-2">
                                    <div class="col-auto">
                                        <input name="mobile" data-bvalidator='digit,required,minlength[10],maxlength[10]' type="number" class="form-control w-auto" value="<?= $usermobile ?>" fdprocessedid="dj6rjv">
                                    </div>
                                    <!-- <div class="col-auto"><a href="#" class="btn">
                                            Change
                                        </a></div> -->
                                </div>
                            </div>
                            <h3 class="card-title mt-4">Password</h3>
                            <p class="card-subtitle">To Change Currect Password, Enter New Password & Click on
                                Change.</p>
                            <div class="row g-2">
                                <div class="col-auto">
                                    <input name="password" type="password" class="form-control w-auto" value="" fdprocessedid="dj6rjv">
                                </div>
                                <!-- <div class="col-auto"><a href="#" class="btn">
                                        Change
                                    </a></div> -->
                            </div>
                            <p class="card-subtitle mt-3"><span style="color: rgba(233, 3, 3, 0.92);">Important*</span> - For verification
                                purpose, OTP will send to your registered email to change Mobile no or Password.
                            </p>
                            <div class="col-12 mt-3">
                                <button type="button" class="btn btn-primary" id="otp" onclick="requestotp()">Send OTP</button>
                                <button type="button" class="btn btn-primary" id="formsubmit" style="display: none;" onclick="sendForm('', '', 'updateprofile', 'resultid', 'addtax')">Submit</button>
                            </div>
                            <div id="resultid"></div>
                        </div>
                    </form>

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
<script>
    function requestotp() {
        event.preventDefault();
        addoverlay()
        $.post("main/otpforprofile.php",
            function(data) {
                if (data === "Success") {
                    removeoverlay()
                    $("#otpinput").append(" <div class='mt-3 row row-cols-lg-auto g-3 align-items-center'><div class='col-12'><input class='form-control' name='otp' data-bvalidator='digit,required,minlength[4],maxlength[4]' type='text' placeholder='Enter OTP' value=''></div></div>")
                    $("#formsubmit").css("display", "block")
                    $("#otp").css("display", "none")
                }
            },
        );
    }
</script>