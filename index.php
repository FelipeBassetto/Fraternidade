<?php

include 'db.php';
include 'header.php';



if(isset($_GET['pagina'])){
    $pagina = $_GET['pagina'];
}
else{
    $pagina = 'pessoas.php';
}

if($pagina == 'cadastropessoa'){
    include 'cadastropessoa.php';
}
elseif($pagina == 'cadastrodependente'){
    include 'cadastrodependente.php';
}
elseif($pagina == 'editarpessoa'){
    include 'editarpessoa.php';
    include 'consulta_dependentes.php';
}
elseif($pagina == 'editardependente'){
    include 'editardependente.php';
}
else{
    include 'pessoas.php';
}


include 'footer.php';