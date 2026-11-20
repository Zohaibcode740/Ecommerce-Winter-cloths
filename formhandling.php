<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
</head>
<body>




	<div class="container">

		<h2>Forms Handling</h2>
		<hr/>
		<br/>
		<form method="POST" action="formhandling.php">
			<div class="form-group">
				<label>First Name</label>
				<input type="text" name="fname" class="form-control">
			</div>

			<div class="form-group">
				<label>Last Name</label>
				<input type="text" name="lname" class="form-control">
			</div>

			<div class="form-group">
				<label>Age</label>
				<input type="number" name="age" class="form-control">
			</div>

			<div class="form-group">
				<input type="radio" name="gender" value="male">Male
				<input type="radio" name="gender" value="female">Female
			</div>

			<div class="form-group">
				<input type="checkbox" name="product[]" value="pencil">Pencil
				<input type="checkbox" name="product[]" value="eraser">Eraser
				<input type="checkbox" name="product[]" value="pen">Pen
			</div>



			<input type="submit" class="btn btn-primary" name="btnSubmit">

	</form>

	</div>

<?php 

	if (isset($_POST["btnSubmit"])) {
		
		$fn=$_POST["fname"];
		$ln=$_POST["lname"];
		$age=$_POST["age"];
		$g=$_POST["gender"];
	
		$p=$_POST["product"];

		foreach ($p as $val) 
		{
			echo "$val <br/>";	
		}
		// $p=$_POST["pen"];
		// $pp=$_POST["pencil"];
		// $e=$_POST["eraser"];
		echo "<br />";

		echo "$fn <br/>";
		echo "$ln <br/>";
		echo "$age <br/>";
		echo "$g <br/>";
	


		// echo "$p <br/>";
		// echo "$pp <br/>";
		// echo "$e <br/>";
	}

 ?>


</body>
</html>

