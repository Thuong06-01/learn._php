<?php

abstract class Vehicle {
    abstract public function start();
}
class Car extends Vehicle {
    public function start() {
        echo "Car is starting the engine.\n";
    }
}
class Motorcycle extends Vehicle {
    public function start() {
        echo "Motorcycle is kick-starting.\n";
    }
}
$car = new Car();
$car->start(); 
$motorcycle = new Motorcycle();
$motorcycle->start(); 

