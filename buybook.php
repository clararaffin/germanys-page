<?php
require ('config.php');
$title = @$_GET['nombre'];
if ($title){
	$registro = mysql_query("SELECT * FROM libros WHERE titulo='".@$_GET['nombre']."'" ) ;
	while($reg=mysql_fetch_array($registro)){
		mysql_query("UPDATE libros SET cantidad=cantidad-1 WHERE titulo='".$title."'");
	}
	header("Location: index.php");
}

?>
