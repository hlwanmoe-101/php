<?php

require_once "template/header.php";

if(categoryDelete()){
    echo "<script> location.href='categories_list.php'</script>";
}