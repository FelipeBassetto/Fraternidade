<?php

include 'db.php';




if(isset($_GET['pagina'])){
    $pagina = $_GET['pagina'];
}
else{
    $pagina = 'login.php';
}

if($pagina == md5('cadastropessoa')){
    include 'header.php';
    include 'cadastropessoa.php';
}
elseif($pagina == md5('pessoas')){
    include 'header.php';
    include 'pessoas.php';
}
elseif($pagina == md5('login')){
    include 'login.php';
}
elseif($pagina == md5('cadastrodependente')){
    include 'header.php';
    include 'cadastrodependente.php';
}
elseif($pagina == md5('impressoes')){
    include 'header.php';
    include 'impressoes.php';
}
elseif($pagina == md5('editarpessoa')){
    include 'header.php';
    include 'editarpessoa.php';
    include 'consulta_dependentes.php';
}
elseif($pagina == md5('editardependente')){
    include 'header.php';
    include 'editardependente.php';
}
else{
    include 'login.php';
}


