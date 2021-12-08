<?php
$courses="SELECT courses.*,cats.name as catname,instructors.name as insname FROM courses JOIN cats JOIN instructors on courses.cat_id=cats.id and courses.instructor_id=instructors.id;";
$coursesSql=mysqli_query($conn,$courses);
?>
