<?php 

	
	
	if(isset($_POST['submit'])){ // check submit button click

		$Item_no =$_POST['ItemNo'];					//asign form names for variables
		$Item_name =$_POST['Iname'];
		

		$connection = mysqli_connect("localhost" , "root" , "" , "abdatabase");			//check connection of mysql

		//check connection
			if(mysqli_connect_errno ()) {						// display error massage if it doesnt's work
				die("Database connection failed !!! " . mysqli_connect_error());
				}

			// delete data into data base
			$sql = "DELETE FROM item WHERE Item_no = '$Item_no'"; //fetch data from the database

			//execute the quary
			if(mysqli_query($connection,$sql)){

				echo"<script> alert('Data deleted successfully!!!') </script>"; // if it is work properly display massage
			}else{

				echo"<script>alert('error!!!')</script>";// if it is doesnot work properly display error massage
			}
	//connection close

				mysqli_close($connection);
		}
?>

<html>
<head>

<title>DELETE Item</title>
<link rel="stylesheet" href="delete.css"> <!--this is the stylesheet of additem page-->
<link rel="stylesheet" href="../sithanga/style/header.css">
<link rel="stylesheet" href="../sithanga/style/footercss.css">

</head>
<body>

	<!--header-->
	<?php include_once('./includes/header.php');?>


	

	<!--body-->
	<!--add item form-->
	<h2 class="head">Delete Item</h2>
	<div class="ItemForm">
		<form method="post" enctype="multipart/form-data">
		<label for="Iname" class ="lable1">Item Name</label>
		<input type="text" class="box1" name="Iname" placeholder="enter item name">

		<label for="ItemNo" class ="lable1">Item No</label>
		<input type="text" class="box1" name="ItemNo" placeholder="enter item No" >

	

		<input type="submit" name ="submit" value="Submit" class="submit">
  </form>
</div>

<!--footer-->
	<?php include_once('./includes/footer.php');?>
</body>
<html>