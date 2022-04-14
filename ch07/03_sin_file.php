<?php
print __FILE__ . "<br>";
print __LINE__ . "<br>";
print "PHP VERSION : " . PHP_VERSION . "<br>";
print "OS : " . PHP_OS . "<br>";

print "-- 슈퍼글로벌 상수 -- <br>";
foreach ($GLOBALS as $key => $var) {
    print $key . " : " . $var . "<br>";
}
