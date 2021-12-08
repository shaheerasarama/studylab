<?php
session_start();
include("connect.php");
$email=$_POST['email'];
$password=$_POST['pass'];
$emailsql="SELECT * FROM admins WHERE email='$email'";
$emailquery=mysqli_query($conn,$emailsql);
$emailnumrow=mysqli_num_rows($emailquery);
$admindata=mysqli_fetch_assoc($emailquery);
if($emailnumrow > 0)
{
    if(password_verify($password,$admindata['password']))
    {
        $_SESSION['id']=$admindata['id'];
        $_SESSION['type']=$admindata['type'];
        $_SESSION['name']=$admindata['name'];
        header("location: ../index.php");
    }
    else
    {
        $_SESSION['error']="invalid password";
        header("location: ../login.php");
    }
}
else
{
    $_SESSION['error']="invali email";
    header("location: ../login.php");
}
?>