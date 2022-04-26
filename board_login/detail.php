<?php
include_once 'db/db_board.php';



$i_board = $_GET['i_board'];
$param = [
    "i_board" => $i_board
];

$item = sel_board($param);

if ($row = mysqli_fetch_assoc($item)) {
    $title = $row['title'];
    $nm = $row['nm'];
    $created_at = $row['created_at'];
    $ctnt = $row['ctnt'];
    $updated_at = $row['updated_at'];
}
session_start();
$login_user = $_SESSION["login_user"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
</head>

<body>
    <div><a href="list.php"><button>리스트</button></a></div>
    <?php if ($nm === $login_user['nm']) { ?>
        <div>
            <a href="mod.php"><button>수정</button></a>
            <a href="del.php"><button>삭제</button></a>
        </div>
    <?php } ?>
    <div>제목 : <?= $title ?></div>
    <div>글쓴이 : <?= $nm ?></div>
    <div>등록일시 : <?= $created_at ?></div>
    <?php
    if ($created_at !== $updated_at) {
        print "<div>수정일시 : $updated_at</div>";
    }
    ?>
    <div> <?= $ctnt ?> </div>
</body>

</html>