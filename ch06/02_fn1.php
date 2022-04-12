<?php
$n1 = 9;
$n2 = 5;

print_sum($n1, $n2);
print_minus($n1, $n2);
print_multi($n1, $n2);
print_div($n1, $n2);
print_mod($n1, $n2);

function print_sum($n1, $n2)
{
    print "$n1 + $n2 = " . $n1 + $n2 . "<br>";
};
function print_minus($n1, $n2)
{
    print "$n1 - $n2 = " . $n1 - $n2 . "<br>";
};
function print_multi($n1, $n2)
{
    print "$n1 * $n2 = " . $n1 * $n2 . "<br>";
};
function print_div($n1, $n2)
{
    print "$n1 / $n2 = " . $n1 / $n2 . "<br>";
};
function print_mod($n1, $n2)
{
    print "$n1 % $n2 = " . $n1 % $n2 . "<br>";
};
