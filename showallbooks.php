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
	if ($reg['cantidad']==0){
		echo "No hay stock";
	}else{
		echo "<br>",$reg['cantidad'] ;
?>
<html>
	<a href="buybook.php">Comprar</a>
</html>
<?php
	}
}
?>
