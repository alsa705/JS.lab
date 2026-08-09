<?php

class Student
{
    public $name;

    function __construct($n)
    {
        $this->name = $n;
    }
}

class Result extends Student
{
    function display()
    {
        echo "Student Name: ".$this->name."<br>";
    }
}

for($i=1;$i<=20;$i++)
{
    $obj = new Result("Student ".$i);
    $obj->display();
}

?>