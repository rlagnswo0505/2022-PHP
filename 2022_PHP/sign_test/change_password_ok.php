<?php
session_start();
$session_username = $_SESSION['username'];
if (is_null($session_username)) {
    header("location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>비밀번호 변경</title>
</head>

<body>
    <h1><?= $session_username ?>님, 비밀번호가 변경되었습니다.</h1>
    <a href="login.php">로그인페이지로 이동</a>
</body>

</html>