<?php
class Person {
    final public function display() {
        echo "This is the Person class";
    }
}

class Student extends Person {
}

$obj = new Student();
$obj->display();
?>