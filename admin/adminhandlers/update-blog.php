<?php
session_start();
include("connect.php");
$id=$_GET['id'];
$hint=$_POST['hint'];
$title=$_POST['title'];
$body=$_POST['body'];
$bimg=$_FILES['bimg'];
$writer=$_POST['writer'];
$wdesc=$_POST['wdesc'];
$wimg=$_FILES['wimg'];

if($bimg['size']==0)
{
    echo "empty";
}
else
{
    $imgname=$bimg['name'];
    $imgTmpname=$bimg['tmp_name'];
    $randomstring=uniqid();
    $ext=pathinfo($imgname,PATHINFO_EXTENSION);
    $imgnewname="$randomstring.$ext";
    move_uploaded_file($imgTmpname,"../../assets/images/$imgnewname");
    $sqlimg="UPDATE blogs SET
    img='$imgnewname'
    WHERE id=$id
    ";
    mysqli_query($conn,$sqlimg);
}

if($wimg['size']==0)
{
    echo "empty";
}
else
{
    $imgname1=$wimg['name'];
    $imgTmpname=$wimg['tmp_name'];
    $randomstring=uniqid();
    $ext=pathinfo($imgname1,PATHINFO_EXTENSION);
    $imgnewname1="$randomstring.$ext";
    move_uploaded_file($imgTmpname,"../../assets/images/$imgnewname1");
    $sqlimg="UPDATE blogs SET
    writerimg='$imgnewname1'
    WHERE id=$id
    ";
    mysqli_query($conn,$sqlimg);
}

$sql="UPDATE blogs SET
hint='$hint',
title='$title',
body='$body',
writer='$writer',
writerdesc='$wdesc'
WHERE id=$id
";
$query=mysqli_query($conn,$sql);
if($query)
{
    $_SESSION['success']="blog updates successfully";

    header("location:../edit-blog.php?id=$id");

}



?>