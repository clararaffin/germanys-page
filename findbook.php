<!DOCTYPE html>
<head>
	<title>Mostrar libros con filtro</title>
</head>
<body>

</body>

<?php
require ('config.php');
echo $_GET['searchby'];
echo $_GET['dato'];
$registro = mysql_query("SELECT * FROM libros WHERE '".@$_GET['searchby']."' = '".@$_GET['dato']."'") or die ("No se encontro la base con el libro");
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
	<a href="buybook.php?nombre= <?php echo $reg['titulo'] ?> ">Comprar</a>
</html>
<?php
	}
}
?>