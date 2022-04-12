<?php
$mon = rand(0, 15);

$season = get_season($mon);

if ($season) {
    print "${mon}월 ${season}입니다.";
} else {
    print "${mon}월은 잘못된 값";
}

// 3 ~ 5 : 봄
// 6 ~ 8 : 봄
// 9 ~ 11 : 봄
// 12 ,1,2 : 봄
// 나머지 값은 : 빈칸
function get_season($mon)
{
    $season = "";
    switch ($mon) {
        case 12:
        case 2:
        case 1:
            $season = "겨울";
            break;
        case 11:
        case 10:
        case 9:
            $season = "가을";
            break;
        case 8:
        case 7:
        case 6:
            $season = "여름";
            break;
        case 5:
        case 4:
        case 3:
            $season = "봄";
            break;
    }
    return $season;
}
