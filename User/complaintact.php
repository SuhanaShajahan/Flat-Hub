<?php
include("config.php");
if(isset($_POST['submit']))
{
$residentname=$_POST['residentname'];
$appartmentno=$_POST['appartmentno'];
$phoneno=$_POST['phoneno'];
$email=$_POST['email'];
$complaint=$_POST['complaint'];



$sql="INSERT INTO `tbl_complaint`(`residentname`,`appartmentno`,`phoneno`,`email`,`complaint`)VALUES('$residentname','$appartmentno','$phoneno','$email','$complaint')";
if(mysqli_query($con,$sql))
{
    header("location:complaint.php");
}
else
{
    echo "error";
}
}

?>