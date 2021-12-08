<?php
session_start();
include("connect.php");
$user_id=$_POST['userid'];
$blog_id=$_POST['blogid'];
$body=$_POST['body'];

$comment="INSERT INTO comments (userid,blogid,body)
VALUES('$user_id','$blog_id','$body')";
$commentSql=mysqli_query($conn,$comment);

if($commentSql)
{
    $_SESSION['success']="comment posted successfully";
    header("location: ../blog-details.php?id=$blog_id");
}
?>