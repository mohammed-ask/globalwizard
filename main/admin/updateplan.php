<?php
include "main/session.php";
echo "<pre>";
print_r($_POST);
$id = $_POST['id'];
unset($_POST['id']);
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
$plan = $obj->update("plan", $xx, $id);

foreach ($_POST['plandetailid'] as $key => $val) {
    $tt['updated_on'] = date('Y-m-d H:i:s');
    $tt['updated_by'] = $employeeid;
    $tt['status'] = 1;
    $tt['price'] = $_POST['price'][$key];
    $pland = $obj->update("plandetail", $tt, $val);
}
if (is_numeric($plan) && $plan > 0) {
    echo "Redirect : Plan Updated Successfully URLmembershipplan";
}
