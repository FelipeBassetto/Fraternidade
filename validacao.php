<?php
include db.php;
$login = $_POST['login'];
$senha = md5($_POST['senha']);
  

$verifica = mysqli_query($conexao,"SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'") or die("erro ao conectar com o banco de dados!");
$rowcount = mysqli_num_rows($verifica);

if (mysqli_num_rows($verifica)<=0){
          echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='login.html';</script>";
          die();
        }else{
          setcookie("login",$login);
          header("Location:index.php?pagina=pessoas");
        }
?>