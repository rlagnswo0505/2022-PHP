<?php
// $arr = [10, 33, 12, 8, 1, 89];
// //array의 첫번째 값이 2번째 값보다 크면 2번째로
// for ($i = count($arr) - 1; $i > 0; $i--) {
//     for ($z = 0; $z < $i; $z++) {
//         if ($arr[$z] > $arr[$z + 1]) {
//             $temp = $arr[$z];
//             $arr[$z] = $arr[$z + 1];
//             $arr[$z + 1] = $temp;
//         };
//     }
// }
// print "<br><br>";
// print_r($arr);



$arr = [10, 33, 12, 8, 1, 89];

for ($i = count($arr) - 1; $i > 0; $i--) {
    for ($z = 0; $z < $i; $z++) {
        if ($arr[$z] > $arr[$z + 1]) {
            $temp = $arr[$z];
            $arr[$z] = $arr[$z + 1];
            $arr[$z + 1] = $temp;
        }
    }
}
print_r($arr);
