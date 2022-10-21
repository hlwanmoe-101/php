<?php

require_once "base.php";
//print_r($_POST);
$name=$_POST['contactName'];
$phone=$_POST['phoneNumber'];

$sql="INSERT INTO contacts (name,phone) VALUES ('$name','$phone')";

if (mysqli_query(con(),$sql)){
    echo "successful";
}