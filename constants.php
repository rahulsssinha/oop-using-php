<?php
class Constants{
    const name="Rahul";
    function getName(){
        echo self::name;
    }
}
$obj=new Constants();
$obj->getName();
echo Constants::name;
?>