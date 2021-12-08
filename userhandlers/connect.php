<?php
define("SERVERNAME",'localhost');
define("USER",'root');
define("PASS",'');
define("DBNAME",'studylab');

$conn=mysqli_connect(SERVERNAME,USER,PASS,DBNAME);
if($conn)
{
    //echo "done";
}
else
{
    echo "error";
}
?>