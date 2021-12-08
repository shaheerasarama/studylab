<?php
include("include/header.php");
include("include/sidebar.php");
include("adminhandlers/connect.php");
include("adminhandlers/getCoid.php");
include("adminhandlers/getcats.php");
include("adminhandlers/getinstructor.php");

?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Edit Course</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Edit Course</li>
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
    
      <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit <?=$course['name'];?> Course</h3>
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
              <form action="adminhandlers/updatecourse.php?id=<?=$course['id']?>" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" value="<?=$course['name'];?>">
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputFile">Img</label>
</br>
                    <img src="../assets/images/<?=$course['img'];?>" width="150px" alt="">
                    <div class="input-group">                      
                      <div class="custom-file">
                        <input type="file" name="img" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Category</label>
                    <p><?=$course['catname'];?></p>
                   <select name="cat" class="form-control" id="exampleInputEmail1">
                     <?php while($cat=mysqli_fetch_assoc($catsSql)) {?>
                     <option value="<?=$cat['id'];?>"><?=$cat['name'];?></option>
                     <?php } ?>
                   </select>
                  </div>

                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Price</label>
                    <input type="number" name="price" class="form-control" id="exampleInputEmail1" value="<?=$course['price'];?>">
                  </div>

                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Instructor</label>
                    <p><?=$course['insname'];?></p>
                    <select name="instructor" class="form-control" id="exampleInputEmail1">
                     <?php while($instr=mysqli_fetch_assoc($instructorSql)) {?>
                     <option value="<?=$instr['id'];?>"><?=$instr['name'];?></option>
                     <?php } ?>
                   </select>
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
<!-- /.content-wrapper -->
<?php
include("include/footer.php");
?>
