<?php
$id=$_GET['id'];
$sql="SELECT cat_id,instructor_id FROM courses Where id=$id";
$sql1=mysqli_query($conn,$sql);
$sqle=mysqli_fetch_assoc($sql1);
echo '<pre>';
print_r($sqle);
echo '</pre>';
?>