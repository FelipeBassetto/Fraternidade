<?php include 'db.php' ?>
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
        while($linha2 = mysqli_fetch_array($consulta_dp)){
            if($linha2['data_nascimentoBB']!= '1111-11-11'){
                echo '<tr><td>X</td>';
            }
            else{
                echo '<tr><td></td>';
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
  
