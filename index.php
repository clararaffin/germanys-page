<!DOCTYPE html>
<?php
	session_start();
	require ('config.php');
	 if (@$_SESSION["username"]) {
?>
<html lang="es">
	<head>
		<title>Libreria La Alemana</title>
	</head>
	<body>
		<?php include("header.php") ?>
		<?php include("showallbooks.php") ?>
	</body>
</html>
<?php
	if(@$_GET['action'] == "logout"){
		session_destroy();
		header("Location: login.php");
	}


	 }else{
?>
<html>
	Debes <a href="login.php">iniciar sesion<a>
</html>
<?php	 
	 }
?>