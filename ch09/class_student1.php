<?php
// 접근지시어
  class Student {
    public $studentId;
    public $studentName;

    public function printStudent($id,$name){
      print "ID : {$id}<br>";
      print "Name : {$name}<br>";
    }
  }

  $obj = new Student;
  $obj->studentId = 20171234;
  $obj->studentName = "Alice";

  $obj->printStudent($obj->studentId, $obj->studentName);
  