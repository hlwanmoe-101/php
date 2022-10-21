<?php

require_once "conn.php";

$id=$_GET['id'];

$sql="SELECT * FROM todo WHERE id=$id";
$query=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($query);
//print_r($row);


if(isset($_GET['updateBtn'])){

    $messsage=$_GET["message"];
    $id=$_GET['id'];
    $sql="UPDATE todo SET message='$messsage' WHERE id=$id";
    if(mysqli_query($conn,$sql)){
        header("location:read.php");
    }else{
        echo "ERROR-".mysqli_error();
    }

}

?>
<form method="get">
    <input type="hidden" name="id" value="<?php echo $row['id']?>">
    <input type="text" name="message" value="<?php echo $row['message']?>" required>
    <button name="updateBtn">Update</button>
</form>
