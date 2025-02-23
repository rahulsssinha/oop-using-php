<?php
abstract class Abstraction {
    protected $name;
    protected $college;

    abstract function showDetails(); 
}

class Student extends Abstraction {
    function __construct($name, $college) {
        $this->name = $name;
        $this->college = $college;
    }

    function showDetails() {
        echo "Name: " . $this->name . "<br>";
        echo "College: " . $this->college;
    }
}

$rahul = new Student("Rahul", "GL Bajaj");
$rahul->showDetails();
?>
