<?php
$id=$_GET['id'];
// $courses="SELECT * FROM courses WHERE id=$id";
// $coSql=mysqli_query($conn,$courses);
// $course=mysqli_fetch_assoc($coSql);
$courses="SELECT courses.*,cats.name as catname,instructors.name as insname FROM courses JOIN cats JOIN instructors on courses.cat_id=cats.id and courses.instructor_id=instructors.id where courses.id=$id";
$coursesSql=mysqli_query($conn,$courses);
$course=mysqli_fetch_assoc($coursesSql);


?>