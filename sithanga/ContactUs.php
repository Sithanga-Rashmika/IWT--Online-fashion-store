<?php
	$status ='';
		if(isset($_POST['submit'])){ //check availability of submit button
		
		$Name =$_POST['fullname'];			////assign form fields name into the new variables
		$Email =$_POST['Email'];
		$Contact_No =$_POST['ContactNO'];
		$Inquiry =$_POST['subject'];
		
		if ($Inquiry == NULL){
			echo"<script> alert(' please enter the inquiry !!! ') </script>"; //if inquiry field null value its display an error massage
			
		}else{
		
		$to	 		  = 'rash31bussiness@gmail.com';					//this is the mail address when we fill the inquiry form and submit deta will be sent
		$mail_subject = 'Message from American Blue Website';		//subject of mail
		$email_body   = "Message from Contact Us Page of the Website: <br>";	//  body content
		$email_body   .= "<b>From email:</b> {$Email} <br>";
		$email_body   .= "<b>From:</b> {$Name} <br>";
		$email_body   .= "<b>Subject:</b> {$mail_subject} <br>";
		$email_body   .= "<b>Inquiry:</b><br>" . nl2br(strip_tags($Inquiry));

		$header       = "From: {$Email}\r\nContent-Type: text/html;";

		$verify_mail= mail($to, $mail_subject, $email_body, $header);			//check succes
		
		if($verify_mail == true){
			$status = '<div class = "success">your inquiry sent successsfully!!! </div>';
			}else{
				$status = '<div class = "error">Error: something went wrong inquiry was not sent!!! </div>';
				}
			}
		}
?>		
		
		
<html>
<head>

<title>Contact Us</title>
<link rel="stylesheet" href="./style/CSS2.css">


</head>
<body>

<!--header-->
	<?php include_once('./includes/header.php');?>

	<!--body-->
	
	<div class="slide"> <!--this is the images of slider-->
		<div id="slider">
			<figure>
			<img src="./images/add1.jpg" alt="banner add" >
			<img src="./images/add2.jpg" alt="banner add" >
			<img src="./images/add10.jpg" alt="banner add">
			<img src="./images/add9.jpg" alt="banner add" >
			<img src="./images/add1.jpg" alt="banner add">
			</figure>
		</div>
		
	</div>

	
	
	</div>
	<br>
	<h2 style="padding-left:30px"> Contact Us</h2>
	<br><br>
	<div class="setrow">
  	 		
	<img src="./images/tele.jpg" class="tele"><!--these are  the icons-->
	<img src="./images/mail.png" class="mail">
	<img src="./images/location.png" class="loca">
	</div>
	<div class="setrow1">
	<p class="tele1">Genaral - +111-451-2546<br>Whatsapp - +111-451-5546</p>
	<a href="https://accounts.google.com" target="blank"class="tele1">infoAmericanblues@gmail.com</a>
	<p class="tele1">American blue Fashion store<br>35 th floor ,Fulton St,<br>New York,USA</p>
	</div>
	<br><br><br>
	
	
	<div class="container1"><!--inquiry form-->
		<div class="item item1">
		<h3 class="inquiryhead"> Inquirie Form!</h3>
		<?php echo $status; ?> <!--display error massage if form is not submitted-->
		<div style="padding-left:30px"class="inquiry">
		<form method="post">
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
		<textarea id="subject" class="details1" name="subject" placeholder="type your inquiry.."></textarea>
		</div><br><br>
		<input type="submit" name="submit" class="sub" value="Submit">
		</form>
		</div>
		
		</div><!--item1 div-->
		
		<div class="item item2"><!--this is the blink image-->
			<img src="./images/textpic1.jpg" class="textpic">
			<br><br><br><br>
			<p style="text-align:justify; padding-left:30px">At American blues, we strive for perfection in<br>
			   Customer Satisfaction, so do not be afraid to call<br> 
			   us or drop an email if you have any inquiries!</p>
		</div>
		
		<div class="item item3">
		</div>
	</div><!--container1 end-->
	

<!--footer-->
<?php include_once('./includes/footer.php');?>
</body>
<html>