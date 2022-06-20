<?php
include_once 'db/db_board.php';
session_start();

$login_user = $_SESSION['login_user'];
$i_user = $login_user['i_user'];
print $i_user;

$title = $_POST['title'];
$ctnt = $_POST['ctnt'];

$param = [
    'i_user' => $i_user,
    'title' => $title,
    'ctnt' => $ctnt
];
print_r($param);

$item = ins_board($param);
print_r($item);
header("location: list.php");
