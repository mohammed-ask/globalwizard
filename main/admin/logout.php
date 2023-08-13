<?php
include 'main/session.php';
$head = "";
if (($_SERVER['HTTP_HOST'] == 'localhost')) {
    $head = "/namehere";
}
$index =  $head;
$test = $obj->logout();
header("location:$index");
