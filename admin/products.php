<?php include("sidebar.php"); ?>
  <div class="content-wrapper">

    <div class="row">
           
        <!-- general form elements -->
      
	
		


	       <div class="card card-primary">
   

	     	<h1>Products</h1>
	     	  <div class="card">
	            <div class="card-header">
	              <h3 class="card-title">DataTable with minimal features & hover style</h3>
	            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
	                <tr>
	                  <th>ID</th>
	                  <th>Product</th>
	                  <th>Price</th>
	                  <th>Desc</th>
	                   <th>Category</th>
	                  <th>Image</th>
	                </tr>
                </thead>
            	 <tbody>
	             	<?php 

	             		include("config.php");

	             		$cmd=mysqli_query($con,"select * from tbl_products");
	             		
	             		while ($r=mysqli_fetch_assoc($cmd)) 
	             		{
	             		
	             	 ?>
	             	 	<td><?= $r["p_id"] ?></td>
	             	 	<td><?= $r["p_name"] ?></td>
	             	 	<td><?= $r["p_price"] ?></td>
	             	 	<td><?= $r["p_desc"] ?></td>
	             	 	<td><?= $r["p_cid"] ?></td>
	             	 	<td><img src="<?= $r["p_imgPath"] ?>" width="50" height="50" /></td>


	             	 <?php } ?>

                </tbody>
              
              </table>
            </div>
            <!-- /.card-body -->







<?php include("footer.php"); ?>


