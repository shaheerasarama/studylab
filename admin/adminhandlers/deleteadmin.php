<?php
session_start();
include("connect.php");
$id=$_GET['id'];
$deleteadmin="DELETE FROM admins WHERE id=$id";
$deleteadminSql=mysqli_query($conn,$deleteadmin);
if($deleteadminSql)
{
    $_SESSION['success']="admin deleted successfully";
    header("location: ../admins.php");
}
?>