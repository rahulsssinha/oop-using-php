<?php
class ExampleForEncapsulation {
    private $name; 

    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }
}

$rahul = new ExampleForEncapsulation();
$rahul->setName("Rahul");
echo $rahul->getName();
?>
