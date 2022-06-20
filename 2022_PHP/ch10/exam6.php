<?php
  // exam6.txt 파일 읽어서 전부 대문자로 변경한 후
  // exam6_capital.txt에 저장
  /* 
  $filep = file_get_contents("./exam6.txt","a");

  print strtoupper($filep);
  if(!$filep){
    die("파일을 열 수 없습니다.");
  }

  $files = fopen("./exam6_capital.txt","w");
  $upperStr = strtoupper($filep);
  fputs($files, $upperStr . "\n");
  fclose($files);
*/

  $filep = fopen("./exam6.txt","r");
  $files = fopen("./exam6_capital.txt","w");
  while($line = fgets($filep,100)){
    print $line. "<br>";
    fputs($files, strtoupper($line) . "\n");
  } 

  fclose($files);
  fclose($filep);