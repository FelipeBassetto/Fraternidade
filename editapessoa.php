<?php

include 'db.php';

$id = $_POST['id_edi'];
$nome = $_POST['nome_edi'];
$sexo = $_POST['sexo_edi'];
$data = $_POST['data_nasc_edi'];
$dia = (int) substr(($data),0,2);
$mes = (int) substr(($data),3,5);
$ano = (int) substr(($data),6,10);
$data_process = mktime(00,00,00,$mes,$dia,$ano);
$data_nascimento = date('Y-m-d',$data_process);
$estado_civil = $_POST['civil_edi'];
$nome_conjuge = $_POST['conjuge_edi'];
$rg = $_POST['rg_edi'];
$cpf = $_POST['cpf_edi'];
$email = $_POST['email_edi'];
$telefone = $_POST['telefone_edi'];
$endereco = $_POST['endereco_edi'];
$moradia = $_POST['moradia_edi'];
$nome_pa = $_POST['pa_edi'];
$rg_pa = $_POST['rg_pa_edi'];
$informacao_adicional = $_POST['info_edi'];
$data2 = $_POST['data_cadas_edi'];
$dia2 = (int) substr(($data2),0,2);
$mes2 = (int) substr(($data2),3,5);
$ano2 = (int) substr(($data2),6,10);
$data_process2 = mktime(00,00,00,$mes2,$dia2,$ano2);
$data_cadastro = date('Y-m-d',$data_process2);
$status = $_POST['status_edi'];


$query = "UPDATE pessoas SET nome = '$nome', sexo = '$sexo', data_nascimento = '$data_nascimento', estado_civil = '$estado_civil', nome_conjuge = '$nome_conjuge', 
rg = '$rg', cpf = '$cpf', email = '$email', telefone = '$telefone', endereco = '$endereco', moradia = '$moradia', 
nome_pa = '$nome_pa', rg_pa = '$rg_pa', informacao_adicional = '$informacao_adicional', data_cadastro = '$data_cadastro', 
status = '$status' WHERE id = '$id'";

mysqli_query($conexao, $query);

header('location:index.php');

