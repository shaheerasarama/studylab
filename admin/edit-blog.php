<?php

include("include/header.php");
include("include/sidebar.php");
include("adminhandlers/getblogid.php");
?>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Edit <?=$blog['title'];?></h1>
        </div><!-- /.col -->
        
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active">Edit blog Page</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="row">
      <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit blog</h3>
                
              </div>
              <?php
              if(isset($_SESSION['success']))
	          {?>
		      <div class="alert alert-primary" role="alert">
               <h4 class="alert-heading"><?=$_SESSION['success'];?></h4>
              </div>
		     <?php
		       unset($_SESSION['success']);
	         }
	        ?>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="adminhandlers/update-blog.php?id=<?=$blog['id'];?>" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Hint</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="hint" value="<?=$blog['hint'];?>">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="title" value="<?=$blog['title'];?>">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Body</label>
                    <textarea class="form-control" id="exampleInputEmail1" name="body" cols="30" rows="10"><?=$blog['body'];?></textarea>
                  </div>

                

                  <div class="form-group">
                    <label for="exampleInputPassword1">Blog Img</label>
</br>
                    <img src="../assets/images/<?=$blog['img'];?>"  width="150px" alt="">
                    <input type="file" class="form-control" id="exampleInputPassword1" name="bimg" >
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">writer</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="writer" value="<?=$blog['writer'];?>">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">writer Desc</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="wdesc" value="<?=$blog['writerdesc'];?>">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">writer Img</label>
</br>
                    <img src="../assets/images/<?=$blog['writerimg'];?>"  width="150px" alt="">
                    <input type="file" class="form-control" id="exampleInputPassword1" name="wimg" >
                  </div>



                 
                  
                  
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

            <!-- general form elements -->
            
            <!-- /.card -->

          </div>
     
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>

<?php
include("include/footer.php");
?>