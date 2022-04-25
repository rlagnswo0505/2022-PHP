<?php
//login.php 에서 넘어오는 값을 적절한 변수에 담는다.
// 변수의 값을 출력.

$uid = $_POST['uid'];
$upw = $_POST['upw'];

$param = [
    "uid" => $uid
];

$result = sel_user($param);

print "i_user : $result['i_user'], <br>";
print "uid = $uid <br>";
print "upw = $upw <br>";
