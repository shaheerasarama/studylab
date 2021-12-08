<?php
include("connect.php");
$sql="SELECT * FROM info";
$sqlinfo=mysqli_query($conn,$sql);
$info=mysqli_fetch_assoc($sqlinfo);

?>