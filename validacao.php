<?php
include db.php;
$login =(string) $_POST['user'];
$senha =(string) md5($_POST['password']);

$verifica = mysqli_fetch_array($consulta_usuario) ;
$login_bd = $verifica['login'];
$senha_bd = $verifica['senha'];
if($login_bd == $login && $senha_bd == $senha){
  header("Location:index.php?pagina=pessoas");
}else{
  echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');</script>";
  header("Location:index.php?pagina=login");
}