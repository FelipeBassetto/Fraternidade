<?php
include db.php;
$login =(string) $_POST['user'];
$senha =(string) md5($_POST['password']);
echo $login;
echo $senha;

$verifica = mysqli_fetch_array($consulta_usuario) ;
$login_bd = $verifica['login'];
$senha_bd = $verifica['senha'];
if($login_bd == $login && $senha_bd == $senha){
  
}