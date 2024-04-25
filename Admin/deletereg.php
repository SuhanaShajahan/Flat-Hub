<?php
$id=$_GET['id'];
include('config.php');
$query="DELETE FROM `tbl_register` WHERE `id` = '$id'";
if(mysqli_query($con,$query)){
    header("location:viewreg.php");


}else{
    echo "error";
}


?>