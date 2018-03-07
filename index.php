<?php
  $login_cookie = $_COOKIE['login'];
  
  echo "<h2> Demonstração Openshift na prática!!! <br><br>"
  echo $_SERVER['SERVER_ADDR'];

    if(isset($login_cookie))
    {
      echo"Bem vindo, $login_cookie <br> !!!";
      echo"\n Essas informações <font color='red'>PODEM</font> ser acessadas por você.";
    }
    else
    {
      echo"Bem vindo, convidado <br>";
      echo" Essas informações <font color='red'>NÃO PODEM</font> ser acessadas por você.<br>";
      echo" Para ler o conteúdo é necessário efetuar o login. <br>";
      echo"<br><h2> <a href='login.html'> Clique aqui</a>";
    }

?>