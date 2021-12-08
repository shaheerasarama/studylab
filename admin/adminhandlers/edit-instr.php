<?php 
session_start();
include("connect.php");
$id=$_GET['id'];

$name=$_POST['name'];
$job=$_POST['job'];
$desc=$_POST['desci'];
$img=$_FILES['img'];
$face=$_POST['face'];
$insta=$_POST['insta'];
$twi=$_POST['twi'];
$about=$_POST['about'];
$edu=$_POST['education'];
$exper=$_POST['exper'];
if($img['size']==0)
{
    echo "empty";
}
else
{
    $imgname=$img['name'];
    $imgTmpname=$img['tmp_name'];
    $randomstring=uniqid();
    $ext=pathinfo($imgname,PATHINFO_EXTENSION);
    $imgnewname="$randomstring.$ext";
    move_uploaded_file($imgTmpname,"../../assets/images/$imgnewname");
    $sqlimg="UPDATE instructors SET
    img='$imgnewname'
    WHERE id=$id
    ";
    mysqli_query($conn,$sqlimg);
}
$sql="UPDATE instructors SET
name='$name',
job='$job',
descr='$desc',
facebook='$face',
instagram='$insta',
twitter='$twi',
about='$about',
education='$edu',
experience='$exper'
WHERE id=$id
";
$query=mysqli_query($conn,$sql);
if($query)
{
    $_SESSION['success']="instructor updates successfully";

    header("location:../edit-instructor.php?id=$id");

}

?>