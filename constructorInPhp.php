<?php
Class ExampleConst{
    public $name;
    public $age;
    function __construct($name,$age){
         $this->name=$name;
         $this->age=$age;
    }

   
}
$obj=new ExampleConst("rahul",23);
 echo $obj->name."<br>";
 echo $obj->age;

?>