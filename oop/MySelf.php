<?php


class MySelf
{
    var $name="HMA";
    var $age=23;
    function eat(){
        return $this->name." caen eat";
    }
    function sleep(){
        "I like to sleep";
    }
}
$obj=new MySelf();
echo $obj->name;
echo $obj->eat();
