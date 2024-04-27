<?php
include("config.php");
if(isset($_POST['submit']))
{
$month=$_POST['month'];
$amount=$_POST['amount'];
$payment_sts=$_POST['payment_sts'];


$sql="INSERT INTO `tbl_electricity`(`month`,`amount`,`payment_sts`)VALUES('$month','$amount','$payment_sts')";
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