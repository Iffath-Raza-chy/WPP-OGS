<?php

  session_start();
  $con =mysqli_connect('localhost','root','');

  mysqli_select_db($con, 'userregistration');

  $name = $_POST['userName'];
  $pass = $_POST['userPassword'];

  $s = "select * from usertable where name = '$name' && password = '$pass'";

  $result = mysqli_query($con,$s);
  $num = mysqli_num_rows($result);
  if ($num == 1)
  {
    $_SESSION ['userName']=$name;
    header('location:Eat_Fresh.php');
  }
  else{
    echo '<script>alert("Wrong Credential")
    window.location = "Login Page.php";
    </script>';
    
  }

?>