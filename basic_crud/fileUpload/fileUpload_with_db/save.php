<?php
$conn=mysqli_connect("localhost","root","","my_list");

echo "<pre>";

$file=$_FILES['upload'];
$filename=$file['name'];
$temp_array=$file['tmp_name'];
$saveFolder="store/";

foreach ($filename as $key=>$fn){
    $name=$saveFolder.uniqid()."_".$filename[$key];
    move_uploaded_file($temp_array[$key],$name);
    $sql="INSERT INTO photos (photo_links) VALUE ('$name')";
    if(!mysqli_query($conn,$sql)){
        die("ERROR".mysqli_error());
    }

}
    header("location:index.php");
