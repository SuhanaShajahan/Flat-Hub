<?php
include("config.php");
if(isset($_POST['submit']))
{
    $residentid=$_POST['residentid'];
$month=$_POST['month'];
$amount=$_POST['amount'];
$payment_sts=$_POST['payment_sts'];

$amount = mysqli_query($con,"SELECT amount FROM tbl_electricity WHERE residentid = $residentid");
$row = mysqli_fetch_array($amount);

$sql="INSERT INTO `tbl_electricity`(`residentid`,`month`,`amount`,`payment_sts`)VALUES('$residentid','$month','$amount','$payment_sts')";
if(mysqli_query($con,$sql))
{
    header("location:addbill.php");
}
else
{
    echo "error";
}
}

?>