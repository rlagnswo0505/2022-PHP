<?php
include_once "db/db_board.php";

session_start();
$login_user = $_SESSION['login_user'];
$nm = $login_user['nm'];

$result = sel_board_list();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>리스트</title>
</head>

<body>
    <header>
        <div><?= $nm ?>님 환영합니다.</div>
        <a href="list.php"><button>리스트</button></a>
        <a href="write.php"><button>글쓰기</button></a>
        <a href="logout.php"><button>로그아웃</button></a>
    </header>
    <main>
        <div>
            <table>
                <thead>
                    <th>글번호</th>
                    <th>제목</th>
                    <th>글쓴이</th>
                    <th>등록일시</th>
                </thead>
                <tbody>
                    <?php
                    while ($item = mysqli_fetch_assoc())
                    ?>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tbody>
            </table>
        </div>
    </main>
</body>

</html>