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
    $i_user = $row['i_user'];
    $created_at = $row['created_at'];
    $ctnt = $row['ctnt'];
    $updated_at = $row['updated_at'];
}
session_start();
if (isset($_SESSION["login_user"])) {
    $login_user = $_SESSION["login_user"];
}

$next = sel_next_board($param);
$prev = sel_prev_board($param);

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
    <?php if (isset($_SESSION["login_user"]) && $i_user === $login_user['i_user']) { ?>
        <div>
            <a href="mod.php?i_board=<?= $i_board ?>"><button>수정</button></a>
            <button class="del_button">삭제</button>
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
    <div>
        <a href="list.php"><button>리스트</button></a>
        <?php if ($next !== 0) { ?>
            <a href="detail.php?i_board=<?= $next ?>"><button>다음글🔺</button></a>
        <?php }
        if ($prev !== 0) { ?>
            <a href="detail.php?i_board=<?= $prev ?>"><button>이전글🔻</button></a>
        <?php } ?>
    </div>
    <script>
        const delButton = document.querySelector(".del_button");

        delButton.addEventListener("click", isDel);

        function isDel() {
            //alert("진짜로 삭제하시겠습니까?"); alert는 확인만 가능
            //confirm은 확인과 취소가 가능
            console.log("isDel 실행 됨!!");
            if (confirm("삭제 하시겠습니까?")) {
                location.href = "del.php?i_board=<?= $i_board ?>";
            } else {
                console.log('취소할게요');
            }
        }
    </script>
</body>

</html>

<?php
if (isset($_SESSION["login_user"])) {
    $login_user = $_SESSION["login_user"];
    $i_user = $login_user["i_user"];
}
$i_user = 0;
if (isset($_SESSION["login_user"])) {
    $login_uesr = $_SESSION["login_user"];
    $i_user = $login_uesr["i_user"];
}
?>