<?php

include("include/header.php");
include("include/sidebar.php");
include("adminhandlers/getinstructorid.php");
?>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Edit <?=$instructor['name'];?></h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active">Edit Instructor Page</li>
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
                <h3 class="card-title">Edit instructor</h3>
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
              <form action="adminhandlers/edit-instr.php?id=<?=$instructor['id'];?>" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="name" value="<?=$instructor['name'];?>">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Job</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="job" value="<?=$instructor['job'];?>">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Desc</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="desci" value="<?=$instructor['descr'];?>">
                  </div>

                

                  <div class="form-group">
                    <label for="exampleInputPassword1">Img</label>
</br>
                    <img src="../assets/images/<?=$instructor['img'];?>"  width="100px" alt="">
                    <input type="file" class="form-control" id="exampleInputPassword1" name="img" >
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Facebook</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="face" value="<?=$instructor['facebook'];?>">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Instagram</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="insta" value="<?=$instructor['instagram'];?>">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Twitter</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="twi" value="<?=$instructor['twitter'];?>">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">About</label>
                    <textarea class="form-control" id="exampleInputEmail1" name="about" value=""><?=$instructor['about'];?></textarea>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Education</label>
                    <textarea class="form-control" id="exampleInputEmail1" name="education" value=""><?=$instructor['education'];?></textarea>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Experience</label>
                    <textarea class="form-control" id="exampleInputEmail1" name="exper" value=""><?=$instructor['experience'];?></textarea>
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