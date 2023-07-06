<?php
//bai1


//bai2
class Point2D {
    public $x;
    public $y;

    public function __construct($x, $y) {
        $this->x = $x;
        $this->y = $y;
    }

    public function calculateDistance($otherPoint) {
        $distanceX = $this->x - $otherPoint->x;
        $distanceY = $this->y - $otherPoint->y;
        $distance = sqrt(pow($distanceX, 2) + pow($distanceY, 2));
        return $distance;
    }
 }

 $point1 = new Point2D(3, 4);

 $point2 = new Point2D(6, 8);

 $distance = $point1->calculateDistance($point2);
 echo "The distance from point 1 to point 2 is: " . $distance;
 

//bai3
class IntArray {
    public $array;

    public function __construct($array) {
        $this->array = $array;
    }

    public function calculateSum() {
        $sum = array_sum($this->array);
        return $sum;
    }

    public function calculateAverage() {
        $count = count($this->array);
        $sum = $this->calculateSum();
        $average = $sum / $count;
        return $average;
    }

    public function findMaxElement() {
        $max = max($this->array);
        return $max;
    }
}

$array = [5, 10, 15, 20, 25];


$intArray = new IntArray($array);

$sum = $intArray->calculateSum();
echo "The sum of the elements is: " . $sum . "<br>";

$average = $intArray->calculateAverage();
echo "The average of the elements in the array is: " . $average . "<br>";

$max = $intArray->findMaxElement();
echo "The largest element in the array is : " . $max;



//bai4
class Clock {
    private $hours;
    private $minutes;
    private $seconds;

    public function __construct($hours, $minutes, $seconds) {
        $this->hours = $hours;
        $this->minutes = $minutes;
        $this->seconds = $seconds;
    }

    public function displayTime() {
        $time = sprintf("%02d:%02d:%02d", $this->hours, $this->minutes, $this->seconds);
        return $time;
    }

    public function increaseSeconds($seconds) {
        $this->seconds += $seconds;

        if ($this->seconds >= 60) {
            $this->increaseMinutes(floor($this->seconds / 60));
            $this->seconds %= 60;
        }
    }

    public function increaseMinutes($minutes) {
        $this->minutes += $minutes;

        if ($this->minutes >= 60) {
            $this->increaseHours(floor($this->minutes / 60));
            $this->minutes %= 60;
        }
    }

    public function increaseHours($hours) {
        $this->hours += $hours;

        if ($this->hours >= 24) {
            $this->hours %= 24;
        }
    }
}

// Sử dụng lớp Đồng hồ
$clock = new Clock(10, 30, 45);
echo $clock->displayTime() . "\n"; 

$clock->increaseSeconds(15);
echo $clock->displayTime() . "\n";

$clock->increaseMinutes(45);
echo $clock->displayTime() . "\n"; 

$clock->increaseHours(5);
echo $clock->displayTime() . "\n"; 



//bai5
class Student {
    public $id;
    public $firstName;
    public $lastName;

    public function __construct($id, $firstName, $lastName) {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }
}

class StudentList {
    private $students;

    public function __construct() {
        $this->students = array();
    }

    public function addStudent($student) {
        $this->students[] = $student;
    }

    public function displayStudents() {
        foreach ($this->students as $student) {
            echo "Student ID: " . $student->id . "<br>";
            echo "Full Name: " . $student->firstName . " " . $student->lastName . "<br><br>";
        }
    }
}

// Create a new student list
$studentList = new StudentList();

// Add new students
$student1 = new Student("001", "John", "Doe");
$studentList->addStudent($student1);

$student2 = new Student("002", "Jane", "Smith");
$studentList->addStudent($student2);

// Display the list of students
$studentList->displayStudents();

?>

