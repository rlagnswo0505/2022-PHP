<?php
$uid = $_POST['uid'];
$upw = $_POST['upw'];
$confirm_upw = $_POST['confirm_upw'];
$nm = $_POST['nm'];
$gender = $_POST['gender'];

echo "udi : ", $uid, "<br>";
echo "upw : ", $upw, "<br>";
echo "confirm_upw : ", $confirm_upw, "<br>";
echo "nm : ", $nm, "<br>";
echo "gender : ", $gender, "<br>";

if ($upw !== $confirm_upw) {
    header("location: join.php");
}
