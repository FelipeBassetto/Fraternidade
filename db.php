<?php


$servidor = 'https://fraternidade-irma.herokuapp.com/';
$usuario = 'root';
$senha = '';
$database = 'fraternidade';

$conexao = mysqli_connect($servidor, $usuario, $senha, $database);


$consulta_pessoas = mysqli_query($conexao,  "SELECT * FROM pessoas");
$consulta_dependentes = mysqli_query($conexao,  "SELECT * FROM dependentes");