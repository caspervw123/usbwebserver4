<?php

if(!empty($_POST['leerlingnummer']) && !empty($_POST['wachtwoord'])):

endif;

?>


<!DOCTYPE html>
<html>
<head>
	<title>Log hier in</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link href='http://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
</head>
<body>

<div class="header">
	<a href="/">De Boekenlijst</a>
</div>

<h1>Inloggen</h1>
<span>of <a href="register.php">registreer hier</a>

<form action="login.php" method="POST">
	<input type="text" placeholder="Leerlingnummer" name="leerlingnummer">
	<input type="password" placeholder="Wachtwoord" name="wachtwoord">

	<input type="submit">

</form>

</body>
</html>