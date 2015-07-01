<?php
require ('config.php');
$title = @$_GET['nombre'];
if ($title){
	$registro = mysql_query("SELECT * FROM libros WHERE titulo='".@$_GET['nombre']."'" ) ;
	while($reg=mysql_fetch_array($registro)){
	echo "<br>",$reg['titulo'] ;
	echo "<br>",$reg['autor'] ;
	echo "<br>",$reg['descripcion'] ;
	}
}
?>
