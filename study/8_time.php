<?php
/*
    8. 현재 시간이 20시 이전이면 "Have a good
day!" 출력하기
*/
$hour = date('H', time());
if ($hour < 20) {
    print "Have a good day! 😀😀";
} else {
    print "Have a good rest~~ 🥱🥱";
}
