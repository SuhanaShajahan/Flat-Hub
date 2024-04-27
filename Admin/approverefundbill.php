<?php
include("config.php");
$residentid = $_GET['residentid'];



$query = "UPDATE `tbl_electricity` SET  `payment_sts` = 'Refunded' WHERE `id` = '$residentid';";

if(mysqli_query($con,$query))
{
    header("location:viewelectricity.php");
}
else{
    echo "Error";
}



?>