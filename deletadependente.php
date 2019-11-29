<?php

include 'db.php';

while($linha = mysqli_fetch_array($consulta_dependentes)){
    if($linha['id'] == $_GET['deletar']){
        $num_cadastro = $linha['num_cadastro'];
        $iddependentes = $_GET['deletar'];
        $query = "DELETE FROM dependentes WHERE id = '$iddependentes'";
        mysqli_query($conexao, $query);
    }
}

header("location:index.php?pagina=editarpessoa&editar=$num_cadastro");

