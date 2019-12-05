<?php include 'db.php';
    include 'footer.php'; ?>
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<h3 class="titulo">Lista de Presença Mensal</h3><br>
<table class="table table-hover table-striped" id="presenca">
  <thead>
    <tr>
      <th>Fralda</th>
      <th>Gestante</th>
      <th>Cadastro</th>
      <th>Nome</th>
      <th>Rg</th>
      <th>Autorizado</th>
      <th>Data</th>
      <th>Assinatura</th>
    </tr>
  </thead>
  <tbody>
    <?php 
      while($linha = mysqli_fetch_array($consulta_pessoas)){
        $id = $linha['id'];
        $consulta_dp = mysqli_query($conexao,  "SELECT * FROM dependentes WHERE num_cadastro = '$id' ");
        $fraldas="";
        while($linha2 = mysqli_fetch_array($consulta_dp)){
            if($linha2['data_nascimentoBB']!= '1111-11-11'){
                echo '<tr><td>X</td>';
            }
            else{
                echo '<tr><td></td>';
            }
            if($linha2['fralda']!='não tem'){
                if($fraldas == ''){
                    $fraldas.$linha2['fralda']
                }
                else{
                    $fraldas.','.$linha2['fralda']
                }
            }
        }
        echo '<td>'.$linha['id'].'</td>';
        echo '<td>'.$linha['nome'].'</td>';
        echo '<td>'.$linha['rg'].'</td>';
        echo '<td>'.$linha['nome_pa'].'</td>';
        echo '<td>'.$_POST['data_entrega'].'</td>';
      }
    ?>
  </tbody>
  
