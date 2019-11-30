<?php
include db.php;
$login =(string) $_POST['user'];
$senha =(string) md5($_POST['password']);
while($verifica = mysqli_fetch_array($consulta_usuario) ){
$login_bd = $verifica['login'];
$senha_bd = $verifica['senha'];
}
echo $senha_bd;
echo $login;
echo $senha;
if($login_bd == $login AND $senha_bd == $senha){
  header("Location:index.php?pagina=pessoas");
}else{
  echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');</script>";
}