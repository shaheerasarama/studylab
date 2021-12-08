<?php
session_start();
include("connect.php");
$hint=$_POST['hint'];
$title=$_POST['title'];
$body=$_POST['body'];
$bimg=$_FILES['blogimg'];
$writer=$_POST['writer'];
$wdesc=$_POST['wdesc'];
$wimg=$_FILES['wimg'];


$imgname=$bimg['name'];
$imgTmpname=$bimg['tmp_name'];
$randomstring=uniqid();
$ext=pathinfo($imgname,PATHINFO_EXTENSION);
$imgnewname="$randomstring.$ext";
move_uploaded_file($imgTmpname,"../../assets/images/$imgnewname");

$imgname1=$wimg['name'];
$imgTmpname=$wimg['tmp_name'];
$randomstring=uniqid();
$ext=pathinfo($imgname1,PATHINFO_EXTENSION);
$imgnewname1="$randomstring.$ext";
move_uploaded_file($imgTmpname,"../../assets/images/$imgnewname1");

$addblog="INSERT INTO blogs (hint,title,body,writer,writerdesc,writerimg,img)
VALUES('$hint','$title','$body','$writer','$wdesc','$imgnewname1','$imgnewname')";

if(mysqli_query($conn,$addblog))
{
    $_SESSION['success']="blog added successfully";
    header("location: ../blogs.php");
}


?>