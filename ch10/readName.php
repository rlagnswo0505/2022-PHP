<?php
$data = file("./name.txt");

print "----------<br>";
foreach($data as $idx => $name){
  print $name . "<br>";
}