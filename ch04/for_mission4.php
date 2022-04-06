<?php

/*
        지금까지 배운 것 모두 활용하여
        출력 : [1, 2, 3, 4, 5, 6. 7]
    
 */
print "[";
for ($i = 1; $i < 8; $i++) {
    if ($i === 7) {
        print $i . "]";
    } else {
        print $i . ",";
    }
}
echo "<br> ==================== <br>";


$end_val = 8;
echo "[";
for ($i = 1; $i <= $end_val; $i++) {
    echo $i;
    if ($i < $end_val) {
        echo ",";
    }
}
echo "]";

echo "<br> ==================== <br>";


$end_val = 8;
echo "[";
for ($i = 1; $i <= $end_val; $i++) {
    if ($i > 1) {
        echo ",";
    }
    echo $i;
}
echo "]";
