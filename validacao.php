<?php
include "db.php";
$login =(string) $_POST['user'];
$senha =(string) md5($_POST['password']);
$senha_bd = "";
$login_bd = "";
while($verifica = mysqli_fetch_array($consulta_usuario) ){
  $login_bd = (string) $verifica['login'];
  $senha_bd = (string) $verifica['senha'];
}

if($login_bd == $login AND $senha_bd == $senha){
  $pagina = md5('pessoas');
  header("Location:index.php?pagina=".$pagina);
}else{
  echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location='index.php'</script>";
}