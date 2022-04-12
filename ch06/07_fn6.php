<?php
$star = rand(3, 10);
print "star = $star <br>";

// print_star($star);
print_star_line($star);
/*
    $star = 3
    ***

    $star = 5
    *****
*/

function print_star($star)
{
    for ($i = 0; $i < $star; $i++) {
        print "* ";
    }
}

/*
    $star = 3
    * * *
    * * *
    * * * 

    $star = 5
    * * * * *
    * * * * *
    * * * * *
    * * * * *
    * * * * *
*/
function print_star_line($star)
{
    for ($z = 0; $z < $star; $z++) {
        print_star($star);
        print "<br>";
    }
}
