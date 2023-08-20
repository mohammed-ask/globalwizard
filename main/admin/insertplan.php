<?php
include "main/session.php";
// echo "<pre>";
// print_r($_POST);
$xx['added_on'] = date('Y-m-d H:i:s');
$xx['added_by'] = $employeeid;
$xx['updated_on'] = date('Y-m-d H:i:s');
$xx['updated_by'] = $employeeid;
$xx['status'] = 1;
$xx['planfor'] = $_POST['planfor'];
$xx['name'] = $_POST['name'];
if (isset($_POST['userid']) && $_POST['planfor'] === 'Custom') {
    $xx['userid'] = implode(",", $_POST['userid']);
}
$plan = $obj->insertnew("plan", $xx);

foreach ($_POST['plantypeid'] as $key => $val) {
    $tt['added_on'] = date('Y-m-d H:i:s');
    $tt['added_by'] = $employeeid;
    $tt['updated_on'] = date('Y-m-d H:i:s');
    $tt['updated_by'] = $employeeid;
    $tt['status'] = 1;
    $tt['price'] = $_POST['price'][$key];
    $tt['gstprice'] = $_POST['price'][$key] + ($_POST['price'][$key] * 18 / 100);
    $tt['plantypeid'] = $val;
    $tt['planid'] = $plan;
    $pland = $obj->insertnew("plandetail", $tt);
}
if (is_numeric($plan) && $plan > 0) {
    echo "Redirect : Plan Added Successfully URLmembershipplan";
}
