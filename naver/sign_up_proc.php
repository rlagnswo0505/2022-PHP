<?php
include_once "db.php";

$user_id = $_POST["user_id"];
$user_password = $_POST["user_password"];
$user_name = $_POST["user_name"];
$bir_yy = $_POST["bir_yy"];
$bir_mm = $_POST["bir_mm"];
$bir_dd = $_POST["bir_dd"];
$gender = $_POST["gender"];
$user_email = $_POST["user_email"];
$phoneno = $_POST["phoneno"];

$conn = get_conn();
$sql = "INSERT INTO t_naver
(user_id,user_password,user_name,bir_yy,bir_mm,bir_dd,
gender, user_email,phoneno)
VALUES
('$user_id','$user_password','$user_name','$bir_yy','$bir_mm','$bir_dd','$gender ','$user_email','$phoneno')";

$result = mysqli_query($conn, $sql);
mysqli_close($conn);
header("location: sign_in.php");
