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
$data_bb = $_POST['data_nascimento_edi'];
$dia_bb = (int) substr(($data_bb),0,2);
$mes_bb = (int) substr(($data_bb),3,5);
$ano_bb = (int) substr(($data_bb),6,10);
$data_process_bb = mktime(00,00,00,$mes_bb,$dia_bb,$ano_bb);
$data_nascimento_bb = date('Y-m-d',$data_process_bb);
$deficiencia = $_POST['deficiencia'];
$fralda_edi = $_POST['fralda_edi'];
$idade = $_POST['idade'];
$num_cria = $_POST['num_cria'];


$query = "UPDATE dependentes SET num_cadastro = $num_cadastro, num_crianca = '$num_cria', nome_dependente = '$nome', 
data_nascimento_dependente = '$data_nascimento', sexo_dependente = '$sexo', rg_dependente = '$rg',
grau_parentenco = '$grau', idade_C = '$idade', tamanho_sapato = '$sapato', tamanho_roupa = '$roupa', 
data_nascimentoBB = '$data_nascimento_bb', deficiencia = '$deficiencia', 
fralda = '$fralda_edi' WHERE id_dependente = '$id'";

mysqli_query($conexao, $query);
header("location:index.php?pagina=editarpessoa&editar=$num_cadastro");
