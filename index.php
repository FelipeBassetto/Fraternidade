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
    include 'footer.php';
}
elseif($pagina == md5('pessoas')){
    include 'header.php';
    include 'pessoas.php';
    include 'footer.php';
}
elseif($pagina == md5('login')){
    include 'login.php';
}
elseif($pagina == md5('cadastrodependente')){
    include 'header.php';
    include 'cadastrodependente.php';
    include 'footer.php';
}
elseif($pagina == md5('impressoes')){
    include 'header.php';
    include 'impressoes.php';
    include 'footer.php';
}
elseif($pagina == md5('editarpessoa')){
    include 'header.php';
    include 'editarpessoa.php';
    include 'consulta_dependentes.php';
    include 'footer.php';
}
elseif($pagina == md5('editardependente')){
    include 'header.php';
    include 'editardependente.php';
    include 'footer.php';
}
else{
    include 'login.php';
}


