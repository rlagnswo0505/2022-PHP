<?php
include_once "db/db_user.php";

$uid = $_POST['uid'];
$upw = $_POST['upw'];
$nm = $_POST['nm'];
$gender = $_POST['gender'];

$param = [
    'uid' => $uid,
    'upw' => $upw,
    'nm' => $nm,
    'gender' => $gender,
];
print_r($param);
$item = ins_user($param);
header("location: login.php");
