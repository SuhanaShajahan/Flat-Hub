<?php
include("config.php");
$residentid = $_GET['id'];



$query = "UPDATE `tbl_electricity` SET  `payment_status` = 'Refunded' WHERE `id` = '$residentid';";

if(mysqli_query($con,$query))
{
    header("location:viewelectricity.php");
}
else{
    echo "Error";
}



?>