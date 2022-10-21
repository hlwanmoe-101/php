<?php

class Magic{

    public function __construct($para)
    {
        echo "this is constructor $para"."<br>";
    }

    public function run(){
        echo "this is run method"."<br>";
    }

    public function __destruct()
    {
        // TODO: Implement __destruct() method.
        echo "this is destructor"."<br>";
    }

}
$obj = new Magic("HOHOHO");
$obj->run();