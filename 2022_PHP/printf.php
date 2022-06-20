<?php
$name = "홍길동";
$age = 22;
$height = 177.64;
$blood_type = "O";

// $s는 문자열, $d 정수값, $f 실수값이 올 수 있다.
// $.1f는 .뒤에 오는 숫자만큼 소수점자리 표시
// $04d는 4자리를 표시하는데 없는 자리에는 0으로 채움
sprintf("제 이름은 %s입니다. 나이는 %d세이고, 키는 %.1fcm입니다. 혈액형은 %s입니다.", $name, $age, $height, $blood_type);
