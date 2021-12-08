<?php
session_start();
include("connect.php");
$email=$_POST['email'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$insta=$_POST['insta'];
$tw=$_POST['twi'];
$face=$_POST['face'];
$sql="UPDATE info SET
email = '$email',
address = '$address',
phonenumber = '$phone',
facebook = '$face',
twitter = '$tw',
instagram = '$insta' ";
$query=mysqli_query($conn,$sql);
if($query)
{
    $_SESSION['success']="info updates successfully";
    header("location:../edit-info.php");
    
}
else
{
    echo mysqli_error($conn);
}
?>