<?php
include "main/session.php";
$activeplan = $obj->selectextrawhereupdate('subscribers inner join plandetail on plandetail.id = subscribers.plandetailid inner join plan on plan.id = plandetail.planid inner join plantypes on plantypes.id = plandetail.plantypeid', "subscribers.id,subscribers.expireon,subscribers.added_on,plan.name,plantypes.name as pname,subscribers.status", "subscribers.userid=$employeeid and subscribers.status = 1")->fetch_assoc();
$curdate = date('Y-m-d');
if (!empty($activeplan) && $curdate > $activeplan['expireon']) {
    $obj->delete("subscribers", $activeplan['id']);
    header('location:plan');
}
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
                            <a href="account" class="list-group-item list-group-item-action d-flex align-items-center">My Account</a>

                            <a href="plan" class="list-group-item list-group-item-action d-flex align-items-center active">Active Plan</a>
                            <a href="transaction" class="list-group-item list-group-item-action d-flex align-items-center">Recent Transactions</a>
                        </div>

                    </div>
                </div>
                <div class="col-12 col-md-9 d-flex flex-column">

                    <div class="card-body">
                        <div class="row g-2 align-items-center">

                            <?php
                            if (!empty($activeplan)) { ?>
                                <div class="col">
                                    <h4 class="card-title m-0">
                                        <?= $activeplan['name'] ?>
                                    </h4>
                                    <div style="color: gray; font-weight: 500;">
                                        <?= $activeplan['pname'] ?>
                                    </div>
                                    <div class="text-secondary bill-date">
                                        Billed on - <?= changedateformatespecito($activeplan['added_on'], "Y-m-d H:i:s", "d M Y") ?>
                                    </div>
                                    <div class="small mt-1">
                                        <span style="margin-right: 10px;">Status</span> <span class="badge bg-green"></span> Active
                                    </div>
                                </div>
                            <?php } else { ?>
                                <div class="col">
                                    <h4 class="card-title m-0">
                                        No active plan right now
                                    </h4>
                                    <div style="color: gray; font-weight: 500;">

                                    </div>
                                    <div class="text-secondary bill-date">

                                    </div>
                                    <div class="small mt-1">
                                        <span style="margin-right: 10px;">Status</span> <span class="badge bg-danger"></span> Inactive
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <a href="#" class="btn">
                                        Renew Plan
                                    </a>
                                </div>
                            <?php } ?>

                        </div>
                        <div class="plan-expired-date"> Your Current Plan Will Expired on <span style="font-weight: 600;margin-right: 5px;"><?= changedateformatespecito($activeplan['expireon'], "Y-m-d", "d M, Y") ?></span>
                        </div>
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