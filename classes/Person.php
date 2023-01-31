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

    public function setGender(string $gender) {
        $this->gender = $gender;
    }
}
