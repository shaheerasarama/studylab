<?php
session_start();
include("connect.php");
$name=$_POST['name'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$password=password_hash($pass,PASSWORD_DEFAULT);
$type=$_POST['type'];


$sql="INSERT INTO admins (name,email,password,type)
VALUES('$name','$email','$password','$type')";
if(mysqli_query($conn,$sql))
{
    $_SESSION['success']="Admin Added Successfully";
    header("location: ../admins.php");
}

?>