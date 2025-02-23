<?php
class Accessmodifier{
    public $name;

    private $course;

    function setCourse($course){
        $this->course=$course;
    }
    function getCourse(){
        echo $this->course;
    }
}
$obj= new Accessmodifier();
$obj->name="Rahul";
echo $obj->name . "<br>";

$obj->setCourse("MCA");
$obj->getCourse();

?>