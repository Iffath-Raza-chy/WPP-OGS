<?php

$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "iffath_raza";

//$con= mysqli_connect($serverName, $userName, $password, $dbName);

try{
  $con = new PDO("mysqli:host=$serverName;dbname=$dbName",$serverName,$password);

  $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connection Success";
}
catch (PDOException $e)
{
  echo "Error in connection" . $e->getMessage();
}

?>