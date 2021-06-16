
<?php

session_start();

// $id = $user['id'];




$mysql = new mysqli('localhost', 'root', '', 'hospital');

$sql = "DELETE FROM `patient` WHERE `id` ='".$_SESSION['user']['id']."' ";

if($mysql->query($sql) == TRUE) {
// print_r('deleted');

header('Location: index.php');

}

   

$mysql->close();
?>
