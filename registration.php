
<?php

session_start();


$con = mysqli_connect('localhost', 'root', '');

mysqli_select_db($con, 'iffath_raza');

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
  echo '<script>alert("User Name Already Taken")
    window.location = "Login Page.php";
    </script>';
} else if ($num2 == 1) {
  echo '<script>alert("Email Already Taken")
    window.location = "Login Page.php";
    </script>';
} else {
  $reg = "Insert into admin_login (UserName, Email, PassWord) values ('$name','$email', '$pass' )";
  mysqli_query($con, $reg);
  echo '<script>alert("Registration Success")
    window.location = "Login Page.php";
    </script>';
}

?>