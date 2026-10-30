<?php
class Student {
    public function __construct() {
        echo "Constructor called<br>";
    }

    public function display() {
        echo "Student Details";
    }

    public function __destruct() {
        echo "<br>Destructor called";
    }
}

$obj = new Student();
$obj->display();
?>