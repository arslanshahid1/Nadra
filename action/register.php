<?php

$name       = $_GET['name'];
$fname      = $_GET['fname'];
$country    = $_GET['country'];
$dob        = $_GET['dob'];
$gender     = $_GET['gender'];
$cardno     = rand(1000, 100000);

include_once('cn.php');
$query = "INSERT INTO `citizens`(`name`, `fname`, `country`, `dob`, `gender`, `cardno`)  
VALUES ('$name','$fname','$country','$dob','$gender','$cardno')";

mysqli_query($cn, $query) or die('Cannt Run Query' . mysqli_error($cn));
header('Location:../registered.php');

?>