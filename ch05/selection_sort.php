<?php
// 선택배열
$arr = [10, 33, 12, 8, 1, 89];
$min = [0];
$min_index = 0;

// for ($i = 0; $i < count($arr) - 1; $i++) {
//     for ($z = $i + 1; $z < count($arr); $z++) {
//         if ($arr[$z] < $min) {
//             $min = $arr[$z];
//             $min_index = $z;
//         }
//     }
//     // $temp = $arr[$i];
//     $arr[$i] = $arr[$min_index];
//     // $arr[$i + 1] = $temp[$i + 1];
// }
// print_r($arr);

for ($i = 0; $i < count($arr) - 1; $i++) {
    $idx = $i;
    for ($z = $i + 1; $z < count($arr); $z++) {
        if ($arr[$idx] > $arr[$z]) {
            $idx = $z;
        }
    }
    if ($idx != $i) {
        $temp = $arr[$idx];
        $arr[$idx] = $arr[$i];
        $arr[$i] = $temp;
    }
}
print "<br>";
print_r($arr);
