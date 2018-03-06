<?php
  $login_cookie = $_COOKIE['login'];
    if(isset($login_cookie)){
      echo"Bem vindo, $login_cookie <br> !!!\n";
      echo"\n Essas informações <font color='red'>PODEM</font> ser acessadas por você";
    }else{
      echo"Bem-Vindo, convidado <br>";
      echo"Essas informações <font color='red'>NÃO PODEM</font> ser acessadas por você";
      echo"Para ler o conteúdo é necessário efetuar o login \n";
      echo"(<br><a href='login.html'>Login</a>)";
    }
?>
