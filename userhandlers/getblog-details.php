<?php
$id=$_GET['id'];
$blog="SELECT * FROM blogs WHERE id=$id";
$blogsSql=mysqli_query($conn,$blog);
$blogs=mysqli_fetch_assoc($blogsSql);
?>