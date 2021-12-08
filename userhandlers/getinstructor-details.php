<?php
$id=$_GET['id'];
$instructor="SELECT * FROM instructors WHERE id=$id";
$instructorSql=mysqli_query($conn,$instructor);
$instructorF=mysqli_fetch_assoc($instructorSql);

$instructorCourses="SELECT instructors.name as insname,courses.*,cats.name as catname FROM courses JOIN instructors JOIN cats on courses.instructor_id=instructors.id and courses.cat_id=cats.id WHERE instructors.id=$id;";
$instructorCoursesSql=mysqli_query($conn,$instructorCourses);


?>