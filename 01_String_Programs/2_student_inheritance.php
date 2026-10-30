<?php
class Student{
    public $id,$name,$sem;
    public $m1,$m2,$m3,$m4,$m5;

    function AddStudenrt(){
        $this->id=2;
        $this->name="kavya";
        
        $this->m1=20;
        $this->m2=20;
        $this->m3=20;
        $this->m4=20;
        $this->m5=20;
    }

    function ShowStudent(){
        echo "id= " . $this->id . "<br>";
        echo "name= " . $this->name . "<br>";
        echo "m1= " . $this->m1 . "<br>";
        echo "m2= " . $this->m2 . "<br>";
        echo "m3= " . $this->m3 . "<br>";
        echo "m4= " . $this->m4 . "<br>";
        echo "m5= " . $this->m5 . "<br>";
    }

    function AvgMarks(){
        $avg=($this->m1+$this->m2+$this->m3+$this->m4+$this->m5)/5;
        echo "Average Marks = " . $avg;
    }
}
class SemIStudent extends Student{

}

$s=new SemIStudent;
$s->AddStudenrt();
$s->ShowStudent();
$s->AvgMarks();
?>