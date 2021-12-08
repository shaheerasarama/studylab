<?php
session_start();
include("connect.php");
$name=$_POST['name'];
$img=$_FILES['img'];
$imgname=$img['name'];
$imgTmpname=$img['tmp_name'];
$randomstring=uniqid();
$ext=pathinfo($imgname,PATHINFO_EXTENSION);
$imgnewname="$randomstring.$ext";
move_uploaded_file($imgTmpname,"../../assets/images/$imgnewname");

$addcat="INSERT INTO cats (name,img)
VALUES('$name','$imgnewname')";

if(mysqli_query($conn,$addcat))
{
    $_SESSION['success']="categories added successfully";
    header("location: ../showcats.php");
}
?>

