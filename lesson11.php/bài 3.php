<?php

abstract class Employee {
    protected $name;
    protected $salary;

    public function __construct($name, $salary) {
        $this->name = $name;
        $this->salary = $salary;
    }

    abstract public function bonusSales();

    public function getDetails() {
        return "Name: " . $this->name . ", Salary: " . $this->salary;
    }
}

class Manager extends Employee {
    private $allowance;

    public function __construct($name, $salary, $allowance) {
        parent::__construct($name, $salary);
        $this->allowance = $allowance;
    }

    public function bonusSales() {
        return $this->salary * 0.2;
    }

    public function getDetails() {
        return parent::getDetails() . ", Allowance: " . $this->allowance;
    }
}

class Staff extends Employee {
    public function bonusSales() {
        return $this->salary * 0.1;
    }
}

$manager = new Manager("John Doe", 5000, 1000);
echo $manager->getDetails() . "\n";
echo "Bonus: " . $manager->bonusSales() . "<br />";

$staff = new Staff("Jane Smith", 3000);
echo $staff->getDetails() . "\n";
echo "Bonus: " . $staff->bonusSales();