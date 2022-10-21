<?php
require_once "conn.php";
echo "<pre>";
$sql="SELECT * FROM todo";
$query=mysqli_query($conn,$sql);
$total_row=mysqli_num_rows($query);

//print_r(mysqli_fetch_assoc($query));
echo "<ul>";


while ($row=mysqli_fetch_assoc($query)){
    $time=date("g:i",strtotime($row['created_at']));
    echo "<li>[{$row['id']}][ $time ][<a href='delete.php?id={$row['id']}'>Delete</a> | <a href='update.php?id={$row['id']}'>Update</a>]{$row['message']}</li>";
}

echo "</ul>";
