<?php
include("include/header.php");
include("userhandlers/getblogs.php");


?>
 <section class="hero-wrap hero-wrap-2" style="background-image: url('assets/images/bg_2.jpg');">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-end justify-content-center">
      <div class="col-md-9 ftco-animate pb-5 text-center">
       <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Our Blog <i class="fa fa-chevron-right"></i></span></p>
       <h1 class="mb-0 bread">Our Blog</h1>
     </div>
   </div>
 </div>
</section>

<section class="ftco-section bg-light">
  <div class="container">
    <div class="row d-flex">
<?php while($blogs=mysqli_fetch_assoc($blogsSql)){ ?>  
<div class="col-lg-4 ftco-animate">
  <div class="blog-entry">
    <a href="blog-details.php?id=<?=$blogs['id'];?>" class="block-20" style="background-image: url('assets/images/<?=$blogs['img'];?>');">
    </a>
    <div class="text d-block">
     <div class="meta">
      <p>
       <a href="#"><span class="fa fa-calendar mr-2"></span><?=date("d-m-Y", strtotime($blogs['created_at']));?></a>
       
       <a href="#"><span class="fa fa-user mr-2"></span><?=$blogs['writer'];?></a>
     
     </p>
   </div>
  
   <h3 class="heading"><a href=><?=$blogs['title'];?></a></h3>
   <p><?=$blogs['hint']?></p>
   <p><a href="blog-details.php?id=<?=$blogs['id'];?>" class="btn btn-secondary py-2 px-3">Read more</a></p>
 </div>
</div>
</div>
<?php } ?>
</div>
<div class="row mt-5">
  <div class="col text-center">
    <div class="block-27">
      <ul>
        <li><a href="#">&lt;</a></li>
        <li class="active"><span>1</span></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li><a href="#">&gt;</a></li>
      </ul>
    </div>
  </div>
</div>
</div>
</section>

<?php
include("include/footer.php");
?>