<?php
include("config.php");
if(isset($_POST['submit']))
{
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$address=$_POST['address'];
$phonenumber=$_POST['phonenumber'];
$password=$_POST['password'];
$confirmpassword=$_POST['confirmpassword'];


$sql="INSERT INTO `register`(`firstname`,`lastname`,`email`,`address`,`phonenumber`,`password`,`confirmpassword`)VALUES('$firstname','$lastname','$email','$address','$phonenumber','$password','$confirmpassword')";
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