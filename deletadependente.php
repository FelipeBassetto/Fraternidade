<?php

include 'db.php';

while($linha = mysqli_fetch_array($consulta_dependentes)){
    if($linha['id_dependente'] == $_GET['deletar']){
        $num_cadastro = $linha['num_cadastro'];
        $iddependentes = $_GET['deletar'];
        $query = "DELETE FROM dependentes WHERE id_dependente = '$iddependentes'";
        mysqli_query($conexao, $query);
    }
}
$pagina_editar = md5('editarpessoa');
header("location:index.php?pagina=".$pagina_editar."&editar=$num_cadastro");

