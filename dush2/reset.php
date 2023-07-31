
<html>
<head>

	<div class="Main">
            <div class="Image01">
                <img class="Logo" src="home/logo.png" />
            </div>

            <div class="Image02">
                <img class="SignIn" src="home/Sign In.png" />
            </div>
<br>

            <div class="Button">
                <form action="login2.php">
                    <p><button type="submit">Log In</button></p>
				</form>
					<br>
					<form action="create2.php">
                    <p><button type="submit">Sign Up</button></p>
					</form>
					<br>
					<form action="logount.php">
					<p><button type="submit">Sign Out</button></p>					
					</form>
            </div>
        </div>




<nav class="nav-area">
		<ul>
			<li>
				<a href="#">Home</a>
			</li>
			<li>
				<a href="#">Category</a>
				<ul>
					
					
						<li>
							<a href="men.php">MEN</a>
						</li>
						
						<li>
						<a href="women.php">Women</a>
						</li>
			
						<li>
						<a href="kids.php">Kids</a>
						</li>		
				</ul>
			
			
			</li>
			<li>
				<a href="MyOrders.php">MY Orders</a>
			</li>
			<li>
				<a href="../sithanga/AboutUS.php">About Us</a>
			</li>
			<li>
				<a href="../sithanga/ContactUs.php">Contact Us</a>
			</li>
			
			<li>
				<a href="#">MANAGE PRODUCT</a>
				<ul>
					<li><a href="../sithanga/AddItem.php">ADD NEW ITEM</a> </li>
					<li><a href="#">DELETE ITEM</a> </li>
				</ul>
			</li>
		</ul>
			
	</nav>
<link rel="stylesheet" type="text/css" href="reset3.css">
<link rel="stylesheet" href="../sithanga/style/header.css">
 <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
 <link rel="stylesheet" href="../sithanga/style/footercss.css">

<script src="myScript.js" type="text/javascript"></script>
</head>
<body>  
<?php $email=$newp="" ?> 
<form action="update.php" method="post">
<center>
<div id="box">
<h1><b>RESET PASSWORD</h1>
            <i>Enter email : <input type="text" class="textSize" name="email" value="<?php echo $email;?>" required /><br/><br/>
            
       
            Enter New password : </i><input type="password" class="textSize" name="newp"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,}" value="<?php echo $newp;?>" required />
			<p style="font-size:14px;">( Must contain at least one number, one uppercase, lowercase letter and 5 or more characters )</p></br>
			<input type="submit" id="button" value="Confirm Password"><b></center>
</form>

</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<!--footer!-->
		<footer class="footer">
  	 <div class="container">
  	 	<div class="row">
		<img src="home/logo.png" class="logof" alt="footer logo">
  	 		<div class="footer-col">
  	 			
  	 			<ul class="list">
  	 				<li><a href="">New design </a></li>
					<li><a href="../sithanga/terms.php">Terms & conditions</a></li>
					<li><a href="../sithanga/privacy.php">Privacy policy</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			
  	 			<ul class="list">
  	 				<li><a href="">Customer Login</a></li>
					<li><a href="../sithanga/AboutUS.php">Contact us</a></li>
					<li><a href="../sithanga/ContactUs.php">About us</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			
  	 			<ul class="list">
  	 				<li class ="text">Contact Us</li>
					<li class ="text">+111-451-2546</li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
			<ul class="list">
  	 			<li class ="text">Follow Us</li>
			</ul>
  	 			<div class="social-links">
  	 				<a href="https://www.facebook.com/" target="blank"><i class="fab fa-facebook-f"></i></a>
  	 				<a href="https://twitter.com/" target="blank"><i class="fab fa-twitter"></i></a>
  	 				<a href="https://www.instagram.com/" target="blank"><i class="fab fa-instagram"></i></a>
  	 				<a href="https://lk.linkedin.com/" target="blank"><i class="fab fa-linkedin-in"></i></a>
  	 			</div>
  	 		</div>
			<ul class="list">
  	 				<li class ="text">American blue Fashion store</li>
					<li class ="text">35 th floor ,Fulton St,</li>
					<li class ="text">New York,USA</li>
  	 		</ul>
  	 	</div>
		
		<ul class="list">
		<li class ="text" style="margin-left:132px ; margin-bottom:10px">We accepted</li>
		</ul>
		<div class="creditlogo">
		<img alt="Credit Card Logos" title="Credit Card Logos" src="http://www.credit-card-logos.com/images/multiple_credit-card-logos-2/credit_card_logos_26.gif"  />
		<!--i copied this code from http://www.credit-card-logos.com/ web site-->
		</div>
	</div>
  </footer>	


</body>
</html>