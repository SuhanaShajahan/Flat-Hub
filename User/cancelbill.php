<?php
include("config.php");
$oid = $_GET['residentid'];

$query = mysqli_query($con,"SELECT * FROM `tbl_electricity` WHERE `id` = '$residentid'");
$row = mysqli_fetch_array($query);

if($row['payment_sts']=="Paid"){
    $query2 = "UPDATE `tbl_electricity` SET `bill_sts` = 'Cancelled' , `payment_sts` = 'Refund Processing' WHERE `id` = '$residentid'";

    }else{
        $query2 = "UPDATE `tbl_electricity` SET `bill_sts` = 'Cancelled' WHERE `id` = '$residentid'";
    }


if(mysqli_query($con,$query2))
{

    
    $sql = mysqli_query($con,"SELECT * FROM tbl_electricity WHERE order_id = $residentid");
    while($row2 = mysqli_fetch_array($sql)){
        $residentid = $row2['residentid'];
        $quantity = $row2['quantity'];
        $sql4 = mysqli_query($con,"SELECT * FROM tbl_books WHERE book_id = $pid");
        $rowqty = mysqli_fetch_array($sql4);
        $newquantity = $rowqty['P_qnty'] + $quantity ;
        $sql5 = mysqli_query($con,"UPDATE tbl_books SET P_qnty = $newquantity WHERE book_id = $pid");
    }



    
    header("location:vieworders.php");
}
else{
    echo "Error";
}



?>