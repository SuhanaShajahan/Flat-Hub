<?php
include("config.php");
if(isset($_POST['submit']))
{
$fname=$_POST['fname'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$sql="INSERT INTO `tbl_contact`(`fname`,`email`,`subject`,`message`)VALUES('$fname','$email','$subject','$message')";
if(mysqli_query($con,$sql))
{
    header("location:contact.php");
}
else
{
    echo "error";
}
}

?>