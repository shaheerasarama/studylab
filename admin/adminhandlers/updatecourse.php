<?php 
session_start();
include("connect.php");
$id=$_GET['id'];

$name=$_POST['name'];
$img=$_FILES['img'];
$price=$_POST['price'];
$cat=$_POST['cat'];
$instructor=$_POST['instructor'];

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
    $sqlimg="UPDATE courses SET
    img='$imgnewname'
    WHERE id=$id
    ";
    mysqli_query($conn,$sqlimg);
}
$sql="UPDATE courses SET
name='$name',
price='$price',
cat_id='$cat',
instructor_id='$instructor'
WHERE id=$id
";
$query=mysqli_query($conn,$sql);
if($query)
{
    $_SESSION['success']="courses updates successfully";

    header("location:../edit-course.php?id=$id");

}

?>