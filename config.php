<?php
	$name = "localhost";
	$user = "root";
	$pass = "";
	$connect = mysql_connect($name,$user,$pass) or die ("No se pudo conectar con la base de datos");
	mysql_select_db("libreria") or die ("No se pudo conectar con la base de datos");
?>
