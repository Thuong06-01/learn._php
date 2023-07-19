<?php

abstract class Animal{
    abstract public function makeSound();

}
  class Dog extends Animal{
    Public function makeSound()
    {
        Echo "Bark!";
    }
  }
  class Cat extends Animal{
    Public function makeSound()
  {
    Echo "Meow!";
  }
   }

$animals =[new Dog(), new Cat()];
foreach($animals as $animal)
{
    Echo $animal->makeSound()."<br>";
}