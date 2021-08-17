<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>

<body>
  <?php
  session_start();
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['Add_To_Cart'])) {
      if (isset($_SESSION['cart'])) {
        $myaitems = array_column($_SESSION['cart'], 'item_namee');
        if (in_array($_POST['item_namee'], $myaitems)) {
  ?>
          <script>
            swal.fire("Already Added!",
              "",
              "warning").then(function() {
              window.history.back();
            });
          </script>
        <?php
        } else {
          $count = count($_SESSION['cart']);
          $_SESSION['cart'][$count] = array('item_namee' => $_POST['item_namee'], 'Price' => $_POST['Price'], 'Quantity' => 1);
        ?>
          <script>
            Swal.fire({
              position: 'center',
              icon: 'success',
              title: 'Item Added',
              showConfirmButton: false,
              timer: 1500
            }).then(function() {
              window.history.back();
            });
          </script>
        <?php
        }
      } else {
        $_SESSION['cart'][0] = array('item_namee' => $_POST['item_namee'], 'Price' => $_POST['Price'], 'Quantity' => 1);
        ?>
        <script>
          Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Item Added',
            showConfirmButton: false,
            timer: 1500
          }).then(function() {
            window.history.back();
          });
        </script>
        <?php
      }
    }
    if (isset($_POST['remove_item'])) {
      foreach ($_SESSION['cart'] as $key => $value) {
        if ($value['item_namee'] == $_POST['item_namee']) {
          unset($_SESSION['cart'][$key]);
          $_SESSION['cart'] == array_values($_SESSION['cart']);
        ?>
          <script>
            Swal.fire(
              'Removed!',
              'Item has been deleted.',
              'success'
            ).then(function() {
              window.location = "Cart Page.php";
            })
          </script>
  <?php
        }
      }
    }
  }
  ?>
</body>

</html>