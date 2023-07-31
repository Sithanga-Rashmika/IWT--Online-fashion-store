<?php
require 'config.php';

$Icode = $_POST["Itemcode"];
$Iqty = $_POST["quantity"];
$Ireus = $_POST["Reason"];

$sql = "delete from purchase where Item_code = '$Icode'";

if($conn->query($sql)){
	echo "<script> alert ('Record deleted successfully!!')</script>";
}
else{
	echo "<script> alert('ERROR:Could not able to execute the query.')</script>";
	echo $sql;
}
?>