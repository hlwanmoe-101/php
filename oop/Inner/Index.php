<?php
class Index{
    public function Inner(){
        return new class Extends Index{
            public $x="this is inner x";
            public function run(){
                return "this is inner run";
            }
            public function Inner2(){
                return new class Extends Index{
                    public $y="this is inner of inner y";
                    public function one(){
                        return "this is inner of inner Index";
                    }
                };
            }
        };

    }
}
$obj = new Index();
$obj->Inner()->x;
$obj->Inner()->run();
echo $obj->Inner()->Inner2()->one();
echo $obj->Inner()->Inner2()->y;