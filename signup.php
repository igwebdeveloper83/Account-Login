<?php
session_start();
require_once 'connect.php';

$full_name = $_POST['full_name'];
$login = $_POST['login'];
$email = $_POST['email'];
$password = $_POST['password'];
$password_confirm = $_POST['password_confirm'];

if ($password === $password_confirm) {

   $bild = 'Uploads/'. time() .$_FILES['avatar']['name'];
    move_uploaded_file($_FILES['avatar']['tmp_name'], $bild);

$password = md5($password);

mysqli_query($connect, "INSERT INTO `users` (`id`, `full_name`, `login`, `email`, `password`, `avatar`) VALUES (NULL, '$full_name', '$login', '$email' , '$password', '$bild')");
$_SESSION['message'] = 'Sie haben sich registriert!';
header('Location: login.php');

}else {
    $_SESSION['message'] = 'Password noch mal eingeben';
   header('Location: registration.php');
   
}


?>

