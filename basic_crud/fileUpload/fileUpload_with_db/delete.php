<?php

$conn=mysqli_connect("localhost","root","","my_list");

$id=$_GET['id'];
$filename=$_GET['file'];
$sql="DELETE FROM photos WHERE id='$id'";
mysqli_query($conn,$sql);
echo $filename;
unlink($filename);
header("location:index.php");