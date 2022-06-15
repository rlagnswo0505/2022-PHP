<?php
  class Fruit{
    //private 멤버필드에 값 넣을 수 있는 2가지 방법 : 1) 셋터 , 2) 생성자함수
    //private 멤버필드에 값 뺄 수 있는 1가지 방법 : 1) 겟터
    private $name;
    private $color;
    private $price;

    // 생성자 함수
    function __construct($name=null,$price=null,$color=null){
      $this->name = $name;
      $this->color = $color;
      $this->price = $price;
    }

    public function print_fruit(){
      print "Name : {$this->name}<br>";
      print "Color : {$this->color}<br>";
      print "Price : {$this->price}<br>";
    }
  }

$apple = new Fruit("Apple",1000,"red");
$banana = new Fruit("Banana",500,"yellow");

$apple->print_fruit();
$banana->print_fruit();
