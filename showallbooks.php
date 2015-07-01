<!DOCTYPE html>
<head>
	<title>Mostrar todos los libros</title>
</head>
<body>
	
</body>

<?php
require ('config.php');
$registro = mysql_query("SELECT * FROM libros") or  die ("No se encontro la base con los libros");
while($reg=mysql_fetch_array($registro)){
	echo "<br>",$reg['titulo'] ;
	echo "<br>",$reg['autor'] ;
	echo "<br>",$reg['categoria'] ;
	echo "<br>",$reg['descripcion'] ;
	echo "<br>",$reg['cantidad'] ;
}
?>
<html>

</html>
