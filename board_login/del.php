<?php
include_once "db/db_board.php";

$i_board = $_GET["i_board"];

$param = [
    "i_board" => $i_board
];

$item = del_board($param);

if ($item) {
    header("location: list.php");
}
