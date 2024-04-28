<?php
include("config.php");
$id=$_GET['id'];
$notice_title = $_POST['notice_title'];
$notice_content= $_POST['notice_content'];

    $query= "UPDATE `tbl_notice` SET `notice_title`='$notice_title', `notice_content`='$notice_content' WHERE `id`='$id'";


if(mysqli_query($con,$query))
{
    header("location:viewnotice.php");
}
else
{
 echo "Error";
}

$row=mysqli_fetch_assoc($result);
?>

