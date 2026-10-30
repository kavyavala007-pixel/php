<?php
class Person {
    public function displayName() {
        echo "Name: Rahul<br>";
    }
}

class Student extends Person {
    public function displayCourse() {
        echo "Course: BSc IT";
    }
}

$obj = new Student();
$obj->displayName();
$obj->displayCourse();
?>