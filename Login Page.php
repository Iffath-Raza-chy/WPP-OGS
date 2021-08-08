<?php
	session_start();
?>
<html>
<head>
	<title>Eat Fresh </title>
	<link rel="stylesheet" href="css/Eat_Fresh.css"/>
	<link rel="stylesheet" href="css/Login Page.css"/>
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
		<div class="page-title">Grocery Mart</div>
	<div class="menu" id="sticky">
		<ul class="menu-ul">
			<a href="Eat_Fresh.php#" class="a-menu"><li>Home</li></a>
			<a href="Eat_Fresh.php#deals" class="a-menu"><li>Deals</li></a>
			<a href="Eat_Fresh.php#vegetables" class="a-menu"><li>Vegetables</li></a>
			<a href="Eat_Fresh.php#fruits" class="a-menu"><li>Fruits</li></a>
			<a href="Eat_Fresh.php#meat" class="a-menu"><li>Meat</li></a>
		</ul>
		<div class="search-box">
			<form>
			<input type="text" placeholder="Search..." name = "search" class="search-input"/>
			<button type ="submit"><i class="fa fa-search"></i></button>
			</form>
		</div>
		<ul class="cart-btn">
				<a href="Cart.php">
				<button style="font-size:24px;color:white"><i class="fa fa-shopping-cart"></i></button>
				</a>
			</ul>
		</div>
		<div class="form-box">
			<div class="button-box">
				<div id="btn"></div>
				<button type="button" class="toggle-btn" onclick="login()">Log In</button>
				<button type="button" class="toggle-btn"onclick="register()">Register</button>
			</div>
			<div class="social-icons">
				<img src="Images/Png/fb.png">
				<img src="Images/Png/tw.png">
				<img src="Images/Png/gp.png">
			</div>
			<form method="POST" action="validation.php" id="login" class="input-group">
				<input type="text" class="input-feild" placeholder="User ID" name = "userName" required>
				<input type="password" class="input-feild" placeholder="Enter Password" name="userPassword" required>
				<input type="checkbox" class="chech-box"><span>Remember Password</span>
				<button type="submit" class="submit-btn" name="Login" >Log in</button>
			</form>
			<form method = "post" action="registration.php" id="register" class="input-group">
				<input type="text" class="input-feild" placeholder="User ID" name = "userName" required>
				<input type="email" class="input-feild" placeholder="Email ID" name = "userEmail"  required>
				<input type="text" class="input-feild" placeholder="Enter Password" name = "userPassword" required>
				<input type="checkbox" class="chech-box"><span>I agree to the terms & condiotions</span>
				<button type="submit" class="submit-btn">Register</button>
			</form>
		</div>
		<div class="parallax">
			-
		</div>
	</div>
	<script>
		var x = document.getElementById("login");
		var y = document.getElementById("register");
		var z = document.getElementById("btn");
		function register(){
			x.style.left = "-400px";
			y.style.left = "50px";
			z.style.left = "110px";
		}
		function login(){
			x.style.left = "50px";
			y.style.left = "450px";
			z.style.left = "0";
		}
	</script>


	</body>
	</html>