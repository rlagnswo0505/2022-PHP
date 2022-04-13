<?php
// 재귀함수
// 내가 함수라면 내가 나를 호출하는 것.
function factorial_rec($num)
{
    if ($num === 1) {
        return 1;
    }
    return $num * factorial_rec($num - 1);
}

$num = 5;
$result = factorial_rec($num); // 5 x 4 x 3 x 2 x 1
print "${num}! = $result <br>";

function factorial($num)
{
    $result = 1;
    for ($i = $num; $i > 0; $i--) {
        $result *= $i;
    }
    return $result;
}
