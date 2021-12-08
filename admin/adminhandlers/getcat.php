<?php
//for update
include("connect.php");
$id=$_GET['id'];
$getcat="SELECT * FROM cats WHERE id=$id";
$catsql=mysqli_query($conn,$getcat);
$cat=mysqli_fetch_assoc($catsql);
?>