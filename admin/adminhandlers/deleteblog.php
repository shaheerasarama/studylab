<?php
session_start();
include("connect.php");
$id=$_GET['id'];
$deleteblog="DELETE FROM blogs WHERE id=$id";
$deleteblogSql=mysqli_query($conn,$deleteblog);
if($deleteblogSql)
{
    $_SESSION['success']="blog deleted successfully";
    header("location: ../blogs.php");
}
?>