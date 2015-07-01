<!DOCTYPE html>
<head>
 <title>Mostrar libros con filtro</title>
</head>
<body>
 <?php
  require ('config.php');
  $op=$_POST['op'];
  $buscar=$_POST['searchby'];
  $registro = mysql_query("SELECT * FROM libros WHERE $op='".$buscar."'" );
  if(mysql_num_rows($registro)){
  while($reg=mysql_fetch_array($registro)){
   echo "<br>",$reg['titulo'] ;
   echo "<br>",$reg['autor'] ;
   echo "<br>",$reg['categoria'] ;
   echo "<br>",$reg['descripcion'] ;
  }
  }
  else
  	echo "No existe ese libro papwa";
?>
</body>