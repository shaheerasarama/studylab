<?php
include("include/header.php");
include("userhandlers/getinstructor-details.php");
?>
 <section class="hero-wrap hero-wrap-2" style="background-image: url('assets/images/bg_2.jpg');">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-end justify-content-center">
      <div class="col-md-9 ftco-animate pb-5 text-center">
       <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span class="mr-2"><a href="index.html">Instructor <i class="fa fa-chevron-right"></i></a></span> <span>Instructor Details <i class="fa fa-chevron-right"></i></span></p>
       <h1 class="mb-0 bread"><?=$instructorF['name'];?></h1>
     </div>
   </div>
 </div>
</section>

<section class="ftco-section bg-light">
 <div class="container">
  <div class="row">
   <div class="col-md-4 ftco-animate d-flex align-items-center align-items-stretch">
    <div class="staff-2 w-100">
     <div class="img-wrap d-flex align-items-stretch">
      <div class="img align-self-stretch d-flex align-items-end" style="background-image: url(assets/images/<?=$instructorF['img'];?>);">
       <div class="text mb-4 text-md-center">
        <h3><?=$instructorF['name'];?></h3>
        <span class="position mb-2"><?=$instructorF['job'];?></span>
        <div class="faded">
         <!-- <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p> -->
         <ul class="ftco-social">
          <li class="ftco-animate"><a href="<?=$instructorF['twitter'];?>"><span class="fa fa-twitter"></span></a></li>
          <li class="ftco-animate"><a href="<?=$instructorF['facebook'];?>"><span class="fa fa-facebook"></span></a></li>
          <li class="ftco-animate"><a href="<?=$instructorF['instagram'];?>"><span class="fa fa-instagram"></span></a></li>
        </ul>
      </div>
    </div>

  </div>
</div>
</div>
</div>
<div class="col-md-8 d-flex align-items-center">
  <div class="staff-detail w-100 pl-md-5">
   <h3>About</h3>
   <p><?=$instructorF['about'];?>.</p>
   <h3>Education</h3>
   <p><?=$instructorF['education'];?>.</p>
   <h3>Experience</h3>
   <p><?=$instructorF['experience'];?>.</p>
 </div>
</div>
</div>
</div>
</section>

<section class="ftco-section bg-light ftco-no-pt">
 <div class="container">
  <div class="row pb-4">
    <div class="col-md-12 heading-section ftco-animate">
      <h2 class="mb-4">Course By <?=$instructorF['name'];?></h2>
    </div>
  </div>
  <div class="row">
<?php while($instructorCourses=mysqli_fetch_assoc($instructorCoursesSql)) {?>
<div class="col-md-4 ftco-animate">
  <div class="project-wrap">
   <a href="#" class="img" style="background-image: url(assets/images/<?=$instructorCourses['img'];?>);">
    <span class="price"><?=$instructorCourses['catname'];?></span>
  </a>
  <div class="text p-4">
    <h3><a href="#"><?=$instructorCourses['name'];?></a></h3>
    <p class="advisor">Advisor <span><?=$instructorCourses['insname'];?></span></p>
    <ul class="d-flex justify-content-between">
     <li class="price">$<?=$instructorCourses['price'];?></li>
   </ul>
 </div>
</div>
</div>
<?php } ?>
</div>
</div>
</section>
<?php
include("include/footer.php");
?>