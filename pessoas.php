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
    <footer>
      <p>Direitos reservados a Fraternidade Espírita Irmã Maria</p>
    </footer>
    <?php
      }
    ?>
  </tbody>
  
