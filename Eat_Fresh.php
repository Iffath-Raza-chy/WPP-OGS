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
	<div class="menu" id="sticky">
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
			<ul class="cart-btn">
				<button style="font-size:24px;color:#f7e736">Cart <i class="fa fa-shopping-cart"></i></button>
			<ul/>
		
	</div>
<!--Home Page Begins-->
	<div class="container">
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
		<a href="#deals">
			<div class="categories">
				<img src="images/Types/Deals.jpg" class="item-image"/>
				<div class ="image-title">Deals</div>
			</div>
		</a>
	</div>
		<!--Deal Begins Here-->
		<div class="deals-container" id="deals"> 
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
		<div class="deals-container" id="vegetables">
			<div class="parallax">
				<div class="title">VEGETABLES</div>
			</div>
			<div class="items">
				<div class="images">
					<img src="Images/Vegs/Okra.jpg" class="item-image-size"/>
				</div>
				<div class="description">
					<b>Organic Okra</b><br/>
					<div class="item-select">
						Price: $2.99/250grams
					</div>
					<label>Qty:</label>
					<select class="item-select">
						<option>250 grams</option>
						<option>500 grams</option>
						<option>7000 grams</option>
						<option>1000 grams</option>
					</select><br/>
					<button class="buynow-btn"> Buy Now<button/>
				</div>
			</div>
			<div class="items">
				<div class="images">
					<img src="Images/Vegs/Greenpepper.jpg" class="item-image-size"/>
				</div>
				<div class="description">
					<b>Organic Greenpepper</b><br/>
					<div class="item-select">
						Price: $3.99/250grams
					</div>
					<label>Qty:</label>
					<select class="item-select">
						<option>250 grams</option>
						<option>500 grams</option>
						<option>7000 grams</option>
						<option>1000 grams</option>
					</select><br/>
					<button class="buynow-btn"> Buy Now<button/>
				</div>
			</div>
			<div class="items">
				<div class="images">
					<img src="Images/Vegs/Tomatoes.jpg" class="item-image-size"/>
				</div>
				<div class="description">
					<b>Organic Tomatoes</b><br/>
					<div class="item-select">
						Price: $1.49/250grams
					</div>
					<label>Qty:</label>
					<select class="item-select">
						<option>250 grams</option>
						<option>500 grams</option>
						<option>7000 grams</option>
						<option>1000 grams</option>
					</select><br/>
					<button class="buynow-btn"> Buy Now<button/>
				</div>
			</div>
			<div class="items">
				<div class="images">
					<img src="Images/Vegs/Onions.jpg" class="item-image-size"/>
				</div>
				<div class="description">
					<b>Yellow Onions</b><br/>
					<div class="item-select">
						Price: $1.29/250grams
					</div>
					<label>Qty:</label>
					<select class="item-select">
						<option>250 grams</option>
						<option>500 grams</option>
						<option>7000 grams</option>
						<option>1000 grams</option>
					</select><br/>
					<button class="buynow-btn"> Buy Now<button/>
				</div>
			</div>
			<div class="items">
				<div class="images">
					<img src="Images/Vegs/Spinach.jpg" class="item-image-size"/>
				</div>
				<div class="description">
					<b>Organic Spinach</b><br/>
					<div class="item-select">
						Price: $3.99/250grams
					</div>
					<label>Qty:</label>
					<select class="item-select">
						<option>250 grams</option>
						<option>500 grams</option>
						<option>7000 grams</option>
						<option>1000 grams</option>
					</select><br/>
					<button class="buynow-btn"> Buy Now<button/>
				</div>
			</div>
			<div class="items">
				<div class="images">
					<img src="Images/Vegs/Carrots.jpg" class="item-image-size"/>
				</div>
				<div class="description">
					<b>Organic Carrots</b><br/>
					<div class="item-select">
						Price: $4.99/250grams
					</div>
					<label>Qty:</label>
					<select class="item-select">
						<option>250 grams</option>
						<option>500 grams</option>
						<option>7000 grams</option>
						<option>1000 grams</option>
					</select><br/>
					<button class="buynow-btn"> Buy Now<button/>
				</div>
			</div>
			
		</div>
 		<!--Veg Ends Here-->
		<!--Fruits Begins Here-->
		<div class="deals-container" id="fruits">
			<div class="parallax">
				<div class="title">FRUITS</div>
			</div>
			<div class="items">
				<div class="images">
					<img src="Images/Fruits/Apples.jpg" class="item-image-size"/>
				</div>
				<div class="description">
					<b>Organic Apple</b><br/>
					<div class="item-select">
						Price: $5.99/250grams
					</div>
					<label>Qty:</label>
					<select class="item-select">
						<option>250 grams</option>
						<option>500 grams</option>
						<option>7000 grams</option>
						<option>1000 grams</option>
					</select><br/>
					<button class="buynow-btn"> Buy Now<button/>
				</div>
			</div>
			<div class="items">
				<div class="images">
					<img src="Images/Fruits/Kiwi.jpg" class="item-image-size"/>
				</div>
				<div class="description">
					<b>Organic Kiwi</b><br/>
					<div class="item-select">
						Price: $7.99/250grams
					</div>
					<label>Qty:</label>
					<select class="item-select">
						<option>250 grams</option>
						<option>500 grams</option>
						<option>7000 grams</option>
						<option>1000 grams</option>
					</select><br/>
					<button class="buynow-btn"> Buy Now<button/>
				</div>
			</div>
			<div class="items">
				<div class="images">
					<img src="Images/Fruits/Dragonfruit.jpg" class="item-image-size"/>
				</div>
				<div class="description">
					<b>Organic Dragon Fruit</b><br/>
					<div class="item-select">
						Price: $8.49/250grams
					</div>
					<label>Qty:</label>
					<select class="item-select">
						<option>250 grams</option>
						<option>500 grams</option>
						<option>7000 grams</option>
						<option>1000 grams</option>
					</select><br/>
					<button class="buynow-btn"> Buy Now<button/>
				</div>
			</div>
			<div class="items">
				<div class="images">
					<img src="Images/Fruits/Strawberries.jpg" class="item-image-size"/>
				</div>
				<div class="description">
					<b>Strawberries</b><br/>
					<div class="item-select">
						Price: $4.99/250grams
					</div>
					<label>Qty:</label>
					<select class="item-select">
						<option>250 grams</option>
						<option>500 grams</option>
						<option>7000 grams</option>
						<option>1000 grams</option>
					</select><br/>
					<button class="buynow-btn"> Buy Now<button/>
				</div>
			</div>
			<div class="items">
				<div class="images">
					<img src="Images/Fruits/Watermelons.jpg" class="item-image-size"/>
				</div>
				<div class="description">
					<b>Watermelon</b><br/>
					<div class="item-select">
						Price: $3.99/250grams
					</div>
					<label>Qty:</label>
					<select class="item-select">
						<option>250 grams</option>
						<option>500 grams</option>
						<option>7000 grams</option>
						<option>1000 grams</option>
					</select><br/>
					<button class="buynow-btn"> Buy Now<button/>
				</div>
			</div>
			<div class="items">
				<div class="images">
					<img src="Images/Fruits/Bananas.jpg" class="item-image-size"/>
				</div>
				<div class="description">
					<b>Organic Bananas</b><br/>
					<div class="item-select">
						Price: $1.99/250grams
					</div>
					<label>Qty:</label>
					<select class="item-select">
						<option>250 grams</option>
						<option>500 grams</option>
						<option>7000 grams</option>
						<option>1000 grams</option>
					</select><br/>
					<button class="buynow-btn"> Buy Now<button/>
				</div>
			</div>
			
		</div>
 		<!--Fruits Ends Here-->
 		<!--Meat Begins Here-->
		<div class="deals-container" id="meat">
			<div class="parallax">
				<div class="title">MEAT &SEAFOOD</div>
			</div>
			<div class="items">
				<div class="images">
					<img src="Images/Meats/Chicken.jpg" class="item-image-size"/>
				</div>
				<div class="description">
					<b>Whole Chicken</b><br/>
					<div class="item-select">
						Price: $3.99/250grams
					</div>
					<label>Qty:</label>
					<select class="item-select">
						<option>250 grams</option>
						<option>500 grams</option>
						<option>7000 grams</option>
						<option>1000 grams</option>
					</select><br/>
					<button class="buynow-btn"> Buy Now<button/>
				</div>
			</div>
			<div class="items">
				<div class="images">
					<img src="Images/Meats/Lamb.jpg" class="item-image-size"/>
				</div>
				<div class="description">
					<b>Fresh Lamb</b><br/>
					<div class="item-select">
						Price: $7.99/250grams
					</div>
					<label>Qty:</label>
					<select class="item-select">
						<option>250 grams</option>
						<option>500 grams</option>
						<option>7000 grams</option>
						<option>1000 grams</option>
					</select><br/>
					<button class="buynow-btn"> Buy Now<button/>
				</div>
			</div>
			<div class="items">
				<div class="images">
					<img src="Images/Meats/Prawns.jpg" class="item-image-size"/>
				</div>
				<div class="description">
					<b>Peeled Prawns</b><br/>
					<div class="item-select">
						Price: $8.49/250grams
					</div>
					<label>Qty:</label>
					<select class="item-select">
						<option>250 grams</option>
						<option>500 grams</option>
						<option>7000 grams</option>
						<option>1000 grams</option>
					</select><br/>
					<button class="buynow-btn"> Buy Now<button/>
				</div>
			</div>
			<div class="items">
				<div class="images">
					<img src="Images/Meats/Fish.jpg" class="item-image-size"/>
				</div>
				<div class="description">
					<b>Live Fish</b><br/>
					<div class="item-select">
						Price: $7.89/250grams
					</div>
					<label>Qty:</label>
					<select class="item-select">
						<option>250 grams</option>
						<option>500 grams</option>
						<option>7000 grams</option>
						<option>1000 grams</option>
					</select><br/>
					<button class="buynow-btn"> Buy Now<button/>
				</div>
			</div>
			
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
		<i class="Far fa-copyright fa-lx"><i/>2021 By Iffath Raza Chowdhury
	<div/>
<!--footer End here-->

</body>
</html>