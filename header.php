<!DOCTYPE html>
<head>
	<link rel="stylesheet" type="text/css" href="swag.css">
</head>
<body>
	<div id="menu-desp">
		<ul id="hmenu">
			<li><a href="index.php">Inicio</a></li>
			<li><form method="POST" action="findbook.php">
  <input type="text" name="searchby">
  <select name="op">
   <option value="titulo">Titulo</option>
   <option value="year">Anio</option>
   <option value="autor">Autor</option>
   <option value="categoria">Categoria</option>
  </select>
   <input type="submit" value="buscar">
  </form></li>
			<li><a href="index.php?action=logout">logout</a></li>
	</div>
</body>






<!--<html>
	<head>
		<style type="text/css">
		*{
			padding: 0 px;
			margin:	0 px;
		}
		#header{
			margin: auto;
			width: 500 px;
			font 
		}
		ul, ol {
			list-style: none;
		}
		.nav li a{
			background-color: #000;
			color: #fff;
			text-decoration: none;
			padding: 10 px 15 px;
			display: block;
		}
		.nav li a:hover{
			background: #434343;
		}s
		.nav > li{
			float: left;
		} 
		.nav li ul {
			display: none;
		}
		</style>
	</head>
	<body>
	<div id="header">
		<ul class="nav">
			<li><a href="index.ph">home page</a></li>
			<li><a href="">categorias</a></li>
				<ul>
					<li><a href="">m1</a></li>
					<li><a href="">m2</a></li>
					<li><a href="">m3</a></li>
				</ul>	
			<li><a href="index.php?action=logout">logout</a></li>
		</ul>
	</div>
	</body>
</html>-->
