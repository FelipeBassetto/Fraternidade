<?php
include db.php;
$login =(string) $_POST['user'];
$senha =(string) $_POST['password'];
echo $login;
echo $senha;

$verifica = mysqli_query($conexao,"SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha';") ;
$rowcount = mysqli_num_rows($verifica);
echo $rowcount;
if (mysqli_num_rows($verifica)<=0){
          echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='login.html';</script>";
          die();
        }else{
          setcookie("login",$login);
          header("Location:index.php?pagina=pessoas");
        }
?>