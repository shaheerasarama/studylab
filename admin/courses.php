<?php

include("include/header.php");
include("include/sidebar.php");
include("adminhandlers/getCourses.php");
include("adminhandlers/getcats.php");
include("adminhandlers/getinstructor.php");
?>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Courses</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active">Courses Page</li>
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
                <h3 class="card-title">All Courses</h3>
                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 140px;">
                  <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#add">Add Course</button>
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
                      
                      <th>Name</th>
                      <th>Img</th>
                      <th>Price</th>
                      <th>Category</th>
                      <th>Instructor Name</th>
                      <th>Actions</th>
                    
                    </tr>
                  </thead>
                  <tbody>
                      <?php while($course=mysqli_fetch_assoc($coursesSql)){ ?>
                    <tr>
                      
                      <td><?=$course['name'];?></td>
                      <td><img src="../assets/images/<?=$course['img'];?>" alt="" width="150px"></td>
                      <td><?=$course['price'];?></td>
                      <td><?=$course['catname'];?></td>
                      <td><?=$course['insname'];?></td>
                      <td>                    
                          <a href="edit-course.php?id=<?=$course['id'];?>" class="btn btn-info edit-admin"><i class="fas fa-edit"></i></a>
                          <a href="adminhandlers/deletecourse.php?id=<?=$course['id'];?>" class="btn btn-danger"><i class="fas fa-trash"></i></a>  
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
              <form  action="adminhandlers/addcourses.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter name" name="name" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Img</label>
                    <input type="file" class="form-control" id="exampleInputPassword1" name="img" required >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">price</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Enter name" name="price" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Category</label>
                   <select name="cat" id="" class="form-control" id="exampleInputEmail1">
                     <?php while($cat=mysqli_fetch_assoc($catsSql)) {?>
                     <option value="<?=$cat['id'];?>"><?=$cat['name'];?></option>
                     <?php } ?>
                   </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Instructor</label>
                    <select name="instructor" id="" class="form-control" id="exampleInputEmail1">
                     <?php while($instr=mysqli_fetch_assoc($instructorSql)) {?>
                     <option value="<?=$instr['id'];?>"><?=$instr['name'];?></option>
                     <?php } ?>
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