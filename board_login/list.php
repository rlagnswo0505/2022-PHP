<?php
include_once "db/db_board.php";

session_start();
$nm = "";

if (isset($_SESSION["login_user"])) {
    $login_user = $_SESSION["login_user"];
    $nm = $login_user["nm"];
}

$list = sel_board_list();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="common.css">
    <style>
        main {
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }

        .table-box {
            transform: translate(-50%, -50%);
        }

        table {
            width: 800px;
            border-collapse: collapse;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        th,
        td {
            padding: 15px;
            background-color: rgba(255, 255, 255, 0.2);
            color: #fff;
        }

        th {
            text-align: left;
        }

        thead th {
            background-color: #55608f;
        }

        tbody tr:hover {
            background-color: rgba(255, 255, 255, 0.3);
        }

        tbody td {
            position: relative;
        }

        tbody td:hover:before {
            content: "";
            position: absolute;
            left: 0;
            right: 0;
            top: -9999px;
            bottom: -9999px;
            background-color: rgba(255, 255, 255, 0.2);
            z-index: -1;
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
                <a href="list.php"><button>리스트</button></a>
                <?php if ($nm !== "") { ?>
                    <a href="write.php"><button>글쓰기</button></a>
                    <a href='logout.php'><button>로그아웃</button></a>
                <?php } else { ?>
                    <a href='login.php'><button>로그인</button></a>
                    <a href="join.php"><button>회원가입</button></a>
                <?php } ?>
            </div>
        </header>
        <main>
            <div class="table-box">
                <h1>리스트</h1>
                <table>
                    <thead>
                        <tr>
                            <th>글번호</th>
                            <th>제목</th>
                            <th>글쓴이</th>
                            <th>등록일시</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($list as $item) { ?>
                            <tr>
                                <td><?= $item["i_board"] ?></td>
                                <td><a href="detail.php?i_board=<?= $item["i_board"] ?>"><?= $item["title"] ?></a></td>
                                <td><?= $item["nm"] ?></td>
                                <td><?= $item["created_at"] ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>

            </div>
        </main>
    </div>

</body>

</html>