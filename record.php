<?php

session_start();

$lastname = filter_var(trim($_POST['lastname']),
FILTER_SANITIZE_STRING);
$name = filter_var(trim($_POST['name']),
FILTER_SANITIZE_STRING);
$service = filter_var(trim($_POST['service']),
FILTER_SANITIZE_STRING);
$mobile = filter_var(trim($_POST['mobile']),
FILTER_SANITIZE_STRING);
$date = filter_var(trim($_POST['date']),
FILTER_SANITIZE_STRING);
$comment = filter_var(trim($_POST['comment']),
FILTER_SANITIZE_STRING);



$mysql = new mysqli('localhost', 'root', '', 'hospital');
$mysql->query("INSERT INTO `online_recording` (`lastname`, `name`, `service`, `mobile`, `date`, `comment`)
VALUES('$lastname', '$name', '$service', '$mobile', '$date', '$comment')");

$mysql->close();
header('Location: /index.php');
?>
