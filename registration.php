
<?php

  session_start();
  

  $con =mysqli_connect('localhost','root','');

  mysqli_select_db($con, 'userregistration');

  $name = $_POST['userName'];
  $pass = $_POST['userPassword'];

  $s = "select * from usertable where name = '$name'";

  $result = mysqli_query($con,$s);
  $num = mysqli_num_rows($result);
  if ($num == 1)
  {
    echo '<script>alert("User Name Already Taken")
    window.location = "Login Page.php";
    </script>';
    
  }
  else{
    $reg = "Insert into usertable (name, password) values ('$name', '$pass' )"; 
    mysqli_query($con,$reg);
    echo '<script>alert("Registration Success")
    window.location = "Login Page.php";
    </script>';
  }

?>