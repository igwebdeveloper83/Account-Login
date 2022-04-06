<?php
session_start();

?>


<!DOCTYPE html> 


<html lang="de-DE"> 
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="login.css">
<title>Login</title>


</head>
<body>
 
<form action="signin.php" method="post">
    <label>Login-name</label>
    <input type="text" name="login" placeholder="einfügen">
    <label>Password</label>
    <input type="password" name="password" placeholder="einfügen">
    <button type="submit">Login</button>
    <p>
        Haben Sie keinen Account? - <a href="registration.php">Registrieren Sie sich!</a>
    </p>
    <?php
         if(isset($_SESSION['message'])) {
             echo '<p class="msg">'.$_SESSION['message'].'</p>';
         }
         unset($_SESSION['message']);
         ?>




</body>
</html>