<?php
session_start();
include("connect.php");
$name=$_POST['name'];
$price=$_POST['price'];
$img=$_FILES['img'];
$cat=$_POST['cat'];
$instructor=$_POST['instructor'];

$imgname=$img['name'];
$imgTmpname=$img['tmp_name'];
$randomstring=uniqid();
$ext=pathinfo($imgname,PATHINFO_EXTENSION);
$imgnewname="$randomstring.$ext";
move_uploaded_file($imgTmpname,"../../assets/images/$imgnewname");

$addcourse="INSERT INTO courses (name,img,price,cat_id,instructor_id)
VALUES('$name','$imgnewname','$price','$cat','$instructor')";

if(mysqli_query($conn,$addcourse))
{
    $_SESSION['success']="course added successfully";
    header("location: ../courses.php");
}


?>