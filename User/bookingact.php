<?php
include("config.php");
if(isset($_POST['submit']))
{
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$address=$_POST['address'];
$phoneno=$_POST['phoneno'];
$numofbathroom=$_POST['numofbathroom'];
$numofbedroom=$_POST['numofbedroom'];
$state=$_POST['state'];

$sql="INSERT INTO `tbl_booking`(`fname`,`lname`,`email`,`address`,`phoneno`,`numofbathroom`,`numofbedroom`,`state`)VALUES('$fname','$lname','$email','$address','$phoneno','$numofbathroom','$numofbedroom','$state')";
if(mysqli_query($con,$sql))
{
    header("location:booking.php");
}
else
{
    echo "error";
}
}

?>