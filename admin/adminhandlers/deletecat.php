<?php
session_start();
include("connect.php");
$id=$_GET['id'];
$deletecat="DELETE FROM cats WHERE id=$id";
$deletecatSql=mysqli_query($conn,$deletecat);
if($deletecatSql)
{
    $_SESSION['success']="category deleted successfully";
    header("location: ../showcats.php");
}

?>