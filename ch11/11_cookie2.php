<?php
echo "Country : " . $_COOKIE['country'], "<br>";

$_COOKIE['country'] = "UK";
echo "Country : " . $_COOKIE['country'], "<br>";

unset($_COOKIE['country']);
echo "Country : " . $_COOKIE['country'], "<br>";
