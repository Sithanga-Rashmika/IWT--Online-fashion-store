<?php
require 'config.php';

$code = $_POST["ItemCode"];
$color = $_POST["ItemColor"];
$qty = $_POST["Quantity"];

$sql = "INSERT INTO purchase (Item_code,Item_color,Quantity) VALUES ('$code','$color',$qty)";

if($conn->query($sql)){
	echo "<script> alert ('Record added successfully!!')</script>";
}
else{
	echo "<script> alert('ERROR:Could not able to execute the query.')</script>";
	echo $sql;
}
?>