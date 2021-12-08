<?php
ob_start();
include("include/header.php");
include("include/sidebar.php");
include("adminhandlers/connect.php");
include("adminhandlers/getadmins.php");

if($_SESSION['type'] ==1)
{
    

?>

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Admins</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active">Admins Page</li>
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
            <!-- general form elements -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">All Admins</h3>
                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 140px;">
                  <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#add">Add Admin</button>
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
                <table class="table table-hover text-wrap">
                  <thead>
                    <tr>
                      
                      
                      <th>Name</th>
                      <th>Email</th>
                      <th>Type</th>
                      <th>Actions</th>
                    
                    </tr>
                  </thead>
                  <tbody>
                      <?php while($admin=mysqli_fetch_assoc($getAdmins)){ ?>
                    <tr>
                      
                      
                      <td><?=$admin['name'];?></td>
                      <td><?=$admin['email'];?></td>
                      <td>
                          <?php
                           if($admin['type']==1){

                              echo "Superadmin";

                           }

                         else
                        {
                            echo "Admin";
                        }
                              
                        ?>
                      </td>
                      <td>                    
                         
                          <a href="adminhandlers/edit-admin.php?id=<?=$admin['id'];?>" class="btn btn-info edit-admin"><i class="fas fa-user-edit"></i></i></a>
                          <a href="adminhandlers/deleteadmin.php?id=<?=$admin['id'];?>" class="btn btn-danger"><i class="fas fa-trash"></i></a>  
                      </td>
                      

                     
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
              <form  action="adminhandlers/addadmin.php" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="Enter Name" required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="email" placeholder="Enter Email" required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Password</label>
                    <input type="password" class="form-control" id="exampleInputEmail1" name="pass" placeholder="Enter Password" required>
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Type</label>
                    <select name="type" id="" class="form-control" id="exampleInputEmail1" placeholder="Choose Type" required>

                    <option value="0">Admin</option>
                    <option value="1">Superadmin</option>
                    </select>
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
<?php }
else
{
  header("location:index.php");
}
?>