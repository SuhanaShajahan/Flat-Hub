<?php
include("config.php");
if(isset($_POST['submit']))
{
$notice_title=$_POST['notice_title'];
$notice_content=$_POST['notice_content'];




$sql="INSERT INTO `tbl_notice`(`notice_title`,`notice_content`)VALUES('$notice_title','$notice_content')";
if(mysqli_query($con,$sql))
{
    header("location:new_notice.php");
}
else
{
    echo "error";
}
}

?>