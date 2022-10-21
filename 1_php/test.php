<?php
    $x="hi there";
    $y=5;
    $arr=["x","r","d"];
    $asso=[
        "name"=>"hlwan",
        "age"=>28,
        "status"=>false
    ];

    echo $x;
    echo "<br>";

    echo $y;
    echo "<br>";

    print_r($arr);
    echo "<br>";

    print_r($asso);
    echo "<br>";

    var_dump($arr);
    echo "<br>";

    function tet(){
        return "this is function";
    }

    echo tet();
    echo "<br>";

    $u=true;
    if($u){
        echo "this is true";
    }else
    {
        echo "this is false";
    }
    echo "<br>";

    for($i=0;$i<10;$i++){
        echo "loop $i";
        echo "<br>";
    }


