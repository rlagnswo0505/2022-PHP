<?php
include_once '';
session_start();
$nm = "";

if (isset($_SESSION["login_user"])) {
    $login_user = $_SESSION["login_user"];
    $nm = $login_user["nm"];
}
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
        </header>
        <main>

        </main>
    </div>
</body>

</html>