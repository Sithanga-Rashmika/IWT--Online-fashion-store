<?php 
    session_start();
    
    $con = mysqli_connect("localhost" , "root" , "" , "abdatabase");// connect sql database

    $fetch = "SELECT Image, Item_Name, Price FROM item WHERE Category='gents'";
    if($con->query($fetch)){
        $result=$con->query($fetch); 
    }
    else{
        echo "connetion Failed";
    }

    function loadItems(){
		global $result;
			while($count_row = mysqli_fetch_assoc($result)){
            
				$path=$count_row["Image"];					//asign for the new variable
				$Name = $count_row['Item_Name'];
				$Prz = $count_row['Price'];
                
				echo "
					<div class= 'container_img'>

                    <img src = '$path' class ='add' alt='item image'>
                    <a href='purchase.php'><button class='bt'>Buy Now </button></a>
                    <div class='desc'>
                        <p'>$Name</p>
                        <p>LKR:.$Prz</p>
                    </div>

                </div>";
				
			}
		}
?>


<html>
<head>
<title>men</title>
		<link rel="stylesheet" href="men.css">
        <link rel="stylesheet" href="./style/header.css">
        <link rel="stylesheet" href="./style/footercss.css">	
    </head>
    <body>
	<?php include_once('./includes/header.php');?>

<div class="imgrow" >	
	<?php loadItems(); ?>
	<div class= "container_img">
		<img src = "mens_01.png" class ="add" alt="item image">
		<a href="purchase.php"><button class="bt">Buy Now </button></a>
		
		<div class="desc">
		<p name ="para">JOBBS COLLAR JACKET</p>
		<p>LKR:1690.00</p>
		</div>
	
	</div>
	<div class= "container_img">
		<img src = "men_2.jfif" class ="add" alt="item image">
		<a href="purchase.php"><button class="bt">Buy Now </button></a>
        
		<div class="desc">
		<p name ="para">LEONARDO FOR MALE MENS FORMAL SHIRT</p>
		<p>LKR:4290.00</p>
		</div>
	</div>
	
	<div class= "container_img">

		<img src = "men_3.jpg" class ="add" alt="item image">
		<button href = "Purchase.php"class="bt">Buy Now </button>
		
		<div class="desc">
		<p name ="para">JOBBS MENS T-SHIRT WITH COLLAR</p>
		<p>LKR:1390.00</p>
		</div>
	</div>
	
	<div class= "container_img">

		<img src = "men_4.png" class ="add" alt="item image">
		<button href = "Purchase.php"class="bt">Buy Now </button>
		
		<div class="desc">
		<p name ="para">JOBBS SELECT MENS PRINTED CASUAL SHIRT</p>
		<p>LKR:1690.00</p>
		</div>
	</div>
	
	
	<div class= "container_img">

		<img src = "men_5.png" class ="add" alt="item image">
		<button href = "Purchase.php"class="bt">Buy Now </button>
		
		<div class="desc">
		<p name ="para">VANTAGE UBER MENS FORMAL SHIRT</p>
		<p>LKR:2290.00</p>
		</div>
	</div>
	
	<div class= "container_img">

		<img src = "men_6.jpeg" class ="add" alt="item image">
		<button href = "Purchase.php"class="bt">Buy Now </button>
		
		<div class="desc">
		<p name ="para">JOBBS MENS CASUAL TROPICAL PRINTED SHIRT</p>
		<p>LKR:1690.00</p>
		</div>
	</div>
	
	<div class= "container_img">

		<img src = "men_7.jpeg" class ="add" alt="item image">
		<button href = "Purchase.php"class="bt">Buy Now </button>
		
		<div class="desc">
		<p name ="para">AMAZING LANKA WORLD ELEPHANT DAY UNISEX T-SHIRT</p>
		<p>LKR:1090.00</p>
		</div>
	</div>
	
	 	<div class= "container_img">

		<img src = "men_8.jpg" class ="add" alt="item image">
		<button href = "Purchase.php"class="bt">Buy Now </button>
		
		<div class="desc">
		<p name ="para">GIOHUDSON TREND MENS CASUAL CHECKED SHIRT</p>
		<p>LKR:1990.00</p>
		</div>
	</div>
	
		<div class= "container_img">

		<img src = "men_9.jpg" class ="add" alt="item image">
		<button href = "Purchase.php"class="bt">Buy Now </button>
		
		<div class="desc">
		<p name ="para">GIOHUDSON TREND MENS CASUAL CHECKED SHIRT</p>
		<p>LKR:1790.00</p>
		</div>
	</div>
	
		<div class= "container_img">

		<img src = "10.jpg" class ="add" alt="item image">
		<button href = "Purchase.php"class="bt">Buy Now </button>
		
		<div class="desc">
		<p name ="para">JOBBS SELECT MENS PRINTED CASUAL SHIRT</p>
		<p>LKR:1690.00</p>
		</div>
	</div>
	
		<div class= "container_img">

		<img src = "men_11.jpg" class ="add" alt="item image">
		<button href = "Purchase.php"class="bt">Buy Now </button>
		
		<div class="desc">
		<p name ="para">JOBBS MENS FORMAL SHIRT</p>
		<p>LKR:1890.00</p>
		</div>
	</div>
	
		<div class= "container_img">
		<img src = "men_12.jpg" class ="add" alt="item image">
		<button href = "Purchase.php"class="bt">Buy Now </button>
		
		<div class="desc">
		<p name ="para">JOBBS MENS CHECKED CASUAL SHIRT</p>
		<p>LKR:1690.00</p>
		</div>
	</div>
	
	</div>	
	
	<?php include_once('./includes/footer.php');?>

</body>
<html>