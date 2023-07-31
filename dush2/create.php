<?php
$servername= "localhost";
$username= "root";
$password= "";
$dbname= "abdatabase";

//create connection
$conn = new mysqli ($servername,$username,$password,$dbname);

	$fname = $_POST["Fname"];
	$sname = $_POST["Lname"];
	$user = $_POST["type"];
	$email = $_POST["email"];
	$passw = $_POST["pwd"];
	$address = $_POST["add"];
	$address2 = $_POST["add2"];
	$city = $_POST["city"];
	$state = $_POST["place"];
	$code = $_POST["code"];
	$country = $_POST["country"];
	$cname = $_POST["pay"];
	$card = $_POST["no"];
	$ex = $_POST["day"];
	$cvc = $_POST["cvc"];
		
	$sql = "insert into customer (ID,First_Name,Last_Name,Type,Email,Password,Address1,Address2,City,State_Province,Postal_ZipCode,Country,CH_Name,C_Number,Expiry,CVC,Status)values('','$fname','$sname','$user','$email','$passw','$address','$address2','$city','$state','$code','$country','$cname','$card','$ex','$cvc','0')";
	
	//execute the query
	if(mysqli_query($conn,$sql)){
		header("location:home.php");
		echo"<script> alert ('Record Inserted Successfully')</script>";
		
	}
	else{
		echo "<script> alert ('Error !')</script>";
	}
	
	//close the connection
	$conn->close();
	?>