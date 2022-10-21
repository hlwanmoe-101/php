<?php
class ClassOne{
    public $x="this is x";
    public static $p="this is static p";
    public static function run(){
        return "this is static function".self::$p;
    }
}
echo ClassOne::$p;
echo ClassOne::run();