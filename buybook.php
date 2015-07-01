<?php
require ('config.php');
$title = @$_GET['nombre'];
if ($title){
	$registro = mysql_query("SELECT * FROM libros WHERE titulo='".@$_GET['nombre']."'" ) ;
	while($reg=mysql_fetch_array($registro)){
	$newcant=$reg['cantidad'];
	}
	$newcant=$newcant-1;
	echo $newcant;
	mysql_query("UPDATE libros SET cantidad='".$newcant."' WHERE titulo='".$title."'");
	
}
?>
