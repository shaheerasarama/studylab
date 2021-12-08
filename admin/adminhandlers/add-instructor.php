<?php
session_start();
include("connect.php");
$name=$_POST['name'];
$job=$_POST['job'];
$desc=$_POST['desc'];
$about=$_POST['about'];
$edu=$_POST['edu'];
$exper=$_POST['exper'];
$insta=$_POST['insta'];
$tw=$_POST['twi'];
$face=$_POST['face'];
$img=$_FILES['img'];
$imgname=$img['name'];
$imgTmpname=$img['tmp_name'];
$randomstring=uniqid();
$ext=pathinfo($imgname,PATHINFO_EXTENSION);
$imgnewname="$randomstring.$ext";
move_uploaded_file($imgTmpname,"../../assets/images/$imgnewname");

$add="INSERT INTO instructors (name,job,descr,img,facebook,instagram,twitter,about,education,experience)
VALUES ('$name','$job','$desc','$imgnewname','$face','$insta','$tw','$about','$edu','$exper')";

if(mysqli_query($conn,$add))
{
    $_SESSION['success']="instructor added successfully";
    header("location: ../show-instructor.php");
}
else
{
    echo mysqli_error($conn);
}
?>