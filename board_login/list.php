<?php
include_once "db/db_board.php";

session_start();
$nm = "";

if (isset($_SESSION["login_user"])) {
    $login_user = $_SESSION["login_user"];
    $nm = $login_user["nm"];
}

$result = sel_board_list();
// $result_nm = find_name();
// $name = [];
// foreach ($result_nm as $row) {
//     $name += [$row['i_user'] => $row['nm']];
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="common.css">
    <style>
        table {
            text-align: center;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid #000;
            padding: 5px 20px;
        }
    </style>
    <title>리스트</title>
</head>

<body>
    <div id="container">
        <header>
            <?php
            if ($nm !== "") {
                print "<div>${nm}님 환영합니다. </div>";
            }
            ?>
            <div>
                <a href="list.php">리스트</a>
                <?php if ($nm !== "") { ?>
                    <a href="write.php">글쓰기</a>
                    <a href='logout.php'>로그아웃</a>
                <?php } else { ?>
                    <a href='login.php'>로그인</a>
                <?php } ?>
            </div>
        </header>
        <main>
            <h1>리스트</h1>
            <table>
                <tr>
                    <th>번호</th>
                    <th>제목</th>
                    <th>작성자명</th>
                    <th>등록일시</th>
                </tr>
                <?php
                foreach ($result as $row) {
                    $i_board = $row['i_board'];
                    $title = $row['title'];
                    $i_user = $row['i_user'];
                    $result_nm = find_name($i_user);
                    $nm = $result_nm['nm'];
                    //$nm = $name["$i_user"];
                    $created_at = $row['created_at'];

                    print "<tr>";
                    print "<td>$i_board</td>";
                    print "<td><a href='#'>$title</a></td>";
                    print "<td>$nm</td>";
                    print "<td>$created_at</td>";
                    print "</tr>";
                }
                ?>
            </table>
        </main>
    </div>

</body>

</html>