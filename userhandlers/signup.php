<?php
session_start();
include("connect.php");
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
if($password  == $cpassword)
{
    $password=$_POST['password'];
    $password=password_hash($password,PASSWORD_DEFAULT);
}
else
{
    $_SESSION['error']='Please check password or Confirm Password';
    header("location: ../index.php");
    die();    
}
$img=$_FILES['img'];
$imgname=$img['name'];
$imgTmpname=$img['tmp_name'];
$randomstring=uniqid();
$ext=pathinfo($imgname,PATHINFO_EXTENSION);
$imgnewname="$randomstring.$ext";
move_uploaded_file($imgTmpname,"../assets/images/$imgnewname");

$addusersql="INSERT INTO users (name,email,password,img)
VALUES('$name','$email','$password','$imgnewname')";
//$adduser=mysqli_query($conn,$addusersql);
if(mysqli_query($conn,$addusersql))
{
    $_SESSION['success']="signed up in successfully";
    $_SESSION['id']=$conn->insert_id;
    header("location: ../index.php");
}
?>


