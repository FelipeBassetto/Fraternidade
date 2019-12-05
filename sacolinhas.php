<?php include 'db.php';
    include 'footer.php'; ?>
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<h3 class="titulo">Lista das sacolinhas</h3><br>
<table class="table table-hover table-striped" id="presenca">
  <thead>
    <tr>
      <th>Entregue</th>
      <th>Cadastro</th>
      <th>Nº</th>
      <th>Criança</th>
      <th>Bombom</th>
      <th>Data Nascimento</th>
      <th>Retirado por:</th>
      <th>Whatsapp</th>
      <th>Telefone</th>
      <th>Assinatura</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $consulta_sacolinha = mysqli_query($conexao,  "SELECT * FROM dependentes WHERE idade >15");
      while($linha = mysqli_fetch_array($consulta_sacolinha)){
        echo '<tr><td></td>';
        echo '<td>'.$linha['num_cadastro'].'</td>';
        echo '<td>'.$linha['num_crianca'].'</td>';
        echo '<td>'.$linha['nome_dependente'].'</td>';
        if($linha['idade_C']>$_POST['idade_sacolinha']){
            echo '<td>X</td>';
        }
        else{
            echo '<td></td>';
        }
        echo '<td>'.$linha['data_nascimento_dependente'].'</td>';
        echo '<td></td>';
        echo '<td></td>';
        echo '<td></td>';
        echo '<td></td>';
      }
      echo '<form>
      <input type="button" value="Print this page" onClick="window.print()"/>
      </form>'
    ?>
  </tbody>

