<?php

require_once "base.php";

//print_r($_POST);
$name=$_POST['contactName'];
$phone=$_POST['phoneNumber'];
$id=$_POST['id'];

$sql="UPDATE contacts SET name='$name',phone='$phone' WHERE id=$id";

if (mysqli_query(con(),$sql)){
    echo "successful";
}