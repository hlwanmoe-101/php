<?php

    $name="hlwan";
    $age=23;
    $arr=["x"."y","z"];
    $asso=[
      "name"=>"hMA",
      "age"=>23,
    ];
    function run(){
//       echo $GLOBALS['name'];
        global $name;
        return $name;
    }
    echo run();
