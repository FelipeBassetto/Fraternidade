<?php
$link = $_GET['editar']
?>
<h3 class="titulo">Dependentes</h3><br>
<a href="?pagina=<?php echo md5('cadastrodependente') ?>&cadastro=<?php echo $link?>" class="btn btn-success">Cadastrar um dependente.</a><p></p>
<table class="table table-hover table-striped" id="dependentes">
  <thead>
    <tr>
      <th>Numero Cadastro</th>
      <th>Numero Criança</th>
      <th>Nome</th>
      <th>Idade</th>
      <th>editar</th>
      <th>deletar</th>
    </tr>
  </thead>
  <tbody>
    <?php 
      $id = (int) $_GET['editar'];
      $consulta_dependentes = mysqli_query($conexao,  "SELECT * FROM dependentes WHERE num_cadastro = '$id' ");
      while($linha_depen = mysqli_fetch_array($consulta_dependentes)){
        echo '<tr><td>'.$linha_depen['num_cadastro'].'</td>';
        echo '<td>'.$linha_depen['num_crianca'].'</td>';
        echo '<td>'.$linha_depen['nome_dependente'].'</td>';
        echo '<td>'.$linha_depen['idade_C'].'</td>';
    ?>
    <td><a href="?pagina=<?php echo md5('editardependente') ?>&editar=<?php echo $linha_depen['id_dependente'];?>"><i class="fas fa-user-edit"></i></a></td>
    <td><a href="deletadependente.php?deletar=<?php echo $linha_depen['id_dependente'];?>"><i class="fas fa-user-times"style="color: #ff6b6b;"></i></a></td></tr>
    <?php
      }
    ?>

  </tbody>
</table>