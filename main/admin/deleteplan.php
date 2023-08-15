<?php
include "main/session.php";
/* @var $obj db */
ob_start();
$obj->saveactivity("Plan Deleted by Admin", "", $id, $employeeid, "Admin", "Plan Deleted by Admin");
$id = $_GET['hakuna'];
$res = $obj->delete("plan", $id);
$obj->deletewhere("plandetal", "planid= " . $id . "");
echo "Plan  Deleted Successfully";
