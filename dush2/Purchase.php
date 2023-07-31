<!DOCTYPE html>
<html>
<head>

	<!--header , footer css-->
	
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
	<link rel ="stylesheet" type="text/css" href ="header and footer.css">
	<title>About us</title>
	
	<style>
		.purchase{
			background-color:black;
			width:500px;
			border-radius: 5px;
			padding: 20px;
		}
	</style>
		
</head>
<body>




<!--start header part-->
<!--header01!-->	
	
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
					<form action="logout.php">
					<p><button type="submit">Sign Out</button></p>					
					</form>
            </div>
        </div>




<nav class="nav-area">
		<ul>
			<li>
				<a href="home.php">Home</a>
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
						<a href="kid.php">Kids</a>
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
					<li><a href="Delete.php">DELETE ITEM</a> </li>
				</ul>
			</li>
		</ul>
			
	</nav>
	
<!--end of this header header part-->




<br><br><br>
<!--purchase form-->

<center>
<form method="post" class="purchase" action="purchaseItem.php">

	<font color="white">Enter Item code:</font><br>
		<input type="text" name ="ItemCode" /><br>
	<font color="white">Enter Item color:</font><br>
		<input type="text" name ="ItemColor" /><br>
	<font color="white">Enter Quantity:</font><br>
		<input type="number" name="Quantity" /><br><br>
	<input type="submit" value="Confirm the order" style="background-color:#00b36b; color: white;">
	
	
</form>
</center>
<br><br><br>
<!--purchase form end-->

	<hr class ="new4">

	
<!--footer-->	
	<footer class="footer">
  	 <div class="container">
  	 	<div class="row">
		<img src="home/logo.png" class="logof" alt="footer logo">
  	 		<div class="footer-col">
  	 			
  	 			<ul class="list">
  	 				<li><a href="home.php">New design </a></li>
					<li><a href="../sithanga/terms.php">Terms & conditions</a></li>
					<li><a href="../sithanga/privacy.php">Privacy policy</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			
  	 			<ul class="list">
  	 				<li><a href="login2.php">Customer Login</a></li>
					<li><a href="../sithanga/ContactUs.php">Contact us</a></li>
					<li><a href="../sithanga/AboutUS.php">About us</a></li>
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
