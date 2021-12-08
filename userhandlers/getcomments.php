<?php

$id=$_GET['id'];
$getcomments="SELECT * FROM comments JOIN users on comments.userid=users.id WHERE blogid=$id";
$getcommentsSql=mysqli_query($conn,$getcomments);
$getcommentsnum=mysqli_num_rows($getcommentsSql);

//$comment=mysqli_fetch_assoc($getcommentsSql);


?>