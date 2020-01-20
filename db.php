<?php

if (in_array($_SERVER["REMOTE_ADDR"], array("127.0.0.1", "::1"))){
    $servidor = 'localhost';
    $usuario = 'root';
    $senha = '';
    $database = 'fraternidade';
    
}else{
    $servidor = 'mna97msstjnkkp7h.cbetxkdyhwsb.us-east-1.rds.amazonaws.com';
    $usuario = 'd3p18trtim23isul';
    $senha = 'zf6cbvbbyn9d70iq';
    $database = 'obk6a4eglons2ijq';
}

$conexao = mysqli_connect($servidor, $usuario, $senha, $database);

$consulta_pessoas_ativas = mysqli_query($conexao,  "SELECT * FROM pessoas WHERE status = 'ATIVO' ");
$consulta_pessoas = mysqli_query($conexao,  "SELECT * FROM pessoas");
$consulta_dependentes = mysqli_query($conexao,  "SELECT * FROM dependentes");
$pega_maximo = mysqli_query($conexao,  "SELECT Max(num_crianca) FROM dependentes;");
$consulta_usuario = mysqli_query($conexao,  "SELECT * FROM usuarios");