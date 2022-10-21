<?php

function conn(){
    return mysqli_connect("localhost","root","","blog");
}

$info= array(
    "name"=>"Sample Blog",
    "short"=> "SB",
    "description"=>"My Sample Blog"
);

$role=["Admin","Editor","User"];

$url="http://{$_SERVER['HTTP_HOST']}/basic_crud/sample_blog/";
date_default_timezone_set('Asia/Yangon');
