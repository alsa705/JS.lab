<?php
class Student
{
    public $name;

    function __construct($n)
    {
        $this->name = $n;
    }

    function display()
    {
        echo "Student Name: " . $this->name;
    }
}

$s1 = new Student("Alsa");
$s1->display();
?>
