<html>
<body>

<?php
	session_start();
	if(isset($_POST["submit"])){
	
		$servername= "localhost";
		$username= "root";
		$password= "";
		$dbname= "abdatabase";

		$conn = new mysqli ($servername,$username,$password,$dbname);

		$eemail=$_POST["email"];
		$ppass=$_POST["pass"];
		$ttype=$_POST["type"];

		$sql = "SELECT * FROM customer WHERE Email='$eemail' and Type='$ttype'";
		$result= $conn->query($sql);
		while($row=$result->fetch_assoc()){
			$email=$row["Email"];
			$follow=$row["Status"];
			if($row["Email"]==$eemail and $row["Password"]==$ppass){
				$_SESSION["USER"] = $email;
				$_SESSION["follow"] = $follow;
				echo $email, $follow;
				echo "valid";
				include "home.php";
				break;
			}
			else {
				echo "invalid";
			}
		}		
	}
	$conn->close();

?>
</body>
</html>