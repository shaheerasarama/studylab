<?php
session_start();
include("connect.php");
$id=$_GET['id'];
$name=$_POST['name'];
$img=$_FILES['img'];
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
    $sqlimg="UPDATE cats SET
    img='$imgnewname'
    WHERE id=$id
    ";
    mysqli_query($conn,$sqlimg);
}

$sql="UPDATE cats SET
name='$name'
WHERE id=$id
";
$query=mysqli_query($conn,$sql);
if($query)
{
    $_SESSION['success']="category updates successfully";

    header("location:../edit-cat.php?id=$id");

}

?>
