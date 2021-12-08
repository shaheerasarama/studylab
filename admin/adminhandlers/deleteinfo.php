<?php 
session_start();
include("connect.php");
$sql="DELETE FROM info";
$sqldelete=mysqli_query($conn,$sql);
if($sqldelete)
{
    $_SESSION['success']="info deleted successfully";
    header("location: ../info.php");
}

?>
?>