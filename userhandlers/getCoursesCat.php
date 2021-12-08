<?php
$id=$_GET['id'];
$getcourse="SELECT courses.*,cats.name as catname,instructors.name as insname FROM courses JOIN cats JOIN instructors on courses.cat_id=cats.id and courses.instructor_id=instructors.id WHERE cats.id=$id";
$getcoursesql=mysqli_query($conn,$getcourse);

//get cat name+img
$getNameImg="SELECT cats.name as catname,cats.img as catimg FROM cats WHERE cats.id=$id";
$getNameImgSql=mysqli_query($conn,$getNameImg);
$getNameImg1=mysqli_fetch_assoc($getNameImgSql);



?>