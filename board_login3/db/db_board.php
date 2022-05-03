<?php
include_once 'db.php';

function ins_board(&$param)
{
    $i_user = $param['i_user'];
    $title = $param['title'];
    $ctnt = $param['ctnt'];

    $conn = get_conn();
    $sql = "INSERT INTO t_board (title,ctnt,i_user)
    VALUES ('$title','$ctnt',$i_user)";

    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    return $result;
}
function sel_board_list()
{
    $conn = get_conn();
    $sql = "";

    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    return $result;
}
