<?php
	session_start();
	if (!isset($_SESSION['userName']))
	{
		 ?> <A href="Login Page.php" class="button2">Login/SignUp</A> <?php
	}
	else {
		?> <A href="Logout.php" class="button2">LogOut</A> <?php
		?> <h1><?= $_SESSION['userName'] ?></h1> <?php
	}
	
?>


<html>
<head>
	<title>Eat Fresh </title>
	<link rel="stylesheet" href="css/Eat_Fresh.css"/>
	<link rel="stylesheet" href="Font/css/all.min.css"/>
	
<script> 
	function stickyMenu(){
		var stick=document.getElementById('sticky'); 
		if (window.pageYOffset>200){
			sticky.classList.add('sticky');
		}
		else{ 
			sticky.classList.remove('sticky');
		}
	}
window.onscroll=function(){
	stickyMenu();
}
</script>
</head>
<body>
	<div class="parallax">
		<!-- <button  type="button" class="button2">Logi in/Sign up</button> -->
		<div class="page-title">Grocery Mart</div>
	</div>
	<nav class="menu" id="sticky">
		<ul class="menu-ul">
			<a href="#" class="a-menu"><li>Home</li></a>
			<a href="#deals" class="a-menu"><li>Deals</li></a>
			<a href="#vegetables" class="a-menu"><li>Vegetables</li></a>
			<a href="#fruits" class="a-menu"><li>Fruits</li></a>
			<a href="#meat" class="a-menu"><li>Meat</li></a>
		</ul>
		<div class="search-box">
			<form>
			<input type="text" placeholder="Search..." name = "search" class="search-input"/>
			<button type ="submit"><i class="fa fa-search"></i></button>
			</form>
		</div>
			<ul class="menu-ul">
				<a>
					<?php
					$count=0;
					if(isset($_SESSION['cart']))
					{
						$count=count($_SESSION['cart']);
					}
					?>
					<a href="Cart Page.php" style="font-size:24px;color:white" ><li class="fa fa-shopping-cart">(<?php echo $count; ?>)</li>
				</a>
				
				</a>
			</ul>
</nav>
<!--Home Page Begins-->
	<div class="containerh">
	<a href="#deals">
			<div class="categories">
				<img src="images/Types/Deals.jpg" class="item-image"/>
				<div class ="image-title">Deals</div>
			</div>
		</a>
		<a href="#vegetables">
			<div class="categories">
				<img src="images/Types/Vegetables.jpg" class="item-image"/>
				<div class ="image-title">Vegetables</div>
			</div>
		</a>
		<a href="#fruits">
			<div class="categories">
				<img src="images/Types/Fruits.jpg" class="item-image"/>
				<div class ="image-title">Fruits</div>
			</div>
		</a> 
		<a href="#meat">
			<div class="categories">
				<img src="images/Types/Meats&Seafoods.jpg" class="item-image"/>
				<div class ="image-title">Meat & Seafood</div>
			</div>
		</a>
	</div>
		<!--Deal Begins Here-->
		<div class="deals-containerh" id="deals"> 
			<div class="parallax">
				<div class="title">DEALS</div>
			</div>
			<div class="deal">
				Save 20% on min-purchase of $149 on vegetables<br/> 
				<button class="coupon-btn">Add Coupon</button>
			</div>
			<div class="deal">
				Save 10% on min-purchase of $179 on fruits<br/>
				<button class="coupon-btn">Add Coupon</button>
			</div>
			<div class="deal">
				Save 15% on min-purchase of $199 on meat/seafood<br/>
				<button class="coupon-btn">Add Coupon</button>
			</div>
		</div>
 		<!--Deal Ends Here-->
		<!--Veg Begins Here-->
		<div class="deals-containerh" id="vegetables">
			<div class="parallax">
				<div class="title">VEGETABLES</div>
			</div>
			<form class="items" action="Manage Cart.php" method="POST">
				<span class="images">
					<img src="Images/Vegs/Okra.jpg" class="item-image-size"/>
				</span>
				<div class="description">
					<b class="item-name">Organic Okra</b><br/>
					<span class="p">Price:</span>
					<span class="shop-item-price">$2.99</span>
				 </br>
					<label>Weight: 250 Grams</label>
					<br/>
					<button class="buynow-btn"> Buy Now</button>
					<button class="buynow-btn" type ="submit" name="Add_To_Cart"> Add to Cart </button>
					<input type="hidden" name="item_namee" value="Organic Okra">
					<input type="hidden" name="Price" value="2.99">
					<input type="hidden" name="Weight" value="250g">
				</div>
			</form>
			<form class="items" action="Manage Cart.php" method="POST" id=iitems>
				<div class="images">
					<img src="Images/Vegs/Greenpepper.jpg" class="item-image-size"/>
				</div>
				<div class="description">
					<b class="item-name" name = "product-name">Organic Greenpepper</b><br/>
					<span class="item-select">Price:</span>
					<span class="shop-item-price" name ="product-price">$3.99</span>
				 </br>
					<label>Weight: 250 Grams</label>
					<br/>
					<button class="buynow-btn"> Buy Now</button>
					<button class="buynow-btn" type ="submit" name="Add_To_Cart"> Add to Cart </button>
					<input type="hidden" name="item_namee" value="Organic Greenpepper">
					<input type="hidden" name="Price" value="3.99">
				</div>
			</form>
			<form class="items" action="Manage Cart.php" method="POST">
				<div class="images">
					<img src="Images/Vegs/Tomatoes.jpg" class="item-image-size"/>
				</div>
				<div class="description">
					<b class="item-name" name = "product-name">Organic Tomatoes</b><br/>
					<span class="item-select">Price:</span>
					<span class="shop-item-price" name ="product-price">$1.49</span>
				 </br>
					<label> Weight: 250 Grams</label>
				</br>
					<button class="buynow-btn"> Buy Now</button>
					<button class="buynow-btn" type ="submit" name="Add_To_Cart"> Add to Cart </button>
					<input type="hidden" name="item_namee" value="Organic Tomatoes">
					<input type="hidden" name="Price" value="1.49">
				</div>
			</form>
			<form class="items" action="Manage Cart.php" method="POST">
				<div class="images">
					<img src="Images/Vegs/Onions.jpg" class="item-image-size"/>
				</div>
				<div class="description">
					<b class="item-name" name = "product-name">Yellow Onions</b><br/>
					<span class="item-select">Price:</span>
					<span class="shop-item-price" name ="product-price">$1.29</span>
				 </br>
					<label>Weight: 250 Grams</label>
					<br/>
					<button class="buynow-btn"> Buy Now</button>
					<button class="buynow-btn" type ="submit" name="Add_To_Cart"> Add to Cart </button>
					<input type="hidden" name="item_namee" value="Yellow Onions">
					<input type="hidden" name="Price" value="1.29">
				</div>
			</form>
			<form class="items" action="Manage Cart.php" method="POST">
				<div class="images">
					<img src="Images/Vegs/Spinach.jpg" class="item-image-size"/>
				</div>
				<div class="description">
					<b class="item-name" name = "product-name">Organic Spinach</b><br/>
					<span class="item-select">Price:</span>
					<span class="shop-item-price" name ="product-price">$3.99</span>
				 </br>
					<label>Weight: 250 Grams</label>
					<br/>
					<button class="buynow-btn"> Buy Now</button>
					<button class="buynow-btn" type ="submit" name="Add_To_Cart"> Add to Cart </button>
					<input type="hidden" name="item_namee" value="Organic Spinach">
					<input type="hidden" name="Price" value="3.99">
				</div>
			</form>
			<form class="items" action="Manage Cart.php" method="POST">
				<div class="images">
					<img src="Images/Vegs/Carrots.jpg" class="item-image-size"/>
				</div>
				<div class="description">
					<b class="item-name" name = "product-name">Organic Carrots</b><br/>
					<span class="item-select">Price:</span>
					<span class="shop-item-price" name ="product-price">$4.99</span>
				 </br>
					<label>Weight: 250 Grams</label>
					<br/>
					<button class="buynow-btn"> Buy Now</button>
					<button class="buynow-btn" type ="submit" name="Add_To_Cart"> Add to Cart </button>
					<input type="hidden" name="item_namee" value="Organic Carrots">
					<input type="hidden" name="Price" value="4.99">
				</div>
			</form>
			
		</div>
 		<!--Veg Ends Here-->
		<!--Fruits Begins Here-->
		<div class="deals-containerh" id="fruits">
			<div class="parallax">
				<div class="title">FRUITS</div>
			</div>
			<form class="items" action="Manage Cart.php" method="POST">
				<div class="images">
					<img src="Images/Fruits/Apples.jpg" class="item-image-size"/>
				</div>
				<div class="description">
					<b class="item-name" name = "product-name">Organic Apple</b><br/>
					<span class="item-select">Price:</span>
					<span class="shop-item-price" name ="product-price">$5.99</span>
				 </br>
					<label>Weight: 250 Grams</label>
					<br/>
					<button class="buynow-btn"> Buy Now</button>
					<button class="buynow-btn" type ="submit" name="Add_To_Cart"> Add to Cart </button>
					<input type="hidden" name="item_namee" value="Organic Apple">
					<input type="hidden" name="Price" value="5.99">
				</div>
			</form>
			<form class="items" action="Manage Cart.php" method="POST">
				<div class="images">
					<img src="Images/Fruits/Kiwi.jpg" class="item-image-size"/>
				</div>
				<div class="description">
					<b class="item-name" name = "product-name">Organic Kiwi</b><br/>
					<span class="item-select">Price:</span>
					<span class="shop-item-price" name ="product-price">$7.99</span>
				 </br>
					<label>Weight: 250 Grams</label>
					<br/>
					<button class="buynow-btn"> Buy Now</button>
					<button class="buynow-btn" type ="submit" name="Add_To_Cart"> Add to Cart </button>
					<input type="hidden" name="item_namee" value="Organic Kiwi">
					<input type="hidden" name="Price" value="7.99">
				</div>
			</form>
			<form class="items" action="Manage Cart.php" method="POST">
				<div class="images">
					<img src="Images/Fruits/Dragonfruit.jpg" class="item-image-size"/>
				</div>
				<div class="description">
					<b class="item-name" name = "product-name">Organic Dragon Fruit</b><br/>
					<span class="item-select">Price:</span>
					<span class="shop-item-price" name ="product-price">$8.49</span>
				 </br>
					<label>Weight: 250 Grams</label>
					<br/>
					<button class="buynow-btn"> Buy Now</button>
					<button class="buynow-btn" type ="submit" name="Add_To_Cart"> Add to Cart </button>
					<input type="hidden" name="item_namee" value="Organic Dragon Fruit">
					<input type="hidden" name="Price" value="8.49">
				</div>
			</form>
			<form class="items" action="Manage Cart.php" method="POST">
				<div class="images">
					<img src="Images/Fruits/Strawberries.jpg" class="item-image-size"/>
				</div>
				<div class="description">
					<b class="item-name" name = "product-name">Strawberries</b><br/>
					<span class="item-select">Price:</span>
					<span class="shop-item-price" name ="product-price">$4.89</span>
				 </br>
					<label>Weight: 250 Grams</label>
					<br/>
					<button class="buynow-btn"> Buy Now</button>
					<button class="buynow-btn" type ="submit" name="Add_To_Cart"> Add to Cart </button>
					<input type="hidden" name="item_namee" value="Strawberries">
					<input type="hidden" name="Price" value="4.89">
				</div>
			</form>
			<form class="items" action="Manage Cart.php" method="POST">
				<div class="images">
					<img src="Images/Fruits/Watermelons.jpg" class="item-image-size"/>
				</div>
				<div class="description">
					<b class="item-name" name = "product-name">Watermelon</b><br/>
					<span class="item-select">Price:</span>
					<span class="shop-item-price" name ="product-price">$3.79</span>
				 </br>
					<label>Weight: 250 Grams</label>
					<br/>
					<button class="buynow-btn"> Buy Now</button>
					<button class="buynow-btn" type ="submit" name="Add_To_Cart"> Add to Cart </button>
					<input type="hidden" name="item_namee" value="Watermelon">
					<input type="hidden" name="Price" value="3.79">
				</div>
			</form>
			<form class="items" action="Manage Cart.php" method="POST">
				<div class="images">
					<img src="Images/Fruits/Bananas.jpg" class="item-image-size"/>
				</div>
				<div class="description">
					<b class="item-name" name = "product-name">Organic Bananas</b><br/>
					<span class="item-select">Price:</span>
					<span class="shop-item-price" name ="product-price">$1.29</span>
				 </br>
					<label>Weight: 250 Grams</label>
					<br/>
					<button class="buynow-btn"> Buy Now</button>
					<button class="buynow-btn" type ="submit" name="Add_To_Cart"> Add to Cart </button>
					<input type="hidden" name="item_namee" value="Organic Bananas">
					<input type="hidden" name="Price" value="1.29">
				</div>
			</form>
			
		</div>
 		<!--Fruits Ends Here-->
 		<!--Meat Begins Here-->
		<div class="deals-containerh" id="meat">
			<div class="parallax">
				<div class="title">MEAT &SEAFOOD</div>
			</div>
			<form class="items" action="Manage Cart.php" method="POST">
				<div class="images">
					<img src="Images/Meats/Chicken.jpg" class="item-image-size"/>
				</div>
				<div class="description">
					<b class="item-name" name = "product-name">Whole Chicken</b><br/>
					<span class="item-select">Price:</span>
					<span class="shop-item-price" name ="product-price">$3.98</span>
				 </br>
					<label>Weight: 250 Grams</label>
					<br/>
					<button class="buynow-btn"> Buy Now</button>
					<button class="buynow-btn" type ="submit" name="Add_To_Cart"> Add to Cart </button>
					<input type="hidden" name="item_namee" value="Whole Chicken">
					<input type="hidden" name="Price" value="3.98">
				</div>
			</form>
			<form class="items" action="Manage Cart.php" method="POST">
				<div class="images">
					<img src="Images/Meats/Lamb.jpg" class="item-image-size"/>
				</div>
				<div class="description">
					<b class="item-name" name = "product-name">Fresh Lamb</b><br/>
					<span class="item-select">Price:</span>
					<span class="shop-item-price" name ="product-price">$7.99</span>
				 </br>
					<label>Weight: 250 Grams</label>
					<br/>
					<button class="buynow-btn"> Buy Now</button>
					<button class="buynow-btn" type ="submit" name="Add_To_Cart"> Add to Cart </button>
					<input type="hidden" name="item_namee" value="Fresh Lamb">
					<input type="hidden" name="Price" value="7.99">
				</div>
			</form>
			<form class="items" action="Manage Cart.php" method="POST">
				<div class="images">
					<img src="Images/Meats/Prawns.jpg" class="item-image-size"/>
				</div>
				<div class="description">
					<b class="item-name" name = "product-name">Peeled Prawns</b><br/>
					<span class="item-select">Price:</span>
					<span class="shop-item-price" name ="product-price">$8.49</span>
				 </br>
					<label>Weight: 250 Grams</label>
					<br/>
					<button class="buynow-btn"> Buy Now</button>
					<button class="buynow-btn" type ="submit" name="Add_To_Cart"> Add to Cart </button>
					<input type="hidden" name="item_namee" value="Peeled Prawns">
					<input type="hidden" name="Price" value="8.49">
				</div>
				</form>
			<form class="items" action="Manage Cart.php" method="POST">
				<div class="images">
					<img src="Images/Meats/Fish.jpg" class="item-image-size"/>
				</div>
				<div class="description">
					<b class="item-name" name = "product-name">Live Fish</b><br/>
					<span class="item-select">Price:</span>
					<span class="shop-item-price" name ="product-price">$7.89</span>
				 </br>
					<label>Weight: 250 Grams</label>
					<br/>
					<button class="buynow-btn"> Buy Now</button>
					<button class="buynow-btn" type ="submit" name="Add_To_Cart"> Add to Cart </button>
					<input type="hidden" name="item_namee" value="Live Fish">
					<input type="hidden" name="Price" value="7.89">
				</div>
				</form>
			
		</div>
 		<!--Veg Ends Here-->

<!--Home Page End-->

<!--footer starts here-->
	<div class="parallaxl">
		<div class="footer">
			<div class="quick-links">
				<div>Locations</div>
				<ul>
					<li><a href="" class="a-links">Address 1</a></li>
					<li><a href="" class="a-links">Address 2</a></li>
					<li><a href="" class="a-links">Address 2</a></li>
				</ul>
			</div><div class="quick-links">
				<div>Careers</div>
				<ul>
					<li><a href="" class="a-links">Packing Staff</a></li>
					<li><a href="" class="a-links">Delivery Agents</a></li>
					<li><a href="" class="a-links">Shelf Fillers</a></li>
				</ul>
			</div><div class="quick-links">
				<div>Quick Links </div>
				<ul>
					<li><a href="" class="a-links">Contuct Us</a></li>
					<li><a href="" class="a-links">FAQ</a></li>
					<li><a href="" class="a-links">Help</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class= "copyrights">
		<i class="Far fa-copyright fa-lx"></i>2021 By Iffath Raza Chowdhury & Jubayer Rahman Shanto   <i class="Far fa-copyright fa-lx"></i>
</div>
<!--footer End here-->



</body>
</html>