<?php
include("connect.php");
$id=$_GET['id'];
$blogs="SELECT * FROM blogs WHERE id=$id";
$blogsSql=mysqli_query($conn,$blogs);
$blog=mysqli_fetch_assoc($blogsSql);

?>