<?php

include 'db.php';
while($linha = mysqli_fetch_array($consulta_pessoas)){
    if($linha['id'] == $_GET['deletar']){
        $idpessoas = $_GET['deletar'];
        $query = "DELETE FROM pessoas WHERE id = '$idpessoas'";
        mysqli_query($conexao, $query);
    }
}
$pagina = md5('pessoas');
header('location:index.php?pagina='.$pagina);

