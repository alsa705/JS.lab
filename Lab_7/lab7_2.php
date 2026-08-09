<?php

class Demo
{
    function __call($name,$arg)
    {
        echo "Method Name : ".$name."<br>";
        echo "Number of Arguments : ".count($arg);
    }
}

$D1 = new Demo();

$D1->show("Ram",20);

?>
