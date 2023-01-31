<?php

namespace classes;

class Person
{
    public $name;
    private $age;
    protected $gender;
    public $isStudent;
    public $averageGrade;

    // Construct methode
    function __construct(string $name, int $age, string $gender)
    {
        $this->name = $name;

        $this->age = $age;

        $this->gender = $gender;

        echo "A new Person-object has been created.";

        echo "The property name of this object is: $name";
    }

    // Set - methode
    public function setGender(string $gender) {
        $this->gender = $gender;
    }
    public function setName(string $name) {
        $this->name = $name;
    }
    public function setAge(int $age) {
        $this->age = $age;
    }
    public function setIsStudent(bool $isStudent) {
        $this->isStudent = $isStudent;
    }
    public function setAverageGrade(int $averageGrade) {
        $this->averageGrade = $averageGrade;
    }

    //Get - methode
    public function getGender() {
        return $this->gender;
    }
    public function getName() {
        return $this->name;
    }
    public function getAge() {
        return $this->age;
    }
    public function getIsStudent() {
        return $this->isStudent;
    }
    public function getAverageGrade() {
        return $this->averageGrade;
    }

    public function getGegevens() {
        echo ('De gegevens van Henk zijn: <br>');
        echo ('Leeftijd: ' . $this->age .'<br>');
        echo ('Geslacht: ' . $this->gender . '<br>');
    }

}
