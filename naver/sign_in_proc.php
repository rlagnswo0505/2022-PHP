<?php
include_once 'db.php';

$p_user_id = $_POST['user_id'];
$p_user_password = $_POST['user_password'];

$conn = get_conn();
$sql = "SELECT * FROM t_naver WHERE user_id='$p_user_id'";


$result = mysqli_query($conn, $sql);
mysqli_close($conn);
if ($row = mysqli_fetch_assoc($result)) {
    $user_id = $row['user_id'];
    $user_password = $row['user_password'];
    $user_name = $row['user_name'];
}
if ($p_user_id === $user_id && $p_user_password === $user_password) {
    print "${user_name}님 환영합니다.";
} else {
    print "로그인에 실패하였습니다.";
}
