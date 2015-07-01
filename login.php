<head>
 <title>Login</title>
</head>
<body>
 <form action="login.php" method="POST">
  Usuario: <input type="text" name="username"> <br>
  Contraseña: <input type="password" name="password"> <br>
  <input type="submit" value="Iniciar" name="submit">   <a href="register.php">Registrarme</a>
   </body>
<?php
session_start();
require ('config.php');
$username = @$_POST['username'];
$password = @$_POST['password'];
if (isset($_POST['submit'])){
 if ($username && $password){
  $check = mysql_query("SELECT * FROM users WHERE username='".$username."'");
  $rows = mysql_num_rows($check);
  if(mysql_num_rows($check) != 0){
   while ($row = mysql_fetch_assoc($check)){
    $db_username = $row['username'];
    $db_password = $row['password'];
   }
   if ($username==$db_username && sha1($password)==$db_password){
    @$_SESSION["username"] = $username;
    header("Location: index.php");
   }
   else{
    echo "La contraseña es incorrecta";
   }

  }
  else{
   die("No se pudo encontrar su nombre de usuario");
  }
 }
 else{
  echo "Complete los campos";
 }
}
?>