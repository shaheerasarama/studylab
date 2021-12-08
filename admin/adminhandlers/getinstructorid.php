<?php
include("connect.php");
$id=$_GET['id'];
$instructor="SELECT * FROM instructors WHERE id=$id";
$instructorSql=mysqli_query($conn,$instructor);
$instructor=mysqli_fetch_assoc($instructorSql);

?>