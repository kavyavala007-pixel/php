<?php
class Person
{
    public $name, $dob, $city;

    function addPerson($n, $d, $c)
    {
        $this->name = $n;
        $this->dob = $d;
        $this->city = $c;
    }

    function displayPerson()
    {
        echo "Name: " . $this->name . "<br>";
        echo "Date of Birth: " . $this->dob . "<br>";
        echo "City: " . $this->city . "<br>";
    }
}

class Student extends Person
{
    public $discipline, $year;

    function addStudent($d, $y)
    {
        $this->discipline = $d;
        $this->year = $y;
    }

    function displayStudent()
    {
        $this->displayPerson();
        echo "Discipline: " . $this->discipline . "<br>";
        echo "Year: " . $this->year . "<br>";
    }
}

class Faculty extends Person
{
    public $experience, $salary;

    function addFaculty($e, $s)
    {
        $this->experience = $e;
        $this->salary = $s;
    }

    function displayFaculty()
    {
        $this->displayPerson();
        echo "Experience: " . $this->experience . " years<br>";
        echo "Salary: " . $this->salary . "<br>";
    }
}

// Test Student class
$s = new Student();
$s->addPerson("Kavya", "10-05-2005", "Mumbai");
$s->addStudent("Computer Science", 2);

echo "<h3>Student Details</h3>";
$s->displayStudent();

// Test Faculty class
$f = new Faculty();
$f->addPerson("Rahul", "15-08-1985", "Pune");
$f->addFaculty(10, 50000);

echo "<h3>Faculty Details</h3>";
$f->displayFaculty();
?>