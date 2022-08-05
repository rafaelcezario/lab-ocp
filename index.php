<?php
  $login_cookie = $_COOKIE['login'];
  $image="https://www.dnait.ie/wp-content/uploads/2020/07/Red-Hat-OpenShift-on-IBM-Cloud.jpg";
	echo "<h2> Demonstração Openshift na prática!!! <br><br></h2>";
	echo '<img src="'.$image.'" width="600" height="320" /><br>';
	echo "CONTAINER IP = "; echo $_SERVER['SERVER_ADDR'];

    if(isset($login_cookie))
    {
      echo"<br>Bem vindo, $login_cookie !!!<br>";
      echo"<br> <font color='red'>RED HAT</font> ";
	  echo"<br><font color='red'> OPENSHIFT</font>";
	  echo"<br> <font color='green'>VOCE AUTENTICOU COM SUCESSO NO BANCO DE DADOS!!! </font>";
	  echo"<br>"
	  echo"<br> Essas informações <font color='red'>PODEM</font> ser acessadas por você.";
	  echo"<br><br><br> <a href='logout.php'> Logout</a>";
    }
    else
    {
      echo"<br><br>Bem vindo, convidado !!!<br>";
      echo"<br> Essas informações <font color='red'> NÃO PODEM </font> ser acessadas por você.<br>";
      echo"<br> Para ler o conteúdo é necessário efetuar o login. <br>";
      echo"<br><h1> <a href='login.html'> Login</a>";
    }
?>
