<?php
require_once "conn.php";

if(isset($_GET['addBtn'])){
//    print_r($_GET);
    $message=$_GET['message'];
    $sql="INSERT INTO todo (message) VALUE ('$message')";

    if(mysqli_query($conn,$sql)){
       header("location:create.php");
    }else{
        echo "fail".mysqli_connect_error();
    }
}







?>




<form method="get">
    <input type="text" name="message" required>
    <button name="addBtn">Add</button>
</form>
