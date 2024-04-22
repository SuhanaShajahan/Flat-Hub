<?php
session_start();
include("config.php");
if(isset($_POST['submit']))
{
$email=$_POST['email'];
$password=$_POST['password'];
$sql="SELECT * FROM tbl_register WHERE 'email' = '$email' AND 'password' = '$password'";

if($res = mysqli_query($con,$sql))
{
    $num = mysqli_num_rows($res);
    if($email == "admin@gmail.com" && $password == "admin"){
        header("location:../Admin\adminindex.php");
    }
    else if($num > 0){
        $row = mysqli_fetch_array($res);
        $_SESSION['userid'] = $row['id'];
        $_SESSION['username'] = $row['name'];
        header("location:inner.php");
    }else{
        echo '<script>alert("Incorrect username or password");</script>';
        echo '<script>window.location="login.php"</script>';
    }
}
else
{
    echo "error";
}
}else{
    echo "error btn";
}
?>