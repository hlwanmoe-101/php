<?php
session_start();
if($_SESSION['user']){

}else{
    header("location:login.php");
}