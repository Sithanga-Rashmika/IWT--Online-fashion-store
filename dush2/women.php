<?php 
    session_start();
    
    $con = mysqli_connect("localhost" , "root" , "" , "abdatabase");// connect sql database

    $fetch = "SELECT Image, Item_Name, Price FROM item WHERE Category='ladies'";
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

	<!--header-->
	
<html>
    <head>
	<title>women</title>
		<link rel="stylesheet" href="women.css">
         <link rel="stylesheet" href="./style/header.css">
        <link rel="stylesheet" href="./style/footercss.css">
    </head>
    <body>
	
	<?php include_once('./includes/header.php');?>
	
<div class="imgrow" >
	
	<?php loadItems(); ?>
	<div class= "container_img">
    
		<img src = "women_1.jpg" class ="add" alt="item image">
		<a href="purchase.php"><button class="bt">Buy Now </button></a>
		<div class="desc">
		<p name ="para">KEY DETAIL FRILLED WW TOp</p>
		<p>LKR:3290.00</p>
		</div>
	
	</div>
	<div class= "container_img">

		<img src = "women_2.jpg" class ="add" alt="item image">
		<a href="purchase.php"><button class="bt">Buy Now </button></a>
		<div class="desc">
		<p name ="para">WAIST BUCKLE WW DRESS</p>
		<p>LKR3790.00</p>
		</div>
	
	</div>
	<div class= "container_img">

		<img src = "women_3.jfif" class ="add" alt="item image">
		 <a href="purchase.php"><button class="bt">Buy Now </button></a>
		<div class="desc">
		<p name ="para">FLIRTY FILLY TOP</p>
		<p>LKR:3200.00</p>
		</div>
	
	</div>
	<div class= "container_img">

		<img src = "women_4.jpg" class ="add" alt="item image">
		<a href="purchase.php"><button class="bt">Buy Now </button></a>
		<div class="desc">
		<p name ="para">NEVER CHANGED WW DRESS</p>
		<p>LKR:3100.00</p>
		</div>
	
	</div>
	
	<div class= "container_img">

		<img src = "women_5.jpg" class ="add" alt="item image">
		<a href="purchase.php"><button class="bt">Buy Now </button></a>
		<div class="desc">
		<p name ="para">COMBO IN WW TOP</p>
		<p>LKR:3300.00</p>
		</div>
	
	</div>
	
	<div class= "container_img">

		<img src = "women_6.jpg" class ="add" alt="item image">
		<a href="purchase.php"><button class="bt">Buy Now </button></a>
		<div class="desc">
		<p name ="para">LADY LOVER</p>
		<p>LKR:3000.00</p>
		</div>
		
	</div>
	
	<div class= "container_img">

		<img src = "women_7.jpg" class ="add" alt="item image">
		<a href="purchase.php"><button class="bt">Buy Now </button></a>
		<div class="desc">
		<p name ="para">KEY DETAIL FRILLED WW TOP</p>
		<p>LKR:4590.00</p>
		</div>
		
	</div>
	
	
	<div class= "container_img">

		<img src = "women_8.jpg" class ="add" alt="item image">
		<a href="purchase.php"><button class="bt">Buy Now </button></a>
		<div class="desc">
		<p name ="para">BEAUTY BLING DRESS</p>
		<p>LKR:552500</p>
		</div>
		
	</div>
	
	<div class= "container_img">

		<img src = "women_9.jpg" class ="add" alt="item image">
		<a href="purchase.php"><button class="bt">Buy Now </button></a>
		<div class="desc">
		<p name ="para">FLOWY LOVE</p>
		<p>LKR:3390.00</p>
		</div>
		
	</div>
	
	<div class= "container_img">

		<img src = "women_10.jpg" class ="add" alt="item image">
		<a href="purchase.php"><button class="bt">Buy Now </button></a>
		<div class="desc">
		<p name ="para">MID WAIST HEM SLIT JEAN</p>
		<p>LKR:4090.00</p>
		</div>
		
	</div>
	
	<div class= "container_img">

		<img src = "women_12.jpeg" class ="add" alt="item image">
		<a href="purchase.php"><button class="bt">Buy Now </button></a>
		<div class="desc">
		<p name ="para">PRETTY LOVE DRESS</p>
		<p>LKR:4250.00</p>
		</div>
		
	</div>
	
	<div class= "container_img">

		<img src = "women_11.jpeg" class ="add" alt="item image">
		<a href="purchase.php"><button class="bt">Buy Now </button></a>
		<div class="desc">
		<p name ="para">HIGH WAIST JEAN</p>
		<p>LKR:4450.00</p>
		</div>
	</div>
	
	
</div>	
<?php include_once('./includes/footer.php');?>
</body>
<html>