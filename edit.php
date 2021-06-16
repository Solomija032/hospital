<?php
    session_start();

$lastname = filter_var(trim($_POST['lastname']),
FILTER_SANITIZE_STRING);
$name = filter_var(trim($_POST['name']),
FILTER_SANITIZE_STRING);
$mobile = filter_var(trim($_POST['mobile']),
FILTER_SANITIZE_STRING);
$address = filter_var(trim($_POST['address']),
FILTER_SANITIZE_STRING);
$email = filter_var(trim($_POST['email']),
FILTER_SANITIZE_STRING);



$mysql = new mysqli('localhost', 'root', '', 'hospital');
$mysql->query("UPDATE `patient` SET `lastname` = '$lastname',  `name` = '$name' , `mobile` = '$mobile',
 `address` = '$address' , `email` = '$email' WHERE `id` ='".$_SESSION['user']['id']."' "); 


$mysql->close();
header('Location: /profile.php');
?>
