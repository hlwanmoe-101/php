<?php


function categorylist(){
    global $conn;
    $sql="SELECT * FROM todo";
    $query=mysqli_query($conn,$sql);
    $total_row=mysqli_num_rows($query);
    $rows=[];
    while ($row=mysqli_fetch_assoc($query)) {
        array_push($rows,$row);
    }
    return $rows;
}
function categoryadd(){
    global $conn;
    $message=$_GET['message'];
    $sql="INSERT INTO todo (message) VALUE ('$message')";

    if(mysqli_query($conn,$sql)){
        return true;
    }else{
        die("fail".mysqli_connect_error());
    }
}
function categoryShow($id){
    global $conn;
    $id=$_GET['id'];
    $sql="SELECT * FROM todo WHERE id=$id";
    $query=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($query);
    return $row;
}
function categoryUpdate(){
    global $conn;
    $messsage=$_GET["message"];
    $id=$_GET['id'];
    $sql="UPDATE todo SET message='$messsage' WHERE id=$id";
    if(mysqli_query($conn,$sql)){
        return true;
    }else{
        dide("ERROR-".mysqli_error());
    }
}


function categoryDelete(){
    global $conn;
    $id=$_GET["id"];
    $sql="DELETE FROM todo WHERE id=$id";

    if(!mysqli_query($conn,$sql)){
       die("SOMETHING WRONG".mysqli_error());
    }else{
        return true;
    }
}
