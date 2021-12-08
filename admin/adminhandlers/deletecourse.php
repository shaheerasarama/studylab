<?php
session_start();
include("connect.php");
$id=$_GET['id'];
$deleteco="DELETE FROM courses WHERE id=$id";
$deletecourseSql=mysqli_query($conn,$deleteco);
if($deletecourseSql)
{
    $_SESSION['success']="courses deleted successfully";
    header("location: ../courses.php");
}

?>