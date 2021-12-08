<?php
session_start();
include("connect.php");
$id=$_GET['id'];
$update="UPDATE admins set 
type='1' WHERE id=$id";
$updateadmin=mysqli_query($conn,$update);

if($updateadmin)
{
    $_SESSION['success']="admin updates successfully";

    header("location:../admins.php?id=$id");
}
?>