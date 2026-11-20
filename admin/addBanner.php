<?php include("sidebar.php"); ?>

<?php 
$msg="";
if (isset($_POST["btnSubmit"])) 
{


      include("config.php");
       $f=$_FILES["file"]["name"]; //flags.png
       $file_tmp =$_FILES["file"]["tmp_name"];
       $location = "uploads/";
       $path=$location."banner".$f; //For Database
   
       if(move_uploaded_file($file_tmp,$path))
        { 
         
          $query="insert into tbl_Banner (b_img) values ('$path') ";

          $cmd=mysqli_query($con,$query);

          if ($cmd) 
          {
            $msg="Saved";
          }
          else
          {

            $msg="Can not save Image";
          }

        }     
        else
        {       
          $msg='ERROR';
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
                <h3 class="card-title">Add Banner Image</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post" enctype="multipart/form-data">
                <div class="card-body">
                 
                


                <div class="form-group">
                    <label for="exampleInputEmail1"> Image</label>
                    <input type="file" class="form-control" name="file" >
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


