<?php
class Fruit{
    //private 멤버필드에 값 넣을 수 있는 2가지 방법 : 1) 셋터 , 2) 생성자함수
    //private 멤버필드에 값 뺄 수 있는 1가지 방법 : 1) 겟터
    private $name;
    private $color;
    private $price;

    public function print_fruit(){
      print "Name : {$this->name}<br>";
      print "Color : {$this->color}<br>";
      print "Price : {$this->price}<br>";
    }

    public function setName($name): self
    {
        $this->name = $name;
        return $this;
    }

    public function setColor($color): self
    {
        $this->color = $color;
        return $this;
    }

    public function setPrice($price): self
    {
        $this->price = $price;
        return $this;
    }
  }
$apple1 = (new Fruit)->setName("apple");
$apple1->print_fruit();

$apple2 = (new Fruit)
  ->setColor("파란")
  ->setPrice(1000);
$apple2->print_fruit();
