<!--    <h3 class="titulo">Lista de Presença Mensal</h3><br>
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
    //    while($linha = mysqli_fetch_array($consulta_pessoas)){
        // $id = $linha['id'];
        //$consulta_dp = mysqli_query($conexao,  "SELECT * FROM dependentes WHERE num_cadastro = '$id' ");
    //        while($linha2 = mysqli_fetch_array($consulta_dp)){
    //          if($linha2['data_nascimentoBB']!= '1111-11-11'){
    //            echo '<tr><td>X</td>';
        //      }
        //    else{
            //      echo '<tr><td></td>';
            //}
        //}
       // echo '<tr><td>'.$linha['id'].'</td>';
        //echo '<td>'.$linha['nome'].'</td>';
        //echo '<td>'.$linha['rg'].'</td>';
        //echo '<td>'.$linha['nome_pa'].'</td>';
        //echo '<td>'.$_POST['data_entrega'].'</td>';
        //}/
    ?>
    </tbody>
!-->

<h3 class="titulo">Pessoas cadastradas.</h3><br>
<a href="?pagina=cadastropessoa" class="btn btn-success">Cadastrar uma nova pessoa</a><p></p>
<table class="table table-hover table-striped" id="pessoas">
  <thead>
    <tr>
      <th>Cadastro</th>
      <th>Nome</th>
      <th>Status</th>
      <th>editar</th>
      <th>deletar</th>
    </tr>
  </thead>
  <tbody>
    <?php 
      while($linha = mysqli_fetch_array($consulta_pessoas)){
        echo '<tr><td>'.$linha['id'].'</td>';
        echo '<td>'.$linha['nome'].'</td>';
        echo '<td>'.$linha['status'].'</td>';
    ?>
    <td><a href="?pagina=editarpessoa&editar=<?php echo $linha['id'];?>"><i class="fas fa-user-edit"></i></a></td>
    <td><a href="deletapessoa.php?deletar=<?php echo $linha['id'];?>"><i class="fas fa-user-times"style="color: #ff6b6b;"></i></a></td></tr>
    <?php
      }
    ?>
  </tbody>
  

