<?php
  $filep = fopen("../any.txt","a");

  if(!$filep){
    die("파일을 열 수 없습니다");
  }
  print "파일을 열었습니다.<br>";

  fputs($filep, "\n추가하기");
  fclose($filep);