<?php
session_start();
include("connect.php");
$id=$_GET['id'];
$deleteins="DELETE FROM instructors WHERE id=$id";
$deletecatSql=mysqli_query($conn,$deleteins);
if($deletecatSql)
{
    $_SESSION['success']="category deleted successfully";
    header("location: ../show-instructor.php");
}

?>