<?php

include("include/header.php");
include("include/sidebar.php");
include("adminhandlers/getcontact.php");
?>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Contact</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active">Contact</li>
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
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">All Messages (<?=$t?>) </h3>
                
               

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
                      
                      <th>Name</th>
                      <th>Email</th>
                      <th>Subject</th>
                      <th>Message</th>
                      <th>History</th>
                      
                      
                    
                    </tr>
                  </thead>
                  <tbody>
                      <?php while($contact=mysqli_fetch_assoc($sqlContact)){ ?>
                    <tr>
                      
                      <td><?=$contact['name'];?></td>
                      <td><?=$contact['email'];?></td>
                      <td><?=$contact['subject'];?></td>
                      <td><?=$contact['message'];?></td>
                      <td><?=date("d-m-Y/H:i:s", strtotime($contact['created_at']));?></td>
                      
                      
                      

                     
                    </tr>
                    <?php } ?>
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
              <form  action="adminhandlers/addcat.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter name" name="name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Img</label>
                    <input type="file" class="form-control" id="exampleInputPassword1" name="img" >
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