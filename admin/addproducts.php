<?php include("sidebar.php"); ?>

<?php 
$msg="";
if (isset($_POST["btnSubmit"])) 
{
  $n=$_POST["txtProduct"];
  $p=$_POST["txtPrice"];
  $d=$_POST["txtDesc"];
  $c=$_POST["txtCID"];

      include("config.php");
       $f=$_FILES["file"]["name"]; //flags.png
       $file_tmp =$_FILES["file"]["tmp_name"];
       $location = "uploads/";
       $path=$location.$f; //For Database
      
       if(move_uploaded_file($file_tmp,$path))
        { 
         
          $query="insert into tbl_products (p_name,p_desc,p_price,p_cid,p_imgPath) values ('$n','$d','$p','$c','$path') ";

          $cmd=mysqli_query($con,$query);

          if ($cmd) 
          {
            $msg="Saved";
          }
          else
          {

            $msg="Can not save product";
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
                <h3 class="card-title">Add Products</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post" enctype="multipart/form-data">
                <div class="card-body">
                 
                
                 <div class="form-group">
                    <label for="exampleInputEmail1"> Products</label>
                    <input type="text" class="form-control" name="txtProduct"  placeholder="Product Name">
                  </div>
               
              <div class="form-group">
                    <label for="exampleInputEmail1"> Price</label>
                    <input type="text" class="form-control" name="txtPrice"  placeholder="Product Price">
                  </div>



                 <div class="form-group">
                    <label for="exampleInputEmail1"> Description</label>
                    <TEXTAREA class="form-control" name="txtDesc"  placeholder="Product Description"></TEXTAREA>
                  </div>

                 <div class="form-group">
                  <label>Minimal</label>
                  <select class="form-control select2" style="width: 100%;" name="txtCID">
                 <?php 
                  include("config.php");

                  $cmd=mysqli_query($con,"select * from tbl_categies");

                  while ($r=mysqli_fetch_assoc($cmd)) 
                  {
                  
                  ?>
                    <option value="<?= $r["c_id"] ?>"> <?= $r["c_name"] ?></option>
                   
            <?php } ?>
                  </select>
                </div>


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


