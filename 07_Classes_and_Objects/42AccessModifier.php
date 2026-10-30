<?php
class Student {
    public $name = "Rahul";
    private $marks = 80;
    protected $city = "Mumbai";

    public function display() {
        echo $this->name . "<br>";
        echo $this->marks . "<br>";
        echo $this->city . "<br>";
    }
}

$obj = new Student();
$obj->display();

echo $obj->name;
?>