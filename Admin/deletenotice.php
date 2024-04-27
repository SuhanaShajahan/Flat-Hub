<?php
$id=$_GET['id'];
include('config.php');
$query="DELETE FROM `tbl_notice` WHERE `id` = '$id'";
if(mysqli_query($con,$query)){
    header("location:viewnotice.php");


}else{
    echo "error";
}


?>