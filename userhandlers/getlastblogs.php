<?php
$lastblogs="SELECT * FROM blogs ORDER BY id DESC LIMIT 3";
$blogsSql=mysqli_query($conn,$lastblogs);
?>