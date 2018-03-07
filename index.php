<?php
  $login_cookie = $_COOKIE['login'];
  $image='https://blog.openshift.com/wp-content/uploads/Logotype_RH_OpenShiftContainerPlatform_wLogo_CMYK_Black.jpg';

	echo "<h2> Demonstração Openshift na prática!!! <br><br></h2>";
	echo $_SERVER['SERVER_ADDR'];
  
	echo '<img src="'.$image.'" width="400" height="80" /><br>';
	
    if(isset($login_cookie))
    {
      echo"<br>Bem vindo, $login_cookie <br> !!!";
      echo"\n Essas informações <font color='red'>PODEM</font> ser acessadas por você.";
    }
    else
    {
      echo"<br> Bem vindo, convidado <br>";
      echo" Essas informações <font color='red'>NÃO PODEM</font> ser acessadas por você.<br>";
      echo" Para ler o conteúdo é necessário efetuar o login. <br>";
      echo"<br><h2> <a href='login.html'> Clique aqui</a>";
    }

?>