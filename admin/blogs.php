<?php

include("include/header.php");
include("include/sidebar.php");
include("adminhandlers/connect.php");
include("adminhandlers/getblogs.php");
?>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Blogs</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active">Blogs Page</li>
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
                <h3 class="card-title">All Blogs</h3>
                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 140px;">
                  <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#add">Add Blog</button>
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
                      
                      
                      <th>Title</th>
                      <th>Body</th>
                      <th>Blog Img</th>
                      <th>writer</th>
                      <th>writer Img</th>
                      <th>Writer Dec</th>
                     
                      <th>Actions</th>
                    
                    </tr>
                  </thead>
                  <tbody>
                      <?php while($blog=mysqli_fetch_assoc($blogs)){ ?>
                    <tr>
                      
                      
                      <td><?=$blog['title'];?></td>
                      <td><?=$blog['body'];?></td>
                      <td><img src="../assets/images/<?=$blog['img'];?>" alt="" width="100px"></td>
                      <td><?=$blog['writer'];?></td>
                      <td><img src="../assets/images/<?=$blog['writerimg'];?>" alt="" width="100px"></td>
                      <td><?=$blog['writerdesc'];?></td>
                      
                      <td>                    
                          <a href="edit-blog.php?id=<?=$blog['id'];?>" class="btn btn-info edit-admin"><i class="fas fa-edit"></i></a>
                          <a href="adminhandlers/deleteblog.php?id=<?=$blog['id'];?>" class="btn btn-danger"><i class="fas fa-trash"></i></a>  
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
              <form  action="adminhandlers/addblog.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Hint</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="hint" required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="title" required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Body</label>
                    <textarea  cols="30" rows="10" class="form-control" id="exampleInputEmail1"  name="body" required></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Blog Img</label>
                    <input type="file" class="form-control" id="exampleInputPassword1" name="blogimg"  required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Writer</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="writer" required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Writer Desc</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="wdesc" required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Writer Img</label>
                    <input type="file" class="form-control" id="exampleInputPassword1" name="wimg" required >
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