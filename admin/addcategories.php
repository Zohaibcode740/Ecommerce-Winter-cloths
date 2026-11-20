


<?php include("sidebar.php"); ?>


<?php 

$msg="";
if (isset($_POST["btnSubmit"])) {

  include("config.php");
  $c=$_POST["txtCategory"];

  $cmd=mysqli_query($con,"insert into tbl_categies (c_name) values ('$c')");

  if ($cmd) 
  {
    $msg="Saved!";
  }
  else
  {
    $msg="can not save!";
  }

}

 ?>



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <div class="row">
    
      <div class="col-sm-3"></div>
     
     <div class="col-sm-6">
       
        <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Categories</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post">
                <div class="card-body">
                 
                  <div class="form-group">
                    <label for="exampleInputEmail1">Category Name</label>
                    <input type="text" class="form-control" name="txtCategory"  placeholder="Category Name">
                  </div>
                

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="btnSubmit">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            <?php 
                if ($msg!="")
                {
                
                ?>
                    <div class="alert-warning "><?= $msg; ?></div>
                <?php
                }
             ?>

     </div>

</div>




  </div>
  <!-- /.content-wrapper -->

<?php include("footer.php"); ?>


