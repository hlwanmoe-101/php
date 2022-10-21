<?php
echo "<pre>";
//print_r($_FILES);
//
//$temp=$_FILES['upload']['tmp_name'][''];
//$filename=$_FILES['upload']['name'];
//echo $temp;
//$saveFolder="store/";
//if(move_uploaded_file($temp,$saveFolder.uniqid()."_".$filename)){
//    header("location:index.php");
//}

$file=$_FILES['upload'];
$filename=$file['name'];
$temp_array=$file['tmp_name'];
$saveFolder="store/";

foreach ($filename as $key=>$fn){
//    echo  $filename[$key];
    move_uploaded_file($temp_array[$key],$saveFolder.uniqid()."_".$filename[$key]);
}
    header("location:index.php");
