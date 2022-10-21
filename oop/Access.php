<?php

class Access{
    public $name="HMA";
    protected $age=23;
    private $love="HAHAHA";

    public function share(){
        return $this->name." is a programmer";
    }
}
$obj=new Access();
echo $obj->name;
echo $obj->share();