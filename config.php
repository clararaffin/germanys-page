<?php
	$name = "localhost";
	$user = "root";
	$pass = "alumno";
	$connect = mysql_connect($name,$user,$pass) or die ("No se pudo conectar con la base de datos");
	mysql_select_db("germany") or die ("No se pudo conectar con la base de datos");
?>
