<?php
class Person
{
    public $name;
    public $age;

    function displayPerson()
    {
        echo "Name: $this->name <br>";
        echo "Age: $this->age <br>";
    }
}

class Student extends Person
{
    public $course;

    function displayStudent()
    {
        $this->displayPerson();
        echo "Course: $this->course <br>";
    }
}

$s = new Student();
$s->age = 20;
$s->course = "BCA";

$s->displayStudent();
?>