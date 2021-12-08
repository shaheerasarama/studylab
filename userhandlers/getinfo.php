<?php

$info="SELECT * FROM info";
$infoSql=mysqli_query($conn,$info);
$infos=mysqli_fetch_assoc($infoSql);


?>