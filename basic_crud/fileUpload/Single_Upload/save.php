<?php
echo "<pre>";
print_r($_FILES);

$temp=$_FILES['upload']['tmp_name'];
$filename=$_FILES['upload']['name'];
echo $temp;
$saveFolder="store/";
if(move_uploaded_file($temp,$saveFolder.uniqid()."_".$filename)){
    header("location:index.php");
}