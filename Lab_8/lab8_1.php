<?php
class Student
{
    public $name;
    public $rollNo;
    public $course;

    function displayDetails()
    {
        echo "Name: $this->name <br>";
        echo "Roll No: $this->rollNo <br>";
        echo "Course: $this->course <br><br>";
    }
}

$s1 = new Student();
$s1->name = "Ram";
$s1->rollNo = 1;
$s1->course = "BCA";

$s2 = new Student();
$s2->name = "Sita";
$s2->rollNo = 2;
$s2->course = "BCA";

$s1->displayDetails();
$s2->displayDetails();
?>
