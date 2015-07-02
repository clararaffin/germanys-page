<!DOCTYPE html>
<head>
 <title>Mostrar libros con filtro</title>
</head>
<body>
 <?php
  require ('config.php');
  $op=$_POST['dato'];
  $buscar=$_POST['searchby'];
  $registro = mysql_query("SELECT * FROM libros WHERE $buscar='".$op."'" );
  if(mysql_num_rows($registro)){
  while($reg=mysql_fetch_array($registro)){
   echo "<br>",$reg['titulo'] ;
   echo "<br>",$reg['autor'] ;
   echo "<br>",$reg['categoria'] ;
   echo "<br>",$reg['descripcion'] ;
   if ($reg['cantidad']) {
    ?>
    <html>
    <br>
  <a href="buybook.php?nombre=<?php echo $reg['titulo'] ?> ">Comprar</a>
</html>
<?php
   }
  }
  }
  else
  	echo "No existe ese libro papwa";
?>
</body>
