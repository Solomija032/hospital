<?php
    session_start();
  

$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
   
$password = md5($_POST['password']);


$mysql = new mysqli('localhost', 'root', '', 'hospital');

$check_user = $mysql->query("SELECT * FROM `patient` WHERE `email` = '$email' AND `password` = '$password'");
if (mysqli_num_rows($check_user) > 0) {
    $user = mysqli_fetch_assoc($check_user);

    $_SESSION['user'] = [
        "id" => $user['id'],
        "lastname" => $user['lastname'],
        "name" => $user['name'],
        "mobile" => $user['mobile'],
        "address" => $user['address'],
        "email" => $user['email'],
        "mobile" => $user['mobile'],
    ];

    header('Location: /profile.php');

} else {
    $_SESSION['message'] = 'РќРµ РІРµСЂРЅС‹Р№ Р»РѕРіРёРЅ РёР»Рё РїР°СЂРѕР»СЊ';
    header('Location: /signIn.php');
}
?>

<pre>
<?php
print_r($check_user);
print_r($user);
?>
</pre>


    ?>



