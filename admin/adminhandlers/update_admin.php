<?php
session_start();
require("connect.php");
$id=$_POST['id'];
$name=$_POST['name'];
$email=$_POST['email'];
$status=$_POST['status'];
$type=$_POST['type'];
$sql="UPDATE admins SET
name='$name',
email='$email',
status=$status,
type=$type
WHERE id='$id' 
";
$query=mysqli_query($conn,$sql);
if($query)
{
    $_SESSION['success']="admin updates successfully";
    header("location:../show-admins.php");
}
?>