<?php
session_start();
include("connect.php");
$id=$_GET['id'];
$deleteuser="DELETE FROM users WHERE id=$id";
$deletecatSql=mysqli_query($conn,$deleteuser);
if($deletecatSql)
{
    $_SESSION['success']="user deleted successfully";
    header("location: ../showcats.php");
}

?>