<?php

include 'db.php';
$num_cadastro =  $_POST['id_dependente'];
$nome = $_POST['nome_D'];
$data = $_POST['data'];
$dia = (int) substr(($data),0,2);
$mes = (int) substr(($data),3,5);
$ano = (int) substr(($data),6,10);
$data_process = mktime(00,00,00,$mes,$dia,$ano);
$data_nascimento = date('Y-m-d',$data_process);
$sexo = $_POST['sexo'];
$rg = $_POST['rg_D'];
$grau = $_POST['grau_parentenco'];
$sapato = $_POST['sapato'];
$roupa = $_POST['roupa'];

$query = "INSERT INTO dependentes values (default, '$num_cadastro', '$nome', '$data_nascimento','$sexo', '$rg', 
'$grau', '$sapato', '$roupa')";
mysqli_query($conexao, $query);

header("location:index.php?pagina=editarpessoa&editar=$num_cadastro");
?>




