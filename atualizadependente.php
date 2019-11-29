<?php
include 'db.php';

$id = $_POST['id_edi'];
$num_cadastro = $_POST['num_cadastro'];
$nome = $_POST['nome_edi'];
$data = $_POST['data_edi'];
$dia = (int) substr(($data),0,2);
$mes = (int) substr(($data),3,5);
$ano = (int) substr(($data),6,10);
$data_process = mktime(00,00,00,$mes,$dia,$ano);
$data_nascimento = date('Y-m-d',$data_process);
$sexo = $_POST['sexo'];
$rg = $_POST['rg_depen'];
$grau = $_POST['grau'];
$sapato = $_POST['sapato_edi'];
$roupa = $_POST['roupa_edi'];

$query = "UPDATE dependentes SET num_cadastro = $num_cadastro, nome_dependente = '$nome', 
data_nascimento_dependente = '$data_nascimento', sexo_dependente = '$sexo', rg_dependente = '$rg',
grau_parentenco = '$grau', tamanho_sapato = '$sapato', tamanho_roupa = '$roupa' WHERE id = '$id'";

mysqli_query($conexao, $query);
header("location:index.php?pagina=editarpessoa&editar=$num_cadastro");
