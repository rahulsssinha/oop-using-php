<?php
class Clg{
    protected $clgName="GL Bajaj";
    Protected $clgcode=192;

}
class Student extends Clg{
    public $name;
    function __construct($name){
        $this->name=$name;
    }
    function getDetails(){
        echo $this->name."<br>";
        echo $this->clgName."<br>";
        echo $this->clgcode."<br>";
    }
}
$obj = new Student("Rahul");
$obj->getDetails();
?>