<?php


$servidor = 'mna97msstjnkkp7h.cbetxkdyhwsb.us-east-1.rds.amazonaws.com';
$usuario = 'd3p18trtim23isul';
$senha = 'zf6cbvbbyn9d70iq';
$database = 'obk6a4eglons2ijq';

$conexao = mysqli_connect($servidor, $usuario, $senha, $database);


$consulta_pessoas = mysqli_query($conexao,  "SELECT * FROM pessoas");
$consulta_dependentes = mysqli_query($conexao,  "SELECT * FROM dependentes");