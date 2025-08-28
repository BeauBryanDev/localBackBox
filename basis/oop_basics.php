<?php
class Car {
    public $color;
    public $model;

    public function __construct($color, $model) {
        $this->color = $color;
        $this->model = $model;
    }

    public function displayInfo() {
        return "Car Model: " . $this->model . ", Color: " . $this->color . "\n";
    }
}

$myCar = new Car("Red", "Toyota");
echo $myCar->displayInfo();