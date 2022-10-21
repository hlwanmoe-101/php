<?php

class TestClass Extends Three{
    use One,Two;
}
$obj=new TestClass();
$obj->z;
$obj->x;
$obj->y;