<?php 
	$username = "dbuser"
	$servername = "192.168.88.115"
	$password = "redhat@123"
	$database = "sampledb" 

	$login = $_POST['login'];
	$entrar = $_POST['entrar'];
	$senha = md5($_POST['senha']);
	$connect = mysql_connect('$servername','$username','$password');
	$db = mysql_select_db('$database');

		if (isset($entrar)) {
		  $verifica = mysql_query("SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'") or die("erro ao selecionar");
		    if (mysql_num_rows($verifica)<=0){
		      echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='login.html';</script>";
		      die();
		    }else{
		      setcookie("login",$login);
		      header("Location:index.php");
		    }
		}
?>
