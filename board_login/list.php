<?php
include_once "db/db_board.php";

session_start();
$nm = "";
$page = 1;

if (isset($_GET["page"])) {
    $page = intval($_GET["page"]);
}

if (isset($_SESSION["login_user"])) {
    $login_user = $_SESSION["login_user"];
    $nm = $login_user["nm"];
}
// $count = $_POST['ct_board'];
// print "$count";

$row_count = 20;

$param = [
    "row_count" => $row_count,
    "start_idx" => ($page - 1) * $row_count
];

$paging_count = sel_paging_count($param);
$list = sel_board_list($param);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="common.css">
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
                <!-- <form action="list.php?page=<?= $page ?>" method="post">
                    <select name="ct_board" id="">
                        <option value="10">10</option>
                        <option value="15">15</option>
                        <option value="20">20</option>
                    </select>
                    <input type="submit" value="테이블">
                </form> -->
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
                            <tr class="row">
                                <td class="board-idx"><?= $item["i_board"] ?></td>
                                <td class="title-link"><?= $item["title"] ?></td>
                                <td><?= $item["nm"] ?></td>
                                <td><?= $item["created_at"] ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <div class="page-box">
                    <?php
                    for ($i = 1; $i <= $paging_count; $i++) { ?>
                        <span><a href="list.php?page=<?= $i ?>"><button class="btn first <?= $i === $page ? "btnSelected" : "" ?>"><?= $i ?></button></a></span>
                    <?php } ?>
                </div>
            </div>
        </main>
    </div>
    <script>
        const rows = document.querySelectorAll(".row");

        for (const row of rows) {
            const i_board = row.querySelector(".board-idx").innerHTML;

            function handleRowClick() {
                location.href = `detail.php?i_board=${i_board}`;
            }
            row.addEventListener("click", handleRowClick);

        }
    </script>
</body>

</html>