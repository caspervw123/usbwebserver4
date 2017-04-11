<?php

require 'database.php';

if(!empty($_POST['leerlingnummer']) && !empty($_POST['wachtwoord'])):

// Nieuwe gebruiker toevoegen
	$sql = "INSERT INTO users (leerlingnummer, wachtwoord) VALUES (:leerlingnummer, :wachtwoord)";
$stmt = $conn->prepare($sql);

$stmt->bindParam(':leerlingnummer', $_POST['leerlingnummer']);
$stmt->bindParam(':wachtwooord', $_POST['wachtwoord']);


endif;

?>


<!DOCTYPE html>
<html>
<head>
	<title>Registeren</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link href='http://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
</head>
<body>

<div class="header">
	<a href="/">De Boekenlijst</a>
</div>

<h1>Registreer</h1>
<span>of <a href="login.php">log hier in</a>

<form action="register.php" method="POST">
	<input type="text" placeholder="Leerlingnummer" name="leerlingnummer">
	<input type="password" placeholder="Wachtwoord" name="wachtwoord">
	<input type="password" placeholder="Herhaal wachtwoord" name="herhaalwachtwoord">

	<input type="submit">

</form>
</body>
</html>