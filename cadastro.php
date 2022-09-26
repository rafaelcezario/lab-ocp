<?php 

$login = $_POST['login'];
$senha = MD5($_POST['senha']);
# CRIAR O SECRET DENTRO DO OPENSHIFT PARA GUARDAR USUARIO E SENHA
$connect = new mysqli($_ENV['APP_DB_HOST'], $_ENV['MYSQL_USER'], $_ENV['MYSQL_PASSWORD'], $_ENV['MYSQL_DATABASE']);
$db = mysqli_select_db($connect, $_ENV['MYSQL_DATABASE']);
$query_select = "SELECT login FROM usuarios WHERE login = '$login'";
$select = $connect->query($query_select);
$array = mysqli_fetch_array($select);
$logarray = $array['login'];
 
  if($login == "" || $login == null){
    echo"<script language='javascript' type='text/javascript'>alert('O campo login deve ser preenchido');window.location.href='cadastro.html';</script>";
 
    }else{
      if($logarray == $login){
 
        echo"<script language='javascript' type='text/javascript'>alert('Esse login já existe');window.location.href='cadastro.html';</script>";
        die();
 
      }else{
        $query = "INSERT INTO usuarios (login,senha) VALUES ('$login','$senha')";
        $insert = $connect->query($query);
         
        if($insert){
          echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='login.html'</script>";
        }else{
          echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='cadastro.html'</script>";
        }
      }
    }
?>
