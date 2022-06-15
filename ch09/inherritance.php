<?php
class People{
  // 상속관계에서는 protected 사용가능 private 사용 불가능
  protected $name;
  protected $age;

  function __construct(){
    print "나는 People이요. <br>";
  }

  function printPeople(){
    print "Name : {$this->name}<br>";
    print "Age : {$this->age}<br>";
  }
}
// People(부모)를 상속 Student(자식)
class Student extends People{
  private $studentId;

  function __construct($name, $age,$studentId){
    print "나는 Student요. <br>";
    $this->name = $name;
    $this->age = $age;
    $this->studentId = $studentId;
  }

  function printStudent(){
    print "- Student - <br>";
    // $this->printPeople();
    parent::printPeople();
    print "Id : {$this->studentId}<br>";
  }
  // Override 오버라이딩 : 부모에 있는 함수를 같은 이름으로 다른 일을 하는 메소드를 만드는거
  function printPeople(){
    print "Student에 있는 printPeople<br>";
  }
}

$stu1 = new Student("홍길동",21, 1010);
$stu1->printPeople();
print "---------------<br>";
$stu1->printStudent();
