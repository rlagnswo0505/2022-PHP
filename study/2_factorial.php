<?php
/*
2. 랜덤숫자 1~20까지의 숫자를 입력받아 랜덤
수의 팩토리얼을 구하는 프로그램을 작성하기
ex) 5! = 1 * 2 * 3 * 4 * 5)
<출력결과>-숫자 뿐만 아니라 아래처럼 문장으
로 출력 해야함
5! = 120입니다.
*/
$fac_num = rand(1, 20);
$mul = 1;
for ($i = 1; $i <= $fac_num; $i++) {
    $mul *= $i;
}
print "${fac_num}! = ${mul} 입니다.";