<?php

include 'db.php';




if(isset($_GET['pagina'])){
    $pagina = $_GET['pagina'];
}
else{
    $pagina = 'login.php';
}

if($pagina == 'cadastropessoa'){
    include 'header.php';
    include 'cadastropessoa.php';
}
elseif($pagina == 'pessoas'){
    include 'header.php';
    include 'pessoas.php';
}
elseif($pagina =='login'){
    include 'login.php';
}
elseif($pagina == 'cadastrodependente'){
    include 'header.php';
    include 'cadastrodependente.php';
}
elseif($pagina == 'impressoes'){
    include 'header.php';
    include 'impressoes.php';
}
elseif($pagina == 'editarpessoa'){
    include 'header.php';
    include 'editarpessoa.php';
    include 'consulta_dependentes.php';
}
elseif($pagina == 'editardependente'){
    include 'header.php';
    include 'editardependente.php';
}
else{
    include 'login.php';
}


include 'footer.php';