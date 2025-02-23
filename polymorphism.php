<?php
class A{
    function greet(){
        echo "hello from parent class";
    }
}
class B extends A{
    function greet(){
        echo "hello from child class";
       // echo parent::greet();
    }
}
$obj = new B();
$obj->greet();
?>