<html>
<body>
<?php
$eemail="";
$ppass="";

$eemail=$_POST["email"];
$ppass=$_POST["newp"];

$servername= "localhost";
$username= "root";
$password= "";
$dbname= "abdatabase";

$conn = new mysqli ($servername,$username,$password,$dbname);

$sql = "SELECT * FROM customer WHERE Email='$eemail'";
$result= $conn->query($sql);
if($result-> num_rows != 1){
	echo "<script> alert('Invalid User') </script>";
    }

$sql = "UPDATE customer SET Password='$ppass' WHERE Email='$eemail'";

if ($conn->query($sql) === TRUE){
		echo "<script> alert('Password Updated Successfully!') </script>";
    }
else{ 
	   echo "<script> alert('Error!') </script>";
    }
$conn->close();

?>
</body>
</html>