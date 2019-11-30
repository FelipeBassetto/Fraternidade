<?php

include 'db.php';
include 'header.php';



if(isset($_GET['pagina'])){
    $pagina = $_GET['pagina'];
}
else{
    $pagina = 'login.php';
}

if($pagina == 'cadastropessoa'){
    include 'cadastropessoa.php';
}
elseif($pagina == 'pessoas'){
    include 'pessoas.php';
}
elseif($pagina =='login'){
    include 'login.php';
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
    include 'login.php';
}


include 'footer.php';