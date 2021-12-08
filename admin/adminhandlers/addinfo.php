<?php
session_start();
include("connect.php");
$email=$_POST['email'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$insta=$_POST['insta'];
$tw=$_POST['twi'];
$face=$_POST['face'];
$sql="INSERT INTO info (email,address,phonenumber,facebook,twitter,instagram)
VALUES('$email','$address','$phone','$face','$tw','$insta')";
if(mysqli_query($conn,$sql))
{
    $_SESSION['success']="info added successfully";
    header("location: ../info.php");
}

?>