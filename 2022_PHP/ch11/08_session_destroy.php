<?php
session_start();
session_destroy();
echo $_SESSION['var1'], "<br>";
echo $_SESSION['var2'], "<br>";
?>
<a href="09_confirm.php">확인</a>