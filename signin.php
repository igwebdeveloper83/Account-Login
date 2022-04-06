<?php
session_start();
require_once 'connect.php';

$login = $_POST['login'];
$password = md5($_POST['password']);

$userCheck = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");
if (mysqli_num_rows($userCheck) > 0) {

    $user = mysqli_fetch_assoc($userCheck);
    $_SESSION['user'] = [
        "id" => $user['id'],
        "full_name" => $user['full_name'],
        "avatar" => $user['avatar'],
        "email" => $user['email']

    ];
    header('Location: profil.php');

}else {
    $_SESSION['message'] = 'Login oder Password stimmt nicht!';
header('Location: login.php');
}
?>