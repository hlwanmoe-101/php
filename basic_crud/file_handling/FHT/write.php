<?php

echo "<pre>";
print_r($_POST);

$username=$_POST['username'];
$password=$_POST["password"];
$path="store/";
$f=fopen($path.$username.uniqid().".txt","w");
fwrite($f,"username : $username\n");
fwrite($f,"password : $password");
fclose($f);
header("location:index.php");
