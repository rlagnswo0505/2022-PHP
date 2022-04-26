<?php
include_once 'db.php';

function ins_board(&$param)
{
    $title = $param["title"];
    $ctnt = $param["ctnt"];
    $i_user = $param["i_user"];

    $conn = get_conn();
    $sql = "INSERT INTO t_board (title, ctnt, i_user) values ('$title','$ctnt', '$i_user')";

    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    return $result;
}

function sel_board_list()
{
    $conn = get_conn();
    $sql = "SELECT i_board,title,i_user,created_at FROM t_board ORDER BY i_board DESC";

    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    return $result;
}

function find_name(&$i_user)
{
    $conn = get_conn();
    $sql = "SELECT nm FROM t_user WHERE i_user=$i_user";

    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    return mysqli_fetch_assoc($result);
}
