<?php

session_start();

$host_db = "localhost";
$user_db = "user";		//user mysql
$pass_db = "pass";		//pass mysql
$db_name = "basededatos";
$tbl_name = "tabladelabasededatos";	

// Connect to server and select databse.

mysql_connect("$host_db", "$user_db", "$pass_db")or die("Cannot Connect to Data Base."); 
mysql_select_db("$db_name")or die("Cannot Select Data Base"); 

// sent from form

$username = $_POST['user'];
$password = $_POST['pass'];
$sql= "SELECT * FROM $tbl_name WHERE NombreUsuario = '$username' and Password='$password'";
$result=mysql_query($sql);


// counting table row
$count = mysql_num_rows($result);

// If result matched $username and $password 
if($count == 1){ 
	$_SESSION['loggedin'] = true;
	$_SESSION['username'] = $username;
	$_SESSION['start'] = time();

	setcookie("logueado","si");
	header("location: home.php");
	exit();
}
else {
	echo "Username o Password estan incorrectos";
	echo "<a href='index.php'>Volver a Intentarlo</a>";
}

?>