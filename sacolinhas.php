<?php include 'db.php'; ?>
    <link rel="stylesheet" type="text/css" href="css/style.css" media="all"/>
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<h3 class="titulo">Lista das sacolinhas</h3><br>
<table class="table-lista" id="presenca">
  <thead>
    <tr class='tr-lista'>
      <th class='th-lista'>Entregue</th>
      <th class='th-lista'>Cadastro</th>
      <th class='th-lista'>Nº</th>
      <th class='th-lista'>Criança</th>
      <th class='th-lista'>Bombom</th>
      <th class='th-lista'>Data Nascimento</th>
      <th class='th-lista'>Retirado por:</th>
      <th class='th-lista'>Whatsapp</th>
      <th class='th-lista'>Telefone</th>
      <th class='th-lista'>Assinatura</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $consulta_sacolinha = mysqli_query($conexao,  "SELECT * FROM dependentes WHERE idade_C <=".$_POST['idade_sacolinha']);
      while($linha = mysqli_fetch_array($consulta_sacolinha)){
        echo "<trclass='tr-lista'><td></td>";
        echo "<td class='td-lista'>".$linha['num_cadastro'].'</td>';
        echo "<td class='td-lista'>".$linha['num_crianca'].'</td>';
        echo "<td class='td-lista'>".$linha['nome_dependente'].'</td>';
        if($linha['idade_C']>$_POST['idade_sacolinha']){
            echo "<td class='td-lista'>X</td>";
        }
        else{
            echo "<td class='td-lista'></td>";
        }
        echo "<td class='td-lista'>".$linha['data_nascimento_dependente'].'</td>';
        echo "<td class='td-lista'></td>";
        echo "<td class='td-lista'></td>";
        echo "<td class='td-lista'></td>";
        echo "<td class='td-lista'></td>";
      }
    ?>
  </tbody>
  </table>

<?php
echo '<form>
<input type="button" value="Imprimir Lista" onClick="print()"/>
</form>';
?>

