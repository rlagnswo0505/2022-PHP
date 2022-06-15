<?php
// 접근지시어
  class Student {
    // 상수는 public을 해도 된다. 값을 바꿀 수 없기 때문에
    // 나머지는 다 private
    private $studentId;
    private $studentName;


    public function printStudent(){
      print "ID : {$this->studentId}<br>";
      print "Name : {$this->studentName}<br>";
    }

    // public function getStudentId()
    // {
    //     return $this->studentId;
    // }

    // public function setStudentId($studentId)
    // {
    //     $this->studentId = $studentId;
    //     return $this;
    // }


    // public function getStudentName()
    // {
    //     return $this->studentName;
    // }

    // public function setStudentName($studentName)
    // {
    //     $this->studentName = $studentName;
    //     return $this;
    // }
  }

  $obj = new Student;
  // print $obj->setStudentId(1122)->getStudentId() . "<br>";
  print "1번째 : {$obj->setStudentId(1122)->getStudentId()}<br>";

  $obj2 = new Student;
  print $obj2->setStudentId(8888)->getStudentId() . "<br>";
  print "2번째 : {$obj->getStudentId()}<br>";

  