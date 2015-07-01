<!DOCTYPE html>
<html>
	<head>
		<title>Register a account</title>
	</head>
	<body>
		<form action="register.php" method="POST">
		Username: <input type="text" name="username" > <br />
		Password: <input type="password" name="password" ><br />
		Confirm password: <input type="password" name="repassword" ><br />
		Email: <input type="text" name="email" ><br />
		 <input type="submit" name="submit" value="Register"> or <a href="login.php">Login</a>
		</form>
	</body>
</html>
<?php
	require('config.php');
	$username = @$_POST['username'];
	$password = @$_POST['password'];
	$repass = @$_POST['repassword'];	
	$email = @$_POST['email'];
	$date = date("Y-m-d");
	$pass_en = sha1($password);
	if (isset($_POST['submit'])){
		if ($username && $password && $repass && $email){
			$check = mysql_query("SELECT * FROM users WHERE username='".$username."'");
			$rows = mysql_num_rows($check);
			if(mysql_num_rows($check) == 0){
				if ($repass==$password){
					if($query= mysql_query("INSERT INTO users (`id`,`username`, `password`, `email`,`date`) VALUES ('', '".$username."', '".$pass_en."', '".$email."','".$date."')")){
						echo "Succes";
					}
					else{
					echo "Fail";
					}	
					}
				else{
				echo "Las contraseñas no coinciden";
				}
			}
			else{
				echo "El usuario ya existe";
			}
		}
		else{
			echo "Complete todos los campos";
		}
		
	}
?>
<!--if (strlen($username) >= 5 && strlen($username) =<25 && strlen($password) > 6)
		}
		else{
			if (strlen($username)<=5 || strlen($username)>=25){
				echo "El numbre de usuario tiene que tener entre 5 y 25";
			}
			if (strlen($password)<6){
				echo "La contraseña debe tener mas de 6 caracteres";
			}-->
