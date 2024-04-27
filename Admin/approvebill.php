<?php
include("config.php");
$oid = $_GET['oid'];
$sql=mysqli_query($con,"SELECT * FROM `tbl_order` WHERE `id`='$oid'");
$row = mysqli_fetch_array($sql);
if($row['order_status']=="Pending Approval" && $row['payment_status']=="Paid" ){
    $query = "UPDATE `tbl_order` SET `order_status` = 'Approved' , `payment_status` = 'Paid' WHERE `id` = '$oid';";
}elseif($row['order_status']=="Approved" && $row['payment_status']=="Paid"){
    $query = "UPDATE `tbl_order` SET `order_status` = 'Approved' , `payment_status` = 'Paid' WHERE `id` = '$oid';";
}elseif($row['order_status']=="Approved" && $row['payment_status']=="Not Paid"){
    $query = "UPDATE `tbl_order` SET `order_status` = 'Pending Approval' , `payment_status` = 'Not Paid' WHERE `id` = '$oid';";
}elseif($row['order_status']=="Cancelled" && $row['payment_status']=="Refund Processing"){
    $query = "UPDATE `tbl_order` SET `order_status` = 'Cancelled' , `payment_status` = 'Refund Processing' WHERE `id` = '$oid';";
}elseif($row['order_status']=="Cancelled" && $row['payment_status']=="Refunded"){
    $query = "UPDATE `tbl_order` SET `order_status` = 'Cancelled' , `payment_status` = 'Refunded' WHERE `id` = '$oid';";
}elseif($row['order_status']=="Pending Approval" && $row['payment_status']=="Not Paid" ){
    $query = "UPDATE `tbl_order` SET `order_status` = 'Approved' , `payment_status` = 'Not Paid' WHERE `id` = '$oid';";
}else{
    $query = "UPDATE `tbl_order` SET `order_status` = 'Pending Approval' , `payment_status` = 'Pending Payment' WHERE `id` = '$oid';";
}

if(mysqli_query($con,$query))
{
    header("location:vieworders.php");
}
else{
    echo "Error";
}



?>