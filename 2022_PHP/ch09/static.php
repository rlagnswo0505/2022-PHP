<?php

class Calc {
  function sum($n1,$n2){
    return $n1 + $n2;
  }
}


// Calc 를 객체화 변수명은 C
// sum 메소드를 호출, 5,10 을 더한 값을 리턴받고 화면에 출력하시오.
$c = new Calc;
$result = $c->sum(5,10);
print "result : {$result} <br>";
class StaticCalc {
  static function sum($n1,$n2){
    return $n1 + $n2;
  }
}

$result = StaticCalc::sum(10, 11);

print "result : {$result} <br>";