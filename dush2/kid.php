<?php 
    session_start();
    
    $con = mysqli_connect("localhost" , "root" , "" , "abdatabase");// connect sql database

    $fetch = "SELECT Image, Item_Name, Price FROM item WHERE Category='kids'";
    if($con->query($fetch)){
        $result=$con->query($fetch); 
    }
    else{
        echo "connetion Failed";
    }

    function loadItems(){
		global $result;
			while($count_row = mysqli_fetch_assoc($result)){
				$path = $count_row["Image"];					//asign for the new variable
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
	<title>kids</title>
        <link rel="stylesheet" href="kid.css">
         <link rel="stylesheet" href="./style/header.css">
        <link rel="stylesheet" href="./style/footercss.css">
    </head>
    <body>
       <?php include_once('./includes/header.php');?>
    <div class="imgrow" >

        <?php loadItems(); ?>

        <div class= "container_img">
                <img src="kid_1.jpg" class="add" alt="item image">
                <a href="purchase.php"><button class="bt">Buy Now </button></a>
                
                <div class="desc">
                    <p name ="para">BOYS GAP CHECKED GRUNGE SHIRT</p>
                    <p>LKR:890.00</p>
                </div>
        
        </div>
	
	
        <div class= "container_img">

            <img src = "kid_2.jfif" class ="add" alt="item image">
            <a href="purchase.php"><button class="bt">Buy Now </button></a>
            <div class="desc">
            <p name ="para">BUG JUNIOR BOYS LINEN SHIRT</p>
            <p>LKR:1190.00</p>
            </div>

        </div>

        <div class= "container_img">

            <img src = "kid_3.jfif" class ="add" alt="item image">
             <a href="purchase.php"><button class="bt">Buy Now </button></a>
            <div class="desc">
            <p name ="para">AMY GIRLS BUTTERFLY SLEEVE BLOUSE</p>
            <p>LKR:990.00</p>
            </div>

        </div>
        <div class= "container_img">

            <img src = "kid_4.jpg" class ="add" alt="item image">
             <a href="purchase.php"><button class="bt">Buy Now </button></a>
            <div class="desc">
            <p name ="para">girlS 2PC PYJAMA SET</p>
            <p>LKR:790.00</p>
            </div>
        </div>

        <div class= "container_img">

            <img src = "kid_5.jpg" class ="add" alt="item image">
             <a href="purchase.php"><button class="bt">Buy Now </button></a>
            <div class="desc">
            <p name ="para">AMY GIRLS PRINTED DRESS</p>
            <p>LKR:2090.00</p>
            </div>
        </div>

        <div class= "container_img">

            <img src = "kid_6.jpeg" class ="add" alt="item image">
            <a href="purchase.php"><button class="bt">Buy Now </button></a>
            <div class="desc">
            <p name ="para">AMY GIRLS FRILL DETAILED POLKA DOT JUMPSUIT</p>
            <p>LKR:1490.00</p>
            </div>
        </div>

        <div class= "container_img">

            <img src = "kid_7.jfif" class ="add" alt="item image">
            <a href="purchase.php"><button class="bt">Buy Now </button></a>
            <div class="desc">
            <p name ="para">EDGE BOYS CASUAL T-SHIRT</p>
            <p>LKR:1090.00</p>
            </div>
        </div>

        <div class= "container_img">

            <img src = "kid_8.jfif" class ="add" alt="item image">
            <a href="purchase.php"><button class="bt">Buy Now </button></a>
            <div class="desc">
            <p name ="para">GIRLS DENIM SHORT</p>
            <p>LKR:790.00</p>
            </div>
        </div>

        <div class= "container_img">

            <img src = "kid_9.jfif" class ="add" alt="item image">
            <a href="purchase.php"><button class="bt">Buy Now </button></a>
            <div class="desc">
            <p name ="para">BUG JUNIOR BOYS LONG SLEEVE STRIPE T-SHIRT</p>
            <p>LKR:890.00</p>
            </div>
        </div>

        <div class= "container_img">

            <img src = "kid_10.jpg" class ="add" alt="item image">
            <a href="purchase.php"><button class="bt">Buy Now </button></a>
            <div class="desc">
            <p name ="para">BUG JUNIOR BOYS RASCAL CASUAL T-SHIRT</p>
            <p>LKR:590.00</p>
            </div>
        </div>

        <div class= "container_img">

            <img src = "kid_11.jfif" class ="add" alt="item image">
            <a href="purchase.php"><button class="bt">Buy Now </button></a>
            <div class="desc">
            <p name ="para">GIRLS CASUAL ALADIN PALAZZO PANTS</p>
            <p>LKR:690.00</p>
            </div>
        </div>

        <div class= "container_img">

            <img src = "kid_12.jfif" class ="add" alt="item image">
             <a href="purchase.php"><button class="bt">Buy Now </button></a>
            <div class="desc">
            <p name ="para">AMY GIRLS FRILL DETAILED POLKA DOT JUMPSUIT</p>
            <p>LKR:1500.00</p>
            </div>
        </div>
    
    </div>
<?php include_once('./includes/footer.php');?>

</body>
</html>