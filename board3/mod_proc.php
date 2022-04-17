<?php
include_once 'db.php';

$title = $_POST['title'];
$i_board = $_POST['i_board'];
$ctnt = $_POST['ctnt'];

$conn = get_conn();
$sql = "UPDATE t_board SET title='${title}', ctnt='${ctnt}', mod_at=NOW() WHERE i_board=$i_board";

$result = mysqli_query($conn, $sql);
mysqli_close($conn);
header("location: detail.php?i_board=$i_board");
