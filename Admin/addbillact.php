<?php
include("config.php");
if(isset($_POST['submit']))
{
$residentid=$_POST['residentid'];
$month=$_POST['month'];
$amount=$_POST['amount'];


$sql="INSERT INTO `tbl_electricity`(`residentid`,`month`,`amount`,)VALUES('$residentid','$month','$amount')";
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