<?php 
	$login = $_POST["login"];
	$entrar = $_POST["entrar"];
	$senha = md5($_POST["senha"]);
	# CRIAR O SECRET NO OPENSHIFT
	$conn = new mysqli($_ENV['APP_DB_HOST'], $_ENV['MYSQL_USER'], $_ENV['MYSQL_PASSWORD'], $_ENV['MYSQL_DATABASE']);
	# $conn = new mysqli("$servername", "$username", "$password", "$database");

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	if (isset($entrar)) {
	  $verifica = $conn->query("SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'");
	    if (mysqli_num_rows($verifica)<=0){
	      echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='login.html';</script>";
	      die();
	    }else{
	      setcookie("login",$login);
	      header("Location:index.php");
	    }
	}
	$conn->close();
?>
