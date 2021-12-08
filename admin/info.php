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
          <h1 class="m-0 text-dark">Information</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active">Information Page</li>
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
      <div class="col-md-12">
            <!-- general form elements -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Information</h3>
                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 140px;">
                  <?php if($info == null){ ?>
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add">Add Info</button>
                  <?php } ?>
                  </div>
                </div>

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
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      
                      <th>Email</th>
                      <th>Adresss</th>
                      <th>Phonenumber</th>
                      <th>Facebook</th>
                      <th>Twitter</th>
                      <th>Instagram</th>
                      <th>Actions</th>
                    
                    </tr>
                  </thead>
                  <tbody>
                      
                    <tr>
                      
                     <td><?=$info['email'];?></td>
                     <td><?=$info['address'];?></td>
                     <td><?=$info['phonenumber'];?></td>
                     <td><?=$info['facebook'];?></td>
                     <td><?=$info['twitter'];?></td>
                     <td><?=$info['instagram'];?></td>
                     
                      <td>
                        <?php if($info !== null){ ?>
                        <a href="edit-info.php" class="btn btn-info"><i class="fas fa-edit"></i></a>
                        <a href="adminhandlers/deleteinfo.php" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                        <?php  } ?>
                      </td>
                    
                     
                    </tr>
                    
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            
          </div>
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
<!-- Modal -->
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="card card-primary">
              
              
              <!-- form start -->
              <form  action="adminhandlers/addinfo.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="text" class="form-control" id="exampleInputEmail" name="email">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Address</label>
                    <input type="text" class="form-control" id="exampleInputEmail" name="address">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Phonenumber</label>
                    <input type="text" class="form-control" id="exampleInputEmail" name="phone">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Insta</label>
                    <input type="text" class="form-control" id="exampleInputEmail" name="insta">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Twitter</label>
                    <input type="text" class="form-control" id="exampleInputEmail" name="twi">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Facebook</label>
                    <input type="text" class="form-control" id="exampleInputEmail" name="face">
                  </div>


                  
                 
                </div>
                <!-- /.card-body -->

               
             
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
      </form>
    </div>
  </div>
</div>
<?php
include("include/footer.php");
?>