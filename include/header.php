<?php
session_start();
include("userhandlers/connect.php");
//echo $_SESSION['id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>StudyLab</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="assets/css/animate.css">
    
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">

    <link rel="stylesheet" href="assets/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="assets/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
 <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
   <div class="container">
     <a class="navbar-brand" href="index.html"><span>Study</span>Lab</a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
       <span class="oi oi-menu"></span> Menu
   </button>

   <div class="collapse navbar-collapse" id="ftco-nav">
       <ul class="navbar-nav ml-auto">
         <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
         <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
         <li class="nav-item"><a href="courses.php" class="nav-link">Course</a></li>
         <li class="nav-item"><a href="instructor.php" class="nav-link">Instructor</a></li>
         <li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>
         <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
         <?php if(isset($_SESSION['id'])) { ?>
         <li class="nav-item"><a href="userhandlers/logout.php" class="nav-link">Log out</a></li>
         <?php } ?>
         
     </ul>
 </div>
</div>
</nav>
<!-- END nav -->