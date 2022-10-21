<?php

class Inheritance{
    public $name="HMA";
    protected $age=23;
    private $love="HAHAHA";

    public function share(){
        return $this->name." is a programmer";
    }
    protected function learn(){
        return $this->name." is a program";
    }
    private function job(){
        return $this->name." is to be programmer";
    }

}
class KoHlwan Extends Inheritance {
    public function getProd(){
        return $this->age;
    }

}
$obj=new KoHlwan();
echo $obj->name;
echo $obj->getProd();
