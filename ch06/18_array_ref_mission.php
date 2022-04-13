<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="nav_bar">
        <div class="box">이경식</div>
        <div class="div1"></div>
        <div class="div2"></div>
        <div class="div3"></div>
        <div class="div4"></div>
        <div class="div5"></div>
    </div>
</body>

</html>
<?php
function plus_array(&$arr, $val)
{
    for ($i = 0; $i < count($arr); $i++) {
        $arr[$i] += $val;
    }
    // foreach ($arr as $k => $v) {
    //     $arr[$k] = $v + $val;
    // }
}


$arr = [10, 20, 30, 40, 50];
plus_array($arr, 10);
print_r($arr);

print "dfjasdasdas";
