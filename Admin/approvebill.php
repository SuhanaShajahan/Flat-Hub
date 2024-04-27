<?php
include("config.php");
$oid = $_GET['residentid'];
$sql=mysqli_query($con,"SELECT * FROM `tbl_electricity` WHERE `id`='$residentid'");
$row = mysqli_fetch_array($sql);
if($row['bill_sts']=="Pending Approval" && $row['payment_sts']=="Paid" ){
    $query = "UPDATE `tbl_electricity` SET `bill_sts` = 'Approved' , `payment_sts` = 'Paid' WHERE `id` = '$residentid';";
}elseif($row['bill_sts']=="Approved" && $row['payment_sts']=="Paid"){
    $query = "UPDATE `tbl_electricity` SET `bill_sts` = 'Approved' , `payment_sts` = 'Paid' WHERE `id` = '$residentid';";
}elseif($row['bill_sts']=="Approved" && $row['payment_sts']=="Not Paid"){
    $query = "UPDATE `tbl_electricity` SET `bill_sts` = 'Pending Approval' , `payment_status` = 'Not Paid' WHERE `id` = '$residentid';";
}elseif($row['bill_sts']=="Cancelled" && $row['payment_sts']=="Refund Processing"){
    $query = "UPDATE `tbl_electricity` SET `bill_sts` = 'Cancelled' , `payment_sts` = 'Refund Processing' WHERE `id` = '$residentid';";
}elseif($row['bill_sts']=="Cancelled" && $row['payment_sts']=="Refunded"){
    $query = "UPDATE `tbl_electricity` SET `bill_sts` = 'Cancelled' , `payment_status` = 'Refunded' WHERE `id` = '$residentid';";
}elseif($row['bill_sts']=="Pending Approval" && $row['payment_sts']=="Not Paid" ){
    $query = "UPDATE `tbl_electricity` SET `bill_sts` = 'Approved' , `payment_sts` = 'Not Paid' WHERE `id` = '$oidresidentid';";
}else{
    $query = "UPDATE `tbl_electricity` SET `bill_sts` = 'Pending Approval' , `payment_sts` = 'Pending Payment' WHERE `id` = '$residentid';";
}

if(mysqli_query($con,$query))
{
    header("location:viewelecticity.php");
}
else{
    echo "Error";
}



?>