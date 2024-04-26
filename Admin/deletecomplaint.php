<?php
$id=$_GET['id'];
include('config.php');
$query="DELETE FROM `tbl_complaint` WHERE `id` = '$id'";
if(mysqli_query($con,$query)){
    header("location:viewcomplaint.php");


}else{
    echo "error";
}


?>