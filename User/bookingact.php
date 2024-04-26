<?php
include("config.php");
if(isset($_POST['submit']))
{
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$address=$_POST['address'];
$phone=$_POST['phone'];
$password=$_POST['password'];
$confirm_password=$_POST['confirm_password'];


$sql="INSERT INTO `tbl_register`(`fname`,`lname`,`email`,`address`,`phone`,`password`)VALUES('$fname','$lname','$email','$address','$phone','$password')";
if(mysqli_query($con,$sql))
{
    header("location:login.php");
}
else
{
    echo "error";
}
}

?>