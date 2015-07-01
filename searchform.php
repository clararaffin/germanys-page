 <html>
 <head>
  <title>Buscador de peliculas</title>
 </head>
 
 <body>
  <form method="POST" action="findbook.php">
  <input type="text" name="searchby">
  <select name="op">
   <option value="titulo">Titulo</option>
   <option value="year">Anio</option>
   <option value="autor">Autor</option>
   <option value="categoria">Categoria</option>
  </select>
   <input type="submit" value="buscar">
  </form>
 </body>
</html>