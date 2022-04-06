<?php
session_start();


?>


<!DOCTYPE html> 


<html lang="de-DE"> 
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="login.css">
<title>Registration</title>


</head>
<body>
 
<form action="signup.php" method="post" enctype="multipart/form-data">
    <label>Vorname/Nachname </label>
    <input type="text" name="full_name" placeholder="Vorname/Nachname">
    <label>Login-name</label>
    <input type="text" name="login" placeholder="einfügen">
    <label>Email</label>
    <input type="email" name="email" placeholder="email">
    <label>Profilbild</label>
    <input type="file" name="avatar">
    <label>Password</label>
    <input type="password" name="password" placeholder="password" required>
    <label>Password wiederholen</label>
    <input type="password" name="password_confirm" placeholder="password wiederholen">
    <button type="submit">Login</button>
    <p>
        Haben Sie schon einen Account? - <a href="login.php">Login!</a>
    </p>
    
    
        <?php
         if(isset($_SESSION['message'])) {
             echo '<p class="msg">'.$_SESSION['message'].'</p>';
         }
         unset($_SESSION['message']);
         ?>
    
</form>

</script>
</body>
</html>