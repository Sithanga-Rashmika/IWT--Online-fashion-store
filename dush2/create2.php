
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










<link rel="stylesheet" type="text/css" href="createStyle.css">
<link rel="stylesheet" href="../sithanga/style/header.css">
 <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
 <link rel="stylesheet" href="../sithanga/style/footercss.css">

<script src="myScript.js" type="text/javascript"></script>
</head>
<body>

<form action="create.php" method="POST" onsubmit="return !!(checkPassword() & checkCode() & cardCheck() & cvcCheck())">
<div id="box" style="margin-left:1180px;">
<h1><i><b>Create<br> Your American Blue Account</h1>
          
		
		First Name : <input type="text" class="font" name="Fname" placeholder="First" required /><br/><br/>
		  
		  <table >
              <tr><td><i><b>User Type : </td>
			  <td><i><b>
              <input type="radio" name="type"  value="cus">Customer </td> </tr>
			  <tr>
			  <td></td>
			  <td><i><b>
			  
              <input type="radio"  name="type" value="ad"> Admin </td> </tr>
			  <tr>
			  <td> </td>
              <td><i><b>
              <input type="radio" name="type" value="emp">Employee</td> </tr></table><br/><br/>
			  
			
            
            
            Last Name : <input type="text" class="font" name="Lname" placeholder="Last" required /><br/><br/>
            
            Email Address : <input type="text" class="font" name="email" placeholder="abc@gmail.com" pattern="[a-z0-9.%+-]+@[a-z0-9.-]+\.[a-z]{2,3}" required /><br/><br/>
            
       
            Create a password : <input type="password" class="font" name="pwd" id="pwd" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,}"  required />
			<p style="font-size:14px;">( Must contain at least one number, one uppercase, lowercase letter and 5 or more characters )</p><br/>
            
            
            Re-enter password : <input type="password" class="font" name="confirm" id="confirm"  required /><br/><br/>
            
            
            Shipping Address :<textarea placeholder="Street Address" name="add" cols="20" required /></textarea><br/><br/>
           
            
            Alternate Address : <textarea placeholder="Street Address 2" name="add2" cols="20" /></textarea>
            <table>
			<tr><td>
           <input type="text" class="font" name="city" placeholder="City" required /></td>
            <td width="250px"><input type="text" class="font" name="place" placeholder="State/Province" required /></td><br/><br/>
            </tr><tr>
			<td width="250px"><input type="text" class="font" id="code" name="code" placeholder="Postal/ Zip code" required /></td>
                      
                           <td> <select class="font" name="country">
																  
									<option value="Afghanistan">Afghanistan</option>
									<option value="Akrotiri">Akrotiri</option>
									<option value="Albania">Albania</option>
									<option value="Algeria">Algeria</option>
									<option value="American Samoa">American Samoa</option>
									<option value="Andorra">Andorra</option>
									<option value="Angola">Angola</option>
									<option value="Anguilla">Algeria</option>
									<option value="Argentina">Argentina</option>
									<option value="Aruba">Aruba</option>
									<option value="Australia">Australia</option>
									<option value="Austria">Austria/option>
									<option value="Bahamas">Bahamas</option>
									<option value="Bahrain">Bahrain</option>
									<option value="Bangladesh">Bangladesh</option>
									<option value="Barbados">Barbados</option>
									<option value="Belgium">Belgium</option>
									<option value="Brazil">Brazil</option>
									<option value="Bulgaria">Bulgaria</option>
									<option value="Canada">Canada</option>
									<option value="China">China</option>
									<option value="Colombia">Colombia</option>
									<option value="Cyprus">Cyprus</option>
									<option value="Denmark">Denmark</option>
									<option value="Europa Island">Europa Island</option>
									<option value="Finland">Finland</option>
									<option value="France">France</option>
									<option value="Georgia">Georgia/option>
									<option value="Germany">Germany</option>
									<option value="Greenland">Greenland</option>
									<option value="Hong Kong">Hong Kong</option>
									<option value="India">India</option>
									<option value="Indonesia">Indonesia</option>
									<option value="Ireland">Ireland</option>
									<option value="Israel">Israel</option>
									<option value="Italy">Italy</option>
									<option value="Jamaica">Jamaica</option>
									<option value="Japan">Japan/option>
									<option value="Korea, North">Korea, North</option>
									<option value="Korea, South">Korea, South</option>
									<option value="Lebanon">Lebanon</option>
									<option value="Malaysia">Malaysia</option>
									<option value="Maldives">Maldives</option>
									<option value="Mexico">Mexico</option>
									<option value="Nepal">Nepal</option>
									<option value="Netherlands">Netherlands</option>
									<option value="New Zealand">New Zealand</option>
									<option value="Norway">Norway/option>
									<option value="Pakistan">Pakistan</option>
									<option value="Philippines">Philippines</option>
									<option value="Qatar">Qatar</option>
									<option value="Russia">Russia</option>
									<option value="Saudi Arabia">Saudi Arabia</option>
									<option value="Singapore">Singapore</option>
									<option value="South Africa">South Africa</option>
									<option value="Spain">Spain</option>
									<option value="Sri Lanka">Sri Lanka</option>
									<option value="Singapore">Singapore</option>
									<option value="Switzerland">Switzerland</option>
									<option value="Thailand">Thailand</option>

                                </select></td></tr> </table><br/><br/>
		
            <center><i><b><h2>Payment Details<h2></center><br>
			Card Holders' Name: <input type="text" name="pay" class="font" placeholder="Cardholder's Number" required /><br/><br/>
            
            Card Number : <input type="text" name="no" id="no" class="font" placeholder="Card Number" required /><br/><br/>
            <table>
			<tr>
            <td><i><b>Expiry <input type="date" class="font" name="day" required /></td>
			<td><input type="text" class="font" id="cvc" name="cvc" placeholder="cvc" required /></td></tr></table>
			<br/>
		 
			<br/>
            
            <input type="checkbox">Keep me signed in<br/><br/>
           
            <input type="checkbox">Email me about Rollbacks,special pricing,hot new items,gift ideas and more.<br/><br/>
            
            <div>By clicking Create Account,you acknowledge you have read and agreed to our <a href="">Terms of Use</a> and  <a href="">Privacy Policy</a></b> .<br/><br/>
            <br/><br/>
			</div>
			
			<center><input type="submit" value="Create Account" id="button2"></center><br>
			<center><input type="reset" id="button1" value="Reset"></center>
            
            
            </form>
        
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<?php include_once('../sithanga/includes/footer.php');?>
</body>
</html>