<?php
class Car
{
    public $brand = "Toyota";

    function show()
    {
        echo "Car Brand: " . $this->brand;
    }
}

$c = new Car();
$c->show();
?>
