<?php
include_once 'db/db_user.php';

$uid = $_POST['uid'];
$upw = $_POST['upw'];

$param = [
    'uid' => $uid
];

$item = sel_user($param);

if (!$item) {
    print "해당하는 아이디 없음";
    die;
}

if ($upw === $item['upw']) {
    session_start();
    $_SESSION['login_user'] = $item;
    print_r($_SESSION['login_user']);
    header("location: list.php");
} else {
    header("location: login.php");
}
