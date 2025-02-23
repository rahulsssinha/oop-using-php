<?php
class DestructorInPhp{
    public $name;
    function __construct($name){
        $this->name=$name;
    }
    function __destruct(){
        echo "the name is {$this->name}";
    }
}
$obj= new DestructorInPhp("rahul");
//unset($obj);

?>











