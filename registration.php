<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

</head>

<body>

  <?php

  session_start();

  $con = mysqli_connect('localhost', 'root', '');

  mysqli_select_db($con, 'iffath_raza');

  $fullname = $_POST['Fullname'];
  $name = $_POST['userName'];
  $pass = $_POST['userPassword'];
  $email = $_POST['userEmail'];

  $s = "select * from admin_login where UserName = '$name'";
  $result = mysqli_query($con, $s);
  $num = mysqli_num_rows($result);

  $d = "select * from admin_login where Email = '$email'";

  $result2 = mysqli_query($con, $d);
  $num2 = mysqli_num_rows($result2);

  if ($num == 1) {
  ?>
    <script>
      swal.fire("User Name Already Taken!",
        "Please Enter Another User Name",
        "warning").then(function() {
        window.location = "Login Page.php";
      });
    </script>
  <?php

  } else if ($num2 == 1) {
  ?>
    <script>
      swal.fire("Email Id Already Registered!",
        "Please Enter Another Email Address or Login",
        "warning").then(function() {
        window.location = "Login Page.php";
      });
    </script>
  <?php

  } else {
    $reg = "Insert into admin_login (Fullname, UserName, Email, PassWord) values ('$fullname','$name','$email', '$pass' )";
    mysqli_query($con, $reg);
  ?>
    <script>
      swal.fire("Registration Success!",
        "Redirect to Login Page!",
        "success").then(function() {
        window.location = "Login Page.php";
      });
    </script>
  <?php
  }

  ?>

</body>

</html>