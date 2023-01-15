<?php
	
	if(isset($_POST['submit'])){ // check submit button click

		$Item_no =$_POST['ItemNo'];					//asign form names for variables
		$Item_name =$_POST['Iname'];
		$Category =$_POST['Category'];
		$Price =$_POST['Price'];
		$Item_qty =$_POST['Itemqty'];
		$Description =$_POST['des'];
		$Image =$_FILES['image'];

		$file_name = $_FILES['image']['name'];			// set the image details
		$file_type = $_FILES['image']['type'];
		$file_size = $_FILES['image']['size'];
		$temp_name = $_FILES['image']['tmp_name'];

		$new_img_Name = $Item_name.'_'.$file_name;		// set new name for a image
		$upload_to = '../dush2/itemimages/'.$new_img_Name;	//set ne save location for the image
		move_uploaded_file($temp_name,$upload_to);

		$connection = mysqli_connect("localhost" , "root" , "" , "abdatabase");			//check connection of mysql

		//check connection
			if(mysqli_connect_errno ()) {						// display error massage if it doesnt's work
				die("Database connection failed !!! " . mysqli_connect_error());
				}

			// insert data into data base
			$query = "INSERT INTO item (Item_no , Item_Name , Category , Price ,Item_quantity , Image , Description) VALUES('$Item_no' ,   
			'$Item_name', '$Category' , '$Price' , '$Item_qty' , '$upload_to' ,  '$Description')";

			//execute the quary
			if(mysqli_query($connection,$query)){

				echo"<script> alert('Data added successfully!!!') </script>"; // if it is work properly display massage
			}else{

				echo"<script>alert('error!!!')</script>";// if it is doesnot work properly display error massage
			}
			//connection close

				mysqli_close($connection);
		}
?>


<html>
<head>

<title>Add Item</title>
<link rel="stylesheet" href="./style/css3.css"> <!--this is the stylesheet of additem page-->

</head>
<body>

	<!--header-->
	<?php include_once('./includes/header.php');?>


	

	<!--body-->
	<!--add item form-->
	<h2 class="head">Add new Item</h2>
	<div class="ItemForm">
		<form method="post" enctype="multipart/form-data">
		<label for="Iname" class ="lable1">Item Name</label>
		<input type="text" class="box1" name="Iname" placeholder="enter item name">

		<label for="ItemNo" class ="lable1">Item No</label>
		<input type="text" class="box1" name="ItemNo" placeholder="enter item No" style=" width:200px ; margin-right:200px">

		<label for="Category" class ="lable1">Category</label>
		<select class="box1" name="Category">
			<option value="gents">Gents</option>
			<option value="ladies">Ladies</option>
			<option value="Kids">Kids</option>
		</select>

		<label for="Price" class ="lable1">Price</label>
		<input type="text" class="box1" name="Price" placeholder="enter price" style=" width:200px ; margin-right:200px">

		<label for="Itemqty" class ="lable1">Item Quantity</label>
		<input type="text" class="box1" name="Itemqty" placeholder="enter item qty" style=" width:200px ; margin-right:200px">

		<label for="upload images" class ="lable1">Upload Images</label>
		<input type="file" class="choose"name="image" accept="image/*">

		<label for="Description" class ="lable1">Description</label>
		<textarea class="box2" name="des" placeholder="description" ></textarea>

		<input type="submit" name ="submit" value="Submit" class="submit">
  </form>
</div>

<!--footer-->
	<?php include_once('./includes/footer.php');?>
</body>
<html>