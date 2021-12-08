<?php

include("include/header.php");
include("include/sidebar.php");
include("adminhandlers/getinfo.php");
?>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Edit Information</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active">Edit Information Page</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
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

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="row">
      
      <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="adminhandlers/updateinfo.php" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" value="<?=$info['email'];?>">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Address</label>
                    <input type="text" name="address" class="form-control" id="exampleInputEmail1" value="<?=$info['address'];?>">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Phone number</label>
                    <input type="text" name="phone" class="form-control" id="exampleInputEmail1" value="<?=$info['phonenumber'];?>">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Instagram</label>
                    <input type="text" name="insta" class="form-control" id="exampleInputEmail1" value="<?=$info['instagram'];?>">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Facebook</label>
                    <input type="text" name="face" class="form-control" id="exampleInputEmail1" value="<?=$info['facebook'];?>">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">twitter</label>
                    <input type="text" name="twi" class="form-control" id="exampleInputEmail1" value="<?=$info['twitter'];?>">
                  </div>
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
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