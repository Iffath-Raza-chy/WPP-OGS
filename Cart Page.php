<?php
	session_start();
	if (!isset($_SESSION['userName']))
	{
		 ?> <A href="Login Page.php" class="button2">Login/SignUp</A> <?php
	}
	else {
		?> <A href="Logout.php" class="button2">LogOut</A> <?php
		?> <h1 style="font-size: 25px;"><b><?= $_SESSION['userName'] ?></b></h1> <?php
	}
	
?>
<html>

<head>
  <title>Eat Fresh </title>
  <link rel="stylesheet" href="css/Eat_Fresh.css" />
  <link rel="stylesheet" href="css/Login Page.css" />
  <link rel="stylesheet" href="Font/css/all.min.css" />
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script>
    function stickyMenu() {
      var stick = document.getElementById('sticky');
      if (window.pageYOffset > 200) {
        sticky.classList.add('sticky');
      } else {
        sticky.classList.remove('sticky');
      }
    }
    window.onscroll = function() {
      stickyMenu();
    }
  </script>
</head>

<body>
  <div class="parallax">
    <div class="page-title">Grocery Mart</div>
    <div class="menu" id="sticky">
      <ul class="menu-ul">
        <a href="Eat_Fresh.php#" class="a-menu">
          <li>Home</li>
        </a>
        <a href="Eat_Fresh.php#deals" class="a-menu">
          <li>Deals</li>
        </a>
        <a href="Eat_Fresh.php#vegetables" class="a-menu">
          <li>Vegetables</li>
        </a>
        <a href="Eat_Fresh.php#fruits" class="a-menu">
          <li>Fruits</li>
        </a>
        <a href="Eat_Fresh.php#meat" class="a-menu">
          <li>Meat</li>
        </a>
      </ul>
      <div class="search-box">
        <form>
          <input type="text" placeholder="Search..." name="search" class="search-input" />
          <button type="submit"><i class="fa fa-search"></i></button>
        </form>
      </div>
      <ul class="cart-btn">
        <a href="Cart Page.php">
          <?php
					$count=0;
					if(isset($_SESSION['cart']))
					{
						$count=count($_SESSION['cart']);
					}
					?>
          <button style="font-size:24px;color:white"><i class="fa fa-shopping-cart">(<?php echo $count; ?>)</i></button>
        </a>
      </ul>
    </div>
    	<div class="parallax">
			<br>
			<br>
			<br>
		</div>
    <div class="container border bg-light rounded p-4">

      <div class="row">
        <div class="col-lg-9">
          <table class="table">
            <thead class="text-center">
              <tr>
                <th scope="col">Serial No.</th>
                <th scope="col">Item Name</th>
                <th scope="col">Item Price</th>
                <th scope="col">Quantity</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody class="text-center">
              <?php
              $total = 0;
              if (isset($_SESSION['cart'])) {
                foreach ($_SESSION['cart'] as $key => $value) {
                  $sr = $key + 1;
                  $total = $total + $value['Price'];
                  echo "
                 <tr>
                  <td>$sr</td>
                  <td>$value[item_namee]</td>
                  <td>$value[Price]</td>
                  <td><input class='text-center' type='number' value='$value[Quantity]' min='1' max='10'</td>
                  <td>
                   <form action='Manage Cart.php' method='POST'>
                    <button name='remove_item' class='btn btn-sm btn-outline-danger'>REMOVE</button>
                    <input type='hidden' name='item_namee' value='$value[item_namee]'>
                   <form>
                  </td>
                 </tr>
                  ";
                }
              }
              ?>
            </tbody>
          </table>
        </div>

        <div class="col-lg-3">
          <div class="border bg-light rounded p-4">
            <h4 class="text-center">Total: $<?php echo $total ?></h4><br>
            <form>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                  Cash On Delivery
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                <label class="form-check-label" for="flexRadioDefault2">
                  Online Pyment
                </label>
              </div><br>
              <button class="btn btn-primary btn-block">Purchase</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  </div>
    	<div class="parallax">
			<br>
			<br>
			<br>
		</div>


</body>
</html>