<?php
include("connect.php");
$sql="SELECT * FROM contacts";
$sqlContact=mysqli_query($conn,$sql);
echo $t=mysqli_num_rows($sqlContact);
?>