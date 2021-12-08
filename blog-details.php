<?php
include("include/header.php");
include("userhandlers/getblog-details.php");
include("userhandlers/getLastblogs.php");
include("userhandlers/getcomments.php");
?>
<section class="hero-wrap hero-wrap-2" style="background-image: url('assets/images/<?=$blogs['img'];?>');">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-end justify-content-center">
      <div class="col-md-9 ftco-animate pb-5 text-center">
       <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span class="mr-2"><a href="index.html">Blog <i class="fa fa-chevron-right"></i></a></span> <span><?=$blogs['title'];?> <i class="fa fa-chevron-right"></i></span></p>
       <h1 class="mb-0 bread">Our Blog</h1>
     </div>
   </div>
 </div>
</section>

<section class="ftco-section ftco-no-pt ftco-no-pb">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 ftco-animate py-md-5 mt-md-5">
        <h2 class="mb-3"><?=$blogs['title'];?></h2>
        <p>
          <img src="assets/images/<?=$blogs['img'];?>" alt="" class="img-fluid">
        </p>
        <p><?=$blogs['body'];?>.</p>
        
       
        
        
        
        <div class="about-author d-flex p-4 bg-light">
          <div class="bio mr-5">
            <img src="assets/images/<?=$blogs['writerimg'];?>" alt="Image placeholder" class="img-fluid mb-4">
          </div>
          <div class="desc">
            <h3><?=$blogs['writer'];?></h3>
            <p><?=$blogs['writerdesc'];?></p>
          </div>
        </div>


        <div class="pt-5 mt-5">
          <h3 class="mb-5" style="font-size: 20px; font-weight: bold;"><?=$getcommentsnum;?> Comments</h3>
         <?php while($comment=mysqli_fetch_assoc($getcommentsSql)) { ?>
          <ul class="comment-list">
           

           
        
            <li class="comment">
              <div class="vcard bio">
                <img src="assets/images/<?=$comment['img'];?>" alt="Image placeholder">
              </div>
              <div class="comment-body">
                <h3><?=$comment['name'];?></h3>
                <div class="meta"><?=date("d-m-Y,H:i:s", strtotime($comment['created_at']));?></div>
                <p><?=$comment['body'];?></p>
                
              </div>
            </li>
 
          </ul>
         <?php } ?>
          <!-- END comment-list -->
          <?php if(isset($_SESSION['id'])){ ?>
          <div class="comment-form-wrap pt-5">
            <h3 class="mb-5" style="font-size: 20px; font-weight: bold;">Leave a comment</h3>
            <form action="userhandlers/comments.php" method="post" class="p-5 bg-light">
              <div class="form-group">
                
                <input type="hidden" class="form-control" id="name" name="userid" value="<?=$_SESSION['id'];?>">
              </div>
              <div class="form-group">
               
                <input type="hidden" class="form-control" id="email" name="blogid" value="<?=$blogs['id'];?>">
              </div>
              <?php
              if(isset($_SESSION['success'])) { ?>
              <div class="alert alert-primary" role="alert">
              <?=$_SESSION['success'];
              unset($_SESSION['success']);
            ?>
             </div>
            <?php } ?>

              <div class="form-group">
                <label for="message">Message</label>
                <textarea name="body" id="message" cols="30" rows="10" class="form-control"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Post Comment" class="btn py-3 px-4 btn-primary">
              </div>

            </form>
          </div>
         <?php } ?>
         
        </div>

      </div> <!-- .col-md-8 -->
     
      <div class="col-lg-4 sidebar ftco-animate pl-md-4 py-md-5">
        <div class="sidebar-box mt-md-5 bg-light">
          <form action="#" class="search-form">
            <div class="form-group">
              <span class="icon fa fa-search"></span>
              <input type="text" class="form-control" placeholder="Search...">
            </div>
          </form>
        </div>
      

        <div class="sidebar-box ftco-animate">
          <h3>Recent Blog</h3>
          
          <?php while($reblog=mysqli_fetch_assoc($blogsSql)) {?>
          <div class="block-21 mb-4 d-flex">
            <a class="blog-img mr-4" style="background-image: url(assets/images/<?=$reblog['img'];?>);"></a>
            <div class="text">
              <h3 class="heading"><a href="#"><?=$reblog['hint'];?></a></h3>
              <div class="meta">
                <div><a href="#"><span class="fa fa-calendar"></span> <?=date("d-m-Y", strtotime($reblog['created_at']));?></a></div>
                <div><a href="#"><span class="fa fa-user"></span> <?=$reblog['writer'];?></a></div>
                <div><a href="#"><span class="fa fa-comment"></span> 19</a></div>
              </div>
            </div>
          </div>
          <?php } ?>
        </div>

       

        <div class="sidebar-box ftco-animate">
          <h3>Paragraph</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
        </div>
      </div>

    </div>
  </div>
</section> <!-- .section -->	
<?php include("include/footer.php"); ?>