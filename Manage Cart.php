<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST['Add_To_Cart'])) {
    if (isset($_SESSION['cart'])) {
      $myaitems = array_column($_SESSION['cart'], 'item_namee');
      if (in_array($_POST['item_namee'], $myaitems)) {
        echo "<script>
              alert('Already Added');
              window.location.href='Eat_Fresh.php';
              </script>";
      } else {
        $count = count($_SESSION['cart']);
        $_SESSION['cart'][$count] = array('item_namee' => $_POST['item_namee'], 'Price' => $_POST['Price'], 'Quantity' => 1);
        echo "<script>
      alert('Item Added');
      window.location.href='Eat_Fresh.php';
      </script>";
      }
    } else {
      $_SESSION['cart'][0] = array('item_namee' => $_POST['item_namee'], 'Price' => $_POST['Price'], 'Quantity' => 1);
      echo "<script>
              alert('Item Added');
              window.location.href='Eat_Fresh.php';
              </script>";
    }
  }
  if (isset($_POST['remove_item'])) {
    foreach ($_SESSION['cart'] as $key => $value) {
      if ($value['item_namee'] == $_POST['item_namee']) {
        unset($_SESSION['cart'][$key]);
        $_SESSION['cart'] == array_values($_SESSION['cart']);
        echo "
        <script>
        alert('Removed');
        window.location.href='Cart Page.php';
        </script>";
      }
    }
  }
}
