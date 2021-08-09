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
	<link rel="stylesheet" href="css/Cart.css"/>
	<link rel="stylesheet" href="Font/css/all.min.css"/>
	<link rel="stylesheet" href="css/styles.css" />
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
				<button style="font-size:24px;color:white"><i class="fa fa-shopping-cart"></i></button>
			</ul>
		
	</div>

	<div class="parallax">
		.</br>
		.</br>
		.</br>
	</div>
	
<!--Home Page End-->
<!--Cart items details ----> 
</section>
        <section class="container content-section">
            <h2 class="section-header">CART</h2>
            <div class="cart-row">
                <span class="cart-item cart-header cart-column">ITEM</span>
                <span class="cart-price cart-header cart-column">PRICE</span>
                <span class="cart-quantity cart-header cart-column">QUANTITY</span>
            </div>
            <div class="cart-items">
                
            </div>
            <div class="cart-total">
                <strong class="cart-total-title">Total</strong>
                <span class="cart-total-price">$0</span>
            </div>
            <button class="btn btn-primary btn-purchase" type="button">PURCHASE</button>
 	 </section>


<!--footer starts here-->
	<div class="parallax">
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
</div>
<!--footer End here-->

</body>
</html>