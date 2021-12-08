<?php
session_start();
include("connect.php");
$email=$_POST['email'];
$password=$_POST['password'];
$emailsql="SELECT * FROM users WHERE email='$email'";
$emailquery=mysqli_query($conn,$emailsql);
$emailnumrow=mysqli_num_rows($emailquery);
$userdata=mysqli_fetch_assoc($emailquery);
if($emailnumrow > 0)
{
    if(password_verify($password,$userdata['password']))
    {
        echo $_SESSION['id']=$userdata['id'];
        header("location: ../index.php");
    }
    else
    {
        $_SESSION['error']="invalid password";
        header("location: ../index.php");
    }
}
else
{
    $_SESSION['error']="invali email";
    header("location: ../index.php");
}
?>