<?php

session_start();

$lastname = filter_var(trim($_POST['lastname']),
FILTER_SANITIZE_STRING);
$name = filter_var(trim($_POST['name']),
FILTER_SANITIZE_STRING);
$surname = filter_var(trim($_POST['surname']),
FILTER_SANITIZE_STRING);
$date = filter_var(trim($_POST['date']),
FILTER_SANITIZE_STRING);
$mobile = filter_var(trim($_POST['mobile']),
FILTER_SANITIZE_STRING);
$address = filter_var(trim($_POST['address']),
FILTER_SANITIZE_STRING);
$email = filter_var(trim($_POST['email']),
FILTER_SANITIZE_STRING);
$password = filter_var(trim($_POST['password']),
FILTER_SANITIZE_STRING);



 $password = md5($password);




$mysql = new mysqli('localhost', 'root', '', 'hospital');
$mysql->query("INSERT INTO `patient` (`lastname`, `name`, `surname`, `date of birth`, `mobile`, `address`, `email`, `password`)
VALUES('$lastname', '$name', '$surname', '$date', '$mobile', '$address', '$email', '$password')");

$mysql->close();
header('Location: /signIn.php');
?>
