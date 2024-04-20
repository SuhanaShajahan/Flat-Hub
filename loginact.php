<?php
session_start();
include("config.php");

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM `tbl_register` WHERE `email` = '$email' AND `password` = '$password'";

    if ($res = mysqli_query($con, $sql)) {
        $num = mysqli_num_rows($res);
        if ($email == "admin@gmail.com" && $password == "admin") {
            echo '<script>window.location.replace("index.php"); window.open("../admin/adminindex.php","_blank");</script>';
           // header("location:../admin/adminhome.php");
        } else if ($num > 0) {
            $row = mysqli_fetch_array($res);
            $_SESSION['userid'] = $row['id'];
            $_SESSION['username'] = $row['name'];
           
            echo '<script>window.location.replace("login.php"); window.open("index.php","_blank");</script>';
            
            
            
        } else {
            echo '<script>alert("Incorrect username or password");</script>';
            echo '<script>window.location="inner.php"</script>';
        }
    } else {
        echo "error";
    }
} else {
    echo '<script>window.location.replace("login.php"); window.open("inner.php","_blank");</script>';
}
