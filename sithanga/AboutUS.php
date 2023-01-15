
<!-- data insert into the database-->
<?php
	$user='';
	$follow='';
	session_start();
	if(isset($_SESSION["USER"])){
		$user=$_SESSION["USER"];
		$follow=$_SESSION["follow"];
	}

	echo $user, $follow;
	if(isset($_POST['submit'])){
		
		$Name =$_POST['fullname'];
		$Email =$_POST['Email'];
		$Contact_No =$_POST['ContactNO'];
		$Description =$_POST['subject'];
		
		$connection = mysqli_connect("localhost" , "root" , "" , "abdatabase");
		
		 if ($Description == NULL){
			echo"<script> alert(' please enter the feedback ') </script>"; 
			
			}else{
				//check connection
				if(mysqli_connect_errno ()) {
				die("Database connection failed " . mysqli_connect_error());
			}
			// insert data into data base
			$sql = "INSERT INTO feedback (Full_name , Email  , Contact_no  , Description )VALUES('$Name' , '$Email' , '$Contact_No' , '$Description')";
		
			//execute the quary
			if(mysqli_query($connection,$sql)){
			
				echo"<script> alert('Thank you for your Feedback, your response successfully recorded!!!') </script>"; 
			}else{
			
				echo"<script>alert('error!!!!')</script>";
			}
	
			//connection close
	
				mysqli_close($connection);
		}
	}// end of the data base part
			

	//feedback display data retrive part

	$connection = mysqli_connect("localhost" , "root" , "" , "abdatabase");
	$query = "SELECT Full_name,Description FROM feedback";
	
	$result = mysqli_query($connection,$query);

	if($result){
		$comments = mysqli_num_rows($result); //check the quantity of row/records of database
		
		$table = '<table class = "comtable">';
		$table .= '<tr><th>Name</th><th>Comments</th></tr>';
		
		while($record = mysqli_fetch_assoc($result)){// get details from the database
			$table .= '<tr>';
			$table .= '<td width=250px>' . $record['Full_name'] . '</td>';
			$table .= '<td>' . $record['Description'] . '</td>';
			$table .= '</tr>';
		}

		$table .= '</table>';
	}


	//follower 
/*
	$sql2 = "SELECT Status,Email FROM customer";
	$output = mysqli_query($connection,$sql2);
	
	if($output){
		while($fields = mysqli_fetch_assoc($output)){// get details from the database
			$status = $fields['Status'];
			$Smail  = $fields['Email'];
		}
*/
	

	
	//this is the function of button enable disable
		function swap(){
			global $follow;
				if($follow==0){
				   echo "<script> document.getElementById('btUnfollow').disabled=true; </script>";
				}
				elseif($follow==1){
				   echo "<script> document.getElementById('btfollow').disabled=true; </script>";
				}
			}
		
			
			
			if(isset($_POST["follow"])){
			  	$fllw=1;
			  	$updateFollwSts="UPDATE customer SET Status = '$fllw' WHERE Email = '$user'";
				if($connection->query($updateFollwSts)){
					$_SESSION["follow"]=1;
					echo "Followed";
					header('Location:AboutUS.php');
				}
			}
			if(isset($_POST["unfollow"])){
			  	$fllw=0;
			  	$updateFollwSts="UPDATE customer SET Status = '$fllw' WHERE Email = '$user'";
				  if($connection->query($updateFollwSts)){
					$_SESSION["follow"]=0;
					echo "Unfollowed";
					header('Location:AboutUS.php');
				}
			}
			/////////keep in touch
				
			///read
			
			$sql3 = "SELECT COUNT(Email) AS FOLLOWERS FROM customer WHERE Status ='1'";
			if($connection->query($sql3)){
				$fllwlist=$connection->query($sql3);
				while ($row=$fllwlist->fetch_assoc()) {
					$followers=$row["FOLLOWERS"];
				}
				echo $followers;
			}
			else{
				$followers=0;
			}
			 //check the quantity of row/records of database
?>


<html>
<head>

<title>About US</title>
	<link rel="stylesheet" href="./style/css1.css">
	


</head>
<body>
	<!--header-->
	<?php include_once('./includes/header.php');?>
	


<!--body-->
	<div class="prodiv">
		<img src ="./images/logoAB1.png" class ="profile" alt="profilepic">
		<form method ="post">
			<input type="submit" name="follow" id="btfollow" class="btfollow" value="+ FOLLOW" >
			<input type="submit" name="unfollow" id="btUnfollow" class="btUnfollow" value="- UNFOLLOW">
			<?php swap(); ?>
		</form>
		
		<div style ="margin-top:8px ; margin-left:60px;">FOLLOWERS : <?php echo $followers; ?>
			
		</div>
	</div>
	
	
	<h2 style="margin-left:30px"><br><br> About Us</h2>
	<div class="abbody">
	<div><br><br><br><br>
	<p> American blues is currently the USA’s largest online fashion store with over 50 products and we are 
	committed to delivering the most personalized fashion experience right to your favourite device. American blues 
	aims to give you everything that you need to make you look & feel good. Let us be your new online shopping addiction!</p>
	
	<p>We are on a mission of empowering both mens and women, worldwide by giving them confidence in their own sense of fashion and style. AmericanBlue is a bold,
	progressive fashion brand inspired by real realistic aims and objectives. Everything we design, create and promote is influenced by our customers
	as well as with positive global influences like social media, street style, and popular cultures, creating a brand which encompasses everything it 
	means to be mens and women on the go, in dynamic the world today.</p>
	</div>
	<br>
	<img src ="./images/add3.jpg" class ="abimg" alt="test pic">
	
	
	<br><br>
	<div style="color:black ; text-align:justify ; padding-right:15px" float:right >
	<h3>Our Vision</h3>
	<p>To be recognised by every customer as the most preferred fashion chain in the USA!</p>
	
	<h3>Our Objective </h3>
	<p>The objective of American blues is to work as one cohesive unit and produce the best line
	of clothing in the fashion industry while providing a platform for employees to work at their potential in order 
	to serve our customers better.</p>
	
	<h3>Our Mission</h3>
	<p>Our Mission is to provide society with superior products and services, matched with affordable prices through the 
	development of both local and international brands. We also strive to improve the lifestyles of our customers through our clothing.
	Our services are built upon the foundation of customer satisfaction whilst providing our own employees with meaningful work and opportunities.</p>
	</div>
	<br><br><br><br>
	
<h3 class="feedbackhead">Customer Feedback!</h3>

<div class="feedback">
  <form method="POST">
    <div title="Full name">
      
        <label for="fname" class ="lable">Full Name</label>
		<input type="text" class="details" name="fullname" placeholder="Your name..">
     
    </div><br><br>
    <div title="Email">
    
        <label for="lname" class ="lable">Email</label>
		<input type="text" class="details" name="Email" placeholder="Your email..">
     </div><br><br>
    <div title="Contact No">
		<label for="contactNo" class ="lable">Contact No</label>
		<input type="text" class="details" name="ContactNO" placeholder="Your contact NO..">
    </div><br><br>
    <div title="subject">
		<label for="subject" class ="lable">Subject</label><br>
		<textarea  class="details1" name="subject" placeholder="Write something.."></textarea>
     </div><br><br>
    <input type="submit" name="submit" class="sub" value="Submit">
    </div><br><br>
  </form>
</div>
<br>
<div class = "commentdiv1"><?php echo "<b>Comments {$comments} </b> <br>" ?></div>
<div class="commentdiv2"><?php echo $table; ?></div>



<!--footer--> 
<?php include_once('./includes/footer.php');?>
</body>
<html>