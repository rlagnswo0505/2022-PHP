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
    $sql =
        "SELECT A.i_board, A.title, A.created_at, B.nm
        FROM t_board A 
        INNER JOIN t_user B 
        ON A.i_user = B.i_user 
        ORDER BY i_board DESC";

    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    return $result;
}


function sel_board(&$param)
{
    $i_board = $param['i_board'];

    $conn = get_conn();
    $sql = "SELECT A.ctnt, A.title, A.created_at, A.updated_at, B.nm, B.i_user
    FROM t_board A 
    INNER JOIN t_user B 
    ON A.i_user = B.i_user
    WHERE A.i_board=$i_board";

    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    return $result;
}

function sel_board_mod(&$param)
{
    $i_board = $param['i_board'];
    $i_user = $param['i_user'];

    $conn = get_conn();
    $sql = "SELECT A.i_board, A.ctnt, A.title, B.nm, B.i_user
    FROM t_board A 
    INNER JOIN t_user B 
    ON A.i_user = B.i_user
    WHERE A.i_board=$i_board AND B.i_user = $i_user";

    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    return $result;
}


function del_board(&$param)
{
    $i_board = $param['i_board'];
    $i_user = $param['i_user'];

    $conn = get_conn();
    $sql =
        "DELETE FROM t_board 
        WHERE i_board=$i_board 
        AND i_user = $i_user";

    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);

    return $result;
}

function upd_board(&$param)
{
    $i_board = $param['i_board'];
    $i_user = $param['i_user'];
    $title = $param['title'];
    $ctnt = $param['ctnt'];

    $conn = get_conn();
    $sql =
        "UPDATE t_board A
        SET title='${title}', ctnt='${ctnt}',updated_at=now() 
        WHERE i_board=$i_board AND i_user = $i_user";

    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);

    return $result;
};
