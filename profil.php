<?php
session_start();


?>


<!DOCTYPE html> 


<html lang="de-DE"> 
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="login.css">
<title>Profil</title>


</head>
<body>
 
<form>

<img src="<?=  $_SESSION['user']['avatar'] ?>" width="300">
<h2><?=  $_SESSION['user']['full_name'] ?></h2>
<p>You are welcome!</p>
<a href="#"><?=  $_SESSION['user']['email'] ?></a>
<button class="logout"><a href="logout.php">Logout</button>
</form>




</body>
</html>