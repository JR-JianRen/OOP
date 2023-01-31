<?php

use classes\Person;
include '../classes/Person.php';

// Personen
$umut = new Person("Umut", 18, "M");

$demirel = new Person("Demirel", 22, "M");

$jian = new Person("Jian", 1, "M");

$smith = new Person("Smith", 15, "M");

$rose = new Person("Rose", 20, "F");

$guy = new Person("Guy", 25, "M");

//something
echo '<br><br>';
echo $rose->getGegevens();

$guy->setAge('26');

echo '<br><br>';
echo $guy->getGegevens();

