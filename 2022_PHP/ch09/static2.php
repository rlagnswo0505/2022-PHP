<?php

class Computer {
  private static $brand;
  public $price;

  function __construct(){
    $this->init();
  }
  function init(){
    self::$brand = "2";
  }

  function myPrint(){
    print "컴퓨터 브랜드는 " . self::$brand . "가격은 {$this->price}입니다.<br>";
  }
  static function setBrand($brand){
    self::$brand = "SAMSUNG";
  }

  static function myStaticPrint(){
    // static은 미리 메모리에 올려놓는데 $this는 객체를 만들어야 사용할 수 있기 때문에 $this에서 오류가 난다.
    // print "컴퓨터 브랜드는 " . self::$brand . "가격은 {$this->price}입니다.<br>";
  }
}

// Computer::$brand = "LG";

$c = new Computer;
$c->price = 10000;

$c2 = new Computer;
$c2->price = 20000;

$c->myPrint();
$c2->myPrint();

Computer::setBrand("LG");

$c->myPrint();
$c2->myPrint();

