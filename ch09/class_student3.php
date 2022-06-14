<?php
// 접근지시어
  class Student {
    // 상수는 public을 해도 된다. 값을 바꿀 수 없기 때문에
    // 나머지는 다 private
    private $studentId;
    private $studentName;

    public function printStudent($id,$name){
      print "ID : {$id}<br>";
      print "Name : {$name}<br>";
    }
  }

  $obj = new Student;
  $obj->printStudent(12212, "홍길동");
  